<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SystemController;
use App\Models\Tedavi;
use App\Models\Review;
class ServiceController extends Controller
{
    public function show(Request  $request, $url){
		$s = SystemController::settings();
		$s["settings"]["subpage"]	= $this->findservice($url);
		$s["settings"]["review"]	= Review::where("tedavi_id",$s["settings"]["subpage"]->id)->get();

		return view('service',$s);
    }
    
    
	public function findservice($url)
	{
		$service = Tedavi::where('url', '=', $url)->first()->toArray();
		return ((object)$service);

							
	}
            
}
