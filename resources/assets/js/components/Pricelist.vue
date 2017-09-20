
<template>
<div>
	<div class="alibre-price-navbar col-xs-12">
		<div class="price-navbar-items well col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
			<div class="price-navbar-item" 
				 v-bind:class="activeItem == 'Licencje stanowiskowe' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'Licencje stanowiskowe'">
				 Licencje stanowiskowe
			</div>
			<div class="price-navbar-item"
				 v-bind:class="activeItem == 'Licencje sieciowe' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'Licencje sieciowe'">
				 Licencje sieciowe
			</div>
			<div class="price-navbar-item"
				 v-bind:class="activeItem == 'Licencje offline' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'Licencje offline'">
				 Licencje offline
			</div>
			<div class="price-navbar-item"
				 v-bind:class="activeItem == 'Opieka techniczna' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'Opieka techniczna'">
				 Opieka techniczna
			</div>
			<div class="price-navbar-item"
			     v-bind:class="activeItem == 'Dodatki' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'Dodatki'">
				 Dodatki
			</div>
		</div>
	</div>

	<div class="alibre-price-container col-xs-12"
		 v-show="activeItem == 'Licencje stanowiskowe'">
		<div class="alibre-price-item col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
			<div class="alibre-price-header">
				<h3><b>Alibre Design Professional</b></h3>
				Wersja podstawowa
			</div>
			<div class="alibre-price-value">
				4490zł netto 
			</div>
			<hr>
			<ul class="alibre-price-features">
				<li>Modelowanie części 3D</li>
				<li>Tworzenie złożeń 3D</li>
				<li>Dokumentacja 2D</li>
				<li>Podstawowy import/export</li>
			</ul>	
			<hr>
			<a href="#" class="btn btn-primary">Kup teraz</a>
			</div>

				<div class="alibre-price-item item-with-maintenance col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
							<h3><b>Alibre Design Professional</b></h3>
							Wersja podstawowa
						</div>
						<div class="alibre-price-value">
								5590zł netto 
						</div>
						<hr>
						<ul class="alibre-price-features">
							<li>Modelowanie części 3D</li>
							<li>Tworzenie złożeń 3D</li>
							<li>Dokumentacja 2D</li>
							<li>Podstawowy import/export</li>
						</ul>	
						<hr>
						<div class="alibre-price-maintenance">
								+ Roczna opieka techniczna
						</div>
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				<div class="alibre-price-item col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
								<h3><b>Alibre Design Expert</b></h3>
								Pełny pakiet CAD
						</div>
						<div class="alibre-price-value">
								7200zł netto 
						</div>
						<hr>
						<ul class="alibre-price-features">
							<li>Modelowanie części 3D</li>
							<li>Tworzenie złożeń 3D</li>
							<li>Dokumentacja 2D</li>
							<li>Podstawowy import/export</li>
							<li>Zaawansowany import/export</li>
							<li>Modelowanie blach</li>
							<li>Fotorealistyczny rendering</li>
							<li>Globalne parametry</li>
							<li>Konfiguracje</li>
							<li>Bezpośrednia edycja</li>
							<li>Praca z powierzchniami</li>
						</ul>
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				<div class="alibre-price-item item-with-maintenance col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
								<h3><b>Alibre Design Expert</b></h3>
								Pełny pakiet CAD
						</div>
						<div class="alibre-price-value">
								8500zł netto 
						</div>
						<hr>
						<ul class="alibre-price-features">
							<li>Modelowanie części 3D</li>
							<li>Tworzenie złożeń 3D</li>
							<li>Dokumentacja 2D</li>
							<li>Podstawowy import/export</li>
							<li>Zaawansowany import/export</li>
							<li>Modelowanie blach</li>
							<li>Fotorealistyczny rendering</li>
							<li>Globalne parametry</li>
							<li>Konfiguracje</li>
							<li>Bezpośrednia edycja</li>
							<li>Praca z powierzchniami</li>
						</ul>
						<hr>
						<div class="alibre-price-maintenance">
								+ Roczna opieka techniczna
						</div>
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				
		</div>

		<div class="alibre-price-container col-xs-12"
		     v-show="activeItem == 'Opieka techniczna'">
				<div class="alibre-price-item col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
							<h3><b>Opieka techniczna</b></h3>
							Dla wersji Professional
						</div>
						<div class="alibre-price-value">
								1290zł netto 
						</div>	
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				<div class="alibre-price-item col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
								<h3><b>Opieka techniczna</b></h3>
								Dla wersji Expert
						</div>
						<div class="alibre-price-value">
								1890zł netto 
						</div>
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				<div class="alibre-price-item item-with-maintenance col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
							<h3><b>Odnowienie opieki technicznej</b></h3>
							Dla wersji Professional
						</div>
						<div class="alibre-price-value">
								1890zł netto 
						</div>	
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				<div class="alibre-price-item item-with-maintenance col-lg-2 col-md-3 col-sm-5 col-xs-10 text-center">
						<div class="alibre-price-header">
								<h3><b>Odnowienie opieki technicznej</b></h3>
								Dla wersji Expert
						</div>
						<div class="alibre-price-value">
								2490zł netto 
						</div>
						<hr>
						<a href="#" class="btn btn-primary">Kup teraz</a>
				</div>
				
		</div>
</div>
</template>

<script>
	export default{
		data: function() {
			return {
				activeItem: 'Licencje stanowiskowe'
			}
		}
	}
</script>