<?php

use Illuminate\Database\Seeder;
use App\Models\SiteOption;
class SiteOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logo = SiteOption::where('name', 'logo')->first();
        if (!$logo) {
            $logo = SiteOption::create([
                'name' => 'logo',
                'value' => 'assets/image/logo.png'
            ]);
        }
        $main_color = SiteOption::where('name', 'main_color')->first();
        if (!$main_color) {
            $main_color = SiteOption::create([
                'name' => 'main_color',
                'value' => '#333'
            ]);
        }
        $header_bg = SiteOption::where('name', 'header_bg')->first();
        if (!$header_bg) {
            $header_bg = SiteOption::create([
                'name' => 'header_bg',
                'value' => '#f5f5f5'
            ]);
        }
        $header_text_color = SiteOption::where('name', 'header_text_color')->first();
        if (!$header_text_color) {
            $header_text_color = SiteOption::create([
                'name' => 'header_text_color',
                'value' => '#f5f5f5'
            ]);
        }
    }
}
