<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
	private $settings = [
		"title"			=> "Dente",
		"keywords"		=> "keywords",
		"description"	=> "desc",
		"company"		=> "comp",
		"address"		=> "add",
		"phone"			=> "ph",
		"fax"			=> "fax",
		"email"			=> "email",
		"smtpserver"	=> "server",
		"smtpemail"		=> "email",
		"smtppassword"	=> "pass",
		"smtpport"		=> "port",
		"facebook"		=> "port",
		"instagram"		=> "port",
		"twitter"		=> "port",
		"aboutus"		=> "aboutus",
		"contact"		=> "contact",
		"references"	=> "references",
		"status"		=> 1,

	]; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('settings')->insert($this->settings);
		
    }
}
