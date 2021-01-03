<?php
namespace App\Repositories;


class PageRepository
{
	public static function settings()
	{
		$arr 							= [];
		$arr["settings"]				= self::getsettings();

		$arr["settings"]["menu"]		= [
			["url" => "home","text" => "#"],
			["url" => "about","text" => "Hakkımızda"],
			["url" => "services","text" => "Hizmetler","sub"=> self::getcure()],
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
		$r=[];
		$doc = \DB::table('image')->get()->toArray();
		if (count($doc) > 0) {
			foreach ($doc as $k=>$v) {
				$r[] = ["title" => $v->title,"image" => $v->image,"id" => $v->id];
			}

			return $r;
		}	
		
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
	public static function getsettings()
	{
		$set = \DB::table('setting')->get()->toArray();
		
		return (array)$set[0];
	}
	
	
	public static function getcure()
	{
		$r=[];
		$td = \DB::table('tedavi')->get()->toArray();
		if (count($td) > 0) {
			foreach ($td as $k=>$v) {
				$r[$v->id] = ["name" => $v->title,"image"=> $v->image,"url"=>$v->url,"id" => $v->id,"keywords" => $v->keywords,"description" => $v->description,"detail" => $v->detail];
			}

			return $r;
		}
	}
}


