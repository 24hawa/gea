<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 1. Landing / Redirect
$routes->get('/', static function() {
    if (auth()->loggedIn()) {
        $user = auth()->user();
        
        // If Admin, go to Admin Dashboard
        if ($user->inGroup('admin')) {
            return redirect()->to('admin/dashboard');
        }
        
        // Otherwise, go to Participant Registration
        return redirect()->to('participant_registration');
    }
    
    return redirect()->to('login');
});

// To this:
$routes->post('register', '\App\Controllers\ParticipantController::registerAccount', ['as' => 'register']);
service('auth')->routes($routes);

// 2. Auth Override & Service Routes
$routes->group('', ['filter' => 'session'], static function ($routes) {
    
    $routes->get('login-success', 'Auth\LoginSuccessController::index');
    
    // Participant Registration
    $routes->get('participant_registration', 'ParticipantController::index');

    // The Form Submissions
    // Change 'saveSelf' to 'save'
    $routes->post('participant/save', 'ParticipantController::save'); 
    $routes->post('participant/invite', 'ParticipantController::saveInvitation');
    
    // Success Page
    $routes->get('participant/success', 'ParticipantController::success');

    // Admin Group (Notice it stays inside the session filter group)
    $routes->group('admin', function($routes) {
        $routes->get('dashboard', 'AdminController::dashboard');
        
        // Award CRUD
        $routes->post('awards/save', 'AdminController::saveAward');
        $routes->get('awards/edit/(:num)', 'AdminController::editAward/$1');
        $routes->post('awards/update/(:num)', 'AdminController::updateAward/$1');
        $routes->get('awards/delete/(:num)', 'AdminController::deleteAward/$1');

        // Nominee View
        $routes->get('nominee/view/(:num)', 'AdminController::viewNominee/$1');
        $routes->get('pending/view/(:num)', 'AdminController::viewPending/$1');
    });
}); // End of session filter group

// 4. Public Success Page (If you want them to see this after logout/register)
$routes->get('participant_registration/success', 'ParticipantController::success');