<?php
    $db = mysqli_connect("localhost", "root", "", "kvgce");
    session_start();
    
           if(!isset($_SESSION['usn']) && !isset($_SESSION['user']) )
    {
        header("location:login.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <link rel="shortcut icon" href="IMAGES/KVG_LOGO.JPG" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <style>
               body {
                color : #483d8b;
                background-color: lightyellow;
            }
            .navbar  {
                background-color : #483d8b;
                border-left: 0;
                border-right: 0;   
                
            }
             
            .header-heading {
                font-size: 50px;
                font-family: 'Alfa Slab One', cursive;
            }
            .header-address {
                font-size : 30px;
                
            }
            
            .fa-sign-in {
                font-size: 20px;
            }
            #Nav ul li a {
                color: white;
            }
            

        </style>
    </head>
    <body>
        <div class="container-fluid  header-cover">
            <div class="col-md-2" align="center">
                <img src="images/kvg_logo.jpg" height="180dp">
            </div>
            <div class="col-md-10">
                <br>
                <p class="lead header-heading" align="center">
                    KVG College of Engineering 
                </p>
                  <p class="lead header-address" align="center">
                    Kurunjibagh, Sullia, DK - 574327
                </p>
            </div>
        </div>
        
        
        <!---Navigation Bar with login and other redirection links--->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#Nav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>   

                </div>
                <div id="Nav" class="navbar-collapse collapse">
                    <ul class="navbar-nav nav navbar-left">
                        <li style="color:white;padding-top: 12px"> <marquee width="120%">Center of pure learning experience</marquee></li>
                    </ul>
                    <ul class="navbar-nav nav navbar-right">
                        <li><a href="menu.php" >Home</a></li>
                        <li><a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                            
                        </li>
                    </ul>
                  </div>
               
            </div>
        </nav>
    </body>
</html>
