@extends('layouts.app')

@section('content')
<style type="text/css">
    div.test_home{
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    div.test_home video{
        height: 100%;
        width: auto;
    }



</style>
  
<div class="test_home">
    <video autoplay muted loop id="homePageVideo" playsinline type='video/mp4'>
        <source src="{{url('/images/Redefine Meals - Website Loop 2022_1080 HQ V3.mp4')}}" alt="Home Video"/>
    </video>
</div>

@endsection
