<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets1/css/fontawesome.css">
    <link rel="stylesheet" href="../assets1/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="../assets1/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
  
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
         <img src="urnd.jpg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
              
            
                <li class="nav-item">                       
              
             
              @if (Route::has('login'))
                                <div class="hidden fixed top-50 right-0  sm:block ">
                            @auth
                            <li class="nav-item">  
                            <x-app-layout>

                            </x-app-layout></li>  
                            </li>
                             @else
              <li class="nav-item">           <a href="{{ route('login') }}" class="nav-link">Log in</a>  </li>  

                        @if (Route::has('register'))
                        <li class="nav-item">        <a href="{{ route('register') }}" class="nav-link">Register</a></li>  
                        @endif
                    @endauth
                </div>
            @endif
            </ul> </li>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                
                  <h4>UNITEN R&D Sdn Bhd (URND)</h4>
                
                
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                
                  <h4>UNITEN R&D Sdn Bhd (URND) </h4>
                 
                
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  
                  <h4>UNITEN R&D Sdn Bhd (URND) </h4>
                 
                
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

  
    </div>


    <!-- Footer Starts Here -->
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>URND
            
            </a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor1/jquery/jquery.min.js"></script>
    <script src="../vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets1/js/custom.js"></script>
    <script src="../assets1/js/owl.js"></script>
    <script src="../assets1/js/slick.js"></script>
    <script src="../assets1/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>