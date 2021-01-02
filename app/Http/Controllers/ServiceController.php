<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PageRepository;

class ServiceController extends Controller
{
    public function show(Request  $request, $url){
		$s = PageRepository::settings();
		$s["settings"]["subpagetitle"]	= $this->findurltitle($url,$s);

		return view('pages',$s);
    }
    
    
	public function findurltitle($url, $s)	{
		$menu = $s["settings"]["menu"];
		foreach ($menu as $k => $v) {
			if (isset($v["sub"])) {
				foreach ($v["sub"] as $a=>$b) {
					if ($b["url"] == $url) {
						return $b["name"];
					}				
				}
			}
		}
		
		return "test";
							
	}
            
}
