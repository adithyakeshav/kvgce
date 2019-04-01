<!DOCTYPE html>
<?php
    $db = mysqli_connect("localhost", "root", "", "kvgce");
    session_start();
        if(!isset($_SESSION['user'])) {
            header('location:LOGIN.php');
        }

    
?>
<html>
    <head>
        <meta charset="UTF-8">      
        <meta charset="UTF-8">
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
        <title></title>
        <style>
            table, th, tr, td, caption {
			padding:10px;
			border: 0.5px solid #132853;
                                                                    color: #132853;
                      
                }                              
		caption {
			font-size:30px;
			color: white;
			text-align:left;
			background-color : #132853;
		}
                tr {
                    
                     background-color : white;
                  
		
                }
		th {background-color : white;

			font-size : 20px;
		}
          
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
        
        <div class="container-fluid  header-cover" >
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

        
        
        

         <div class="container">       
               <div class="container">
            <form method="post">
            <div class="form form-inline">
                <input type="number" name="year" minlength="4" maxlength="4"autocomplete="off" list="list1" placeholder="year">
                <input type="submit" name="submit" class="btn btn-success"> 
            </div>
            </form><br>
            <?php
            if(isset($_POST['submit'])) {
                $year = $_POST['year'];
                $result = mysqli_query($db, "select * from exit_feedback where year='".$year."';");
                if(mysqli_num_rows($result) <= 0) {
                    ?>
            <p class="lead">No entry for given year <?php echo $year; ?></p>
            <?php
                }
                else
                {
                
            ?>
        <table align='center'>
        <caption><b>Exit_Feedback </b></caption>
        <th>Name</th>
        <th>USN</th>
        <th>Graduation year</th>
        <th>PO1</th>
        <th>P02</th>
        <th>P03</th>
        <th>P04</th>
        <th>P05</th>
        <th>P06</th>
        <th>P07</th>
        <th>P08</th>
        <th>P09</th>
        <th>P010</th>
        <th>P011</th>
        <th>P012</th>
        </tr>


        <?php
        while($row=mysqli_fetch_assoc($result)) { ?>
            <tr>
               <td align="center"><?php echo $row['name']; ?></td>
               <td align="center"><?php echo $row['usn']; ?></td>
               <td align="center"><?php echo $row['year']; ?></td>
               <td align="center"><?php echo $row['p01']; ?></td>
               <td align="center"><?php echo $row['p02']; ?></td>
               <td align="center"><?php echo $row['p03']; ?></td>
               <td align="center"><?php echo $row['p04']; ?></td>
               <td align="center"><?php echo $row['p05']; ?></td>
               <td align="center"><?php echo $row['p06']; ?></td>
               <td align="center"><?php echo $row['p07']; ?></td>
               <td align="center"><?php echo $row['p08']; ?></td>
                <td align="center"><?php echo $row['p09']; ?></td>
                <td align="center"><?php echo $row['p10']; ?></td>
                <td align="center"><?php echo $row['p11']; ?></td>
                <td align="center"><?php echo $row['p12']; ?></td>

            </tr>

            <?php  
            }
            ?>
            </table> 
            <div style="height:100px"></div>
            <table align="center">
                <caption>Statistics</caption>
                <caption style="font-size: 20px">
                    <?php
                        $num = mysqli_query($db, "select COUNT(*) from exit_feedback where year='".$year."';");
                        $total = mysqli_fetch_assoc($num)['COUNT(*)'];
                        echo "Total Submissions : ".$total;
                    ?>
                </caption>
                <tr>
                    <th>Question</th>
                    <th>Strongly Agree(3)</th>
                    <th>Fairly Agree(2)</th>
                    <th>Disagree(1)</th>
                    <th>Inference</th>
                </tr>
                <?php
                for($i = 1; $i < 13; $i++) {
                    if($i > 9)
                        $question = "p".$i;
                    else
                        $question = "p0".$i;
                ?>
                <tr>
                    <td align="center"><b>
                        <?php echo $question; ?>
                        </b></td>
                    <td align="center">
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='3';";
                            $p1 = mysqli_query($db, $query);
                            $p1_strongly = mysqli_fetch_assoc($p1);
                            echo $p1_strongly['count'];
                        ?>
                    </td>
                    <td align="center">
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='2';";
                            $p1 = mysqli_query($db, $query);
                            $p1_fairly = mysqli_fetch_assoc($p1);
                            echo $p1_fairly['count'];
                        ?>
                    </td>
                    <td align="center">
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='1';";
                            $p1 = mysqli_query($db, $query);
                            $p1_disagree = mysqli_fetch_assoc($p1);
                            echo $p1_disagree['count'];
                        ?>
                    </td>
                    <td align="center"><b>
                        <?php 
                        $res = ($p1_disagree['count']+($p1_fairly['count']*2)+($p1_strongly['count']*3))/$total;
                        if($res<1.5) {
                            echo "Disagree";
                        }
                        elseif ($res<2.5) {
                            echo "Fairly Agree";
                        
                    }
                    else {
                        echo "Strongly Agree";
                    }
                        
                        ?>
                        
                        </b></td>
                </tr>
                <?php
                }
          }
        ?>
            </table> 
                 
        </div>
            
            </table>
    </div><br><br>
        <?php
            }
          
        ?>
    </body>
</html>
