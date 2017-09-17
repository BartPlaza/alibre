@extends('templates.layout')
@section('content')
<div class="contact-container">
<div class="contact-direct col-md-6 col-sm-12">
<h2>Skontakuj się z nami:</h2>
<b>Datacomp Sp. z o.o.</b></br>
ul. Gen. Henryka Dąbrowskiego 24,
30-532 Kraków
<hr>
<h3>Dział handlowy</h3>
<i class="fa fa-phone" aria-hidden="true"></i>  12 412-99-77 wew.49</br>
<i class="fa fa-envelope" aria-hidden="true"></i>   biuro@alibre.pl
<hr>
<h3>Wsparcie techniczne</h3>
<i class="fa fa-phone" aria-hidden="true"></i> 12 412-99-77 wew.45</br>
<i class="fa fa-envelope" aria-hidden="true"></i> serwis@alibre.pl

</div>
<div class="contact-form col-md-6 col-sm-12">
	<form class="well contact-form-details" method="post" action="/wyslij-wiadomosc">
		{{csrf_field()}}
		<div class="form-group">
    		<label for="email">Email:</label>
    		<input type="email" class="form-control" id="email" name="email">
  		</div>
  		<div class="form-group">
    		<label for="body">Treść:</label>
    		<textarea class="form-control" id="body" name="body" rows="8"></textarea>
  		</div>
  		<div class="form-group text-center">
  		<button type="submit" class="btn btn-primary">Wyślij</button>
  		</div>
  		
  		@foreach($errors->all() as $error)
  		<div class="form-group text-center">
  			<div class="alert alert-danger">
  				{{$error}}
  			</div>
  		</div>
  		@endforeach
  		@if(session('message'))
  			<div class="form-group text-center">
  				<div class="alert alert-success">
  					{{session('message')}}
	  			</div>
	  		</div>
  		@endif
  		
	</form>
</div>
</div>
@endsection