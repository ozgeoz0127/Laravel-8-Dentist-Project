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
			'role' => '1',
            'phone' => "05556664488",
            'address'   => "Adana"
		],
		[
			'name' => 'Yüksel',
			'surname' => 'Çelik',
			'email' => 'yuksel@user',
			'password' => '012701',
			'role' => '2',
            'phone' => "05556664488",
            'address'   => "Adana"
		],
		[
			'name' => 'Özge',
			'surname' => 'Öz',
			'email' => 'ozge@user',
			'password' => '012701',
			'role' => '2',
            'phone' => "05556664488",
            'address'   => "Adana"
		],
		[
			'name' => 'Test',
			'surname' => 'test',
			'email' => 'test@user',
			'password' => '012701',
			'role' => '4',
            'phone' => "05556664488",
            'address'   => "Adana"
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
            $new->phone = $user['phone'];
            $new->address = $user['address'];
			$new->status    = 1;
			$new->save();
		}

    }
}



