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

</style>
<div class="videoBanner" data-aos="fade-in">
	<video autoplay muted loop id="homePageVideo">
		<source src="{{url('/images/Redefine Meals - Website Loop 2022_1080 HQ V3.mp4')}}" alt="Home Video"/>
	</video>
	<div class="homeUI">
		<h1>Meals To Match Your Lifestyle</h1>
		<button class="order">ORDER</button>
		

	</div>
</div>
@endsection