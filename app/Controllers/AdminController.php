<?php

namespace App\Controllers;

use App\Models\NomineeModel;
use App\Models\NominatorModel;
use App\Models\AwardModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $nomineeModel = new NomineeModel();
        $nominatorModel = new NominatorModel();
        $awardModel = new AwardModel();

        $data = [
            'nominees' => $nomineeModel->orderBy('created_at', 'DESC')->findAll(),
            'pending'  => $nominatorModel->orderBy('created_at', 'DESC')->findAll(),
            'awards'   => $awardModel->findAll(),
            'title'    => 'Admin Dashboard'
        ];

        return view('admin/dashboard', $data);
    }

    public function viewNominee($id)
{
    $model = new \App\Models\NomineeModel();
    $nominee = $model->find($id);

    if (!$nominee) {
        return redirect()->to('admin/dashboard')->with('error', 'Nominee not found.');
    }

    // Decode the JSON referees back into a PHP array
    $nominee['referees'] = json_decode($nominee['references_json'], true) ?? [];

    return view('admin/view_nominee', ['n' => $nominee]);
}

    public function viewPending($id)
{
    $model = new \App\Models\NominatorModel();
    $pending = $model->find($id);

    if (!$pending) {
        return redirect()->to('admin/dashboard')->with('error', 'Invitation not found.');
    }

    return view('admin/view_pending', ['p' => $pending]);
}
    // --- AWARD CRUD FUNCTIONS ---

    public function saveAward()
    {
        $model = new AwardModel();
        
        $file = $this->request->getFile('template');
        $fileName = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
           $type = $file->getMimeType();
        $validTypes = [
            'application/msword', 
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        if (!in_array($type, $validTypes)) {
            return redirect()->back()->with('error', 'Only Word documents (.doc, .docx) are allowed.');
        }

            $fileName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/templates', $fileName);
        }
        $model->save([
            'a_name'   => $this->request->getPost('a_name'),
            'template' => $fileName
        ]);

        return redirect()->to('admin/dashboard')->with('success', 'Award category added!');
    }

    // Show the edit form
public function editAward($id)
{
    $model = new \App\Models\AwardModel();
    $data = [
        'award' => $model->find($id),
        'title' => 'Edit Award'
    ];
    return view('admin/edit_award', $data);
}

// Process the update
public function updateAward($id)
{
    $model = new \App\Models\AwardModel();
    
    $file = $this->request->getFile('template');
    $data = [
        'a_name' => $this->request->getPost('a_name')
    ];

    if ($file && $file->isValid() && !$file->hasMoved()) {
       // Validation: Only allow .doc and .docx mimetypes
        $type = $file->getMimeType();
        $validTypes = [
            'application/msword', 
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        if (!in_array($type, $validTypes)) {
            return redirect()->back()->with('error', 'Only Word documents (.doc, .docx) are allowed.');
        }

        $data['template'] = $file->getRandomName();
        $file->move(FCPATH . 'uploads/templates', $data['template']);
    }

    $model->update($id, $data);
    return redirect()->to('admin/dashboard')->with('success', 'Award updated successfully!');
}
    public function deleteAward($id)
    {
        (new AwardModel())->delete($id);
        return redirect()->to('admin/dashboard')->with('success', 'Award deleted.');
    }
}