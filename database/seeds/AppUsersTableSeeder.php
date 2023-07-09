<?php

use Illuminate\Database\Seeder;
use App\Models\AppUser;
use App\Models\Package;
use App\Models\Examinationmode;
use App\Models\VocabularyMode;
use Illuminate\Support\Facades\Hash;

class AppUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appuser = AppUser::where('email', 'appuser@gmail.com')->first();
        if (!$appuser) {
            $appuser = AppUser::create([
                'name' => 'appuser',
                'email' => 'appuser@gmail.com',
                'password' => Hash::make('12345678')
            ]);
        }

        $hocvien2 = AppUser::where('email', 'hocvien2@gmail.com')->first();
        if (!$hocvien2) {
            $hocvien2 = AppUser::create([
                'name' => 'hocvien2',
                'email' => 'hocvien2@gmail.com',
                'password' => Hash::make('12345678')
            ]);
        }
        $hocvien3 = AppUser::where('email', 'hocvien3@gmail.com')->first();
        if (!$hocvien3) {
            $hocvien3 = AppUser::create([
                'name' => 'hocvien3',
                'email' => 'hocvien3@gmail.com',
                'password' => Hash::make('12345678')
            ]);
        }

    }
}
