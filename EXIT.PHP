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
                
                
                <div class="row">
                    <div class="col-xs-1 lead">13</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            PROBLEM SOLVING SKILLS  :The ability to solve problems using mathematical analysis, data structures, 
                            database management,algorithm, standard software engineering and professional practice to evolve optimal solutions.
                </p>
                        <label class="text-primary form-control" >  <input type="radio" name="ps1" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="ps1" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="ps1" value="1"> Disagree</label><br>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">14</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                            PROFESSIONAL SKILLS:  The ability to understand the functionality of hardware and software aspects of 
                               computer systems and to comprehend, analyze, design, implement, test and conduct study in the domain of application development, computer network & security, software design and data mining.  
                    </p>
                        <label class="text-primary form-control" >  <input type="radio" name="ps2" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="ps2" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="ps2" value="1"> Disagree</label><br>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-xs-1 lead">15</div>
                    <div class="col-xs-11">
                        <p class="lead text-justify">
                             ETHICS AND CAREER DEVELOPMENT :
                    Exhibit skills required for a successful career in the industry based on principles of 
                    software project management, teamwork, ethical practices, develop the spirit of free enterprise and provide innovative ideas towards analysis.  
     </p>
                        <label class="text-primary form-control" >  <input type="radio" name="ps3" value="3"> Strongly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="ps3" value="2"> Fairly Agree</label><br>
                        <label class="text-primary form-control" ><input type="radio" name="ps3" value="1"> Disagree</label><br>
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
                $sql = "insert into exit_feedback (name,usn,year,p01,p02,p03,p04,p05,p06,p07,p08,p09,p10,p11,p12,ps1,ps2,ps3,comment )  values ( '".$_POST["name"]."','".$_POST["usn"]."','".$_POST["year"]."','".$_POST["po1"]."','".$_POST["po2"]."','".$_POST["po3"]."','".$_POST["po4"]."','".$_POST["po5"]."','".$_POST["po6"]."','".$_POST["po7"]."','".$_POST["po8"]."','".$_POST["po9"]."','".$_POST["po10"]."','".$_POST["po11"]."','".$_POST["po12"]."','".$_POST["ps1"]."','".$_POST["ps2"]."','".$_POST["ps3"]."','".$_POST["comment"]."');";
                mysqli_query($db,$sql);
                }
            }
        ?>
        
    </body>
</html>
