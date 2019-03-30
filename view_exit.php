<!DOCTYPE html>
<?php
        session_start();
     $db = mysqli_connect("localhost","root","", "kvgce");
?>
<html>
    <head>
        <meta charset="UTF-8">
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
        <form method="post" >
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
      	$result=mysqli_query($db,"select * from exit_feedback");
	if(mysqli_num_rows($result) > 0) {
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
                }
                   
        ?>
            </table> 
        </form>
    </body>
</html>
