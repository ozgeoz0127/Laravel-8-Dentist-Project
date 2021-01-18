<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
 
class Review extends Component
{
	public $review,$rate,$user_id,$subject,$ip,$tedavi_id;
	
	public function mount($id)
	{
		$this->tedavi_id = $id;
	}
	
    public function render()
    {
        return view('livewire.review');
    }
    
	private function resetInput()
	{
		$this->review 	= null;
		$this->subject 	= null;
		$this->rate 	= null;
	}
    
	public function store()
	{
		$this->validate([
			"subject"	=> "required|min:5",
			"review"	=> "required|min:10",
			"rate"		=> "required",
		]);
		
		$new = new \App\Models\Review();
		$new->user_id 	= Auth::id();
		$new->tedavi_id	= $this->tedavi_id;
		$new->review 	= $this->review;
		$new->subject 	= $this->subject;
		$new->ip 		= $_SERVER["REMOTE_ADDR"];
		$new->rate 		= $this->rate;
		$new->status 	= 0;
		$new->save();
		
		
		session()->flash("message","Yorumunuz kaydedildi");
		$this->resetInput();
	}
}
