<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\NomineeModel;
use App\Models\NominatorModel;

class ParticipantController extends BaseController {

// In app/Controllers/ParticipantController.php
public function index() {
    $awardModel = new \App\Models\AwardModel();
    $data['awards'] = $awardModel->findAll();
    $nomineeModel = new \App\Models\NomineeModel();

    $draft = $nomineeModel->where('nemail', auth()->user()->email)
                        //   ->where('status', 'draft') 
                          ->orderBy('id', 'DESC')
                          ->first();

    $data['draft'] = $draft; // Pass this to the view

    return view('participant_registration', $data);
}

public function registerAccount()
{
    $email = $this->request->getPost('email');
    $userModel = new UserModel();

    $plainPassword = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, 8);

    // 1. Create the Entity
    $user = new \CodeIgniter\Shield\Entities\User();
    
    // 2. Manually fill the data to bypass the "Strict" constructor
    $user->fill([
        'email'      => $email,
        'username'   => $email, // Keep this so Shield is happy
        'password'   => $plainPassword,
        'first_name' => $this->request->getPost('first_name'),
        'last_name'  => $this->request->getPost('last_name'),
        'user_type'  => 'participant',
        'active'     => 1,
    ]);

    // 3. Save
    if ($userModel->save($user)) {
        // If it saves, NOW send the email
        $this->sendPasswordEmail($email, $plainPassword);
        return redirect()->to('login')->with('message', 'Success!');
    } else {
        return redirect()->back()->with('errors', $userModel->errors());
    }
}
private function sendPasswordEmail($to, $password)
{
    $email = \Config\Services::email();
    $email->setTo($to);
    $email->setSubject("Your Temporary Password");
    
    $message = "
        <h3>Welcome!</h3>
        <p>Your account has been created. Please use the password below to log in:</p>
        <p><strong>Password:</strong> <code style='font-size:1.2em;'>$password</code></p>
        <p><a href='" . site_url('login') . "'>Click here to login</a></p>
    ";

    $email->setMessage($message);
    return $email->send();
}

public function save() {
    $path = $this->request->getPost('path_selection');
    
    // Log the path to your writable/logs if you want to be sure
    // log_message('debug', 'Path received: ' . $path);

    // If path is 'other', or if we see nominator fields, go to invitation
    if ($path === 'other' || $this->request->getPost('f_name2')) {
        return $this->saveInvitation();
    } 

    // ONLY go here if it's explicitly 'self'
    return $this->saveSelf();
}

    // PATH A: Self-Nomination (Full Entry)
public function saveSelf() {
    $model = new NomineeModel();
    $userId = auth()->id();
    
    // 1. Handle File Upload
    $file = $this->request->getFile('template_upload');
    $newName = null;
    if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move(FCPATH . 'uploads', $newName);
    }

    // 2. Map HTML names to your specific Database Columns
    $data = [
        'salutation'      => $this->request->getPost('salutation'),
        'f_name'          => $this->request->getPost('f_name'),
        'm_name'          => $this->request->getPost('m_name'),
        'l_name'          => $this->request->getPost('l_name'),
        'email'          => $this->request->getPost('email'),
        'gender'          => $this->request->getPost('gender'),
        'affiliation'     => $this->request->getPost('affiliation'),
        'nationality'     => $this->request->getPost('nationality'),
        'c_code'          => $this->request->getPost('c_code'),
        'contact'         => $this->request->getPost('contact'),
        
        // SYNCING THE EMAILS:
        'nemail'         => $this->request->getPost('email'),  // Database wants nemail
        'c_email'         => $this->request->getPost('email'),  // Mapping corresponding to primary to satisfy NOT NULL
        
        'address'         => $this->request->getPost('address'),
        'award'           => $this->request->getPost('award'),
        'summary'         => $this->request->getPost('summary'),
        'contribution'    => $this->request->getPost('contribution'),
        'outcome'         => $this->request->getPost('outcome'),
        'innovation'      => $this->request->getPost('innovation'),
        'potential'       => $this->request->getPost('potential'),
        'yt_link'         => $this->request->getPost('yt_link'),
        'template_upload' => $newName,
        'references_json' => $this->request->getPost('references_data'),
    ];

    $data['status'] = 'submitted';
    // 3. Check for existing record to prevent duplication
    $userEmail = $this->request->getPost('email');
    $existing = $model->where('nemail', $userEmail)->first();

    if ($existing) {
        // If it exists, UPDATE the old row instead of making a new one
        $result = $model->update($existing['id'], $data);
    } else {
        // If it's new, INSERT
        $result = $model->insert($data);
    }

    if ($result) {
        $subject = "Nomination Successfully Received";
        $message = "Dear {$data['f_name']},<br><br>Thank you! Your nomination for the award has been received.";
        $this->sendEmail($data['email'], $subject, $message);
        return redirect()->to(site_url('participant/success'));
    } else {
        dd($model->errors());
    }
}

    // PATH B: Other Nomination (Invitation)
