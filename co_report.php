<?php
    include 'header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Report of content beyond feedback</title>
        <style>
            table, th, tr, td,caption {
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
        <div class="container">
            <form method="POST">
                <div class="row form-inline">
                    <select name="sub_code" class="form-control">
                        <?php
                            $sub_list = array();
                            $subjects = mysqli_query($db, "SELECT distinct subcode from subfac where idn='".$_SESSION["user"]."';");
                            if(mysqli_num_rows($subjects) > 0) {
                                while($subject = mysqli_fetch_assoc($subjects)) {
                                    array_push($sub_list, $subject['subcode']);
                                    echo "<option>".$subject['subcode']."</option>";
                                }
                            }
                        ?>
                    </select>
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
            <br>
            <?php
            if(isset($_POST['submit'])) {
                $query = mysqli_query($db,"SELECT * FROM co_questions WHERE sub_code='".$_POST['sub_code']."' ORDER BY criteria ;  ");
          $i=1; 
          if (mysqli_num_rows($query) > 0) {
              $questions = array();
              echo "<div class='row jumbotron'>";
              while ($row1 = mysqli_fetch_assoc($query)) {   ?>
            <div class="row ">
                <div class="col-xs-1 lead"><?php echo $i; ?></div>
                <div class="col-xs-9">
                    <p class="lead text-justify"><?php echo  $row1['statement']; ?> </p>
                </div>
                <div class="col-xs-2"><b><?php  echo "Relevance : ".$row1['criteria']; ?></b></div>
            </div>
            <?php 
            $i++;
            array_push($questions, $row1['qn_id']);
                }
                
                echo "</div>";
                $num = $i - 1;
            ?>
            <table width="100%">
                <caption>
                    Content Beyond Feedback - <?php echo $_POST['sub_code']; ?>
                </caption>
                <tr>
                    <th>Name</th>
                    <th>USN</th>
                    <?php
                        for($i = 1; $i <= $num; $i++) {
                            echo "<th>Qn ".$i."</th>";
                        }
                    ?>
                </tr>
                <?php
                    $query = "select distinct s1.Name,s1.USN,c.value from students s1,co_feedback c,subfac f "
                        ."WHERE s1.usn=c.usn and f.subcode='".$_POST['sub_code']."' and f.idn='".$_SESSION['user']."' ";
                             $result = mysqli_query($db, $query);
                    if(mysqli_num_rows($result)>0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>\n";
                            echo "<td>".$row['Name']."</td>\n";
                            echo "<td>".$row['USN']."</td>\n";
                             foreach ($questions as $id) {
                                $feedback = mysqli_query($db, "SELECT * "
                                        ."FROM co_feedback "
                                        ."WHERE usn='".$row['USN']."' AND "
                                        ."qn_id='".$id."';");
                                echo "<td>".mysqli_fetch_assoc($feedback)['value']."</td>\n";
                            }
                            echo "</tr>\n";
                        }
                    }
                ?>
                
                
            </table>
            <?php
            }
            ?>
            <br><table width="100%" > 
                <caption >Statistics</caption>
                <caption>
                    <?php
                    $query = "SELECT COUNT(DISTINCT usn) as count "
                        ."FROM co_feedback c, co_questions q "
                        ."WHERE q.qn_id = c.qn_id "
                        ."AND sub_code='".$_POST['sub_code']."'";
                    $result = mysqli_query($db, $query);
                    $total = mysqli_fetch_assoc($result)['count'];
                    echo "Total Submissions : ".$total;
                ?>
                </caption>
                <tr><th>Question</th>
                    <th>Excellent(4)</th>
                    <th>Very Good(3)</th>
                    <th>Good(2)</th>
                    <th>Satisfactory(1)</th>
                    <th>Percentage</th>
                    <th>Level</th>
                </tr>
                <?php
                $i = 1;
                
  if(isset($questions))   {  foreach ($questions as $qn) {
                                echo "<tr>\n";
                                echo "<td>".$i++."</td>";
                                
                                $query = "SELECT COUNT(*) as count FROM co_feedback WHERE qn_id='".$qn."' AND value='4';";
                                $p = mysqli_query($db, $query);
                                $p_excel = mysqli_fetch_assoc($p);
                                echo "<td>".$p_excel['count']."</td>";
                                
                                $query = "SELECT COUNT(*) as count FROM co_feedback WHERE qn_id='".$qn."' AND value='3';";
                                $p = mysqli_query($db, $query);
                                $p_strongly = mysqli_fetch_assoc($p);
                                echo "<td>".$p_strongly['count']."</td>";
                                
                                $query = "SELECT COUNT(*) as count FROM co_feedback WHERE qn_id='".$qn."' AND value='2';";
                                $p = mysqli_query($db, $query);
                                $p_fairly = mysqli_fetch_assoc($p);
                                echo "<td>".$p_fairly['count']."</td>";
                                
                                $query = "SELECT COUNT(*) as count FROM co_feedback WHERE qn_id='".$qn."' AND value='1';";
                                $p = mysqli_query($db, $query);
                                $p_disagree = mysqli_fetch_assoc($p);
                                echo "<td>".$p_disagree['count']."</td>";
                                
                                $avg = 100*($p_excel['count']*4 +$p_strongly['count']*3 + $p_fairly['count']*2 + $p_disagree['count'] )/(4*$total);
                                echo "<td>".round($avg,2)."</td>";
                                
                                if($avg >= 90) {
                                echo "<td>3</td>";
                            } elseif ($avg >= 80) {
                            echo "<td>2</td>";
                        } elseif($avg >= 60 )
                            echo "<td>1</td>";
                        else echo "<td>0</td>";
                                
                                echo "</tr>\n";
  } }
                ?>
            </table>
            
            <?php
            }
            ?>
        </div>
        <div style="height:40px"></div>
    </body>
</html>
