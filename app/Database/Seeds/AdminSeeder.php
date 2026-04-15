<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;

class AdminSeeder extends Seeder
{
/*************  ✨ Windsurf Command ⭐  *************/
/**
 * Creates the admin user and assigns them to the 'admin' group.
 *
 * @return void
 */
/*******  f957aee3-9134-41f4-a7f1-3392df499487  *******/   
 public function run()
{
    $users = auth()->getProvider(); // This gets the UserModel

    // 1. Initialize the Entity
    $admin = new User();

    // 2. Use fill() to map the data correctly
    $admin->fill([
        'email'      => 'admin@gea.com',
        'password'   => 'Admin12345', 
        'first_name' => 'Global',      // Added this
        'last_name'  => 'Admin',       // Added this
        'user_type'  => 'admin',       // Crucial for your logic
        'active'     => 1,             // Set active here directly
    ]);

    // 3. Save the user
    // Shield handles splitting this into 'users' and 'auth_identities' tables
    $users->save($admin);

    // 4. Get the ID of the user we just created
    $userId = $users->getInsertID();
    $admin = $users->findById($userId);

    if ($admin) {
        // 5. Assign to Shield's 'admin' group
        $admin->addGroup('admin');
        
        echo "Admin user created successfully with ID: {$userId}\n";
    } else {
        echo "Failed to find created user.\n";
    }
}
}