<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('user')->insert([
			'name' => 'Admin',
			'surname' => 'Admin',
			'email' => 'admin@user',
			'password' => md5('010101'),
			'role' => 'admin',
		]);
    }
}



