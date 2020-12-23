<?php
namespace App\Repositories;


class PageRepository
{
	public static function settings()
	{
		$arr 			= [];
		$arr["settings"]["email"]		= "test@test.com";
		$arr["settings"]["phone"]		= "+90 322 3259988";
		$arr["settings"]["twitter"]		= "+90 322 3259988";
		$arr["settings"]["facebook"]	= "+90 322 3259988";
		$arr["settings"]["instagram"]	= "+90 322 3259988";
		$arr["settings"]["linkedin"]	= "+90 322 3259988";
		$arr["settings"]["title"]		= "Test";
		$arr["settings"]["address"]		= "Mehmet Nuri Sabuncu Bulvarı No:59, 01130 Seyhan/Adana";
		$arr["settings"]["phone"]		= "(0322) 459 27 43";
		$arr["settings"]["fax"]			= "(0322) 459 27 43";
		$arr["settings"]["menu"]		= [
			["url" => "home","text" => "#"],
			["url" => "about","text" => "Hakkımızda"],
			["url" => "services","text" => "Hizmetler","sub"=> [
				["icon"=> "flaticon-dentist-chair", "url" => "services/agiz-ve-dis-bakimi","text" => "Ağız Ve Diş Bakımı"],
				["icon"=> "flaticon-tooth", "url" => "services/genel-kontrol","text" => "Genel Kontrol"],
				["icon"=> "flaticon-dentist-tools", "url" => "services/dolgu-kanal-tedavisi","text" => "Dolgu Kanal Tedavisi"],
				["icon"=> "flaticon-tooth-pliers", "url" => "services/dis-cekimi","text" => "Diş Çekimi"],
				["icon"=> "flaticon-tooth-whitening", "url" => "services/dis-beyazlatma","text" => "Diş Beyazlatma"],
				["icon"=> "flaticon-first-aid", "url" => "services/onleyici-bakim","text" => "Önleyici Bakım"],
				] ],
			["url" => "faq","text" => "S.S.S" ],
			["url" => "gallery","text" => "Galeri" ],
			["url" => "contact","text" => "İletişim" ],

		];
		$arr["settings"]["doctors"] = self::getdoctors();
		$arr["settings"]["cures"] 	= self::getcure();
		$arr["settings"]["gallery"]	= self::gallery();
		$arr["settings"]["faq"]		= self::faq();

		return $arr;
	}
	
	public static function gallery() {
		$list = [];
		$list[] = "hero_bg_1.jpg";
		$list[] = "hero_bg_2.jpg";
		$list[] = "hero_bg_1.jpg";
		$list[] = "hero_bg_2.jpg";
		$list[] = "hero_bg_1.jpg";
		$list[] = "hero_bg_2.jpg";
		return $list;		
		
	}
	
	public static function faq()
	{
		$list = [];
		$list[]= [
			"query"		=> "test soru",
			"answer"	=> "cevap test"
		];
		$list[]= [
			"query"		=> "test soru",
			"answer"	=> "cevap test"
		];
		return $list;
	}
	
	public static function getdoctors()
	{
		$r=[];
		$doc = \DB::table('user')->where('role', "dishekimi")->get()->toArray();
		if (count($doc) > 0) {
			foreach ($doc as $k=>$v) {
				$r[$v->id] = ["name" => $v->name,"surname" => $v->surname,"id" => $v->id];	
			}

			return $r;		
		}

	}
	
	public static function getcure()
	{
		$r=[];
		$r[1]= ["name" => "Diş Çekimi","id" => 1];
		$r[2]= ["name" => "Diş Beyazlatma","id" => 2];
		$r[3]= ["name" => "Genel Bakım","id" => 3];
		
		return $r;
	}
}


