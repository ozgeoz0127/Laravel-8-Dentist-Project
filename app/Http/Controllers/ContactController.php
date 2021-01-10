<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SystemController;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
		$s = SystemController::settings();
		return view('contact',$s);
    }
    
	public function send(Request $request)
	{
		
		$new = new \App\Models\Message();
		$new->name 		= $request->input('name');
		$new->email 	= $request->input('email');
		$new->phone 	= $request->input('phone');
		$new->subject 	= $request->input('subject');
		$new->message 	= $request->input('message');
		$new->ip 		= $request->ip();
		$new->status 	= 0;
		$new->save();
		return back()->with('info','Mesajınız kaydedildi. İlginize Teşekkürler');

	}
    
}
