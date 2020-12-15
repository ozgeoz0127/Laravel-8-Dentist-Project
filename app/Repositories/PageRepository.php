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
				["icon"=> "flaticon-dentist-chair", "url" => "pages/agız","text" => "Ağız Ve Diş Bakımı"],
				["icon"=> "flaticon-tooth", "url" => "sub","text" => "Genel Kontrol"],
				["icon"=> "flaticon-dentist-tools", "url" => "sub","text" => "Dolgu Kanal Tedavisi"],
				["icon"=> "flaticon-tooth-pliers", "url" => "sub","text" => "Diş Çekimi"],
				["icon"=> "flaticon-tooth-whitening", "url" => "sub","text" => "Diş Beyazlatma"],
				["icon"=> "flaticon-first-aid", "url" => "sub","text" => "Önleyici Bakım"],
				] ],
			["url" => "gallery","text" => "Galeri" ],
			["url" => "contact","text" => "İletişim" ],

		];
		return $arr;
	}
}


