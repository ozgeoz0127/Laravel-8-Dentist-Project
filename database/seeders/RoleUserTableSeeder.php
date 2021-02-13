<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleUserTableSeeder extends Seeder
{

    private $userroles = [
        ["user" => 1,"role"=>1],
        ["user" => 2,"role"=>2],
        ["user" => 3,"role"=>2],
        ["user" => 4,"role"=>4],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->userroles as $role) {
            \DB::table('role_user')->insert(["role_id" => $role["role"],"user_id" => $role["user"]]);
        }

    }
}



