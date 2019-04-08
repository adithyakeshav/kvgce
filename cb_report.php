<?php
    include 'header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Report of content beyond feedback</title>
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
        <div class="container">
            <form method="POST">
                <div class="row form-inline">
                    <select name="sub_code" class="form-control">
                        <?php
                            $subjects = mysqli_query($db, "SELECT sub_code from subject;");
                            if(mysqli_num_rows($subjects) > 0) {
                                while($subject = mysqli_fetch_assoc($subjects)) {
                                    echo "<option>".$subject['sub_code']."</option>";
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
                $query = mysqli_query($db,"SELECT * FROM question WHERE sub_code='".$_POST['sub_code']."' ORDER BY criteria ;  ");
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
                <div class="col-xs-2"><b><?php  echo "Criteria : ".$row1['criteria']; ?></b></div>
            </div>
            <?php 
            $i++;
            array_push($questions, $row1['qn_id']);
                }
                
                echo "</div>";
                $num = $i - 1;
            ?>
            <table width="100%" class="row">
                <caption>
                    Content Beyond Feedback - <?php echo $_POST['sub_code']; ?>
                </caption>
                <tr>
                    <th>Name</th>
                    <th>USN</th>
                    <?php
                        for($i = 1; $i <= $num; $i++) {
                            echo "<th>Question ".$i."</th>";
                        }
                    ?>
                </tr>
                <?php
                    $query = "SELECT DISTINCT usn,name "
                            ."FROM cb_feedback c,question q "
                            ."WHERE q.qn_id=c.qn_id "
                            ."AND sub_code='".$_POST['sub_code']."' "
                            ."ORDER BY usn;";
                    $result = mysqli_query($db, $query);
                    if(mysqli_num_rows($result)>0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>\n";
                            echo "<td>".$row['name']."</td>\n";
                            echo "<td>".$row['usn']."</td>\n";
                            foreach ($questions as $id) {
                                $feedback = mysqli_query($db, "SELECT * "
                                        ."FROM cb_feedback "
                                        ."WHERE usn='".$row['usn']."' AND "
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
                <caption class="lead">Statistics</caption>
                <tr><th>Question</th>
                    <th>Strongly Agree(3)</th>
                    <th>Fairly Agree(2)</th>
                    <th>Disagree(1)</th>
                    <th>Average</th>
                </tr>
            </table>
            
            <?php
            }
            ?>
        </div>
    </body>
</html>
