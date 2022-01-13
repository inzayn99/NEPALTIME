<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AdminUserTableSeeder::class,
            CategoryTableSeeder::class,
            BannerTableSeeder::class,
            FooterTableSeeder::class

        ]);
    }
}