public function saveInvitation() {
    $model = new NominatorModel(); 
    $token = bin2hex(random_bytes(16));

    // Mapping HTML form inputs to Model allowedFields
    $data = [
        // 1. Nominator Information
        'salutation2'   => $this->request->getPost('salutation2'),
        'f_name2'       => $this->request->getPost('f_name2'),
        'm_name2'       => $this->request->getPost('m_name2'),
        'l_name2'       => $this->request->getPost('l_name2'),
        'affiliation2'  => $this->request->getPost('affiliation2'),
        'nationality2'  => $this->request->getPost('nationality2'),
        'c_code2'       => $this->request->getPost('c_code2'),
        'contact2'      => $this->request->getPost('contact2'),
        'n_email2'      => $this->request->getPost('n_email2'), // Form sent 'email2'

        // 2. Nominee Preview Fields
        'n_salutation'  => $this->request->getPost('n_salutation'),
        'n_fname'       => $this->request->getPost('n_fname'),
        'n_mname'       => $this->request->getPost('n_mname'),
        'n_lname'       => $this->request->getPost('n_lname'),
        'n_affiliation' => $this->request->getPost('n_affiliation'),
        'n_email'       => $this->request->getPost('n_email'),

        'invitation_token' => $token,
        'status'           => 'pending',
    ];

    // Debugging: Check if the insert actually works
    try {
        if ($model->insert($data)) {
         // 2. To the Nominee (with the registration link)
        $loginLink = site_url("login?token=" . $token); 

        $neeSubject = "You have been nominated for an Award!";
        $neeMsg = "Dear {$data['n_fname']},<br><br>" .
          "{$data['f_name2']} has nominated you. Please click the link below to log in and complete your registration:<br>" .
          "<a href='{$loginLink}'>{$loginLink}</a>";
        $this->sendEmail($data['n_email'], $neeSubject, $neeMsg);
        sleep(2);

        // 1. To the Nominator
        $nomSubject = "You have successfully nominated a candidate";
        $nomMsg = "Dear {$data['f_name2']},<br><br>You have successfully nominated {$data['n_fname']} for this award.";
        $this->sendEmail($data['n_email2'], $nomSubject, $nomMsg);
       
         // Success: Redirect to success page
        return redirect()->to(site_url('participant/success'));
        } else {
            // Validation or Model error
            return redirect()->back()->withInput()->with('errors', $model->errors());
            // dd($model->errors());
        }
    } catch (\Exception $e) {
        // This will catch the Database Exception and show you exactly what's wrong
        die("Database Error: " . $e->getMessage());
    }
}

    public function success()
{
    // You can create a simple view file or just return a message for now
    return view('success_page'); 
}

private function sendEmail($to, $subject, $message) {
    // 1. Create a brand new instance every time
    $email = new \CodeIgniter\Email\Email(config('Email'));
    
    // 2. Set the data
    $email->setTo($to);
    $email->setSubject($subject);
    $email->setMessage($message);
    $email->setMailType('html');

    // 3. Send and return result
    if ($email->send()) {
        return true;
    } else {
        // This will write the SMTP error to your writable/logs/
        log_message('error', "Email to $to failed: " . $email->printDebugger(['headers']));
        return false;
    }
}
}

