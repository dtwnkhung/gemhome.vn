<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'ngocanhaptech@gmail.com')->first();
        if (!$user) {
            $user = User::create([
                'name' => 'admin',
                'email' => 'ngocanhaptech@gmail.com',
                'password' => Hash::make('Vcc123**')
            ]);
        }
        $user->assignRole(['super-admin', 'admin']);

        $user = User::where('email', 'thang@gmail.com')->first();
        if (!$user) {
            $user = User::create([
                'name' => 'admin',
                'email' => 'thang@gmail.com',
                'password' => Hash::make('Vcc123**')
            ]);
        }
        $user->assignRole(['super-admin', 'admin']);


        $user = User::where('email', 'appuser@gmail.com')->first();
        if (!$user) {
            $user = User::create([
                'name' => 'admin',
                'email' => 'appuser@gmail.com',
                'password' => Hash::make('Vcc123**')
            ]);
        }

    }
}
