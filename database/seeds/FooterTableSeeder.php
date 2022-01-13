<?php

use Illuminate\Database\Seeder;
use App\Models\Footer\Footer;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $footerData = [
            ['title' => 'monday', 'description' => ' of the Communist Party of Nepal-United Socialist, has tested positive for Covid-19 infection.', 'posted_by' => 1],
        ];

        foreach ($footerData as $foot) {
            Footer::create($foot);
        }
    }
}
