@extends('layouts.app')

@section('content')
<style type="text/css">
	div.videoBanner{
		display: block;
		width: 100%;
		height: 100vh;
		position: relative;
	}

	div.videoBanner div.homeUI{
		position: absolute;
		top: 0;
		left: 0;
		display: flex;
		flex-direction: column;
		flex-wrap: nowrap;
		align-items: center;
		justify-content: center;
		row-gap: 50px;
		width: 100%;
		height: 100%;
	}

	div.homeUI h1{
		font-family: "Roboto";
		font-weight: 300;
		text-align: center;
		font-size: 6vw;
		color: white;
		mix-blend-mode: difference;
	}

	div.homeUI > button.order{
		background: transparent;
		background-color: rgb(132, 209, 114, .7);
		border: none;
		font-family: 'Roboto';
		font-weight: 100;
		text-align: center;
		font-size: 2vw;
		color: white;
		width: fit-content;
		height: fit-content;
		padding: 10px 40px;
		border-radius: 2px;
	}

	#homePageVideo{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: auto;
	}


	/* Do We Deliver To You Section */
	div.deliver_section{
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100vw;
		height: 100vh;
		border: 1px solid lightgray;
		
	}
	div.deliver{
		position: relative;
		width: 80%;
		height: 90%;
		background-image: url("{{url('/images/RedefineMeals_Apr22-3388.jpg')}}");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		border: 1px solid lightgray;
		border-radius: 15px;
	}
	div.deliver > div.deliver_ui{
		position: absolute;
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		flex-direction: column;
		padding: 0px 30px;

	}

	div.deliver_ui h1{
		font-family: "Roboto";
		font-weight: 100;
		text-align: left;
		font-size: 6vw;
		color: darkslategray;
	}
	div.deliver_ui h3{
		font-family: "Roboto";
		font-weight: 100;
		text-align: left;
		font-size: 2vw;
		color: darkslategray;
		margin-bottom: 30px;
	}

	div.deliver_ui input{
		width: 40%;
		height: 60px;
		border: 1px solid lightgray;
		border-radius: 7px;
		padding: 1px 10px;

		font-family: "Roboto";
		font-weight: 100;
		font-size: 1.5vw;
		color: grey;
		margin-bottom: 20px;
	}
	div.deliver_ui input:focus{
		outline: none;
	}
	div.deliver_ui button{
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
		transition: all .2s ease-in;
	}

	/*How it works*/
	div.instructions_section{
		position: relative;
		width: 100vw;
		height: 50vw;
		border: 1px solid lightgray;
	}
	div.instructions_section > div.instruction_slide{
		overflow: hidden;
		width: 100%;
		height: 100%;
		padding: 40px 100px;
	}
	div.instruction_slide > div.slide_header{
		display: flex;
		justify-content: space-between;
	}
	div.instruction_slide > div.slide_header{
		display: flex;
		justify-content: space-between;
		align-items: center;
		width: 100%;
		height: 30%;
		margin-bottom: 10px;
	}
	div.instruction_slide > div.slide_body{
		display: flex;
		justify-content: space-between;
		width: 100%;
		height: 60%;
	}
	div.instruction_slide h1{
		font-family: 'Roboto';
		font-weight: 100;
		font-size: 5vw;
	}
	div.instruction_slide h3{
		font-family: 'Roboto';
		font-weight: 100;
		font-size: 3vw;
	}
	div.slide_index{
		display: flex;
		justify-content: center;
		align-items: center;
		width: 10vw;
		height: 10vw;
		border-radius: 20%;
		background-color: rgb(132, 209, 114, .7);
		color: white;
		margin: 0px 20px;
	}
	div.slide_body img{
		border-radius: 20px;
		width: auto;
		height: 40vw;
		margin-left:50px;
	}


