<!DOCTYPE html>
<?php
    $db = mysqli_connect("localhost", "root", "", "kvgce");
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <title></title>
        <style>
               body {
                color : #132853;
                background-color: lightyellow;
            }
            .navbar  {
                background-color : #132853;
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
            
            

        </style>
    </head>
    <body>
        <div class="container-fluid  header-cover">
            <div class="col-xs-2" align="center">
                <img src="images/kvg_logo.jpg" height="180dp">
            </div>
            <div class="col-xs-10">
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
                    <a class="navbar-brand"><marquee>Center of pure learning experience</marquee></a>
                </div>
                <div id="Nav" class="navbar-collapse collapse">
                    <ul class="navbar-nav nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="view_exit.php">Exit Programme Feedback</a></li>
                        <li><a href="add_subject.php">Course Feedback</a></li>
                        <li>
                            <?php
                            if(isset($_SESSION['user']))
                                echo '<a href="logout.php" ><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>';
                            else
                                echo '<a href="login.php" ><i class="fa fa-sign-out" aria-hidden="true"></i> Login</a>';
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
