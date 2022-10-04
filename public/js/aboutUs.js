window.addEventListener('scroll', () => {
        //console.log(pageYOffset)
        
            //Variables for 3 value cards and their background colors 
            const valuesCard1 = document.getElementById('card1')
            const valuesCard2 = document.getElementById('card2')
            const valuesCard3 = document.getElementById('card3')

            const background1 = document.getElementById('background1')
            const background2 = document.getElementById('background2')
            const background3 = document.getElementById('background3')

            //ValuesCardPlacement is the y pixel position of the first values card. This is used as the point in which value card 1 is fully on screen and should be 100% opacity
            var valuesCardPlacement = window.scrollY + valuesCard1.getBoundingClientRect().top

            //Card height is used to calculate the position of the next two cards 
            var cardHeight = valuesCard1.offsetHeight;
                
                //This is a quadradic equation that takes the y pixel position of screen and compares how far it is to the VCP, turning the difference into a percentage. This percentage is assigned to the opacity of each card and background 
                var displacement_card1 = (-.001*((pageYOffset - valuesCardPlacement)**2) + 100)
                valuesCard1.style.opacity = displacement_card1 + '%';
                background1.style.opacity = displacement_card1 + '%';

                var displacement_card2 = (-.001*((pageYOffset - (valuesCardPlacement + cardHeight))**2) + 100)
                valuesCard2.style.opacity = displacement_card2 + '%';
                background2.style.opacity = displacement_card2 + '%';


                var displacement_card3 = (-.001*((pageYOffset - (valuesCardPlacement + cardHeight*2))**2) + 100)
                valuesCard3.style.opacity = displacement_card3 + '%';
                background3.style.opacity = displacement_card3 + '%';
            

    })  