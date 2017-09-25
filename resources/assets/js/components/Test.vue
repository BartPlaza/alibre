<template>
<div>
	<div class="alibre-price-navbar col-xs-12 ">
		<div class="price-navbar-items well col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
			<div class="price-navbar-item" 
				 v-bind:class="activeItem == 'version' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'version'">
				 <div class="navbar-progress-item"
				 v-bind:class="activeItem == 'version' ? 'progress-item-selected' : ''">1</div>
				 Wersja programu
			</div>
			<div class="price-navbar-item"
				 v-bind:class="activeItem == 'type' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'type'">
				 <div class="navbar-progress-item"
				 v-bind:class="activeItem == 'type' ? 'progress-item-selected' : ''">2</div>
				 Rodzaj licencji
			</div>
			<div class="price-navbar-item"
				 v-bind:class="activeItem == 'maintenance' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'maintenance'">
				 <div class="navbar-progress-item"
				 v-bind:class="activeItem == 'maintenance' ? 'progress-item-selected' : ''">3</div>
				 Opieka techniczna
			</div>
			<div class="price-navbar-item"
				 v-bind:class="activeItem == 'addons' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'addons'">
				 <div class="navbar-progress-item"
				 v-bind:class="activeItem == 'addons' ? 'progress-item-selected' : ''">4</div>
				 Dodatki
			</div>
			<div class="price-navbar-item"
			     v-bind:class="activeItem == 'summary' ? 'navbar-item-active' : ''"
				 v-on:click="activeItem = 'summary'">
				 <div class="navbar-progress-item"
				 v-bind:class="activeItem == 'summary' ? 'progress-item-selected' : ''">5</div>
				 Podsumowanie
			</div>
		</div>
	</div>
	<div class="price-body-container col-xs-12">

		<div class="price-description-container col-lg-3 col-lg-offset-1 well">
		Alibre Design dostępne jest w dwóch wersjach Professional i Expert. Wybierz wersję, która
		odpowiada Twoim potrzebom.
		<hr>
		Podsumowanie </br>
		Wersja programu: {{version}} | {{versionPrice}}</br>
		Licencja typu: {{type}} | {{typePrice}}</br>
		Opieka techniczna: {{maintenance}} | {{maintenancePrice}}
		</div>

		<div class="price-items-container col-lg-7"
			 v-show="activeItem == 'version'">
			<div class="alibre-price-item col-lg-5 col-lg-offset-1 text-center">
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
				<div class="btn btn-primary"
					 v-on:click="chooseVersion('Professional',5590)">Wybierz</div>
			</div>
			<div class="alibre-price-item col-lg-5 col-lg-offset-1 text-center">
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
				<div class="btn btn-primary"
					 v-on:click="chooseVersion('Expert',7200)">Wybierz</div>
			</div>
		</div>


		<div class="price-items-container col-lg-7"
			 v-show="activeItem == 'type'">
			<div class="alibre-price-item col-lg-3 col-lg-offset-1 text-center">
				<div class="alibre-price-header">
					<h3><b>Licencja stanowiskowa</b></h3>
				</div>
				<div class="alibre-price-value">
						+ 0zł 
				</div>	
				<hr>
				<div class="btn btn-primary"
					 v-on:click="chooseType('online',0)">Wybierz</div>
			</div>
			<div class="alibre-price-item col-lg-3 col-lg-offset-1 text-center">
				<div class="alibre-price-header">
					<h3><b>Licencja offline</b></h3>
				</div>
				<div class="alibre-price-value">
					+ 500zł netto
				</div>
				<hr>
				<div class="btn btn-primary"
					 v-on:click="chooseType('offline',500)">Wybierz</div>
			</div>
			<div class="alibre-price-item col-lg-3 col-lg-offset-1 text-center">
				<div class="alibre-price-header">
					<h3><b>Licencja sieciowa</b></h3>
				</div>
				<div class="alibre-price-value">
					+ 1500zł netto
				</div>
				<hr>
				<div class="btn btn-primary"
					 v-on:click="chooseType('network',1500)">Wybierz</div>
			</div>
		</div>

		<div class="price-items-container col-lg-7"
			 v-show="activeItem == 'maintenance'">
			<div class="alibre-price-item col-lg-5 col-lg-offset-1 text-center">
				<div class="alibre-price-header">
					<h3><b>Bez opieki technicznej</b></h3>
				</div>
				<div class="alibre-price-value">
						+ 0zł 
				</div>	
				<hr>
					Licencja bez wsparcia technicznego nie zawiera dostępu do aktualizacji oraz wsparcia technicznego
				<hr>
				<div class="btn btn-primary"
					 v-on:click="chooseMaintenance(false, 0)">Wybierz</div>
			</div>
			<div class="alibre-price-item col-lg-5 col-lg-offset-1 text-center">
				<div class="alibre-price-header">
					<h3><b>Roczna opieka techniczna</b></h3>
				</div>
				<div class="alibre-price-value">
					{{maintenanceCostText}}
				</div>
				<hr>
				<div class="btn btn-primary"
					 v-on:click="chooseMaintenance(true,maintenanceCost)">Wybierz</div>
			</div>
		</div>

		<div class="price-items-container col-lg-6 col-lg-offset-1"
			 v-show="activeItem == 'addons'">
			<div class="well alibre-price-addons ">
				<div class="alibre-price-addon col-lg-4">
					<img src="/images/addons/logo_datapart.png">
				</div>
				<div class="alibre-price-addon col-lg-4">
					<img src="/images/addons/logo_datagear.png">
				</div>
				<div class="alibre-price-addon col-lg-4">
					<img src="/images/addons/logo_datashaft.png">
				</div>
			</div>
		</div>

		<div class="price-items-container col-lg-6 col-lg-offset-1"
			 v-show="activeItem == 'addons'">
			<div class="well alibre-price-addons ">
				<div class="alibre-price-addon col-lg-4">
					Alibre Motion
				</div>
				<div class="alibre-price-addon col-lg-4">
					Alibre FEA
				</div>
				<div class="alibre-price-addon col-lg-4">
					Alibre 4D
				</div>
			</div>
		</div>

		
	</div>
</div>
</template>

<script>
	export default{
		data: function() {
			return {
				activeItem: 'version',
				version: '',
				versionPrice: 'wybierz wersję',
				type: '',
				typePrice: 'wybierz typ',
				maintenance: '',
				maintenancePrice: 'wybierz opiekę',
			}
		},
		methods: {
			chooseVersion: function(version, price) {
				this.activeItem = 'type';
				this.version = version;
				this.versionPrice = price;
			},
			chooseType: function(type, price) {
				this.activeItem = 'maintenance';
				this.type = type;
				this.typePrice = price;
			},
			chooseMaintenance: function(value, price) {
				this.activeItem = 'maddons';
				this.maintenance = value;
				this.maintenancePrice = price;
			}
		},
		computed: {
			maintenanceCost: function(){
				if(this.type == 'online' && this.version == 'Professional') {
					return 1290;
				} else if (this.type == 'online' && this.version == 'Expert') {
					return 1890;
				} else if ((this.type == 'offline' || this.type == 'network') && this.version == 'Professional') {
					return 1490;
				} else if ((this.type == 'offline' || this.type == 'network') && this.version == 'Expert') {
					return 2090;
				} else {
					return 0;
				}
			}, 
			maintenanceCostText: function() {
				if(this.maintenanceCost != 0){
				return '+ ' + this.maintenanceCost + 'zł netto';
				} else {
					return 'Wybierz wersję i typ licencji aby poznac cene';
				}
			}
		}
	}
</script>