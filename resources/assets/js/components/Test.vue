<template>
<div class="alibre-pirce-conatainer col-xs-12">
	<div class="alibre-price-navbar col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
		<div class="price-navbar-items well ">
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
	<div class="price-body-container">

		<div class="price-description-container col-lg-3 col-lg-offset-1 col-sm-3 col-sm-offset-1 well"
			 v-show="activeItem != 'summary'">
			<div class="description-header">
				<h3>Opis</h3>
				Alibre Design dostępne jest w dwóch wersjach Professional i Expert.
				Wybierz wersję, która odpowiada Twoim potrzebom.
			</div>
			<div class="btn btn-primary summary-button"
			     v-show="activeItem == 'addons'"
				 v-on:click="activeItem = 'summary'">Przejdź do podsumowania
			</div>
		</div>


		<div class="description-summary well col-sm-10 col-sm-offset-1 text-center"
			 v-show="activeItem == 'summary'">
			<h3>Podsumowanie</h3>
			<b>Wersja programu:</b> {{version}} </br>
			<b>Licencja typu:</b> {{type}} </br>
			<b>Opieka techniczna:</b> {{maintenance}}
		</div> 

		<div class="price-items-container col-lg-7 col-sm-7"
			 v-show="activeItem == 'version'">
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2  text-center">
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
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2 text-center">
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


		<div class="price-items-container col-lg-7 col-sm-7"
			 v-show="activeItem == 'type'">
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2 text-center">
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
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2 text-center">
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
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2 text-center">
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

		<div class="price-items-container col-lg-7 col-sm-7"
			 v-show="activeItem == 'maintenance'">
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2 text-center">
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
			<div class="alibre-price-item col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-2 text-center">
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

		<div class="price-items-container col-sm-6 col-sm-offset-1"
			 v-show="activeItem == 'addons'">
			<div class="well alibre-price-addons ">
				<div class="alibre-price-addon col-lg-4"
					 v-bind:class="{'alibre-addon-selected': addons.datapart}"
				     v-on:click="addons.datapart = !addons.datapart">
					<img src="/images/addons/logo_datapart.png">
					<div class="addon-shop"
				    	 v-show="addons.datapart">
				    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				    </div>
				</div>
				<div class="alibre-price-addon col-lg-4"
				     v-bind:class="{'alibre-addon-selected': addons.datagear}"
				     v-on:click="addons.datagear = !addons.datagear">
					<img src="/images/addons/logo_datagear.png">
					<div class="addon-shop"
				    	 v-show="addons.datagear">
				    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				    </div>
				</div>
				<div class="alibre-price-addon col-lg-4"
				     v-bind:class="{'alibre-addon-selected': addons.datashaft}"
				     v-on:click="addons.datashaft = !addons.datashaft">
				     <div class="addon-shop"
				    	 v-show="addons.datashaft">
				    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				    </div>
					<img src="/images/addons/logo_datashaft.png">
				</div>
			</div>
		</div>

		<div class="price-items-container col-sm-6 col-sm-offset-1"
			 v-show="activeItem == 'addons'">
			<div class="well alibre-price-addons ">
				<div class="alibre-price-addon col-lg-4"
					 v-bind:class="{'alibre-addon-selected': addons.simwise_motion}"
				     v-on:click="addons.simwise_motion = !addons.simwise_motion">
				    <div class="addon-shop"
				    	 v-show="addons.simwise_motion">
				    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				    </div>
					<div class="addon-header">
							SimWise Motion</div>
					<img src="/images/addons/logo_simwise_motion.png">
				</div>
				<div class="alibre-price-addon col-lg-4"
				     v-bind:class="{'alibre-addon-selected': addons.simwise_fea}"
				     v-on:click="addons.simwise_fea = !addons.simwise_fea">
				    <div class="addon-shop"
				    	 v-show="addons.simwise_fea">
				    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				    </div>
					<div class="addon-header">SimWise FEA</div>
					<img src="/images/addons/logo_simwise_fea.png">
				</div>
				<div class="alibre-price-addon col-lg-4"
					 v-bind:class="{'alibre-addon-selected': addons.simwise_4d}"
				     v-on:click="addons.simwise_4d = !addons.simwise_4d">
				    <div class="addon-shop"
				    	 v-show="addons.simwise_4d">
				    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				    </div>
					<div class="addon-header">
							SimWise 4D</div>
					<img src="/images/addons/logo_simwise_4d.png">
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
				version: 'wybierz wersję',
				versionPrice: 'wybierz wersję',
				type: 'wybierz typ',
				typePrice: 'wybierz typ',
				maintenance: 'wybierz opcję',
				maintenancePrice: 'wybierz opcję',
				addons: {
					datapart: false,
					datagear: false,
					datashaft: false,
					simwise_motion: false,
					simwise_fea: false,
					simwise_4d: false
				},
				'simwise_4d': false
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
				this.activeItem = 'addons';
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