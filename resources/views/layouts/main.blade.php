<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        {{-- <meta charset="UTF-8"> --}}
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
        <title>@yield('title')</title>

        <style>
            .body{
                /*padding: 40px;*/
                background-color: #121212;  
                color: white;
            
                font-family: "Century Gothic", 'Lato', sans-serif;
                margin: 0; /*  ADDED  */
            }
        </style>
    </head>

    <body>

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
                        style="color: darkgray; transition: all 0.5s ease;" 
                        {{-- href="{{route(home.index) . '#tab-main-vid'}}" --}}
                        {{-- href="myhome.php#tab-main-vid"  --}}
                        id="active-menu">
                            Home<span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link inactive-menu" 
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                        onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'" 
                        style="color: darkgray; transition: all 0.5s ease;" 
                        {{-- href="myhome.php#tab-welcome" --}}
                        >
                            Welcome
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" 
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                        onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                        style="color: darkgray; transition: all 0.5s ease;" 
                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                            About Us 
                        </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
                            <li>
                                <a class="dropdown-item" 
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                style="color: darkgray; transition: all 0.5s ease;" 
                                {{-- href="myhome.php#tab-aboutus" --}}
                                > 
                                    Our Start
                                </a>
                            </li> 

                            <li>
                                <a class="dropdown-item" 
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                style="color: darkgray; transition: all 0.5s ease;" 
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
                        style="color: darkgray; transition: all 0.5s ease;" 
                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                            Explore 
                        </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: black">
                            <li>
                                <a class="dropdown-item" 
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                style="color: darkgray; transition: all 0.5s ease;" 
                                {{-- href="myhome.php#tab-food" --}}
                                > 
                                    Adventure at Heart
                                </a>
                            </li> 

                            <li>
                                <a class="dropdown-item" 
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'" 
                                onmouseout="this.style.backgroundColor='black'; this.style.color='darkgray'"
                                style="color: darkgray; transition: all 0.5s ease;" 
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
                            <img src="img/user.png" style="height: 30px;">
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

        @yield('content')

    </body>

</html>