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
			["url" => "services","text" => "Servisler","sub"=> [["url" => "sub","text" => "Menu1"]] ],
			["url" => "gallery","text" => "Galeri" ],
			["url" => "contact","text" => "İletişim" ],

		];
		return $arr;
	}
}


