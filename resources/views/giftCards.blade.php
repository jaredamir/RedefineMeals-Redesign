@extends('layouts.app')

@section('content')

<style type="text/css">
	div.landing-section{
		position: relative;
		width: 100%;
		height: 800px;
		margin-bottom: 100px;
	}

	div.landing-section > div.giftCard{
		position: absolute;
		width: 55vw;
		height: 35vw;
		left: -10%;
		top: 30%;

		background: radial-gradient(24.47% 59.71% at 77.16% 63.14%, #FFFFFF 0%, #EDEAEA 61.61%, #FFFFFF 100%);
		background-image: url("{{url('/images/Redefine_leaf_hd.jpg')}}");
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		box-shadow: 27.1875px 27.1875px 61.1719px 13.5938px rgba(0, 0, 0, 0.15), 101.953px 101.953px 101.953px 27.1875px rgba(0, 0, 0, 0.15), 6px 8px 0px rgba(137, 137, 137, 0.25);
		border-radius: 33.9844px;
	}


	div.landing-section h1{
		position: absolute;
		right: 15%;
		top: 88px;
		font-family: 'Roboto';
		font-weight: 300;
		font-size: 10vw;
		line-height: 155px;
		text-align: right;
		color: #2F4F4F;
	}
	div.landing-section > .gift_card-mobile_header{
		position: absolute;
		left: 15%;
		top: 88px;
		font-family: 'Roboto';
		font-weight: 300;
		font-size: 10vw;
		text-align: center;
		color: #2F4F4F;
		display: none;
	}

	div.landing-section h1::after{
	    content: "" ;
	    position: absolute;
	    top: 100%;
	    left: 10%;
	    width: 5vw;
	    height: 1vw;
	    background-color: darkslategrey;
	}

	div.checkout-section{
		position: relative;
		width: 100%;
		height: 100vh;
		overflow-x: hidden;
	}

	div.checkout-section > div.giftCard2{
		position: absolute;
		width: 55vw;
		height: 35vw;
		right: -10%;
		top: 15%;

		background: radial-gradient(24.47% 59.71% at 77.16% 63.14%, #FFFFFF 0%, #EDEAEA 61.61%, #FFFFFF 100%);
		background-image: url("{{url('/images/Redefine_leaf_hd.jpg')}}");
		background-size: contain;
		background-repeat: no-repeat;
		background-position: center;
		box-shadow: 27.1875px 27.1875px 61.1719px 13.5938px rgba(0, 0, 0, 0.15), 101.953px 101.953px 101.953px 27.1875px rgba(0, 0, 0, 0.15), 6.79688px 8px 0px rgba(137, 137, 137, 0.25);
		border-radius: 33.9844px;
	}


	div.checkout-section > div.checkout{
		position: absolute;
		top: 12%;
		left: 5%;
		width: 45vw;
		height: 650px;
		border: 1px solid #CCCCCC;
		border-radius: 10px;
	}

	div.checkout > div.header{
		width: 100%;
		height: 10%;
		border-bottom: 1px solid #CCCCCC;
	}

	div.checkout > div.header h3{
		font-family: "Roboto";
		font-weight: 300;
		margin: 20px 10px;
	}

	div.checkout > div.giftCard_list{
		width: 100%;
		height: 70%;
		display: flex;
		flex-direction: column;
		flex-wrap: nowrap;
		overflow-y: scroll;
		align-items: center;
		justify-content: space-evenly;
	}

	div.checkout > div.footer{
		display: flex;
		flex-wrap: nowrap;
		width: 100%;
		height: 20%;
		border-top: 1px solid #CCCCCC;
		align-items: center;
		justify-content: center;
	}
	div.checkout > div.footer button{
		width: 35vw;
		min-width: 200px;
		height: 70px;
		left: 101px;
		top: 866px;
		border: none;
		background-color: #86D172;
		border-radius: 5px;
		color: white;
		font-family: "Roboto";
		font-weight: 100;
		font-size: 30px;
	}











/*mobile view*/
@media only screen and (min-width: 1px){
	div.giftCard2{display: none;}
	div.checkout-section > div.checkout{
		width: 80%;
		left: 10%;
		top: 0%;
	}
	div.landing-section > div.giftCard{
		width: 80vw;
		height: 60vw;
		left: -12%;
		top: 35%;
		box-shadow: 27.1875px 27.1875px 61.1719px 13.5938px rgba(0, 0, 0, 0.15), 101.953px 101.953px 101.953px 27.1875px rgba(0, 0, 0, 0.15), 4px 4px 0px rgba(137, 137, 137, 0.25);
		
	}
	div.landing-section h1::after{
	    top: 80%;
	    width: 5vw;
	    height: 1vw;
	}
	div.landing-section h1{display: none;}
	div.landing-section > .gift_card-mobile_header{display: block;}
}


/*Desktop view*/
@media only screen and (min-width: 1000px){
	div.giftCard2{display: block;}
	div.checkout-section > div.checkout{
		width: 45vw;
		left: 5%;
		top: 12%;
	}
	div.landing-section > div.giftCard{
		width: 55vw;
		height: 35vw;
		left: -10%;
		top: 30%;
		box-shadow: 27.1875px 27.1875px 61.1719px 13.5938px rgba(0, 0, 0, 0.15), 101.953px 101.953px 101.953px 27.1875px rgba(0, 0, 0, 0.15), 6px 8px 0px rgba(137, 137, 137, 0.25);
		
	}
	div.landing-section h1::after{
	    top: 100%;
	    width: 5vw;
	    height: 1vw;
	}
	div.landing-section h1{display: block;}
	div.landing-section > .gift_card-mobile_header{display: none;}

}

</style>

<div class="landing-section">
	<h1 data-aos="fade-in">GIFT<br>CARDS</h1>
	<h1 class="gift_card-mobile_header" data-aos="fade-in">GIFT CARDS</h1>
	<div class="giftCard" data-aos="zoom-out"></div>
</div>

<div class="checkout-section">
	<div class="giftCard2" data-aos="fade-left"></div>
	<div class="checkout" data-aos="fade-in">
		<div class="header"><h3>Choose Amount</h3></div>
		<div class="giftCard_list"></div>
		<div class="footer"><button>ADD TO CART</button></div>
	</div>
</div>



@endsection