<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
	private $settings = [
		"title"			=> "title",
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
		"aboutus"		=> "portport",
		"contact"		=> "portport",
		"references"	=> "portport",
		"status"		=> 1,

	]; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('setting')->insert($this->settings);
		
    }
}
