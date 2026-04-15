<?php

namespace App\Controllers\Auth;

use CodeIgniter\Shield\Controllers\RegisterController as ShieldRegister;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\I18n\Time;
use CodeIgniter\HTTP\RedirectResponse; // Add this at the top!

class RegisterController extends ShieldRegister
{
    public function registerAction() : RedirectResponse
    {
        $users = auth()->getProvider();
        
        // 1. Validate only the email
        $rules = ['email' => 'required|max_length[254]|valid_email|is_unique[auth_identities.secret]'];
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // 2. Generate a random password (8-12 chars)
        $randomPassword = bin2hex(random_bytes(5)); // e.g., "a1b2c3d4e5"

        // 3. Create the user entity
        $user = new User([
            'username' => explode('@', $this->request->getPost('email'))[0], // use email prefix as username
            'email'    => $this->request->getPost('email'),
            'password' => $randomPassword,
        ]);

        $users->save($user);
        $user = $users->findById($users->getInsertID());

        // 4. Add to 'user' group
        $user->addGroup('user');

        // 5. Send the email (Make sure your .env SMTP is set up!)
        $email = \Config\Services::email();
        $email->setTo($user->email);
        $email->setSubject('Your New Account Password');
        $email->setMessage("Welcome! Your temporary password is: <b>{$randomPassword}</b><br>Please log in and change it in your profile.");
        $email->send();

        return redirect()->to(url_to('login'))->with('message', 'Check your email for your temporary password!');
    }
}