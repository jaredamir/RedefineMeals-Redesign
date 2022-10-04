@extends('layouts.app')

@section('content')
<style type="text/css">
	div.faq-header{
	    display: flex;
	    flex-direction: column;
	    justify-content: center;
	    position: relative;
	    width: 100%;
	    height: 50%;
	    padding: 90px 0px;
}

	div.faq-header h1{
	    text-align: center;
	    font-weight: 100;
	    font-family: 'Roboto';
	    font-weight: 100;
	    font-size: 7vw;
}
	div.faq-header h1::after{
	    content: "" ;
	    position: absolute;
	    left: 40%;
	    bottom: 30%;
	    width: 70px;
	    height: 10px;
	    background-color: darkslategrey;
}
</style>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<div id="app">
  

  <div class="faq-header" data-aos="fade-down">
  	<h1>FAQ</h1>
  </div>
  


</div>
<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!'
      }
    }
  }).mount('#app')
</script>
<!--
<div class="accordion" id="accordionExample" data-aos="zoom-out">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        When and where do you ship?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        We deliver to all of Long Island, NYC and the five boroughs. We currently do not deliver East of Riverhead. We deliver four times a week
on Sunday, Monday, Tuesday and Thursday and send a text verification
once your package is delivered.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How can I contact you?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Customer service phone is 631-800-8199, or email: info@redefinemeals.com
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Is Redefine Meals subscription based?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Our subscription feature is optional. This allows you choose the meals you want, and the frequency. You can also edit, skip, or cancel your subscription whenever you please.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Is Redefine Meals subscription based?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Our subscription feature is optional. This allows you choose the meals you want, and the frequency. You can also edit, skip, or cancel your subscription whenever you please.
      </div>
    </div>
  </div>

</div>
-->



@endsection