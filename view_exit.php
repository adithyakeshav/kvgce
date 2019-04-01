<!DOCTYPE html>
<?php
        session_start();
     $db = mysqli_connect("localhost","root","", "kvgce");
?>
<html>
    <head>
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
			border: 0.5px solid black;
                      
                }                              
		caption {
			font-size:30px;
			color: white;
			text-align:left;
			background-color : grey;
		}
                tr {
                    
                     background-color : white;
                  
		
                }
		th {background-color : white;
		
			color : black;
			font-size : 20px;
		}

        </style>
    </head>
    <body>
        <div class="container row">
            <div class="col-xs-12">
            <form method="post">
            <div class="form form-inline">
                <input type="number" name="year" minlength="4" maxlength="4"autocomplete="off" list="list1" placeholder="year">
                <input type="submit" name="submit" class="btn btn-success"> 
            </div>
        </form>
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
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['usn']; ?></td>
               <td><?php echo $row['year']; ?></td>
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
                        echo "Total Submissions : ".mysqli_fetch_assoc($num)['COUNT(*)'];
                    ?>
                </caption>
                <tr>
                    <th>Question</th>
                    <th>Strongly Agree</th>
                    <th>Fairly Agree</th>
                    <th>Disagree</th>
                </tr>
                <?php
                for($i = 1; $i < 13; $i++) {
                    if($i > 9)
                        $question = "p".$i;
                    else
                        $question = "p0".$i;
                ?>
                <tr>
                    <td>
                        Question <?php echo $question; ?>
                    </td>
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
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
            </div>
        <?php
            }
            }
        ?>
    </body>
</html>
