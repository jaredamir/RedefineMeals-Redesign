@extends('layouts.app')

@section('content')
<style type="text/css">


</style>


	<div id="map" style="height: 95vh; margin-top: 100px;" data-aos="fade-in"></div>




<script type="text/javascript">
	//makes the actual map to attach to the html element
	let myMap = L.map("map").setView([40.7891, -73.1350], 10);
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