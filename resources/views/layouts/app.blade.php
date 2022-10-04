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

        <!--Redefine Custom CSS Import-->
        <link rel="stylesheet" href="/Users/jaredhoke/Desktop/ReDefine Website/Website/templates/RedefineCSS.css" />

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
        <style>
           body{
            margin: 0px 0px;
           }

           .navbar{
            position: absolute;  
            top: 0px;
            left: 0px;
            display: flex; 
            justify-content: space-evenly;
            align-items: center;
            margin: 0px 0px;
            flex-wrap: nowrap;
            width: 100%;
            height: 100px;
            z-index: 1;
           }

           .navbar a{
            color: darkslategrey;
            font-size: 20px;
            font-family: 'Roboto';
            font-weight: 300;
            text-decoration: none;
            z-index: 1;
            
           }

           .navbar a:hover{
            transform: scale(1.1);
           }

           button.navbar-dropdown{
            position: absolute;
            top: 30px;
            left: 30px;
            background: none;
            border: none;
            width: 50px;
            height: 50px;
            z-index: 2;
           }

           button.navbar-dropdown svg{
            width: 100%;
            height: auto;
           }
        @media only screen and (min-width: 1px){
            .navbar{
            flex-direction: column;
            width: 100px;
            height: 100%;
            display: none;
           }
           button.navbar-dropdown{display: block;}
        }
        @media only screen and (min-width: 762px){
           .navbar{
            flex-direction: row;
            width: 100%;
            height: 100px;
            display: flex;
           }
           button.navbar-dropdown{display: none;}
       }
        </style>

    </head>
    <body>

            <button class="navbar-dropdown" onclick="dropdown()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg></button>

            <div class="navbar" id="nav1">
                <a href="/">Home</a>
                <a href="/menu">Menu</a>
                <a href="/testimonials">Reviews</a>
                <a href="/aboutus">About Us</a>
                <a href="/giftcards">Gift Cards</a>
                <a href="/meettheteam">MTT</a>
                <a href="/faq">FAQ</a>
            </div>
            
            @yield('content')

    <script src="{{url('js/navbar.js')}}"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 1000
    });
  </script>

  <script type="text/javascript">
      const nav1 = document.getElementById('nav1')
      const dropdown_button = document.getElementByClassName('navbar-dropdown')

      function dropdown(){
        if(nav1.style.display == 'none'){
            nav1.style.display = 'flex'
        }else{
            nav1.style.display = 'none'
        }
      }


  </script>
    </body>


</html>
