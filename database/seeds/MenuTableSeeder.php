<?php

use Illuminate\Database\Seeder;
use App\Models\Menu; 

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create Menu
        $home = Menu::create(['title' => 'Trang chủ', 'link' => 'de-thi']);
        $about = Menu::create(['title' => 'Giới thiệu', 'link' => 'about-us']);
        $contact = Menu::create(['title' => 'Liên hệ', 'link' => 'contact-us']);
    }
}
