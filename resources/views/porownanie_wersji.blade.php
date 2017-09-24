@extends('templates.layout')

@section('content')
	<div class="function-header">
		<h2>Porównanie wersji</h2>
	</div>
	<div class="comparasion-container col-xs-11 col-sm-11 col-md-9">
		<div class="comparasion-header">
			<div class="comparasion-item-2"></div>
			<div class="comparasion-item-1 text-center">Alibre Design Professional</div>
			<div class="comparasion-item-1 text-center">Alibre Design Expert</div>
		</div>
		<div class="comparasion-subheader col-xs-12">
			System operacyjny
		</div>
		<div class="comparasion-item col-xs-12">
			<div class="comparasion-item-2">Windows 7 i nowsze - 64 bit</div>
			<div class="comparasion-item-1 comparasion-item-green text-center"><i class="fa fa-check" aria-hidden="true"></i></div>
			<div class="comparasion-item-1 comparasion-item-red text-center"><i class="fa fa-times" aria-hidden="true"></i></div>
		</div>	
		<div class="comparasion-subheader col-xs-12">
			Nauka
		</div>
		<div class="comparasion-item col-xs-12">
			<div class="comparasion-item-2">Zintegrowane tutorial</div>
			<div class="comparasion-item-1 comparasion-item-green text-center"><i class="fa fa-check" aria-hidden="true"></i></div>
			<div class="comparasion-item-1 comparasion-item-green text-center"><i class="fa fa-check" aria-hidden="true"></i></div>
		</div>
		<div class="comparasion-item col-xs-12">
			<div class="comparasion-item-2">Intuicyjny interfejs</div>
			<div class="comparasion-item-1 comparasion-item-green text-center"><i class="fa fa-check" aria-hidden="true"></i></div>
			<div class="comparasion-item-1 comparasion-item-green text-center"><i class="fa fa-check" aria-hidden="true"></i></div>
		</div>
	</div>

@endsection