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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       
        <title>Exit Feedback</title>
        
        <style>
            
            body {
                color : #132853;
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
            
            .black {
                color: black;
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
                        <li><a href="#">Exit Programme Feedback</a></li>
                        <li><a href="#">Course Feedback</a></li>
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
 
        <form method="post">
            <div class="container jumbotron " >
                <p  align="center"><font size="+3">Department of Computer Science and Engineering</font></p>
                <p  align="center"> <font size="+2">  BE Students Exit Feedback</font> </p>
                <div class="row">
                    <div class="col-xs-4"> <br><p><font size="+1">Name :  <br><input type="text" name="name" class="form-control"></font></p></div>
                    <div class="col-xs-4"> <br><p><font size="+1">USN :<br> <input type="text" name="usn" maxlength="10" class="form-control"></font></p></div>
                    <div class="col-xs-4"> <br>
                        <p>
                            <font size="+1">Year of Graduation : <br>
                            <select name="year" class="form-control">
                                <option value="#">--select year--</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                            </font>
                        </p>
                    </div>
                </div>   
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-1 lead">1</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify ">  
                            Engineering Knowledge: 
                            Apply the knowledge of mathematics, science,engineering fundamentals, 
                            and an engineering specialization 
                            to the solution of complex engineering problems.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po1" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po1" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po1" value="1"> Disagree</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">2</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                           Problem Analysis: 
                           Identify, formulate, research literature, and 
                           analyze complex engineering problems reaching substantiated conclusions 
                           using first principles of mathematics, natural sciences, 
                           and engineering sciences.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po2" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po2" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po2" value="1"> Disagree</label><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-1 lead">3</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            Design/development of Solutions: 
                            Design solutions for complex engineering problems and design system components 
                            or processes that meet the specified needs with appropriate consideration 
                            for the public health and safety, 
                            and the cultural, societal, and environmental considerations.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po3" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po3" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po3" value="1"> Disagree</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">4</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                            Conduct Investigations of Complex Problems: Use research-based knowledge and research
                            Methods including design of experiments, analysis and interpretation of data, and synthesis of
                            the information to provide valid conclusions.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po4" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po4" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po4" value="1"> Disagree</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">5</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                          Modern Tool Usage: 
                          Create, select, and apply appropriate techniques, resources, and 
                          modern engineering and IT tools including prediction and 
                          modeling to complex engineering activities 
                          with an understanding of the limitations.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po5" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po5" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po5" value="1"> Disagree</label><br>
                    </div>   
                </div>
                
                <div class="row">
                    <div class="col-xs-1 lead">6</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            The Engineer and Society: Apply reasoning informed by the contextual knowledge to assess
                            societal, health, safety, legal and cultural issues and the consequent responsibilities relevant
                            to the professional engineering practice. 
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po6" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po6" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po6" value="1"> Disagree</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">7</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            Environment and Sustainability: 
                            Understand the impact of the professional engineering solutions 
                            in societal and environmental contexts, and demonstrate the knowledge of, 
                            and need for sustainable development.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po7" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po7" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po7" value="1"> Disagree</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">8</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                           Ethics: Apply ethical principles  and commit to professional
                           ethics and responsibilities and norms of the engineering practice.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po8" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po8" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po8" value="1"> Disagree</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">9</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                           Individual and Team Work: Function effectively as an individual, 
                           and as a member or leader in diverse teams, and in multidisciplinary settings.
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po9" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po9" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po9" value="1"> Disagree</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">10</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                           Communication: Communicate effectively on complex engineering activities with the
                           engineering community and with   society at large, such as, being able to comprehend 
                           and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.  

                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po10" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po10" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po10" value="1"> Disagree</label><br>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">11</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                         Life-long Learning: Recognize the need for, and have the preparation and ability to engage
                         in independent and life-long learning in the broadest context of technological change. 
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po11" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po11" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po11" value="1"> Disagree</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">12</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            Project Management and Finance: Demonstrate knowledge and understanding of the
                            engineering and management principles    and apply these to one‟s own work, as a member
                            and leader in a team, to manage projects and in multidisciplinary environments
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po12" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po12" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="po12" value="1"> Disagree</label><br>
                    </div>  
                </div>
                <br>
                <p class="lead">Suggestions(if any) :</p>
                <textarea name="comment" class="form-control" placeholder="Max 500 characters..."></textarea><br>
                <button class="w3-button w3-green w3-round-large " type="submit">SUBMIT</button>
                <button class="w3-button w3-red w3-round-large " type="reset">CLEAR</button>
            </div>
            <button onclick="topFunction()" id="myBtn" class="btn btn-lg"><i class="fa fa-angle-double-up"></i></button>
                <script>
                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};

                    function scrollFunction() {
                      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("myBtn").style.display = "block";
                      } else {
                        document.getElementById("myBtn").style.display = "none";
                      }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                      document.body.scrollTop = 0;
                      document.documentElement.scrollTop = 0;
                    }
                </script>
        </form> 
        <br>
        <br>
        
        <?php 
        if(isset($_POST['submit']) ) {
            if($_POST['year']!='#') {
                $sql = "insert into exit_feedback (name,usn,year,p01,p02,p03,p04,p05,p06,p07,p08,p09,p10,p11,p12,comment )  values ( '".$_POST["name"]."','".$_POST["usn"]."','".$_POST["year"]."','".$_POST["po1"]."','".$_POST["po2"]."','".$_POST["po3"]."','".$_POST["po4"]."','".$_POST["po5"]."','".$_POST["po6"]."','".$_POST["po7"]."','".$_POST["po8"]."','".$_POST["po9"]."','".$_POST["po10"]."','".$_POST["po11"]."','".$_POST["po12"]."','".$_POST["comment"]."');";
                mysqli_query($db,$sql);
                header("location:exit.php");
                }
            }
        ?>
        
    </body>
</html>
