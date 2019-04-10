<!DOCTYPE html>
<?php 
include 'header.php';

function startsWith($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 
?>
<?php
if(isset($_POST['submit'])) {
    $usn = strtoupper($_POST['usn']);
    $variables = array_keys($_POST);
    foreach($variables as $key) {
        if(startsWith( $key, "qn" )) {
            $query = "INSERT INTO cb_feedback VALUES('".$usn."','". substr($key, 2)."','".$_POST[$key]."')";
            if(!mysqli_query($db, $query)) {
                echo "<script>"
                . "alert('Given student has already given the Feedback for given subject once');"
                . "</script>";
            }
            
        }
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <form method="post">
                <div class="container jumbotron row" >
                    <p  align="center"><font size="+3">Department of Computer Science and Engineering</font></p>
                    <p  align="center"> <font size="+2">  BE Students Content Beyond Feedback</font> </p>
                    <div class="row">
                        <div class="col-md-4"> <br><p><font size="+1">Name  <br>
                                <input type="text"  name="name"  <?php echo "value='".$_SESSION['name']."' " ?> readonly="true" class="form-control"></font></p>
                        </div>
                        <div class="col-md-4"> <br>
                            <p><font size="+1">USN <br> 
                                <input type="text" name="usn"  <?php echo "value='".$_SESSION['usn']."' " ?> readonly="true" class="form-control">
                                </font></p>
                        </div>

                        <div class="col-md-4"> <br>
                            
                            <p>
                                <font size="+1">Subject Code <br>
                                <?php   
                                if(!isset($_POST['show'])) {
                                ?>
                                <select name="code" class="form-control">
                                    <?php
                                    $code = mysqli_query($db, "SELECT distinct subcode FROM subjects where sem='".$_SESSION['sem']."';");
                                       if (mysqli_num_rows($code) > 0) {
                                        while ($row = mysqli_fetch_assoc($code)) {
                                            echo "<option value='" . $row['subcode'] . "'>" . $row['subcode'] . "</option>\n";
                                        }
                                    }
                                    ?>
                                </select>
                                <?php } else {  ?>
                                <input readonly="true" name="code" class="form-control"
                                       <?php echo "value='".$_POST['code']."' "; ?>
                                       >
                                <?php }   ?>
                                       
                                </font>
                            </p>
                            
                        </div>
                    </div> 
                    <?php if(!isset($_POST['show'])) { ?>
                    <div class="row col-md-2">
                        <input type="submit" name="show"
                               class="btn btn-success form-control"
                               >
                    </div>
                    <?php   }   ?>

                </div>
       <?php 
       if(isset($_POST['show'])){
           $query = mysqli_query($db,"SELECT * FROM question WHERE sub_code='".$_POST['code']."' ORDER BY criteria ;  ");
          $i=1; 
          if (mysqli_num_rows($query) > 0) {
                                        while ($row1 = mysqli_fetch_assoc($query)) {   ?>
                                               <div class="row">
                                            <div class="col-xs-1 lead"><?php echo $i; ?></div>
                                            <div class="col-xs-9">
                                                <p class="lead text-justify"><?php echo  $row1['statement']; ?> </p>
                                                
                                                <label class="text-primary form-control" >  
                                                    <input type="radio"
                                                           <?php echo "name='qn".$row1['qn_id']."' \n" ?>
                                                           required value="3">
                                                    Excellent
                                                </label><br>
                                                <label class="text-primary form-control" ><input type="radio" 
                                                                                         <?php echo "name='qn".$row1['qn_id']."' \n" ?>        
                                                                                                 value="2"> Good</label><br>
                                                <label class="text-primary form-control" ><input type="radio" 
                                                                                                 <?php echo "name='qn".$row1['qn_id']."' \n" ?>
                                                                                                 value="1"> Satisfactory</label><br>
                                            </div>  
                                            <div class="col-xs-2"><b><?php  echo "Criteria : ".$row1['criteria']; ?></b></div>
                                        </div>
<?php        
                                    $i=$i+1;    }
                           }
       ?>
                <div class="row col-md-2">
                    <input type="submit" name="submit"
                           class="btn btn-success form-control">
                </div>
       <?php   }    ?>
            </form>
        </div><br>
    </body>
</html>
