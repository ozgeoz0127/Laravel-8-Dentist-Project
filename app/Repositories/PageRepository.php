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
		$arr["settings"]["menu"]		= [
			["url" => "home","text" => "#"],
			["url" => "about","text" => "Hakkımızda"],
			["url" => "services","text" => "Hizmetler","sub"=> [
				["icon"=> "flaticon-dentist-chair", "url" => "pages/agiz-ve-dis-bakimi","text" => "Ağız Ve Diş Bakımı"],
				["icon"=> "flaticon-tooth", "url" => "pages/genel-kontrol","text" => "Genel Kontrol"],
				["icon"=> "flaticon-dentist-tools", "url" => "pages/dolgu-kanal-tedavisi","text" => "Dolgu Kanal Tedavisi"],
				["icon"=> "flaticon-tooth-pliers", "url" => "pages/dis-cekimi","text" => "Diş Çekimi"],
				["icon"=> "flaticon-tooth-whitening", "url" => "pages/dis-beyazlatma","text" => "Diş Beyazlatma"],
				["icon"=> "flaticon-first-aid", "url" => "pages/onleyici-bakim","text" => "Önleyici Bakım"],
				] ],
			["url" => "gallery","text" => "Galeri" ],
			["url" => "contact","text" => "İletişim" ],

		];
		$arr["settings"]["doctors"] = self::getdoctors();
		$arr["settings"]["cures"] = self::getcure();

		return $arr;
	}
	
	public static function getdoctors()
	{
		$r=[];
		$doc = \DB::table('user')->where('role', "dishekimi")->get()->toArray();
		if (count($doc) > 0) {
			foreach ($doc as $k=>$v) {
				$r[] = ["name" => $v->name,"surname" => $v->surname,"id" => $v->id];	
			}

			return $r;		
		}

	}
	
	public static function getcure()
	{
		$r=[];
		$r[]= ["name" => "Diş Çekimi","id" => 1];
		$r[]= ["name" => "Diş Beyazlatma","id" => 2];
		$r[]= ["name" => "Genel Bakım","id" => 3];
		
		return $r;
	}
}


