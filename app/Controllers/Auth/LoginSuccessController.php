<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginSuccessController extends BaseController
{
    public function index()
    {
        $user = auth()->user();

        if ($user->inGroup('admin')) {
            return redirect()->to('admin/dashboard');
        }

        return redirect()->to('participant_registration');
    }
}