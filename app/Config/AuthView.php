<?php

namespace Config;

use CodeIgniter\Shield\Config\AuthView as ShieldAuthView;

class AuthView extends ShieldAuthView
{
    /**
     * --------------------------------------------------------------------------
     * Views used by Auth Controllers
     * --------------------------------------------------------------------------
     */
    public array $views = [
        'login'                       => 'App\Views\Shield\login',
        'register'                    => 'App\Views\Shield\register',
        'layout'                      => 'CodeIgniter\Shield\Views\layout',
        'action_email_2fa'            => 'CodeIgniter\Shield\Views\Email\email_2fa',
        'action_email_2fa_verify'     => 'CodeIgniter\Shield\Views\action_email_2fa_verify',
        'action_email_activate_email' => 'CodeIgniter\Shield\Views\Email\email_activate_email',
        'action_email_activate_show'  => 'CodeIgniter\Shield\Views\action_email_activate_show',
        'magic_link_form'             => 'CodeIgniter\Shield\Views\magic_link_form',
        'magic_link_message'          => 'CodeIgniter\Shield\Views\Email\magic_link_email',
    ];
}