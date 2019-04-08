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
                $result = mysqli_query($db, "select * from exit_feedback where year='".$year."' order by(usn);");
                if(mysqli_num_rows($result) <= 0) {
                    ?>
            <p class="lead">No entry for given year <?php echo $year; ?></p>
            <?php
                }
                else
                {
                
            ?>
        <table align='center'>

        <caption><b>Exit Feedback - <?php echo $year; ?> </b></caption>
        <th>Name</th>
        <th>USN</th>
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
        <th>PS1</th>
        <th>PS2</th>
        <th>PS3</th>
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
                <td><?php echo $row['p11']; ?></td>
                <td><?php echo $row['p12']; ?></td>
                
                <td><?php echo $row['ps1']; ?></td>
                <td><?php echo $row['ps2']; ?></td>
                <td><?php echo $row['ps3']; ?></td>

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
                    <th align="center">Question</th>
                    <th align="center">Strongly Agree(3)</th>
                    <th align="center">Fairly Agree(2)</th>
                    <th align="center">Disagree(1)</th>
                    <th align="center">Percentage</th>
                    <th align="center">Level</th>
                    
                </tr>
                <?php
                for($i = 1; $i < 13; $i++) {
                    if($i > 9)
                        $question = "p".$i;
                    else
                        $question = "p0".$i;
                ?>
                <tr>
                    <td><b>
                        <?php echo $question; ?>
                        </b></td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='3';";
                            $p1 = mysqli_query($db, $query);
                            $p1_strongly = mysqli_fetch_assoc($p1);
                            echo $p1_strongly['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='2';";
                            $p1 = mysqli_query($db, $query);
                            $p1_fairly = mysqli_fetch_assoc($p1);
                            echo $p1_fairly['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='1';";
                            $p1 = mysqli_query($db, $query);
                            $p1_disagree = mysqli_fetch_assoc($p1);
                            echo $p1_disagree['count'];
                        ?>
                    </td>
                    <td>
                             <?php      $res = 100*($p1_disagree['count']+($p1_fairly['count']*2)+($p1_strongly['count']*3))/(3*$total); 
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
                
                for($i = 1; $i < 4; $i++) {
                $question = "ps".$i;
                ?>
                
                <tr>
                    <td><b>
                        <?php echo $question; ?>
                        </b></td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='3';";
                            $p1 = mysqli_query($db, $query);
                            $p1_strongly = mysqli_fetch_assoc($p1);
                            echo $p1_strongly['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='2';";
                            $p1 = mysqli_query($db, $query);
                            $p1_fairly = mysqli_fetch_assoc($p1);
                            echo $p1_fairly['count'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $query = "SELECT COUNT(*) as count FROM exit_feedback WHERE year='".$year."' AND ".$question."='1';";
                            $p1 = mysqli_query($db, $query);
                            $p1_disagree = mysqli_fetch_assoc($p1);
                            echo $p1_disagree['count'];
                        ?>
                    </td>
                    <td>
                        <?php 
                                   $res = 100*($p1_disagree['count']+($p1_fairly['count']*2)+($p1_strongly['count']*3))/(3*$total);
                                   echo round($res,2);
                        ?>
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
