<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Redefine Meals</title>

        <!--Bootstrap CSS Import -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--AOS CSS Import-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!--Media Detection -->
        <meta name="viewport" content="width=device-width, inital-scale=1"/>

        <!--Google Fonts Import-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
        <!-- Leaflet for Interactive Map -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>

        <style>
           body{
            margin: 0px 0px;
           }

           div.site_header{
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

            div.site_header h1{
                font-size: 10vw;
                color: darkslategray;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                text-align: center;

            } 

            div.site_header p{
                font-size: 20;
                text-align: center;
                color: grey;
                font-family: 'Roboto', sans-serif;
                font-weight: 300;
                margin-bottom: 10px;
            }

           .navbar{ 
            position: absolute;
            top: 0px;
            left: 0px;
            align-items: flex-start; 
            justify-content: space-between;
            display: flex; 
            flex-direction: row;
            flex-wrap: nowrap;
            width: 100%;
            height:fit-content;
            z-index: 1;
            padding: 10px 20px;
           }

           .menu{ 
            position: relative;
            align-items: center;
            justify-content: space-evenly;
            display: flex; 
            flex-direction: column;
            flex-wrap: nowrap;
            width: 100%;
            height: fit-content;
            z-index: 1;
            padding: 10px 20px;
           }

           .menu a{
            color: darkslategrey;
            font-size: 25px;
            font-family: 'Roboto';
            font-weight: 100;
            text-decoration: none;
            margin: 20px;
            transition: all ease .1s;
            border-bottom: 0px solid darkslategrey;
           }
           

           .menu a:hover{
            transform: scale(1.1);
            color: #74B84F;
            border-bottom: .5px solid darkslategrey;;
           }

           button.navbar-dropdown{
            position: relative;
            background: none;
            border: none;
            width: 50px;
            height: 50px;
            z-index: 2;
            outline: none;
           }

           button.navbar-dropdown svg{
            width: 40px;
            height: auto;
            fill: darkslategrey;
           }
        @media only screen and (min-width: 1px){
            
        }
        @media only screen and (min-width: 762px){
           
        }
        </style>

    </head>
    <body>
        <div class="navbar">
            <button class="navbar-dropdown" data-bs-toggle="offcanvas" data-bs-target="#navoffcanvas" aria-controls="navoffcanvas"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg></button>

        </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="navoffcanvas" aria-labelledby="navoffcanvasLabel">
              <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div class="menu" id="nav1">
                    <a href="/">Home</a>
                    <a href="/testimonials">Reviews</a>
                    <a href="/aboutus">About Us</a>
                    <a href="/giftcards">Gift Cards</a>
                    <a href="/meettheteam">MTT</a>
                    <a href="/faq">FAQ</a>
                    <a href="/stores">Stores</a>
                    <a href="/coaching">Coach</a>
                </div>
              </div>
            </div>

            <noscript>Please Enable Javascript In Your Browser To View This Page</noscript>
            @yield('content')

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 1000
    });
  </script>

    </body>


</html>
