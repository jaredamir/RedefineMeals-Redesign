@extends('layouts.app')

@section('content')
<style type="text/css">

/* Testimonial-Card */
div.testimonial_container-mobile-tablet{ /* the container for the mobile and tablet view */
	width: 100%;
	animation: fadeIn 1.5s;
}

div.testimonial_container-desktop{ /* the container for the desktop view */
	display: inline-flex;
	flex-direction: row;
	position: relative;
	justify-content: space-evenly;
	width: 100%;
}

.testimonial_card-thin{
	height: fit-content;
	width: fit-content;

	border: solid 1px;
	border-color: lightgrey;
	border-radius: 2px;

	display: inline-flex;
	flex-direction: column;

	min-width: 200px;
}

.testimonial_card-thin img{
	height: 50% ;
	width: 100%;
}

.testimonial_card-thin div{
	height: 50%;
	width: 100%;
	padding: 30px 40px;
	background-image: url("https://redefinemeals.com/storage/photos/15/Resized%20Images/Redefine_logo-dark_background.jpg");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  background-position: center center;
}

.arrow-down{
	display: inline-block;
	border: solid;
	border-width: 0px 3px 3px 0px;
	border-color: rgba(0, 0, 0, .5);
	padding: 3px;
	transform: rotate(45deg);

	animation-name: arrow-down-animation;
	animation-direction: alternate;
	animation-duration: 2s;
	animation-iteration-count: infinite;
}

/*###*/



/*Header*/
div.heading{
	height: fit-content;
	width: 100%;
	padding: 50px 20px;
	background-image: url("https://redefinemeals.com/storage/photos/15/Redefine_background_colorTinted.jpg");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  background-position: center center;
  margin-right: 0px;
  margin-bottom: 40px;

	box-shadow: 0px 9px 20px 0px rgba(0, 0, 0, 0.15);

}

div.heading h1{
	font-size: 10vw;
	color: darkslategray;
	font-family: 'Roboto', sans-serif;
	font-weight: 100;
	text-align: center;

} 

div.heading p{
	font-size: 20;
	text-align: center;
	color: grey;
	font-family: 'Roboto', sans-serif;
	font-weight: 300;
	

	margin-bottom: 10px;
}
/*###*/



/*Leave A Review and QR Code*/
div.qr-code{
	justify-content: center;
	width: 100%;
	height: fit-content;
	margin: 70px 0px;
}

div.qr-code h1{
	font-size: 15vw;
	color: darkslategray;
	margin: 15px 0px;
	text-align: center;
}

div.qr-code img{
	width: 15rem;
	margin-bottom: 30px;
	margin-top: 30px;
	position: relative;
	transition: all .2s ease-in-out;
}

div.qr-code p{
	color: grey;
	text-align: center;
	margin: 0px 20px;
}

