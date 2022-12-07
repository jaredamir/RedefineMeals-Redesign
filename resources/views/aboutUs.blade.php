@extends('layouts.app')

@section('content')
<style type="text/css">

div.about_us-container{
    width: 100%; 
    height: fit-content; 
    overflow: hidden; 
    position: relative;
}

div.whitespace{
    display: block;
    width: 100%;
    height: 200px;
}
/*About Us Container*/
div.about_us-header{
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

div.about_us-header h1::after{
    content: "" ;
    position: absolute;
    left: 30%;
    bottom: 30%;
    width: 5vw;
    height: 1vh;
    background-color: darkslategrey;
}

div.about_us-header h1{
    text-align: center;
    font-weight: 100;
    font-family: 'Roboto';
    font-size: 7vw;
}

div.about_us{
    display: inline-flex;
    justify-content: space-evenly;
    align-items: center;
    flex-direction: row;
    flex-wrap: nowrap;
    width: 100%;
    height: fit-content;
    position: relative;
    margin-bottom: 50px;
    margin-right: 0px;
}

div.about_us img{
    width: auto;
    height: 45vh;
    min-height: 400px;
    min-width: 230px;
    border-radius: 5px;
}

div.about_us-caption{
    position: relative;
    width: 50%;
    height: 100%;
    padding: 50px 50px;
}

i.about_us-accent{
    position: absolute;
    top: 50%;
    left: 0px;
    height: 10%;
    width: 1%;
    background-color: darkslategrey;
}


div.about_us-caption h3{
    font-family: 'Roboto';
    font-weight: 300;
    font-size: 3vw;
}

div.about_us-caption h2{
    font-family: 'Roboto';
    font-weight: 100;
    font-size: 4vw;
}


/* Values */
div.value_card{
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    width: 100%;
    height: 70vh;
    padding: 10px 30px;
}

div.values_card-background{
    display: block;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: -1;
    opacity: 0%;
}

div.value_card h1{
    font-family: 'Roboto', sans-serif;
    font-weight: 100;
    font-size: 11vw;
    color: darkslategray;
    position: relative;
    margin-top: 15%;
    margin-bottom: 30px;
}
div.value_card h3{
    font-family: 'Roboto';
    text-align: center;
   
    font-size: 3vw;
    font-weight: 100;
}

div.page-header h1{
    text-align: center;
    font-weight: 100;
    font-family: 'Roboto';
    font-weight: 100;
    font-size: 9vw;
}


strong{
    color: darkcyan;
}

.about_us-caption strong{
    color: #76BE48;
    font-weight: bold;
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

@keyframes arrow-down-animation{
    0%{
        transform: translateY(0px) rotate(45deg);  
    }
    100%{
        transform: translateY(10px) rotate(45deg);
    }
}

div.heading{
    height: fit-content;
    width: 100%;
    padding: 50px 20px;
    background-image: url("https://redefinemeals.com/storage/photos/15/Redefine_background_colorTinted.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
    background-position: center center;
    margin-bottom: 40px;

    box-shadow: 0px 9px 20px 0px rgba(0, 0, 0, 0.15);
}

div.heading h1{
    font-size: 10vw;
    color: darkslategray;
    font-family: 'Roboto', sans-serif;
    text-align: center;
    font-weight: 100;
} 

/*Mobile View*/
@media only screen and (min-width: 1px){
    div.value_card h1{
        font-size: 15vw;
    }

    div.value_card h3{
        font-size: 30px;
    }
    div.about_us-header h1{
        font-size: 11vw;
    }
    div.about_us-header{
        height: 30vh;
    }

    div.about_us-caption h3{
        font-size: 3vw;
        text-align: center;
    }

    div.about_us-caption h2{
        font-size: 5vw;
        text-align: center;
    }

    div.about_us img{
        width: auto;
        height: 45vh;
    }
    div.about_us-header h1::after{
        left: 20%;
        width: 9vw;
        height: 1vh;
    }
    i.about_us-accent{
        left: 10px;
        width: 1.5%;
    }
    div.about_us{
        flex-wrap: wrap;
    }
    div.about_us-caption{
        padding: 40px 20px;
        width: 70%;
    }
    div.about_us-caption h3{
        font-size: 20px;
    }
    i.about_us-accent{
        left: -5px;
    }
}

/*Tablet and Desktop View*/
@media only screen and (min-width: 768px){
    div.value_card h1{
        font-size: 11vw;
    }
    div.value_card h3{
        font-size: 3vw;
    }
    div.about_us-header h1{
        font-size: 7vw;
    }

    div.about_us-header{
        height: 40vh;
    }

    div.about_us-caption h3{
        font-size: 3vw;
        text-align: left;
    }

    div.about_us-caption h2{
        font-size: 4vw;
        text-align: left;
    }
    div.about_us img{
        width: 35vw;
        height: auto;
    }
    div.about_us-header h1::after{
        left: 30%;
        width: 5vw;
        height: 1.2vh;
    }
    i.about_us-accent{
        left: 0px;
        width: 1%;
    }
    div.about_us{
        flex-wrap: nowrap;
    }
    div.about_us-caption{
        padding: 50px 50px;
        width: 50%;
    }
    div.about_us-caption h3{
        font-size: 3vw;
    }
    i.about_us-accent{
        left: 0px;
    }

}
</style>









<div class="about_us-container">
    <div class="about_us-header" data-aos="fade-down">
        <h1>ABOUT US</h1>
    </div>


    <div class="about_us">
        <img src="{{url('/images/Redefine_shirt-vertical.jpg')}}" data-aos="fade-right">
        <div class="about_us-caption" data-aos="fade-left"><h2>OUR STORY</h2><br><h3>Redefine Meals was founded in 2016 by Matthew Riss and Mark Ciaburri who together had one goal in mind, to provide <strong>easy access to healthy food</strong> through meal prep</h3>
            <i class="about_us-accent"></i>
        </div>
    </div>

    <div class="about_us" style="flex-wrap: wrap-reverse; margin-bottom: 200px;">    
        <div class="about_us-caption" data-aos="fade-right"><h3>At Redefine Meals, we believe that fueling potential starts with what we put in our bodies. That is why we developed a menu of over <strong>65 balanced, nutrient dense meals</strong> to make eating healthy easy. We take all the preparation out of eating healthy delicious food, so you have time to get to where you're going</h3>
            <i class="about_us-accent"></i>
        </div>
        <img src="{{url('/images/RedefineMeals_Apr22-3545.jpg')}}" data-aos="zoom-out">
    </div>



        <div class="page-header" data-aos="fade-in">
            <h1>OUR VALUES<br><i class="arrow-down"></i></h1>
        </div>

        <div class="value_card" id="card1">
            <h1>HEALTHY</h1>
            <h3>Our food is made <strong>Fresh</strong> 100% of the time, using <strong>Simple Whole Ingredients</strong> that keep your body and mind moving positively throughout the day</h3>
            <i class="arrow-down"></i>
        </div>
        <div class="value_card" id="card2">    
            <h1 style="color:white">CONVENIENT</h1>
            <h3 style="color:white">Diet plays a major part in living a <strong style="color:#cbe8bc">Happy and Healthy life,</strong> and we make that <strong style="color:#cbe8bc">Easy</strong> by cooking for you, how you want, when you want</h3>
            <i class="arrow-down" style="border-color: white;"></i>
        </div>
        <div class="value_card" id="card3">    
            <h1>INNOVATIVE</h1>
            <h3>We aren't afraid to <strong>Try New Things!</strong> Our menu lineup always features popular food favorites Reinvented to satisfy your tastebuds <strong>Without Sacraficing Your Health Goals</strong></h3>
        </div> 

        
        <div class="whitespace"></div>


    <div class="values_card-background" id="card1-background" style="background-color: #cbe8bc"></div>
    <div class="values_card-background" id="card2-background" style="background-color: darkslategrey;"></div>
    <div class="values_card-background" id="card3-background" style="background-color: #f2eee2;"></div>
</div>


<!--<script src="{{url('js/aboutUs.js')}}"></script>-->
<script type="text/javascript">
    //takes in the card name and the desired rate as a parameter
    class ValueCard{
            constructor(card_name, rate){
                //the rate is how fast the card fades in and out. The best rate for standard screens is .001
                this.rate = rate
                this.card = document.getElementById(card_name)
                this.background = document.getElementById(card_name + '-background')
                //placement is the Y position of the card element on the page 
                this.placement = window.scrollY + this.card.getBoundingClientRect().top
            };
            scrollEffect(){
                //uses a negative quadratic equation to change the opacity of the card, reaching 100% (vertex) when in centered view
                let displacement = (-this.rate*((pageYOffset - this.placement)**2) + 100)
                this.card.style.opacity = displacement + '%'
                this.background.style.opacity = displacement + '%'
            }

        }
        
        
    window.addEventListener('scroll', () => {
        //each card is instantiated here (it is placed in the event function so that the placement is updated on window resize)

        //while the rate can be customzied invidially, it was set to .001 so each card has a the same rate since they are all the same height on this page
        set_rate = .001

        let card1 = new ValueCard('card1', set_rate)
        let card2 = new ValueCard('card2', set_rate)
        let card3 = new ValueCard('card3', set_rate)

        //each card's method is called here
        card1.scrollEffect()
        card2.scrollEffect()
        card3.scrollEffect()
            
    })  
</script>



@endsection

