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
div.faq-container{
    width: 100%; 
    height: fit-content; 
    overflow: hidden; 
    position: relative;
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
	    left: 42%;
	    bottom: 30%;
	    width: 70px;
	    height: 10px;
	    background-color: darkslategrey;
}
/*Mobile*/
@media only screen and (min-width: 1px){
  div.faq-header h1{
    font-size: 14vw;
  }
  div.faq-header h1::after{
      left: 35%;
      bottom: 32%;
      width: 10vw;
      height: 7px;
  }

}

/*Tablet and Desktop*/
@media only screen and (min-width: 768px){
  div.faq-header h1{
    font-size: 7vw;
  }
  div.faq-header h1::after{
      left: 42%;
      bottom: 30%;
      width: 5vw;
      height: 10px;
  }

}
</style>
  
<div class="faq-container">
  <div class="faq-header" data-aos="fade-down">
  	<h1>FAQ</h1>
  </div>


<div class="accordion" id="faq_section" data-aos="zoom-out">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        When and where do you ship?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq_section">
      <div class="accordion-body">
        We deliver to all of Long Island, NYC and the five boroughs. We currently do not deliver East of Riverhead. We deliver four times a week on Sunday, Monday, Tuesday and Thursday and send a text verification once your package is delivered.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How can I contact you?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq_section">
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
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Our subscription feature is optional. This allows you choose the meals you want, and the frequency. You can also edit, skip, or cancel your subscription whenever you please.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Do I get a discount code if I refer a friend?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Yes! Any referrals earn you 10% off your next order! For more information <a href="https://redefinemeals.com/referrals"> click here.</a>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Do you offer nutrition guidance?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Yes, our nutritionist will work with you one-on-one to customize a meal plan based on your goals and needs. For more information<a href="https://redefinemeals.com/coaching"> click here.</a>
      </div>
    </div>
  </div>

  <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          How do I heat my meals?
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faq_section">
        <div class="accordion-body">
          Our meals come fully cooked and served in microwave safe containers for your convenience. Simply remove the lid and place it loosely over the container. We recommend heating in 30-second increments and checking the temperature. Most meals fully heat within 1:30 to 2 minutes. Before heating, remove any separate containers with cold items, such as sour cream, sauces, salsa, etc.
        </div>
      </div>
    </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Do you freeze meals?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Our meals are made with the freshest ingredients and are never frozen to ensure the highest flavor profile for our customers.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        What is the refrigerated shelf life of Redefine Meals?
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faq_section">
      <div class="accordion-body">
        All meals are labeled with an expiration date. When properly stored, refrigerated meals will last 4 to 5 days after delivery. Redefine Meals do not contain any preservatives that prolong shelf life.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        Where are your stores located?
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faq_section">
      <div class="accordion-body">
        We currently have seven Redefine store locations fully stocked with Redefine meals, products and merchandise.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
        Can I pick up meals instead of having them delivered?
      </button>
    </h2>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Yes! We offer FREE in-store pickup all seven Redefine store locations.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEleven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
        Are there any discount codes for police, fire, or 1st responders?
      </button>
    </h2>
    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Yes! Just give us a call or email us at info@redefinemeals.com and we will tag your account with a discount. Thank you for your service!
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwelve">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
        What is the average price of a meal from Redefine Meal Prep?
      </button>
    </h2>
    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Our meals currently range from $9.49 to $11.00. We offer discounts for large quantity orders.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThirteen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
        For allergen purposes, does your company make sure that there is no cross-contamination?
      </button>
    </h2>
    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#faq_section">
      <div class="accordion-body">
        Yes. We follow strict practices to ensure there is no cross-contamination.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFourteen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
        How do I get my gym to become a pick-up location for free delivery?
      </button>
    </h2>
    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#faq_section">
      <div class="accordion-body">
        We are always looking for new gym partners. Email us at info@redefinemeals.com and we will work with you to get the location setup.
      </div>
    </div>
  </div>


</div>
</div>



@endsection