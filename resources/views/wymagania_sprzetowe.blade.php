@extends('templates.layout')

@section('content')
	
	<div class="function-header">
		<h2>Wymagania sprzętowe</h2>
	</div>
	<div class="download-container">
		<div class="function-features col-md-6 col-sm-12">
			<h3>System operacyjny</h3>
			Windows 7 – 64 bit </br>
			Windows 8 – 64 bit </br>
			Windows 10 – 64 bit
			<h3>Pamięć RAM</h3>
			Minimum: 4GB </br>
			Zalecane: 8-16GB
			<h3>Karta graficzna</h3>
			Kompatybilna z DirectX 9
			<h3>Miejsce na dysku</h3>
			ok. 600 MB
			<h3>Połączenie internetowe</h3>
			- dla licencji online - wymagane przy aktywacji i deaktywacji licencji oraz raz na ok. 30 dni </br>
			- dla licencji network (licencja w chmurze) - wymagane przy uruchomieniu i zamknięciu programu w celu wypożyczenia i zwrócenia licencji na serwer.
		</div>
		<div class="function-features col-md-6 col-sm-12">
			<h3>Sugestie</h3>
			- szybsze rdzenie są bardziej wydajne dla Alibre Design niż wiele wolniejszych rdzeni.</br>
			- większe złożenia wymagają większej ilości części. </br>
			- dysk SSD znacząco przyśpiesza proces wczytywania i zapisywania
		</div>
	</div>
	
@endsection