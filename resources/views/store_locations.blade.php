@extends('layouts.app')

@section('content')
<style type="text/css">
div.locations-header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    width: 100%;
    height: 40vh;
    min-height: 200px;
    margin-bottom: 50px;


    background-image: url("https://redefinemeals.com/storage/photos/15/Redefine_background_colorTinted.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
    background-position: center center;

    box-shadow: 0px 9px 20px 0px rgba(0, 0, 0, 0.15);
}

div.locations-header h1{
    text-align: center;
    font-weight: 100;
    font-family: 'Roboto';
    font-size: 7vw;
}


div.map_section{
	position: relative;
	width: 100vw;
	height: 95vh;
	border: 1px solid lightgray;
}
/*Leaflet Map*/
div.map_section > #map{
	z-index: 0;
	width: 100%;
	height: 100%;
}
/*Location List*/
div.map_section > div.locations_list{
	position: absolute;
	top: 0px;
	left: 0px;
	height: 100%;
	width: 35%;
	background: rgba(255, 255, 255, 0.5);
	backdrop-filter: blur(8px);
	border: 1px solid lightgray;
}

div.locations_list > div.list_header{
	position: relative;
	display: flex;
	justify-content: center;
	flex-direction: column;
	height: 190px;
	width: 100%;
	padding: 10px 30px;
	border-bottom: 1px solid lightgray;
}
div.list_header h1{
	font-weight: 100;
    font-family: 'Roboto';
    font-size: 3.2vw;
    text-align: center;
    margin-bottom: 20px;
}
div.list_header input{
	border: 1px solid lightgray;
	border-radius: 50px;
	height: 55px;
	padding: 10px 30px;

	font-family: 'Roboto';
	font-weight: 300;
	font-size: 1vw;
	color: grey;
}
div.list_header input:focus{
	outline: none;
}


div.locations_list > div.list_body{
	position: relative;
	height: calc(100% - 190px);
	width: 100%;
	overflow: scroll;

	display: flex;
	flex-direction: column;
}
div.list_body > div.location_item{
	position: relative;
	height: fit-content;
	width: 100%;
	border-bottom: 1px solid lightgray;
	padding: 20px 0px;
}
div.location_item h2{
	font-weight: 100;
    font-family: 'Roboto';
    font-size: 2vw;
    text-align: left;
    margin: 15px 40px;
}
div.location_item h3{
	font-weight: 100;
    font-family: 'Roboto';
    font-size: 1.5vw;
    text-align: left;
    margin: 15px 40px;
}
div.location_item button{
	background: transparent;
	background-color: rgb(132, 209, 114, .7);
	border: none;
	font-family: 'Roboto';
	font-weight: 100;
	text-align: center;
	font-size: 1.5vw;
	color: white;
	width: fit-content;
	height: fit-content;
	padding: 10px 40px;
	border-radius: 2px;
	margin: 15px 30px;
}

</style>

	<div class="locations-header"data-aos="fade-down"><h1>OUR LOCATIONS</h1></div>

	<div class="map_section" data-aos="fade-in">
		<div id="map"></div>
		<div class="locations_list">
			<div class="list_header">
				<h1>Store Locations</h1>
				<input type="text" id="locations_zipcode" name="locations_zipcode" placeholder="Enter Your Zip Code">
			</div>
			<div class="list_body">
				<div class="location_item">
					<h2>Lake Grove, NY</h2>
					<h3>1015 Hawkins Ave, Lake Grove, NY 11755</h3>
					<h3>(631) 800-8199</h3>
					<button id="store_name">View More</button>
				</div>
				<div class="location_item">
					<h2>Bellmore, NY</h2>
					<h3>2693 Merrick Rd, Bellmore, NY 11710</h3>
					<h3>(516) 804-8472</h3>
					<button id="store_name">View More</button>
				</div>
				<div class="location_item">
					<h2>Commack, NY</h2>
					<h3>63 Commack Rd, Commack, NY 11725</h3>
					<h3>(631) 623-6643</h3>
					<button id="store_name">View More</button>
				</div>

			</div>
		</div>
	</div>


<script type="text/javascript">
	//makes the actual map to attach to the html element
	let myMap = L.map("map").setView([40.8891, -73.2350], 10);
	myMap.scrollWheelZoom.disable();

	//tile laye gives the theme(style) to display
	L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    // Attribution is obligatory as per copyright!
	maxZoom: 20
}).addTo(myMap);

	//Add markers to the map
	let lake_grove = L.marker([40.852940, -73.114910]).addTo(myMap);
	let port_jeff = L.marker([40.922430, -73.050470]).addTo(myMap);

	//pop ups for the markers
	lake_grove.bindPopup("<b>Lake Grove</b>");
	port_jeff.bindPopup("<b>Port Jeff</b>");


</script>

<!-- Leaflet Tutorial -->
<!--
<script type="text/javascript">
	//makes the actual map to aatach to the html element
	let myMap = L.map("map").setView([37.61, -122.011], 10);

	//tile laye gives the theme(style) to display
	L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    // Attribution is obligatory as per copyright!
	maxZoom: 20
}).addTo(myMap);

	//Add markers to the map
	let sfo_marker = L.marker([37.618, -122.375]).addTo(myMap);
	let oak_marker = L.marker([37.710, -122.224]).addTo(myMap);
	let sjc_marker = L.marker([37.361, -121.928]).addTo(myMap);

	//add circles to the map
	let golden_gate = L.circle([37.819, -122.478], {
    color: "lime-green",
    fillColor: "green",
    fillOpacity: "0.5",
    radius: 1500
}).addTo(myMap);

	//pop ups for the markers
	sfo_marker.bindPopup("<b>SFO</b>");
oak_marker.bindPopup("<b>OAK</b>");
sjc_marker.bindPopup("<b>SJC</b>");
golden_gate.bindPopup("<b>Golden Gate Bridge</b>");
diablo.bindPopup("<b>Mt. Diablo</b>");

</script>
-->








@endsection