img.center{
	display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

/* ### */




/* Reviews */
div.reviews_section-header{
	width: 100%;
	height: fit-content;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	margin: 100px 0px;
}

div.reviews_section-header h1{ /* this header uses the Google Font Roboto 100 */
	font-size: 15vw;
	color: darkslategray;
	font-family: 'Roboto', sans-serif;
	text-align: center;
	font-weight: 100;
}

div.reviews_section-header p{
	font-size: 1vw;
	color: gray;
	text-align: center;
}


div.review{
	border-bottom: 1px solid lightgray;
	width: 100%;
	height: fit-content;
	margin: 0px;
	position: relative;
}

div.review > div.review-heading{
	display: flex;
	width: fit-content;
	height: 15%;
	position: relative;
	margin-top: 10px;
	margin-bottom: 5px;
}
div.review-heading img{
	display: block;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	position: relative;
	margin: 10px 10px 0px 20px;
}

div.review-heading::after{
	position: absolute;
	bottom: 0;
	left: 75px;
	content: "Verified By Google";
	color: gray;
	font-size: 10px;
}

p.review-heading-name{
	display: block;
	position: relative;
	font-size: 25px;
	margin-top: 15px;
	color: darkslategray;
	font-weight: bold;

}

div.review-content{
	display: block;
	font-size: 23px;
	color: darkslategray;
	position: relative;
	margin: 10px 30px 20px 30px;
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	font-weight: 300;
}

div.stars{
	display: flex;
	width: fit-content;
	height: fit-content;
	margin: 15px 50px 15px 50px;
	column-gap: 5px;
}

div.stars svg{
	animation-name: stars-animation;
	animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: ease-in-out;
}
/* ### */



/*Animations*/
svg:nth-child(2){ /*Each star in the div is delayed by +.3 seconds to create a wave effect*/
	animation-delay: .3s;
}
svg:nth-child(3){
	animation-delay: .6s;
}
svg:nth-child(4){
	animation-delay: .9s;
}
svg:nth-child(5){
	animation-delay: 1.2s;
}

@keyframes stars-animation{
	from{

	}
	to{
	transform: scale(1.15);
	}
}

@keyframes fadeIn {
  0% { opacity: 0; 
  	transform: translateY(20px);
  }
  100% { opacity: 1; }
}

@keyframes arrow-down-animation{
	0%{
		transform: translateY(0px) rotate(45deg);
		
	}
	100%{
		transform: translateY(10px) rotate(45deg);
	}
}
/*###*/


/*Testimonial Card Below Mobile Width View*/
@media only screen and (min-width: 1px){
			div.testimonial_container-mobile-tablet{
				position: relative;
				display: block;
				width: 100%;
			}

			div.testimonial_container-desktop{
				display: none;
				flex-direction: row;
			}

			.testimonial_card-thin{
				height: fit-content;
				width: fit-content;

				border: solid 1px;
				border-color: lightgrey;
				border-radius: 2px;

				display: inline-flex;
				flex-direction: column;		
			}

			.testimonial_card-thin img{
				height: 50% ;
				width: 100%;
			}


			.testimonial_card-thin p{
				color: darkslategray;
				font-size: 18px;
				font-family: Helvetica, sans-serif;
			}

			.arrow-down{
				position: absolute;
				right: 50%;

			}

			@keyframes arrow-down-animation{
				0%{
					transform: translateY(-10px) rotate(45deg);
					
				}
				100%{
					transform: translateY(10px) rotate(45deg);
				}
			}

			.heading{
				display: none;
			}
			div.qr-code h1{
				font-size: 12vw;
			}

			div.reviews_section-header h1{ /* at below mobile view the font size stays fized at 60px */
				font-size: 60px;
			}

			div.reviews_section-header p{
				font-size: 2vw;
			}

/*Testimonial Card Mobile View*/
@media only screen and (min-width: 375px){
			div.testimonial_container-mobile-tablet{
				position: relative;
				display: block;
				width: 100%;
			}

			div.testimonial_container-desktop{
				display: none;
				flex-direction: row;
			}

			.testimonial_card-thin{
				
				display: inline-flex;
				flex-direction: column;

				
			}

			.testimonial_card-thin img{
				height: 50% ;
				width: 100%;
			}

			.arrow-down{
				position: absolute;
				right: 50%;

			}

			@keyframes arrow-down-animation{
				0%{
					transform: translateY(-8px) rotate(45deg);
					
				}
				100%{
					transform: translateY(8px) rotate(45deg);
				}
			}

			.heading{
				display: none;
			}
			div.qr-code h1{
				font-size: 15vw;
			}

			div.reviews_section-header h1{ /* at mobile view the font changes at 20vw */
				font-size: 20vw;
			}

			div.reviews_section-header p{ /* at mobile view the font changes at 10vw  */
				font-size: 10px;
			}
}
/* Testimonial Card tablet View*/
@media only screen and (min-width: 768px){
			div.testimonial_container-mobile-tablet{
				display: block;
				width: 100%;
				padding: 30px 20px;
			}

			div.testimonial_container-desktop{
				display: none;
				flex-direction: row;
			}

			.testimonial_card-thin{
				height: fit-content;
				width: fit-content;

				border: solid 1px;
				border-color: lightgrey;
				border-radius: 5px;
				margin-top: 10px;
				margin-bottom: 10px;

				display: inline-flex;
				flex-direction: row;
			}

			.testimonial_card-thin img{
				height:20rem;
				width: auto;
				

				/*More Round as Media Changes*/border-radius: 2px;
			}

			.testimonial_card-thin div{
				height: 20rem;
				width: auto;
				padding: 13px 40px;
				overflow: auto;

			}

			.arrow-down{
				display: none;
			}

			.heading{
				display: block;
			}

			div.reviews_section-header h1{ /* above mobile view the font size changes with the screen size */
				font-size: 15vw;
			}
			
			div.reviews_section-header p{ /* above mobile view the font size changes with the screen size */
				font-size: 1vw;
			}

}
/* Testimonial Card desktop View*/
@media only screen and (min-width: 1024px){

			div.testimonial_container-mobile-tablet{
				display: none;
			}

			div.testimonial_container-desktop{
				display: inline-flex;
				flex-direction: row;
				justify-content: space-evenly;
				animation: fadeIn 1.5s;
			}

			.testimonial_card-thin{

				display: inline-flex;
				flex-direction: column;

				transition: all .2s ease-in-out;
			}

			.testimonial_card-thin img{
				height: 50%;
				width: 21rem;
			}

			.testimonial_card-thin div{
				position: relative;
				height: 25rem;
				width: 21rem;
				padding: 13px 40px;
				overflow: auto;

				background-image: url("https://redefinemeals.com/storage/photos/15/Resized%20Images/Redefine_logo-dark_background.jpg");
			  background-repeat: no-repeat;
			  background-attachment: scroll;
			  background-size: cover;
			  background-position: center center;
			}

			.testimonial_card-thin:hover{
				
				transform: scale(1.1);
				box-shadow: 0 9px 30px 0 rgba(0, 0, 0, 0.1), 0 8px 30px 0 rgba(0, 0, 0, 0.3);
			}

			.arrow-down{
				display: inline-block;
			}

			.heading{
				display: block;
			}

			div.qr-code img:hover{
				transform: scale(1.1);
			}
			div.qr-code h1{
				font-size: 8vw;
			}

			div.reviews_section-header h1{ /* above mobile view the font size changes with the screen size */
				font-size: 15vw;
			}

			div.reviews_section-header p{
				font-size: 1vw;
			}
}


</style>


<!-- Header -->
<div class="heading" data-aos="fade-down">
	<br>
	<h1>TESTIMONIALS</h1>
	<p>Recommended By Our Customers With World-Class Talent That Cover The Entire Spectrum Of Peak Performance</p>
</div>


<!--Container for the page at Mobile and Tablet Screen Width-->
<div class="testimonial_container-mobile-tablet">
	<div class="testimonial_card-thin">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Gena%20Bradshaw-resized.jpg" class="card-img-top" alt="...">
		<div>
			<p><strong>Gena Bradshaw</strong><small>, Fitness Coach and two-time cancer survivor</small></br><i class="arrow-down"></i></br>"Redefine Meals not only provides great food but education behind why food is fuel as well. Personally, I love the meals, they are tasty, filling, and healthy. I am a part of a family fitness business, Bradshaw Personal Fitness, we love the food and align with Redefine Meals so much that we decided to work together. Our clients love the meals as well and enjoy feeding their families these meals too."</p>
		</div>
	</div>
	<div class="testimonial_card-thin">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/George%20Greene-resized.jpg"/>
		<div>
			<p><strong>George Greene</strong><small>, Division-1 Associate Athletic Director of Higher Performance</small></br></br>"Redefine meals have been a game changer for our athletic department. The quality of the food, the variety, and the service match the needs of the elite athletes we have at Stony Brook University. In my experience an area that can separate good athletes and great athletes is attention to performance nutrition and Redefined Meals allows us to close that gap."</p>
		</div>
	</div>
	<div class="testimonial_card-thin">
		<img src="{{url('/images/Matias Ferreira picture 2-resized.jpg')}}" class="card-img-top" alt="...">
		<div>
			<p><strong>Matias Ferreira</strong><small>, US Marine Veteran and Police Officer</small></br></br>"I've been a pretty active guy my whole life. January 21, 2011; serving as a United States Marine on a Combat tour In Afghanistan, I stepped on an IED (Improvised Explosive Device) causing me to lose both of my legs and had the blessing to get a second chance on my life again.  It took a long time to get all the factors back aligned again. Walking, Running, Lifting, Working, and Eating Healthier.  Redefine Meals helped me achieve a part of that goal and it’s thanks to the staff and amazing taste that keeps me going and coming back for more. God Bless this family. God Bless the American Dream."</p>
		</div>
	</div>
</div>



<!--Container for the page at Desktop and Greater Screen Width-->
<div class="testimonial_container-desktop">
	<div class="testimonial_card-thin">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Gena%20Bradshaw-resized.jpg" class="card-img-top" alt="...">
		<div>
			<p><strong>Gena Bradshaw</strong><small>, Fitness Coach and two-time cancer survivor</small></br><i class="arrow-down"></i></br>"Redefine Meals not only provides great food but education behind why food is fuel as well. Personally, I love the meals, they are tasty, filling, and healthy. I am a part of a family fitness business, Bradshaw Personal Fitness, we love the food and align with Redefine Meals so much that we decided to work together. Our clients love the meals as well and enjoy feeding their families these meals too."</p>
		</div>
	</div>
	<div class="testimonial_card-thin">
		<img src="{{url('/images/Matias Ferreira picture 2-resized.jpg')}}" class="card-img-top" alt="...">
		<div>
			<p><strong>Matias Ferreira</strong><small>, US Marine Veteran and Police Officer</small></br><i class="arrow-down"></i></br>"I've been a pretty active guy my whole life. January 21, 2011; serving as a United States Marine on a Combat tour In Afghanistan, I stepped on an IED (Improvised Explosive Device) causing me to lose both of my legs and had the blessing to get a second chance on my life again. It took a long time to get all the factors back aligned again. Walking, Running, Lifting, Working, and Eating Healthier.  Redefine Meals helped me achieve a part of that goal and it’s thanks to the staff and amazing taste that keeps me going and coming back for more. God Bless this family. God Bless the American Dream."</p>
		</div>
	</div>
	<div class="testimonial_card-thin">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/George%20Greene-resized.jpg"/>
		<div>
			<p><strong>George Greene</strong><small>, Division-1 Associate Athletic Director of Higher Performance</small></br><i class="arrow-down"></i></br>"Redefine meals have been a game changer for our athletic department. The quality of the food, the variety, and the service match the needs of the elite athletes we have at Stony Brook University. In my experience an area that can separate good athletes and great athletes is attention to performance nutrition and Redefined Meals allows us to close that gap."</p>
		</div>
	</div>
</div>

<!--Google Reviews-->

<div class="reviews_section-header" data-aos="fade-in">
	<h1>REVIEWS</h1>
	<p>Only a select few from our google reviews</p>
</div>


<div class="review">
	<div class="review-heading">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Karen%20Hilsenbeck.png" alt="...">
		<p class="review-heading-name">Karen Hilsenbeck</p>
	</div>
	<div class="stars">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
	</div>
	<div class="review-content">
		<p>A friend of mine told me about this company and gave me 2 to try out. I enjoyed them both so much that I immediately placed an order. I’ve tried 4 so far and each one is better than the next. Portion sizes are perfect…I’m able to finish the entire meal and feel satisfied. I’ve used other companies but was never really satisfied. I’ve already started my next order. And I have to say the cookies and cream overnight oats are the best oats in any form I’ve ever had, fantastic!!
Highly recommend this company!</p>
	</div>
</div>



<div class="review">
	<div class="review-heading">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Jessica%20Behrenfeld.png" alt="...">
		<p class="review-heading-name">Jessica Behrenfeld</p>
	</div>
	<div class="stars">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
	</div>
	<div class="review-content">
		<p>My husband and I love redefine. The meals taste amazing and it they have so many options. Dinner is now so quick and easy!</p>
	</div>
</div>


<div class="review">
	<div class="review-heading">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Kristine%20Robinson.png" alt="...">
		<p class="review-heading-name">Kristine Robinson</p>
	</div>
	<div class="stars">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
	</div>
	<div class="review-content">
		<p>My husband and I have been experimenting with all the meal delivery options out there, including another company that advertised fresh-made meals. This blows them all out of the water. I love to cook, so it takes a lot to convince me NOT too in terms of pre-prepped stuff, but the quality of these meals has been amazing, and the level of customer service has been really great. This is now a mainstay in our meal rotation. Great stuff!</p>
	</div>
</div>





<div class="review">
	<div class="review-heading">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Sarah%20F.png" alt="...">
		<p class="review-heading-name">Sarah F</p>
	</div>
	<div class="stars">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
	</div>
	<div class="review-content">
		<p>Just finished the first 7 meals my husband and I ordered. I really wanted to love these meals. We wanted to try this service because we are incredibly busy and eat out far more than we would like to. The meals were fresh, had adequate portion sizes, and seemed to be made with high quality ingredients. In my opinion, they were just bland. The dishes with sauce had very little sauce, the meats didn’t have much seasoning, and there was a lot of oil in the dishes. I’m just sharing my experience based on my personal preferences, if I’m going to pay for a meal prep service, it’s important to me that the meals be tasty.</p>
	</div>
</div>


<div class="review">
	<div class="review-heading">
		<img src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Pete%20Campbell.png" alt="...">
		<p class="review-heading-name">Pete Campbell</p>
	</div>
	<div class="stars">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="#76be49" class="bi bi-star-fill" viewBox="0 0 16 16">
	  	<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</svg>
	</div>
	<div class="review-content">
		<p>Love their food. I'm just not a fan of picking up a 7 meal plan on 'Thursday, July 22nd' and the majority of my chicken meals 'Best By' dates read 'Friday, July 23rd'. Not sure what that's about, but please be careful this doesn't happen often or I'll find some other shop that cares more about the product they're selling. This was money wasted for the week. Do better, please.<br/>

		UPDATE: I was directly in touch with 1 of the owners who did everything in their power to make things right, as well as apologize for the rare experience I had. For that, I'm changing my Google Review rating from 3 stars to 5 stars because great customer service goes a long way in my book. It says a lot about who this company is and what they are seeking to accomplish. I was also refunded the amount in total for the 7-meal plan. Without a shadow of a doubt, I will be ordering from them again. Thanks for making this right, Redefine!</p>
	</div>
</div>




<!-- Container for the "Leave a Review" header and QR code -->
<div class="qr-code">
	<h1>LEAVE US A REVIEW!</h1>
	<a href="https://www.google.com/search?gs_ssp=eJzj4tVP1zc0zEovMLZIrkgzYLRSNaiwsEy1MDZPNE9OMUk0MTQ2tTKoSDRNSjG2MEpOSwORqeZefEWpKalpmXmpCrmpiTnFAMTTFQ8&q=redefine+meals&oq=re&aqs=chrome.2.69i57j0i67j46i67i175i199j69i60l5.3029j0j7&sourceid=chrome&ie=UTF-8"><img class="center" src="https://redefinemeals.com/storage/photos/15/Resized%20Images/Review-qr-code.png"/></a> <!-- the QR code image is put inside an anchor (<a>) with the link to the google review, making the image a button -->
	<p>Click/Tap On The QR Code To Leave A Review On Our Google Page Or Use Your Smartphone's Camera To Scan It</p>
</div>
@endsection