@extends('layouts.app')

@section('content')
<style type="text/css">
  div.nutrition-header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    width: 100%;
    height: 40vh;
    min-height: 200px;
    margin-bottom: 50px;


    background-image: url("https://redefinemeals.com/storage/photos/15/Redefine_background_colorTinted.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
    background-position: center center;

    box-shadow: 0px 9px 20px 0px rgba(0, 0, 0, 0.15);
  }
  div.nutrition-header h1{
      text-align: center;
      font-weight: 100;
      font-family: 'Roboto';
      font-size: 7vw;
  }

  div.nutrition_container{
    position: relative;
    width: 100vw;
    margin: 60px 0px;
    height: fit-content;
  }
  div.nutrition_section{
    position: absolute;
    width: 100vw;
    height: fit-content;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-evenly;
    align-items: center;
    top: 0px;
    left: 0px;
    transition: opacity .5s;
  }
  
  div.nutrition_section img{
    width: 30%;
    height: auto;
  }

  div.nutrition_section > div.nutrition_body{
    width: 50%;
    height: 43vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  div.nutrition_body > div.nutrition_header{
    width: 100%;
    height: 15%;
  }

  div.nutrition_body h1{
    font-weight: 100;
    font-family: 'Roboto';
    font-size: 3.5vw;
    text-align: left;
  }
  div.nutrition_body > div.nutrition_bio{
    height: calc(100% - 15% - 20%);
    width: 100%;
  }

  div.nutrition_bio h2{
    font-weight: 300;
    font-family: 'Roboto';
    font-size: 1vw;
    text-align: left;
  }
  div.nutrition_bio a{
    color: #39A3C5;
  }

  div.nutrition_body > div.nutrition_footer{
      width: 100%;
      height: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  div.nutrition_footer button{
      background: transparent;
      background-color: rgb(132, 209, 114, 1);
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
    }

  div.indicators{
    width: fit-content;
    height: fit-content;
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    margin: 25px 0px;
  }

  div.indicators > div.indicator{
    width: 50px;
    height: 5px;
    margin: 0px 5px;

  }

  .active{
    background-color: rgb(132, 209, 114, 1);
  }

  .inactive{
    background-color: lightgrey;
  }

  .primary{
    opacity: 100%;
  }

  svg.next{
    width: 3vw;
    height: 3vw;
    border-right: 2px solid grey;
    border-top: 2px solid grey;
    transform: rotate(45deg);
    position: absolute;
    right: 40px;
    top: 50%;
    cursor: pointer;
  }

  svg.line_divider{
    position: relative;
    width: 90%;
    height: 1px;
    border-bottom: 1px solid lightgray;
    margin: 20px 50%;
    transform: translateX(-50%);
  }

  /*mobile and tablet*/
  @media only screen and (min-width: 1px){
    div.nutrition_section{
      flex-direction: column;
    }
  }


  /*Desktop*/
  @media only screen and (min-width: 768px){
    div.nutrition_section{
      flex-direction: row;
    }
  }



</style>
<div class="nutrition-header" data-aos="fade-down">
  <h1>NUTRITION COACHING</h1>
</div>

<!--<svg class="line_divider"></svg>-->
<div class="nutrition_container" data-aos="fade-in">
  <div class="nutrition_section" id="Ashley" style="opacity: 0%;">
    <svg class="next" onclick="next()"></svg>
    <img src="{{url('/images/DANIELRO-PHOTOS-GENA-47.jpeg')}}">
    <div class="nutrition_body" style="justify-content: space-between;">
      <h1>Ashley Vadasz</h1>
      <div class="nutrition_bio">
        <h2>Ashley Vadasz is a Marine Corps Veteran and private practice Registered Dietitian/Nutritionist (RDN) specializing in sports and performance nutrition. Ashley is passionate about fueling athletes and individuals trying to take control of their health. She believes that food and movement truly are medicine-they should be enjoyed and cherished. Ashley takes a holistic and functional approach or “whole systems approach” to create personalized nutrition care plans for her clients.  She believes food and movement represent nourishment, culture and connection, and ultimately longevity. She teaches her clients how navigate the confusing world of nutrition to fuel for optimal health and performance. Ashley earned her undergraduate degree in Nutrition and Dietetics from Long Island University and is currently finishing her master’s degree at Stony Brook University in Integrative and Functional Nutrition. Ashley resides in Port Jefferson and when she is not working with her clients, she loves spending time being active outdoors. </h2>
        
      </div>
      <div class="nutrition_footer">
          <button>ADD TO CART</button>

          <div class="indicators">
            <div class="indicator inactive"></div>
            <div class="indicator active"></div>
          </div>
        </div>
    </div>
  </div>

  <div class="nutrition_section" id="Gena">
    <svg class="next" onclick="next()"></svg>
    <img src="{{url('/images/DANIELRO-PHOTOS-GENA-47.jpeg')}}">
    <div class="nutrition_body">
      <div class="nutrition_header"><h1>Eugenia & Gena Bradshaw</h1></div>
      <div class="nutrition_bio">
        <h2>Eugenia Bradshaw, Co-Founder of Bradshaw Personal Fitness has been in the health and fitness industry for over 35 years and is the Head Coach for Boys Track and Field at Holy Trinity High School. She works with the general population and athletic clientele to help them achieve their performance, nutrition, and excellence goals. As a mother of five who has a love for cooking nourishing meals, she can guide other mothers to do the same. She is coaching and guiding you towards healthy lifestyle habits and changes to optimize your health and life. She loves the dedication from Redefine Meals to help others make better food choices, made ready for you, and tasty. Our simple holistic approach to food and wellness drew her to work with Redefine Meals and help others make better habits and choices. What you can expect in your nutrition consultation with Eugenia: review eating habits and food choices, what your goals are, realistic food choices and meals, navigate the Redefine Meals menu, what would work best for you, nutritional habits, and what action to take moving forward. You can find her at <a href="https://bpfit.com/">www.bpfit.com</a> and <a href="https://www.instagram.com/bpfitcoaching/?hl=en">@bpfitcoaching</a>.<br><br>  

  Gena Bradshaw, Author of "A Survivors Story," Coach at Bradshaw Personal Fitness, and Founder of Holistic Human Performance has been in the health, fitness, and wellness industry for over a decade. She is a two-time cancer survivor that is here to help others understand the power they hold when it comes to their health and wellbeing. She combines the Human Energy System and Human Anatomy and Physiology System to promote ultimate health and wellness. She works with the general population and athletic clientele. She loves the dedication from Redefine Meals to help others make better food choices, made ready for you, and tasty. Our simple holistic approach to food and wellness drew her to work with Redefine Meals and help others make better eating habits and choices. What you can expect in your nutrition consultation with Gena: review eating habits and food choices, what your goals are, realistic food choices and meals, navigate the Redefine Meals menu, what would work best for you, nutritional habits, and what action to take moving forward. You can find her at <a href="https://www.holistichumanperformance.co/">www.holistichumanperformance.co</a> and @gensbshaw.</h2>
        
      </div>
      <div class="nutrition_footer">
          <button>ADD TO CART</button>
          <div class="indicators">
            <div class="indicator active"></div>
            <div class="indicator inactive"></div>
          </div>
        </div>
    </div>
  </div>

</div>

<script type="text/javascript">
  class Coach{
    constructor(coach){
      this.coach = coach
    }
    show_coach(){
      this.coach.style.opacity = "100%"
      this.coach.style.zIndex = "1"
    }
    hide_coach(){
      this.coach.style.opacity = "0%"
      this.coach.style.zIndex = "0"
    }
  }
  const gena = new Coach(document.getElementById("Gena"))
  const ashley = new Coach(document.getElementById("Ashley"))

  const coaches = [gena, ashley]

  active_coach_index = 0

  function next(){
    if(active_coach_index == coaches.length - 1){
      active_coach_index = 0
    }else{
      active_coach_index += 1
    }
    coaches[active_coach_index].show_coach()
    

    for(let i=0; i < coaches.length; i++){
      if(i == active_coach_index){
        continue 
      }else{
        coaches[i].hide_coach()
      }
    }
  }
</script>
@endsection