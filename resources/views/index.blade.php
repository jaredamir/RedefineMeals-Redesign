@extends('layouts.app')

@section('content')
<style type="text/css">
	div.homepage-container{
	    width: 100%; 
	    height: fit-content; 
	    overflow: hidden; 
	    position: relative;
	}


	div.videoBanner{
		display: block;
		width: 100%;
		height: 100vh;
		position: relative;
		display: flex;
	   	justify-content: center;
	   	align-items: center;
	   	overflow: hidden;
	}
	div.videoBanner img.backup_image{
		position: absolute;
		bottom: 0px;
		left: 50%;
    	transform: translate(-50%, 0);
		object-fit: cover;
		z-index: -2;
	}

	div.videoBanner > div.homeUI{
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
		font-size: 5vw;
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
		position: relative;
		width: auto;
		height: 100%;
	}


	/* Do We Deliver To You Section */
	div.deliver_section{
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100vw;
		height: 100vh;
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
		padding: 1px 20px;

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
	div.hiw-header h1{
		font-family: 'Roboto';
		font-weight: 100;
		text-align: center;
		font-size: 7vw;
	}
	div.instructions_section{
		position: relative;
		width: 100vw;
		height: 55vw;
		border-bottom: 1px solid lightgray;
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
	div.instruction_slide button{
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
		padding: 20px 40px;
		border-radius: 2px;
		margin-top: 50px;
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
		text-align: center;
	}
	div.slide_body img{
		border-radius: 20px;
		width: auto;
		height: 40vw;
		margin-left: 50px;
	}
	div.slide_body > div.slide_video{
		border-radius: 20px;
		width: auto;
		height: 40vw;
		margin-left: 50px;
		overflow: hidden;
	}
	div.slide_video > img.backup_image{
		position: absolute;
		top: 0px;
		left: 50%;
    	transform: translate(-50%, 0);
		border-radius: 20px;
		width: auto;
		height: 40vw;
		margin-left: 50px;
		z-index: -2;
	}

	div.quote_section{
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: nowrap;
		width: 100vw;
		height: 100vh;
		overflow: hidden;
		margin: 50px 0px;
	}

	.translated_right{
		transform: translateX(-100px);
	}
	.translated_left{
		transform: translateX(90px);
	}
	.flex_reverse{
		flex-direction: row-reverse;
	}


	div.quote_section > img.fnf{
		height: 55vw;
		width: auto;
		filter: drop-shadow(17px 8px 15px rgba(0, 0, 0, 0.25)) drop-shadow(6px 6px 9px rgba(0, 0, 0, 0.25));
	}
	div.quote_section > img.hms{
		height: 55vw;
		width: auto;
	}

	div.quote_section > div.quote_text-container{
		width: 50vw;
		height: fit-content;
		padding: 70px 30px;
		margin: 10px 30px;
	}
	div.quote_text-container h1{
		font-family: 'Roboto';
		font-weight: 100;
		font-size: 7vw;
		text-align: center;
	}
	div.quote_text-container h2{
		font-family: 'Roboto';
		font-weight: 100;
		font-size: 4vw;
		text-align: center;
	}

	div.section_title{
		width: 100%;
		height: fit-content;
		display: flex;
		justify-content: center;
		align-items: center;
		margin: 100px 0px;
		padding: 0px 20px;
	}
	div.section_title h1{
		font-family: 'Roboto';
		font-weight: 100;
		font-size: 5vw;
		text-align: left;
	}
	div.section_title h2{
		font-family: 'Roboto';
		font-weight: 100;
		font-size: 3vw;
		text-align: center;
	}

	div.gallery_section{
		width: 100vw;
		height: fit-content;
		display: flex;
		justify-content: space-between;
		column-gap: 15px;
		margin: 50px 0px;
	}
	
	div.gallery_section > div.gallery_column{
		display: flex;
		flex-direction: column;
		justify-content: center;
		height: 100%;
		width: 25%;
	}
	div.gallery_column img{
		width: 100%;
		height: auto;
		margin: 15px 0px;
	}
	div.gallery_column source{
		width: 100%;
		height: auto;
		margin: 15px 0px;
	}

	#GreekAnimation{
		border-radius: 20px;
		width: auto;
		height: 40vw;
		margin-left: 50px;
	}
	div.gallery_group{
		width: 100vw;
		height: fit-content;
		display: flex;
		justify-content: space-between;
		column-gap: 15px;
	}
	.redefine_logo{
        height: 5vw;
        width: auto;
        position: absolute;
        top: 0%;
        left: 50%;
        transform: translate(-50%);
        z-index: 2;
    }


	/*Mobile and Table*/
	@media only screen and (min-width: 1px){
		div.homeUI h1{
			font-size: 9vw;
		}

		div.homeUI > button.order{
			font-size:4vw;
		}
		.translated_right{
			transform: translateX(0px);
		}
		.translated_left{
			transform: translateX(0px);
		}
		div.section_title h2{
			font-size: 6vw;
		}
		div.gallery_section{
			flex-direction: column;
			margin: 20px 0px;
		}
		div.quote_section{
			flex-direction: column;
			margin: 30px 0px;
		}
		div.quote_section > div.quote_text-container{
			width: 100vw;
			height: fit-content;
			padding: 0px 10px;
			margin: 20px 30px;
		}
		div.quote_section > img.fnf{
			height: auto;
			width: 80vw;
		}
		div.quote_section > img.hms{
			height: auto;
			width: 90vw;
		}
		div.quote_text-container h2{
			font-size: 6vw;
		}
		div.section_title h1{
			font-size: 7vw;
		}
		div.instructions_section > div.instruction_slide{
			padding: 10px 30px;
		}
		div.instructions_section{
			height: 80vw;
		}
		div.instruction_slide button{
			font-size: 3.5vw;
			padding: 15px 20px;
			margin-top: 30px;
		}
		div.slide_index{
			margin: 0px 5px;
		}
		div.deliver_section{
			height: 80vh;
		}
		div.deliver_ui h1{
			font-size: 8vw;
		}
		div.deliver_ui h3{
			font-size: 4vw;
		}
		div.deliver_ui button{
			font-size: 3vw;
		}
		div.deliver_ui input{
			width: 90%;
			height: 50px;
			font-size: 3vw;
		}
		div.slide_body img{
			border-radius: 10px;
		}
		.redefine_logo{
            height: 50px;
            width: auto;
        }
	}


	/*Desktop*/
	@media only screen and (min-width: 768px){
		div.homeUI h1{
			font-size:5vw;
		}

		div.homeUI > button.order{
			font-size: 2vw;
		}
		.translated_right{
			transform: translateX(-100px);
		}
		.translated_left{
			transform: translateX(90px);
		}
		div.section_title h2{
			font-size: 3vw;
		}
		div.gallery_section{
			flex-direction: row;
			margin: 50px 0px;
		}
		div.quote_section{
			flex-direction: row;
			margin: 50px 0px;
		}
		div.quote_section > img.fnf{
			height: 55vw;
			width: auto;
		}
		div.quote_section > img.hms{
			height: 55vw;
			width: auto;
		}
		div.quote_text-container h2{
			font-size: 4vw;
		}
		div.section_title h1{
			font-size: 5vw;
		}
		div.instructions_section{
			height: 55vw;
		}
		div.instructions_section > div.instruction_slide{
			padding: 40px 100px;
		}
		div.instruction_slide button{
			font-size: 2vw;
			padding: 20px 40px;
			margin-top: 50px;
		}
		div.slide_index{
			margin: 0px 20px;
		}
		div.deliver_section{
			height: 100vh;
			
		}
		div.deliver_ui h1{
			font-size: 6vw;
		}
		div.deliver_ui h3{
			font-size: 2vw;
		}
		div.deliver_ui button{
			font-size: 1.5vw;
		}
		div.deliver_ui input{
			width: 40%;
			height: 60px;
			font-size: 1.5vw;
		}
		div.slide_body img{
			border-radius: 20px;
		}
		.redefine_logo{
            height: 5vw;
            width: auto;
        }

	}

	div.preloader{
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100vh;
		background-color: white;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		z-index: 3;
		transition: all linear 1s;
		column-gap: 50px;
	}


</style>
<div class="preloader">
	<img src="{{url('/images/Redefine_leaf_hd_small.jpg')}}">
	<div class="progress"  style="width: 200px;">
	  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color: #65B54F"></div>
	</div>
</div>
<div class="homepage-container">
<div class="videoBanner" data-aos="fade-in" id="homepagevideo">
	<img class="redefine_logo" src="{{url('/images/Redefine_logo.png')}}">
	<video loading="lazy" autoplay muted loop id="homePageVideo" playsinline type='video/mp4'>
		<source src="{{url('/images/Redefine Meals - Website Loop 2022_1080 HQ V3.mp4')}}" alt="Home Video"/>
	</video>
	<img class='backup_image' src="{{url('/images/Redefine_May22-6026.jpg')}}">
	<div class="homeUI">
		<h1>MEALS TO MATCH YOUR LIFESTYLE</h1>
		<button class="order">ORDER NOW</button>
	</div>
</div>

<div class="quote_section translated_left flex_reverse">
	<div class="quote_text-container" data-aos="fade-in">
		<h2>GET FRESH, NEVER FROZEN MEALS DELIVERED RIGHT TO YOUR DOORSTEP</h2>
	</div>
	<img class="fnf" src="{{url('/images/4.png')}}" data-aos="fade-right">
</div> 
<div class="section_title" data-aos="fade-in">
	<h2>60+ MEAL OPTIONS TO MEET YOUR DIETARY NEEDS </h2>
</div>
<div class="gallery_section" data-aos="zoom-out">
	<div class="gallery_group">
		<div class="gallery_column">
			<img src="{{url('/images/RedefineMeals_Apr22-3280.jpg')}}">
			<img src="{{url('/images/RedefineMeals_Apr22-3475 (1).jpg')}}">
		</div>
		<div class="gallery_column">
			<img src="{{url('/images/RedefineMeals_Apr22-3541.jpg')}}">
			<img src="{{url('/images/RedefineMeals_Apr22-3280.jpg')}}">
		</div>
	</div>
	<div class="gallery_group">
		<div class="gallery_column">
			<img src="{{url('/images/RedefineMeals_aug22-7830-2.jpg')}}">
			<img src="{{url('/images/RedefineMeals_Apr22-3760.jpg')}}">
		</div>
		<div class="gallery_column">
			<img src="{{url('/images/RedefineMeals_Apr22-3728.jpg')}}">
			<img src="{{url('/images/RedefineMeals_Apr22-3280_resized.jpg')}}">
		</div>
	</div>
	<!--
			<video autoplay muted loop>
				<source src="{{url('/images/RedefineMeals_Animate_strawberry.mp4')}}" alt="Home Video"/>
			</video>
		-->
</div>




<div class="section_title" data-aos="fade-in">
	<h1>HOW IT WORKS</h1>
</div>

<div class="instructions_section"data-aos="fade-in">
	<div class="instruction_slide">
		<div class="slide_header">
			<h1>CHOOSE YOUR MEALS</h1>
			<div class="slide_index"><h1>1</h1></div>
		</div>
		<div class="slide_body">
			<h3>Pick your favorite meals - We have +60 healthy prepared meals on our menu, and add new options weekly.  We offer 7, 10, 15 and 20 meal options. 
			<br><button>Build A Package</button></h3>
			<img src="{{url('/images/RedefineMeals_aug22-8429.jpg')}}">
		</div>
	</div>
</div>

<div class="instructions_section" data-aos="fade-in">

	<div class="instruction_slide">
		<div class="slide_header">
			<h1>CHOOSE YOUR DELIVERY METHOD</h1>
			<div class="slide_index"><h1>2</h1></div>
		</div>
		<div class="slide_body">
			<h3>We deliver to Long Island and New York City four days a week. We also offer free in-store pick up at our 7 store locations.<br>
				<a href="/stores"><button>Store Locations</button></a>
			</h3>
			<img src="{{url('/images/RedefineMeals_Apr22-3883.jpg')}}">
		</div>
	</div>
</div>

<div class="instructions_section" data-aos="fade-in">

	<div class="instruction_slide">
		<div class="slide_header">
			<h1>ENJOY!</h1>
			<div class="slide_index"><h1>3</h1></div>
		</div>
		<div class="slide_body">
			<h3>Heat, Eat & Repeat - Our meals come in microwavable and freezer-safe containers with specific heating instructions.  We recommend eating or freezing meals within 4-5 days. Order each week for Sunday, Monday, Tuesday or Thursday delivery.</h3>
			<img src="{{url('/images/RedefineMeals_aug22-8093.jpg')}}">
			<!--<div class="slide_video">
				<video autoplay muted loop id="GreekAnimation">
					<source src="{{url('/images/GreekAnimation.mp4')}}" alt="GreekAnimation"/>
				</video>
				<img class='backup_image' src="{{url('/images/Redefine_May22-6026.jpg')}}">
			</div>-->
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
	
	
</div>

<script type="text/javascript" src="{{url('/js/zipcodes.js')}}"></script>
<script type="text/javascript">
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
	class FadeOutElement{
            constructor(element, rate){
                //class works the same as "about us" section javascript, only without a background element 
                this.rate = rate
                this.element = document.getElementById(element)
                this.placement = window.scrollY + this.element.getBoundingClientRect().top
            };
            scrollFadeEffect(){
                let displacement = (-this.rate*((pageYOffset - this.placement)**2) + 100)
                this.element.style.opacity = displacement + '%'
            }

        }
        
        
    window.addEventListener('scroll', () => {
        let homepagevideo = new FadeOutElement('homepagevideo', .005)

        homepagevideo.scrollFadeEffect() 
    })  

    window.addEventListener('load', ()=>{
    	setTimeout(() => {
			const preload_element = document.querySelector('.preloader')
	    	preload_element.style.height = '0px'
	    	preload_element.style.opacity = '0%'
    	}, 1000);

    })


</script>


@endsection