</style>
<div class="videoBanner" data-aos="fade-in">
	<video autoplay muted loop id="homePageVideo">
		<source src="{{url('/images/Redefine Meals - Website Loop 2022_1080 HQ V3.mp4')}}" alt="Home Video"/>
	</video>
	<div class="homeUI">
		<h1>Meals To Match Your Lifestyle</h1>
		<button class="order">ORDER NOW</button>
		

	</div>
</div>

<div class="instructions_section">

	<div class="instruction_slide">
		<div class="slide_header">
			<h1>CHOOSE YOUR MEALS</h1>
			<div class="slide_index"><h1>1</h1></div>
		</div>
		<div class="slide_body">
			<h3>Pick your favorite meals - We have +60 healthy prepared meals on our menu, and add new options weekly.  We offer 7, 10, 15 and 20 meal options. </h3>
			<img src="{{url('/images/RedefineMeals_aug22-8429.jpg')}}">
		</div>
	</div>
</div>

<div class="instructions_section">

	<div class="instruction_slide">
		<div class="slide_header">
			<h1>CHOOSE YOUR DELIVERY METHOD</h1>
			<div class="slide_index"><h1>2</h1></div>
		</div>
		<div class="slide_body">
			<h3>We deliver to Long Island and New York City four days a week. We also offer free in-store pick up at our <a href="/stores"> 7 store locations</a>.</h3>
			<img src="{{url('/images/RedefineMeals_Apr22-3883.jpg')}}">
		</div>
	</div>
</div>

<div class="instructions_section">

	<div class="instruction_slide">
		<div class="slide_header">
			<h1>ENJOY!</h1>
			<div class="slide_index"><h1>3</h1></div>
		</div>
		<div class="slide_body">
			<h3>Heat, Eat & Repeat - Our meals come in microwavable and freezer-safe containers with specific heating instructions.  We recommend eating or freezing meals within 4-5 days. Order each week for Sunday, Monday, Tuesday or Thursday delivery.</h3>
			<img src="{{url('/images/RedefineMeals_aug22-8093.jpg')}}">
		</div>
	</div>
</div>

<div class="deliver_section" data-aos="fade-up">
	<div class="deliver">
		<div class="deliver_ui">
			<h1>Do We Deliver To You</h1>
			<h3>Enter Your Zip Code To Find Out If You Can Recieve Meals Straight To Your Doorstep</h3>
			<input type="text" id="zipcode" name="zipcode" placeholder="Zip code">
			<button onclick="validate()" id="zipcode_button">Find Out</button>
		
		</div>
	</div>
</div>
<script type="text/javascript" src="{{url('/js/zipcodes.js')}}"></script>
<script type="text/javascript">
	console.log(zipcode_json)
	let inp_zipcode = document.getElementById('zipcode')
	let button_zipcode = document.getElementById("zipcode_button")
	const deliverables = []//['07020', '11733', '10956', '37690']

	function reset_zipcode_button(){
		button_zipcode.innerHTML = "Find Out"
		button_zipcode.style.backgroundColor = "rgb(132, 209, 114, .7)"
	}

	inp_zipcode.addEventListener('input', function(){
		reset_zipcode_button()
		//include hyphen error message or hyphen split 
	})


	function validate(){
		if(/^\d{5}(-\d{4})?$/.test(inp_zipcode.value)){//function validates zipcode with or without - | if its a valid zipcode, continues to check list
			if(deliverables.includes(String(inp_zipcode.value))){
				button_zipcode.innerHTML = "We Do!"
				button_zipcode.style.backgroundColor = "rgb(132, 209, 114, .7)"
			}else{
				button_zipcode.innerHTML = "Unfortunately Not"
				button_zipcode.style.backgroundColor = "rgb(255, 1, 1, .6)"
			}
		}else{
			button_zipcode.innerHTML = "Please Enter A Valid Zip Code"
			button_zipcode.style.backgroundColor = "rgb(255, 1, 1, .6)" 
		}
		
	}




</script>


@endsection
