<!DOCTYPE html>
<?php
        include 'header.php';
        if(!isset($_SESSION['user'])) {
            header('location:LOGIN.php');
        }

    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, th, tr, td, caption {
                                                                    text-align: center;
			padding:5px;
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


        </style>
    </head>
    <body>

         <div class="container-fluid">       
               <div class="container-fluid">
            <form method="post">
            <div class="form form-inline">
                <input type="number" name="year" minlength="4" maxlength="4"autocomplete="off" list="list1" placeholder="year">
                <input type="submit" name="submit" class="btn btn-success"> 
            </div>
            </form><br>
            <?php
            if(isset($_POST['submit'])) {
                $year = $_POST['year'];
                $query = "select f.*, s.name "
                        . "from facility_feedback f,students s where s.USN=f.usn and year='".$year."' order by(usn);";
                
                $result = mysqli_query($db, $query );
                if(mysqli_num_rows($result) <= 0) {
                    ?>
            <p class="lead">No entry for given year <?php echo $year; ?></p>
            <?php
                }
                else
                {
                
            ?>
        <table align="center" >

        <caption><b>Facility Feedback - <?php echo $year; ?> </b></caption>
        <th>Name</th>
        <th>USN</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Q4</th>
        <th>Q5</th>
        <th>Q6</th>
        <th>Q7</th>
        <th>Q8</th>
        <th>Q9</th>
        <th>Q10</th>
        </tr>


        <?php
        while($row=mysqli_fetch_assoc($result)) { ?>
            <tr>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['usn']; ?></td>
               <td><?php echo $row['p01']; ?></td>
               <td><?php echo $row['p02']; ?></td>
               <td><?php echo $row['p03']; ?></td>
               <td><?php echo $row['p04']; ?></td>
               <td><?php echo $row['p05']; ?></td>
               <td><?php echo $row['p06']; ?></td>
               <td><?php echo $row['p07']; ?></td>
               <td><?php echo $row['p08']; ?></td>
                <td><?php echo $row['p09']; ?></td>
                <td><?php echo $row['p10']; ?></td>

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
                        $num = mysqli_query($db, "select COUNT(*) from facility_feedback where year='".$year."';");
                        $total = mysqli_fetch_assoc($num)['COUNT(*)'];
                        echo "Total Submissions : ".$total;
                    ?>
                </caption>
                <tr>
                    <th align="center">Question</th>
                    <th align="center">Excellent(5)</th>
                    <th align="center">Very Good(4)</th>
                    <th align="center">Good(3)</th>
                    <th align="center">Fair(2)</th>
                    <th align="center">Poor(1)</th>
                    <th align="center">Percentage</th>
                    <th align="center">Level</th>
                    
                </tr>
                <?php
                for($i = 1; $i < 11; $i++) {
                    if($i > 9)
                        $question = "p".$i;
                    else
                        $question = "p0".$i;
                ?>
                <tr>
                    <td><b>
                        <?php echo "Q".$i; ?>
                        </b></td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM facility_feedback WHERE year='".$year."' AND ".$question."='5';";
                            
                            $p = mysqli_query($db, $query);
                            $p_excellent = mysqli_fetch_assoc($p);
                            echo $p_excellent['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM facility_feedback WHERE year='".$year."' AND ".$question."='4';";
                            $p = mysqli_query($db, $query);
                            $p_verygood = mysqli_fetch_assoc($p);
                            echo $p_verygood['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM facility_feedback WHERE year='".$year."' AND ".$question."='3';";
                            $p = mysqli_query($db, $query);
                            $p_good = mysqli_fetch_assoc($p);
                            echo $p_good['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM facility_feedback WHERE year='".$year."' AND ".$question."='2';";
                            $p = mysqli_query($db, $query);
                            $p_fair = mysqli_fetch_assoc($p);
                            echo $p_fair['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM facility_feedback WHERE year='".$year."' AND ".$question."='1';";
                            $p = mysqli_query($db, $query);
                            $p_poor = mysqli_fetch_assoc($p);
                            echo $p_poor['count'];
                        ?>
                    </td>
                    <td>
                             <?php      
                             $res = 100*($p_poor['count']+($p_fair['count']*2)+($p_good['count']*3 + $p_verygood['count']*4 + $p_excellent['count']*5))/(5*$total); 
                             echo round($res,2); ?>
                    </td>
                    
                    <td>
                        <?php
                            if($res >= 90) {
                                echo "3";
                            } elseif ($res >= 80) {
                            echo "2";
                        } elseif($res >= 70 )
                            echo "1";
                        else echo "0";
                            
                        ?>
                    </td>
                
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
