<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Litcan Gabriel PFA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
        {{-- CSS --}}
        <link href="{{ asset('css/stylee.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/btn_style.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/typewriter.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/servicii.css') }}" rel="stylesheet" type="text/css" >

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    
    <body>
   
    @include('navbar')

        {{-- START OF BANNER --}}
        <div class="banner">
            <div class="container">
              <div class="banner-text">
                <div class="banner-heading">
                  Afacerea ta online
                </div>
                
                <div class="typering">
                  <p>
                    Ai nevoie de un <br class="mobile-break"><span class="typed-text" style="font-weight: 900;"></span>
                                    <span class="cursor">&nbsp;</span>
                  </p>
                </div>
                
                <div class="text-box">
                  <a href="#contact" class="btn btn-white btn-animate button-glow">Contacteaza-ma!</a>
                </div>
              
              </div>
            </div>
        </div>
        
       
        <section id="home">
          <div class="container">
              <h1 class="mb-0" style="text-align: center;">
                  Web Design & Development.
              </h1>

              <h2 style="color:#ec4135; text-align: center; ">
                {{-- Planificare, Dezvoltare si Lansare împreună! --}}
                Planificare. Dezvoltare. Lansare.<br>
              </h2>


          </div>

        </section>
        {{-- END OF BANNER --}}
        

        {{-- SKEWED BOX --}}
        <section class="skewedBox">

          <img src="{{ asset('css/red_line.png')}}" alt="" class="img-fluid line1">
          <img src="{{ asset('css/gray_line.png')}}" alt="" class="img-fluid line2">


        @include('servicii')

        </section>
        {{-- END OF SKEWED BOX --}}

        {{-- TEHNOLOGII FOLOSITE --}}
        <section class="skills">

          <div class="row">
              <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
                <h1 class="heading-secondary--main text-center">
                  Tehnologii folosite
                </h1>
              </div>
          </div>
            

          <div class="row">
            {{-- HTML LOGO --}}
            <div class="col-4 col-md-1 offset-md-3" style="padding-top: 20px;">
              <img src="{{ asset('css/html.png')}}" class="img-fluid" >
            </div>

            {{-- CSS LOGO --}}
            <div class="col-4 col-md-1 "  style="padding-top: 20px;">
              <img src="{{ asset('css/css4.png')}}" class="img-fluid">
            </div>

            {{-- JS LOGO --}}
            <div class="col-4 col-md-1 "  style="padding-top: 20px;">
              <img src="https://robertthedude.com/images/javascript_logo.png" class="img-fluid" />
            </div>

             {{-- BOOTSTRAP LOGO --}}
            <div class="col-4 col-md-1 "  style="padding-top: 20px;">
              <img src="{{ asset('css/bootstrap.png')}}" class="img-fluid" >
            </div>
         
              {{-- LARAVEL LOGO --}}
            <div class="col-4 col-md-1 "  style="padding-top: 20px;">
              <img src="{{ asset('css/laravel.png')}}" class="img-fluid" >
            </div>

            {{-- WORDPRESS LOGO --}}
            <div class="col-4 col-md-1"  style="padding-top: 20px;">
              <img src="{{ asset('css/wp.png')}}" class="img-fluid">
            </div>

         

           
          </div>

          



        </section>

        {{-- END OF TEHNOLOGII FOLOSITE --}}

        {{-- CONTACT --}}
        <section id="contact">
   
          {{-- CONTACT FORM --}}
          @include('contact-us')
          {{-- END OF CONTACT FORM --}}


          {{-- GOOGLE MAPS --}}
          <div>
            <div style="border-top: 50px solid #ec4135; 
            border-bottom: 50px solid #ec4135;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
            ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11391.198409308774!2d26.32904909256187!3d44.457780281449864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fab235149e5b%3A0xba03748db8451a74!2zQnLEg25lyJl0aQ!5e0!3m2!1sen!2sro!4v1607551937635!5m2!1sen!2sro" 
                        width="100%" 
                        height="500" 
                        frameborder="0" 
                        style="border:0; "
                        allowfullscreen="" 
                        aria-hidden="false" 
                        tabindex="0">
                </iframe>
            </div>
          </div>
          {{-- END OF GOOGLE MAPS --}}

        </section>
        {{-- END OF CONTACT --}}


        

        {{-- ABOUT --}}

       <section id="about">

          <div class="row">
            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 mt-4">
              <h1 style="text-align:center;">
                Despre mine  
              </h1>    
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-4 offset-lg-4 mt-2">
              <p style="text-align: center">
                "If your dreams don't scare you, they are not big enough."
              </p>
            </div>
          </div>
    
          <div class="row align-items-center" style="justify-content: center;">
            <div class="col-md-4 col-lg-3">
              <img src="{{ asset('css/me.jpeg')}}" alt="" class="img-fluid align-self-center" style="border-radius: 50%;">
            </div>    
            
            <div class="col-md-6 col-lg-4 offset-lg-1" style="margin-top: 2em; text-align:center;">
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6IzRDQUY1MDsiIGQ9Ik0yNTYuMDY0LDBoLTAuMTI4bDAsMEMxMTQuNzg0LDAsMCwxMTQuODE2LDAsMjU2YzAsNTYsMTguMDQ4LDEwNy45MDQsNDguNzM2LDE1MC4wNDhsLTMxLjkwNCw5NS4xMDQNCglsOTguNC0zMS40NTZDMTU1LjcxMiw0OTYuNTEyLDIwNCw1MTIsMjU2LjA2NCw1MTJDMzk3LjIxNiw1MTIsNTEyLDM5Ny4xNTIsNTEyLDI1NlMzOTcuMjE2LDAsMjU2LjA2NCwweiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZBRkFGQTsiIGQ9Ik00MDUuMDI0LDM2MS41MDRjLTYuMTc2LDE3LjQ0LTMwLjY4OCwzMS45MDQtNTAuMjQsMzYuMTI4Yy0xMy4zNzYsMi44NDgtMzAuODQ4LDUuMTItODkuNjY0LTE5LjI2NA0KCUMxODkuODg4LDM0Ny4yLDE0MS40NCwyNzAuNzUyLDEzNy42NjQsMjY1Ljc5MmMtMy42MTYtNC45Ni0zMC40LTQwLjQ4LTMwLjQtNzcuMjE2czE4LjY1Ni01NC42MjQsMjYuMTc2LTYyLjMwNA0KCWM2LjE3Ni02LjMwNCwxNi4zODQtOS4xODQsMjYuMTc2LTkuMTg0YzMuMTY4LDAsNi4wMTYsMC4xNiw4LjU3NiwwLjI4OGM3LjUyLDAuMzIsMTEuMjk2LDAuNzY4LDE2LjI1NiwxMi42NA0KCWM2LjE3NiwxNC44OCwyMS4yMTYsNTEuNjE2LDIzLjAwOCw1NS4zOTJjMS44MjQsMy43NzYsMy42NDgsOC44OTYsMS4wODgsMTMuODU2Yy0yLjQsNS4xMi00LjUxMiw3LjM5Mi04LjI4OCwxMS43NDQNCgljLTMuNzc2LDQuMzUyLTcuMzYsNy42OC0xMS4xMzYsMTIuMzUyYy0zLjQ1Niw0LjA2NC03LjM2LDguNDE2LTMuMDA4LDE1LjkzNmM0LjM1Miw3LjM2LDE5LjM5MiwzMS45MDQsNDEuNTM2LDUxLjYxNg0KCWMyOC41NzYsMjUuNDQsNTEuNzQ0LDMzLjU2OCw2MC4wMzIsMzcuMDI0YzYuMTc2LDIuNTYsMTMuNTM2LDEuOTUyLDE4LjA0OC0yLjg0OGM1LjcyOC02LjE3NiwxMi44LTE2LjQxNiwyMC0yNi40OTYNCgljNS4xMi03LjIzMiwxMS41ODQtOC4xMjgsMTguMzY4LTUuNTY4YzYuOTEyLDIuNCw0My40ODgsMjAuNDgsNTEuMDA4LDI0LjIyNGM3LjUyLDMuNzc2LDEyLjQ4LDUuNTY4LDE0LjMwNCw4LjczNg0KCUM0MTEuMiwzMjkuMTUyLDQxMS4yLDM0NC4wMzIsNDA1LjAyNCwzNjEuNTA0eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" class="img-fluid" style="width: 10%;"/>

              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDExMi4xOTYgMTEyLjE5NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTEyLjE5NiAxMTIuMTk2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMzQjU5OTg7IiBjeD0iNTYuMDk4IiBjeT0iNTYuMDk4IiByPSI1Ni4wOTgiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTcwLjIwMSw1OC4yOTRoLTEwLjAxdjM2LjY3Mkg0NS4wMjVWNTguMjk0aC03LjIxM1Y0NS40MDZoNy4yMTN2LTguMzQNCgkJYzAtNS45NjQsMi44MzMtMTUuMzAzLDE1LjMwMS0xNS4zMDNMNzEuNTYsMjEuODF2MTIuNTFoLTguMTUxYy0xLjMzNywwLTMuMjE3LDAuNjY4LTMuMjE3LDMuNTEzdjcuNTg1aDExLjMzNEw3MC4yMDEsNTguMjk0eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" class="img-fluid" style="width: 10%;"/>
              <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDExMi4xOTYgMTEyLjE5NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTEyLjE5NiAxMTIuMTk2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMDdBQjk7IiBjeD0iNTYuMDk4IiBjeT0iNTYuMDk3IiByPSI1Ni4wOTgiLz4NCgk8Zz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6I0YxRjJGMjsiIGQ9Ik04OS42MTYsNjAuNjExdjIzLjEyOEg3Ni4yMDdWNjIuMTYxYzAtNS40MTgtMS45MzYtOS4xMTgtNi43OTEtOS4xMTgNCgkJCWMtMy43MDUsMC01LjkwNiwyLjQ5MS02Ljg3OCw0LjkwM2MtMC4zNTMsMC44NjItMC40NDQsMi4wNTktMC40NDQsMy4yNjh2MjIuNTI0SDQ4LjY4NGMwLDAsMC4xOC0zNi41NDYsMC00MC4zMjloMTMuNDExdjUuNzE1DQoJCQljLTAuMDI3LDAuMDQ1LTAuMDY1LDAuMDg5LTAuMDg5LDAuMTMyaDAuMDg5di0wLjEzMmMxLjc4Mi0yLjc0Miw0Ljk2LTYuNjYyLDEyLjA4NS02LjY2Mg0KCQkJQzgzLjAwMiw0Mi40NjIsODkuNjE2LDQ4LjIyNiw4OS42MTYsNjAuNjExTDg5LjYxNiw2MC42MTF6IE0zNC42NTYsMjMuOTY5Yy00LjU4NywwLTcuNTg4LDMuMDExLTcuNTg4LDYuOTY3DQoJCQljMCwzLjg3MiwyLjkxNCw2Ljk3LDcuNDEyLDYuOTdoMC4wODdjNC42NzcsMCw3LjU4NS0zLjA5OCw3LjU4NS02Ljk3QzQyLjA2MywyNi45OCwzOS4yNDQsMjMuOTY5LDM0LjY1NiwyMy45NjlMMzQuNjU2LDIzLjk2OXoNCgkJCSBNMjcuODY1LDgzLjczOUg0MS4yN1Y0My40MDlIMjcuODY1VjgzLjczOXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" class="img-fluid" width="10%;"/>

              <p style="margin-top: 1em;">
                Numele meu este Litcan Nicolae-Gabriel, studiez Computer Science & Electronic Engineering la University of Essex din Marea Britanie. Sunt absolvent al Liceului Teoretic "Alexandru Ioan Cuza" din Bucuresti, specializarea Matematica-Informatica.
              </p>
            </div>
          </div>    


         
       </section>
        {{-- END OF ABOUT --}}
         
        <div class="parallax"></div>
        
        @include('footer')

     

     

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
          <script type="text/javascript" src="{{ URL::asset('js/typewriter.js') }}"></script>


    </body>
</html>
