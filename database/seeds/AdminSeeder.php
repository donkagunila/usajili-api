<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// clean the database
    	User::truncate();

    	// Create a new user
        $user = User::create([
             'username' => 'Admin',
             'email'    => 'admin@gmail.com',
             'password' => 'password',
             'activation_token' => '',
             'active' => true,
             'nguvu' => 1,
         ]);
    }
}
