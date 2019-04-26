<!DOCTYPE html>

<?php
  include 'header.php';
?>

<html>
    <head>
       
        <title>Exit Feedback</title>
        
        <style> 
         #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: lightseagreen;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
          }

          #myBtn:hover {
            background-color: blue;
          }
            
        </style>
    </head>
    <body>
           <form method="post">
            <div class="container jumbotron " >
                <p  align="center"><font size="+3">Department of Computer Science and Engineering</font></p>
                <p  align="center"> <font size="+2">  BE Students Facility Feedback</font> </p>
                <div class="row">
                    <div class="col-xs-4"> <br><p><font size="+1">Name :  <br>
                            <input type="text"  name="name" class="form-control"  <?php echo "value='".$_SESSION['name']."' " ?> readonly="true"></font></p>
                    </div>
                    <div class="col-xs-4"> <br>
                        <p><font size="+1">USN :<br> 
                            <input type="text" name="usn" <?php echo "value='".$_SESSION['usn']."' " ?> readonly="true" class="form-control" >
                            </font></p>
                    </div>

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
                            Classroom Infrastructure
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po1" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po1" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po1" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po1" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po1" value="1">Poor</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">2</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                           Teaching Faculty/Staff
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po2" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po2" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po2" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po2" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po2" value="1">Poor</label><br>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-1 lead">3</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            Infrastructure
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po3" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po3" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po3" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po3" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po3" value="1">Poor</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">4</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                            Library
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po4" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po4" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po4" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po4" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po4" value="1">Poor</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">5</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                            Laboratories
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po5" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po5" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po5" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po5" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po5" value="1">Poor</label><br>
                    </div>   
                </div>
                
                <div class="row">
                    <div class="col-xs-1 lead">6</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            Exam Cell
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po6" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po6" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po6" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po6" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po6" value="1">Poor</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">7</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            Administration
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po7" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po7" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po7" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po7" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po7" value="1">Poor</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">8</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                            Hostel
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po8" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po8" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po8" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po8" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po8" value="1">Poor</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">9</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                            Training & Placement
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po9" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po9" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po9" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po9" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po9" value="1">Poor</label><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1 lead">10</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">  
                            Environment
                        </p>
                        <label class="text-primary form-control" >  <input type="radio" name="po10" value="5" required >Excellent</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po10" value="4" required >Very Good</label><br>
                        <label class="text-primary form-control" >  <input type="radio" name="po10" value="3" required > Good</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po10" value="2">Fair</label><br>
                        <label class="text-primary form-control"><input type="radio" name="po10" value="1">Poor</label><br>
                    </div> 
                </div>

                <br>
                <p class="lead">Suggestions(if any) :</p>
                <textarea name="comment" class="form-control" placeholder="Max 500 characters..."></textarea><br>
                <button class="w3-button w3-green w3-round-large " type="submit" name="submit">SUBMIT</button>
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
                $sql = "insert into facility_feedback (usn,year,p01,p02,p03,p04,p05,p06,p07,p08,p09,p10,comment )  values ( '".$_POST["usn"]."','".$_POST["year"]."','".$_POST["po1"]."','".$_POST["po2"]."','".$_POST["po3"]."','".$_POST["po4"]."','".$_POST["po5"]."','".$_POST["po6"]."','".$_POST["po7"]."','".$_POST["po8"]."','".$_POST["po9"]."','".$_POST["po10"]."','".$_POST["comment"]."');";
                mysqli_query($db,$sql);
                }
            }
        ?>
        
    </body>
</html>
