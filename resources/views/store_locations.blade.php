@extends('layouts.app')

@section('content')
<style type="text/css">
div.locations-header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%;
    height: 40vh;
    min-height: 200px;
    margin-bottom: 50px;


    background-image: url("{{url('/images/Redefine_background_colorTinted.jpg')}}");
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
    color: darkslategray;
}


div.map_section{
	position: relative;
	width: 100vw;
	height: 100vh;
	border: 1px solid lightgray;
}
/*Leaflet Map*/
div.map_section > #map{
	z-index: 0;
	width: 100%;
	height: 100%;
}
/*Location List*/
div.map_section > div.list_header{
	position: absolute;
	top: 0px;
	left: 0px;
	display: flex;
	justify-content: center;
	flex-direction: column;
	height: 190px;
	width: 30%;
	padding: 10px 30px;
	border-bottom: 1px solid lightgray;
	background: rgba(255, 255, 255, 0.8);
	backdrop-filter: blur(8px);
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

div.map_section > div.list_body{

	position: absolute;
	bottom: 0px;
	left: 0px;
	height: calc(100% - 190px);
	width: 30%;
	overflow: scroll;

	display: flex;
	flex-direction: column;
	background: rgba(255, 255, 255, 0.8);
	backdrop-filter: blur(5px);
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
	padding: 10px 40px;
	border-radius: 2px;
	margin: 15px 30px;
	white-space: nowrap;
}

div.uf_locations{
	display: flex;
	margin: 50px 0px;
	width: 100vw;
	height: 70vw;
}
div.uf_locations > div.uf_card{
	height: 100px;
	width: 80px;
	border: 1px solid lightgray;
}

div.otf_section{
	width: 100vw;
	height: fit-content;
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 50px 0px;
	padding: 0px 50px;
}
div.otf_section h1{
    font-weight: 100;
    font-family: 'Roboto';
    font-size: 5vw;
    white-space: nowrap;
}
div.otf_section h2{
    font-weight: 100;
    font-family: 'Roboto';
    font-size: 2vw;
    margin-bottom: 100px;
    line-height: 200%;
}
div.otf_header{
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: fit-content;
	margin: 60px 0px;
}
div.otf_header img{
	width: 20%;
	height: auto;
}
div.otf_section > div.otf_bio{
	width: 70%;
	height: fit-content;
	text-align: center;
}
div.otf_locations{
	height: fit-content;
	width: 90%;
	border-top: 1px solid lightgray;
	border-bottom: 1px solid lightgray;
	margin: 50px 0px;
	padding: 50px 0px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-evenly;
	align-items: center;
}
div.otf_locations > div.otf_card{
	padding: 20px 10px;
	margin: 20px 20px;
	width: 300px;
	min-width: 300px;
	height: 300px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	box-shadow: 4px 8px 40px rgba(0, 0, 0, 0.1);
	border-radius: 20px;
	padding: 30px 30px;
}
div.otf_card h3{
	font-weight: 100;
    font-family: 'Roboto';
    font-size: 16px;
    text-align: left;
    margin: 15px 0px;
    border-bottom: 1px solid lightgray;
}
div.otf_card h4{
	font-weight: 100;
    font-family: 'Roboto';
    font-size: 14px;
    text-align: left;
}
div.otf_card button{
	background-color: rgba(233, 146, 61, 1);
	border: none;
	font-family: 'Roboto';
	font-weight: 100;
	text-align: center;
	font-size: 14px;
	color: white;
	padding: 10px 40px;
	border-radius: 2px;
	margin: 20px 0px;
	white-space: nowrap;
	width: 100%;
}



/*mobile and tablet view*/
@media only screen and (min-width: 1px){
	div.map_section > div.list_body{
		height: 30%;
		width: 100%;
		align-items: center;
		flex-direction: row;
		overflow-x: scroll;
		overflow-y: hidden;
	}
	div.map_section > div.list_header{
		height: 190px;
		width: 100%;
	}
	div.list_header h1{
    	font-size: 7vw;
	}
	div.location_item h2{
	    font-size: 12px;
	}
	div.location_item h3{
	    font-size: 10px;
	}
	div.list_header input{
		font-size:12px;
	}
	div.location_item button{
		font-size: 2vw;
	}
	div.list_body > div.location_item{
		border-bottom: none;
		border-left: 1px solid lightgray;
	}
	div.otf_locations > div.otf_card{
		width: 250px;
		min-width: 250px;
		height: 250px;
		border-radius: 15px;
	}

	div.otf_card h3{
	    font-size: 14px;
	}
	div.otf_card h4{
	    font-size: 12px;
	}
	div.otf_card button{
		font-size: 12px;
	}

	div.otf_section h1{
	    font-size: 6vw;
	}
	div.otf_section h2{
	    font-size: 3vw;
	}
	div.otf_section > div.otf_bio{
		width: 90%;
	}
	div.location_item button{
		font-weight: 300;
	}
	div.locations-header{
		display: none;
	}
	
}


/*Desktop view*/
@media only screen and (min-width: 768px){
	div.map_section > div.list_body{
		height: calc(100% - 190px);
		width: 30%;
		display: flex;
		flex-direction: column;
		overflow-x: hidden;
		overflow-y: scroll;
	}
	div.map_section > div.list_header{
		height: 190px;
		width: 30%;
	}
	div.list_header h1{
    	font-size: 3.2vw;
	}
	div.location_item h2{
	    font-size: 2vw;
	}
	div.location_item h3{
	    font-size: 1.5vw;
	}
	div.list_header input{
		font-size: 1vw;
	}
	div.location_item button{
		font-size: 1.5vw;
	}
	div.list_body > div.location_item{
		border-bottom: 1px solid lightgray;
		border-left: none;
	}
	div.otf_locations > div.otf_card{
		width: 300px;
		min-width: 300px;
		height: 300px;
		border-radius: 20px;
	}
	div.otf_card h3{
	    font-size: 16px;
	}
	div.otf_card h4{
	    font-size: 14px;
	}
	div.otf_card button{
		font-size: 14px;
	}
	div.otf_section h1{
	    font-size: 5vw;
	}
	div.otf_section h2{
	    font-size: 2vw;
	}
	div.otf_section > div.otf_bio{
		width: 70%;
	}
	div.location_item button{
		font-weight: 100;
	}
	div.locations-header{
		display: flex;
	}
}


</style>

	<div class="locations-header" data-aos="fade-down">
		<h1>OUR LOCATIONS</h1>
	</div>

	<div class="map_section" data-aos="fade-up">
		<div id="map"></div>
		
			<div class="list_header">
				<h1>Store Locations</h1>
				<input type="text" id="locations_zipcode" name="locations_zipcode" placeholder="Enter Your Zip Code">
			</div>
			<div class="list_body">
				<div class="location_item">
					<h2>Lake Grove, NY</h2>
					<h3>1015 Hawkins Ave, Lake Grove, NY 11755</h3>
					<h3>(631) 800-8199</h3>
					<a href="https://www.google.com/search?q=1015+Hawkins+Ave%2C+Lake+Grove%2C+NY+11755&oq=1015+Hawkins+Ave%2C+Lake+Grove%2C+NY+11755&aqs=chrome..69i57j33i299l2.992j0j15&sourceid=chrome&ie=UTF-8"><button>View More</button></a>
				</div>
				<div class="location_item">
					<h2>Bellmore, NY</h2>
					<h3>2693 Merrick Rd, Bellmore, NY 11710</h3>
					<h3>(516) 804-8472</h3>
					<a href="https://www.google.com/search?q=2693+Merrick+Rd%2C+Bellmore%2C+NY+11710&sxsrf=ALiCzsaa1I6NpWUWutsNEEbfFI0ytt491g%3A1669911353940&ei=OdOIY-L2OPLLytMPl-Ke-A4&ved=0ahUKEwii97rI6Nj7AhXypXIEHRexB-8Q4dUDCBA&uact=5&oq=2693+Merrick+Rd%2C+Bellmore%2C+NY+11710&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzICCCZKBAhBGABKBAhGGABQAFgAYOkKaABwAXgAgAGGAYgBhgGSAQMwLjGYAQCgAQKgAQHAAQE&sclient=gws-wiz-serp"><button>View More</button></a>
				</div>
				<div class="location_item">
					<h2>Commack, NY</h2>
					<h3>63 Commack Rd, Commack, NY 11725</h3>
					<h3>(631) 623-6643</h3>
					<a href="https://www.google.com/search?q=63+Commack+Rd%2C+Commack%2C+NY+11725&sxsrf=ALiCzsZdYbPsyhgl3_qWLmPp9mMBWJEhkw%3A1669911887871&ei=T9WIY4neNJCu5NoP-8CPOA&ved=0ahUKEwjJwYfH6tj7AhUQF1kFHXvgAwcQ4dUDCBA&uact=5&oq=63+Commack+Rd%2C+Commack%2C+NY+11725&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzICCCZKBAhBGABKBAhGGABQAFgAYJcGaABwAXgAgAFhiAFhkgEBMZgBAKABAqABAcABAQ&sclient=gws-wiz-serp"><button id="store_name">View More</button></a>
				</div>
				<div class="location_item">
					<h2>Port Jefferson, NY</h2>
					<h3>5090 Nesconset Highway, Port Jefferson Station, NY 11776</h3>
					<h3>(631) 828-2287</h3>
					<a href="https://www.google.com/search?q=5090+Nesconset+Highway%2C+Port+Jefferson+Station%2C+NY+11776&sxsrf=ALiCzsZAH4azN-83u7mVSYs2HJmHd79P0Q%3A1669911927228&ei=d9WIY7GuDaSr5NoP4uGF2A8&ved=0ahUKEwjxxenZ6tj7AhWkFVkFHeJwAfsQ4dUDCBA&uact=5&oq=5090+Nesconset+Highway%2C+Port+Jefferson+Station%2C+NY+11776&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzICCCZKBAhBGABKBAhGGABQAFgAYN4GaABwAHgAgAGJAYgBiQGSAQMwLjGYAQCgAQKgAQHAAQE&sclient=gws-wiz-serp"><button id="store_name">View More</button></a>
				</div>
				<div class="location_item">
					<h2>Syosset, NY</h2>
					<h3>503 Jericho Turnpike, Syosset, NY 11791</h3>
					<h3>(516) 584-6848</h3>
					<a href="https://www.google.com/search?q=503+Jericho+Turnpike%2C+Syosset%2C+NY+11791&sxsrf=ALiCzsZc1NzHv4OENei9SkbvW78KjkTSPQ%3A1669912093389&ei=HdaIY56nF7PSytMPpbOckA8&ved=0ahUKEwjeqYep69j7AhUzqXIEHaUZB_IQ4dUDCBA&uact=5&oq=503+Jericho+Turnpike%2C+Syosset%2C+NY+11791&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzICCCYyAggmSgQIQRgBSgQIRhgAUMwIWMwIYPYPaARwAHgAgAFjiAFjkgEBMZgBAKABAqABAcABAQ&sclient=gws-wiz-serp"><button id="store_name">View More</button></a>
				</div>
				<div class="location_item">
					<h2>Babylon, NY</h2>
					<h3>255 Deer Pk Ave, Babylon, NY 11702</h3>
					<h3>(631) 526-9071</h3>
					<a href="https://www.google.com/search?q=255+Deer+Pk+Ave%2C+Babylon%2C+NY+11702&sxsrf=ALiCzsaQ6dR6XGEiY9468K_JZ6indoYs4w%3A1669912123290&ei=O9aIY8KpEemzytMP25OoSA&ved=0ahUKEwiCs6i369j7AhXpmXIEHdsJCgkQ4dUDCBA&uact=5&oq=255+Deer+Pk+Ave%2C+Babylon%2C+NY+11702&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzICCCZKBAhBGABKBAhGGABQAFgAYNMGaABwAHgAgAFmiAFmkgEDMC4xmAEAoAECoAEBwAEB&sclient=gws-wiz-serp"><button id="store_name">View More</button></a>
				</div>
				<div class="location_item">
					<h2>Patchogue, NY</h2>
					<h3>73 North Ocean Avenue Suite A, Patchogue, NY 11772</h3>
					<h3>(631) 730-1472</h3>
					<a href="https://www.google.com/search?q=73+North+Ocean+Avenue+Suite+A%2C+Patchogue%2C+NY+11772&sxsrf=ALiCzsb0t97mh77hNlVilrEJfjVRb-QTvw%3A1669912144880&ei=UNaIY7qqNYSYytMPt-6H6A4&ved=0ahUKEwi6ks7B69j7AhUEjHIEHTf3Ae0Q4dUDCBA&uact=5&oq=73+North+Ocean+Avenue+Suite+A%2C+Patchogue%2C+NY+11772&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIFCCEQqwIyCAghEBYQHhAdSgQIQRgASgQIRhgAUABYAGDrBWgAcAB4AIABqQGIAakBkgEDMC4xmAEAoAECoAEBwAEB&sclient=gws-wiz-serp"><button id="store_name">View More</button></a>
				</div>

			</div>
		
	</div>

	<div class="otf_section">
		<div class="otf_header" data-aos="fade-in">
			<img src="{{url('/images/OTF_logo.png')}}">
			<h1>Orange Theory Fitness</h1>
		</div>
		<div class="otf_bio" data-aos="fade-in"><h2>Redefine Meals and Orange Theory fitness came together in the Winter of 2020 to deliver exclusive benefits to members in their 16 Long Island locations. From exclusive discounts to tablings and tastings.</h2></div>
		<h1 data-aos="fade-in">Partnering Locations</h1>
		<div class="otf_locations" data-aos="fade-up">
			<div class="otf_card">
				<h3>Unique Fitness Farmingville</h3>
				<h4>1191 Portion Rd, Farmingville, NY 11738</h4>
				<a href="https://www.uniquehealthandfitness.com/farmingville-home"><button href="">View More</button></a>
			</div>
			<div class="otf_card">
				<h3>Unique Fitness Holbrook</h3>
				<h4>4890 Veterans Memorial Highway, Holbrook, NY 11741</h4>
				<a href="https://www.uniquehealthandfitness.com/holbrook"><button>View More</button></a>
			</div>
			<div class="otf_card">
				<h3>Unique Fitness Shirley</h3>
				<h4>78 McGraw Street, Shirley, NY 11967</h4>
				<a href="https://www.uniquehealthandfitness.com/Shirley"><button>View More</button></a>
			</div>
		</div>
	</div>


<script type="text/javascript">
	//makes the actual map to attach to the html element
	let myMap = L.map("map").setView([40.8891, -73.4350], 10);
	myMap.scrollWheelZoom.disable();

	//tile laye gives the theme(style) to display
	L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    // Attribution is obligatory as per copyright!
	maxZoom: 20
}).addTo(myMap);

	//Add markers to the map
	let lake_grove = L.marker([40.852940, -73.114910]).addTo(myMap);
	let bellmore = L.marker([40.663850, -73.526370]).addTo(myMap);
	let commack = L.marker([40.841270, -73.293340]).addTo(myMap);
	let port_jeff = L.marker([40.922430, -73.050470]).addTo(myMap);
	let syosset = L.marker([40.811270, -73.497570]).addTo(myMap);
	let babylon = L.marker([40.700290, -73.322040]).addTo(myMap);
	let patchogue = L.marker([40.767180, -73.014840]).addTo(myMap);

	//pop ups for the markers
	lake_grove.bindPopup("<b>Lake Grove</b>");
	bellmore.bindPopup("<b>Bellmore</b>");
	commack.bindPopup("<b>Commack</b>");
	port_jeff.bindPopup("<b>Port Jeff</b>");
	syosset.bindPopup("<b>Syosset</b>");
	babylon.bindPopup("<b>Babylon</b>");
	patchogue.bindPopup("<b>Patchogue</b>");

</script>

@endsection