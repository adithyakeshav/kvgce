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
               <td align="center"><?php echo $row['name']; ?></td>
               <td align="center"><?php echo $row['usn']; ?></td>
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
                
                <td align="center"><?php echo $row['ps1']; ?></td>
                <td align="center"><?php echo $row['ps2']; ?></td>
                <td align="center"><?php echo $row['ps3']; ?></td>

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
                    <th align="center">Average</th>
                    
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
                    <td align="center">
                             <?php      $res = ($p1_disagree['count']+($p1_fairly['count']*2)+($p1_strongly['count']*3))/$total; 
                             echo round($res,2); ?>
                    </td>
                    
                                   </tr>
                <?php
                }
                
                for($i = 1; $i < 4; $i++) {
                $question = "ps".$i;
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
                    <td align="center">
                        <?php 
                                   $res = ($p1_disagree['count']+($p1_fairly['count']*2)+($p1_strongly['count']*3))/$total;
                                   echo round($res,2);
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
