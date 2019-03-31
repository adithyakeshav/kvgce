<!DOCTYPE html>
<?php
include 'header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">      
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

        </style>
    </head>
    <body>
         <div class="container">
             
            <form> <div class="row container-fluid" >
                     <input type='number' class="col-xs-2 "maxlength="4" name='year' list="lst" autocomplete="off">
                      <input class="col-xs-1" type='submit' class='btn btn-primary'>
                     <datalist id="lst">
                         <option>2012</option>
                         <option>2013</option>
                         <option>2014</option>
                         <option>2015</option>
                         <option>2016</option>
                         <option>2018</option>
                         <option>2019</option>
                         <option>2020</option>
                     </datalist>
                    
                  </div>    </form>
             
                    
        <?php

          if(isset($_GET['year'])) {
      	$result=mysqli_query($db,"select * from exit_feedback where year='".$_GET['year']."';");
        if(mysqli_num_rows($result) > 0) { 
            ?>
                <br><table align='center'>
                <caption><b>Exit Feedback </b></caption>
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
	while($row=mysqli_fetch_assoc($result)) { 
            ?>
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
          }
        ?>
            </table> 
                 
        </div>
    </body>
</html>
