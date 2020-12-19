<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

	private $users = [
		[
			'name' => 'Admin',
			'surname' => 'Admin',
			'email' => 'admin@user',
			'password' => '012701',
			'role' => 'admin'
		],
		[
			'name' => 'Yüksel',
			'surname' => 'Çelik',
			'email' => 'yuksel@user',
			'password' => '012701',
			'role' => 'dishekimi',
		],
		[
			'name' => 'Özge',
			'surname' => 'Öz',
			'email' => 'ozge@user',
			'password' => '012701',
			'role' => 'dishekimi',
		],
		[
			'name' => 'Test',
			'surname' => 'test',
			'email' => 'test@user',
			'password' => '012701',
			'role' => 'user',
		],

	];
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		foreach ($this->users as $user) {
			$new = new \App\Models\User();
			$new->name = $user['name'];
			$new->surname = $user['surname'];
			$new->email = $user['email'];
			$new->role = $user['role'];
			$new->password = Hash::make($user['password']);
			$new->save();
		}
		
    }
}



