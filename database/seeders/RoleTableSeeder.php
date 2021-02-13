<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{

    private $roles = [
        "Admin",
        "Hekim",
        "Teknisyen",
        "User"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $role) {
            $new = new \App\Models\Role();
            $new->name = $role;
            $new->save();
        }

    }
}



