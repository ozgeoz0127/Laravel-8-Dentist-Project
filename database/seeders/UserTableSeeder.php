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
			'password' => md5('012701'),
			'role' => 'admin',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		
		
		\DB::table('user')->insert([
			'name' => 'Yüksel',
			'surname' => 'Çelik',
			'email' => 'yuksel@user',
			'password' => md5('012701'),
			'role' => 'dishekimi',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		
		\DB::table('user')->insert([
			'name' => 'Özge',
			'surname' => 'Öz',
			'email' => 'ozge@user',
			'password' => md5('012701'),
			'role' => 'dishekimi',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		
		\DB::table('user')->insert([
			'name' => 'Test',
			'surname' => 'test',
			'email' => 'test@user',
			'password' => md5('012701'),
			'role' => 'user',
			"created_at"	=> date("Y-m-d h:i:s"),
			"updated_at"	=> date("Y-m-d h:i:s")
		]);
		
    }
}



