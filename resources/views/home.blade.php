<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <title>Home | Bon Appe&#769tit</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/HomeStyle.css') }}" />

    </head>

    <body>
        {{-- src="{{ asset('img/user.png') }}" style="height: 30px;" --}}
        <span class="body">
            <div class="my_main" id="tab-main-vid">
              <video autoPlay loop muted controls class="main_video">
                <source src="{{ asset('media/la_3.mp4') }}" type="video/mp4" />
              </video>
              <div class="my_overlay my_caption1">
                <p class="my_animated_para"><strong>Bon Appe&#769tit!</strong></p>
              </div>
            </div>


            <!-- NAVIGATION BAR -->

            <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> --> 
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: black;">

                <a class="navbar-brand" href="myhome.php#tab-main-vid"><b>Bon Appe&#769tit</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav mr-auto">
    
                        <li class="nav-item active">
                            <a class="nav-link" 
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                            onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'" 
                            style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                            href="{{ route('home.index') . '#tab-main-vid' }}"
                            {{-- href="myhome.php#tab-main-vid"  --}}
                            id="active-menu">
                                Home<span class="sr-only">(current)</span>
                            </a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive-menu" 
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                            onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'" 
                            style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                            href="{{ route('home.index') . '#tab-welcome' }}"
                            {{-- href="myhome.php#tab-welcome" --}}
                            >
                                Welcome
                            </a>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" 
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                            onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                            style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                                About Us 
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                                    href="{{ route('home.index') . '#tab-aboutus' }}"
                                    {{-- href="myhome.php#tab-aboutus" --}}
                                    > 
                                        Our Start
                                    </a>
                                </li> 
    
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                                    {{-- href="{{ route('aboutus.index') }}" --}}
                                    {{-- href="aboutus.php" --}}
                                    > 
                                        Learn More
                                    </a>
                                </li>            
                            </ul>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" 
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                            onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                            style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                                Explore 
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                                    href="{{ route('home.index') . '#tab-food' }}"
                                    {{-- href="myhome.php#tab-food" --}}
                                    > 
                                        Adventure at Heart
                                    </a>
                                </li> 
    
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="background-color: black; color: darkgray; transition: all 0.5s ease;" 
                                    {{-- href="{{ route('browse.index') }}" --}}
                                    {{-- href="browse.php" --}}
                                    > 
                                        Browse
                                    </a>
                                </li>            
                            </ul>
                        </li>
                
                    </ul>
    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" 
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                            onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                            style="color: darkgray; transition: all 0.5s ease;" 
                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                                <img src="{{ asset('img/user.png') }}" style="height: 30px;">
                                <!-- Join   -->
                                <?php 
                                if (isset($_SESSION["logged_in"])) {
                                    echo $_SESSION["user"];
                                }
                                ?>
                            </a>
    
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: black">
    
                                @if(!Auth::check())
    
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="color: darkgray; transition: all 0.5s ease;" 
                                    {{-- href="register_user.php" --}}
                                    href="{{ route('registration.index') }}"> 
                                        Register
                                    </a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="color: darkgray; transition: all 0.5s ease;" 
                                    {{-- href="login_user.php" --}}
                                    href="{{ route('auth.loginForm') }}"> 
                                        Login 
                                    </a>
                                </li>
    
                                @else
    
                                <li>
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="color: darkgray; transition: all 0.5s ease;" 
                                    {{-- href="update_pw.php" --}}
                                    href="{{ route('profile.index') }}"> 
                                        Profile
                                    </a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    {{--                                 
                                    <a class="dropdown-item" 
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                    style="color: darkgray; transition: all 0.5s ease;" 
                                    href="logout_user.php"> 
                                        Logout 
                                    </a> 
                                    --}}
    
                                    <form method="post" action="{{ route('auth.logout') }}">
                                        @csrf {{-- must make a post request form to have this cross site request forgery protection --}}
                                        <button type="submit" class="btn btn-link dropdown-item"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                        onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                        style="color: darkgray; transition: all 0.5s ease;"
                                        >
                                            Logout
                                        </button>
                                    </form>
                                </li>
    
                                <?php
                                endif;
                                ?>
    
                            </ul>
                        </li>
    
                    </ul>
                </div>
    
            </nav>
    
            <!-- NAVIGATION BAR -->
            
            {{-- Main --}}
            <main>
              <div class="my_main">
                <section class="et_slide my_pic1" id="tab-welcome"></section>
                <div class="my_overlay my_caption1">
                  <h1><strong>LOS ANGELES</strong></h1>
                  <h5>WELCOME TO THE CITY OF ANGELS!</h5>
                </div>
              </div>

              <div class="my_main">
                <section class="et_slide my_pic2" id="tab-aboutus"></section>
                <div class="my_overlay my_caption1">
                  <h1><strong>ABOUT US</strong></h1>
                  <h5>PathPort’s goal is to make sure you and your loved ones have a fabulous time exploring Los Angeles.</h5>
                  
                  <a href="/aboutus">
                    <button type="button" class="btn btn-outline-dark"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                    onmouseout="this.style.backgroundColor='black'; this.style.color='white'"
                    style="color: white; background-color: black; transition: all 0.5s ease;">
                      LEARN MORE
                    </button>
                  </a>

                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-dark btn-outline-light" data-toggle="modal" data-target="#exampleModalCenter">
                    View Credits
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color: black">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><strong>Credits</strong></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" style="font-size: 12pt">
                          <strong>Created by Arjun Bamba</strong>
                          <br></br>
                          <strong>Special Thanks to the Coolest Professor Ever: David Tang</strong>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="my_main">
                <section class="et_slide my_pic3" id="tab-food"></section>
                <div class="my_overlay my_caption1">
                  <h1><strong>ADVENTURE AT HEART</strong></h1>
                  <h5>
                    At PathPort, we celebrate the spirit of adventure.
                  </h5>
                  <h5>
                    What would you like? Browse through our catalogue of recommendations! 
                  </h5>
                  <a href="/browse">
                    <button type="button" class="btn btn-outline-dark"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                    onmouseout="this.style.backgroundColor='black'; this.style.color='white'"
                    style="color: white; background-color: black; transition: all 0.5s ease;">
                      BROWSE
                    </button>
                  </a>
                </div>
              </div>
            </main>

        </span>

    </body>

</html>