		<form wire:submit.prevent="store" method="POST" class="p-5 ">
			@if (session()->has("message"))
			<div class="alert alert-success">
				{{session("message")}}
			</div>
			@endif
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="email">Konu</label>
					<input type="text" id="subject" wire:model="subject"  class="form-control" placeholder="Konu">
					@error("subject") <span class="text-danger">{{$message}}</span> @enderror
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="message">Mesaj</label>
					<textarea name="message" wire:model="review" id="message" cols="30" rows="5" class="form-control" placeholder="Mesajınız"></textarea>
					@error("review") <span class="text-danger">{{$message}}</span> @enderror
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					@error("rate") <span class="text-danger">{{$message}}</span> @enderror
					<label class="font-weight-bold row col-md-12 col-xs-12">Bize kaç yıldız verirsiniz?</label>
					<div class="rating">
						<input type="radio" id="star5" wire:model="rate"  value="5" />
						<label for="star5">5 stars</label>
						<input type="radio" id="star4" wire:model="rate" value="4" />
						<label for="star4">4 stars</label>
						<input type="radio" id="star3" wire:model="rate" value="3" />
						<label for="star3">3 stars</label>
						<input type="radio" id="star2" wire:model="rate" value="2" />
						<label for="star2">2 stars</label>
						<input type="radio" id="star1" wire:model="rate" value="1" />
						<label for="star1">1 star</label>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					@auth
						<input type="submit" value="Gönder" class="btn btn-primary">
					@else
						<div class="alert alert-danger">Yorum yapabilmek için üye girişi yapmalısınız</div>
					@endauth
					
				</div>
			</div>


		</form>
		@livewireScripts