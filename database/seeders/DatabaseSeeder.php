<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([
		UserTableSeeder::class,
		SettingTableSeeder::class,
		TedaviTableSeeder::class,
		FaqTableSeeder::class
		
		]);

		$this->command->info('Table seeded!');
    }
}


