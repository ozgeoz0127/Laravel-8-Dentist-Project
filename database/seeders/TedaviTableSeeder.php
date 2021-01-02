<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TedaviTableSeeder extends Seeder
{
	
	private $tedavi = [
			[
				"title"			=> "Ağız ve Diş Bakımı",
				"keywords"		=> "keywords",
				"description"	=> "desc",
				"image"			=> "flaticon-tooth",
				"categoryid"	=> "",
				"detail"		=> "detail",
				"userid"		=> 1,
				"status"		=> "1",
				"url"			=> "agiz-ve-dis-bakimi"
			],
			[
				"title"			=> "Genel Kontrol",
				"keywords"		=> "keywords",
				"description"	=> "desc",
				"image"			=> "flaticon-dentist-chair",
				"categoryid"	=> "",
				"detail"		=> "detail",
				"userid"		=> 1,
				"status"		=> "1",
				"url"			=> "genel-kontrol"
			],
			[
				"title"			=> "Dolgu Kanal Tedavisi",
				"keywords"		=> "keywords",
				"description"	=> "desc",
				"image"			=> "flaticon-dentist-tools",
				"categoryid"	=> "",
				"detail"		=> "detail",
				"userid"		=> 1,
				"status"		=> "1",
				"url"			=> "dolgu-kanal-tedavisi"
			],
			[
				"title"			=> "Diş Çekimi",
				"keywords"		=> "keywords",
				"description"	=> "desc",
				"image"			=> "flaticon-tooth-pliers",
				"categoryid"	=> "",
				"detail"		=> "detail",
				"userid"		=> 1,
				"status"		=> "1",
				"url"			=> "dis-cekimi"
			],
			[
				"title"			=> "Diş Beyazlatma",
				"keywords"		=> "keywords",
				"description"	=> "desc",
				"image"			=> "flaticon-tooth-whitening",
				"categoryid"	=> "",
				"detail"		=> "detail",
				"userid"		=> 1,
				"status"		=> "1",
				"url"			=> "dis-beyazlatma"
			],
			[
				"title"			=> "Önleyici Bakım",
				"keywords"		=> "keywords",
				"description"	=> "desc",
				"image"			=> "flaticon-first-aid-kit",
				"categoryid"	=> "",
				"detail"		=> "detail",
				"userid"		=> 1,
				"status"		=> "1",
				"url"			=> "onleyici-bakim"
			],
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		foreach ($this->tedavi as $t) {
			$new = new \App\Models\Tedavi();
			$new->title 		= $t['title'];
			$new->keywords 		= $t['keywords'];
			$new->description 	= $t['description'];
			$new->image 		= $t['image'];
			$new->categoryid 	= $t['categoryid'];
			$new->detail 		= $t['detail'];
			$new->userid 		= $t['userid'];
			$new->status 		= $t['status'];
			$new->url 			= $t['url'];
			$new->save();
		}
    }
}
