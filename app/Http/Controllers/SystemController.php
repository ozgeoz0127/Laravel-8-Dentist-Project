<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tedavi;
use App\Models\Faq;


class SystemController extends Controller
{
	
	
	public static function settings()
	{
		$arr 						= [];
		$arr["settings"]			= self::getsettings();

		$arr["settings"]["doctors"] = self::getdoctors();
		$arr["settings"]["cures"] 	= self::getcure();
	
		$arr["settings"]["gallery"]	= self::gallery();
		$arr["settings"]["faq"]		= self::faq();

		return $arr;
	}

	public static function gallery()
	{
		$r=[];
		$doc = \DB::table('images')->get()->toArray();
		if (count($doc) > 0) {
			foreach ($doc as $k=>$v) {
				$r[] = (object)["title" => $v->title,"image" => $v->image,"id" => $v->id];
			}

			return $r;
		}
	}

	public static function faq($type="")
	{
		if ($type=="all") {
			return Faq::all();	
		}
		return Faq::where("status",1)->get();
	}

	public static function getdoctors()
	{
		$r=[];
		$doc = \DB::table('users')->where('role', "dishekimi")->get()->toArray();
		if (count($doc) > 0) {
			foreach ($doc as $k=>$v) {
				$r[$v->id] = ["name" => $v->name,"surname" => $v->surname,"id" => $v->id];
			}

			return $r;
		}
	}
	public static function getsettings()
	{
		$set = \DB::table('settings')->get()->toArray();

		return (array)$set[0];
	}


	public static function getcure()
	{
		$r=[];
		//$td = \DB::table('tedavis')->get()->toArray();
		$td = Tedavi::where("status",1)->get();
		$r = [];

		foreach ($td as $t) {
			$r[$t->id] = (object)["name" => $t->title,"image" => $t->image,"url" => $t->url,"id"=>$t->id,"keywords" => $t->keywords,"description" => $t->description,"detail" => $t->detail];
		}
		return $r;

		if (count($td) > 0) {
			foreach ($td as $k=>$v) {
				$r[$v->id] = ["name" => $v->title,"image"=> $v->image,"url"=>$v->url,"id" => $v->id,"keywords" => $v->keywords,"description" => $v->description,"detail" => $v->detail];
			}

			return $r;
		}
	}
}
