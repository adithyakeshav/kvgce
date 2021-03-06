<!DOCTYPE html>

<?php
    include 'header.php';
    if(!isset($_SESSION['user'])) {
        header("location:login.php");
    }
    
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Subject to Content beyond feedback</title>
    </head>
    <body>
        <form method="post">
        <div class="container">
            <?php 
            if(isset($_POST['submit'])) {
                               $sub_code = strtoupper($_POST['sub_code']);
               ?>
            <div class="form-inline">
                <p class="lead txt txt-danger">
                    <?php 
                    
                    for($i=1; $i<13; $i++) {
                        if(isset($_POST["question".$i])) {
                            $insert_qn = mysqli_query($db, 
                                    "INSERT INTO question VALUES('','".$_POST["question".$i]."','".$_POST['criteria'.$i]."','".$sub_code."');");
                            
                            if(!$insert_qn) {
                                echo "<script>"
                                . "alert('Question $i already exists');"
                                . "</script>";
                            }
                        } 
                    }
                    ?>
                </p>
            </div>
            <?php 
            }   
            
            if(isset($_POST['view']) || isset($_POST['add']) ) { ?>
            <div class="form-inline ">
                    <label class="lead">Subject Name : </label>
                    <input required type="text" 
                           <?php
                               if(isset($_POST['view']) || isset($_POST['add'])) {
                                $sub = mysqli_query($db, "SELECT * FROM subjects where subcode='".$_POST['sub_code']."';");
                                if(mysqli_num_rows($sub) >0)
                                    echo "  value='".mysqli_fetch_assoc($sub)['Name']."' ";
                               }
                           ?>
                           readonly='true' maxlength="40" name='sub_name' placeholder="Subject Name" class="form-control">
                            <?php    }  ?>
            </div>
            
            <br>
            <div class="form-inline row">
                    <div class="col-xs-6 row" >
                        <label class="lead col-xs-4">Subject Code: </label>
                        <?php  
                               if(isset($_POST['view']) || isset($_POST['add'])) { 
                                   echo " <input type='text' readonly='true' name='sub_code' class='form-control' value='".$_POST['sub_code']."'>";
                                    } else {?>
                       
                          <select name="sub_code" class="form-control">
                        <?php
                            $subjects = mysqli_query($db, "SELECT distinct subcode from subfac where idn='".$_SESSION["user"]."';");
                            if(mysqli_num_rows($subjects) > 0) {
                                while($subject = mysqli_fetch_assoc($subjects)) {
                                    echo "<option>".$subject['subcode']."</option>";
                                }
                            }
                        ?>
                               </select> <?php } ?>   </div>
                  
            </div>
      
            <?php
            
             if(!isset($_POST['view']) ) {
                 if(!isset($_POST['add']))
                 echo "<input type='submit' name='view' class='btn btn-success'><br><br>";
                 
             } 
             
             else  {   
           $query = mysqli_query($db,"SELECT * FROM question WHERE sub_code='".$_POST['sub_code']."' ORDER BY criteria ;  ");
          $i=1; 
          if (mysqli_num_rows($query) > 0) {
              echo "<div class='jumbotron'>";
                                        while ($row1 = mysqli_fetch_assoc($query)) {   ?>
                                               <div class="row ">
                                            <div class="col-xs-1 lead"><?php echo $i; ?></div>
                                            <div class="col-xs-8">
                                                <p class="lead text-justify"><?php echo  $row1['statement']; ?> </p></div>
                                                     <div class="col-xs-2"><b><?php  echo "Relevance : ".$row1['criteria']; ?></b></div>
                                                     <div class="col-xs-1"><a href="cb_delete.php?qn=<?php echo $row1['qn_id']; ?>" class="fa fa-trash lead"></a></div>
                                             </div>
<?php        
                                    $i=$i+1;    }
                                    echo "</div>";
             } ?>
             <div>
                <div class="form-inline row">
                    <label class="lead col-xs-3">How Many Questions?</label>
                    <input required class="col-xs-6 form-control" type="number" min="1" max="12" placeholder="Num" name="num">
                </div>
                <input type="submit" value="Add" class="btn btn-primary col-xs-1" name="add">
                
            </div>
             
             
                                     <?php   }
            
            if(!isset($_POST['add'])) {
            ?>
            
                        
            
            <?php   } else {
                       if(isset($_POST['add'])){
                $num = $_POST['num'];
                for($i=1; $i <= $num; $i++) {
                ?>
            
            <div class="jumbotron">
                    <div class="row">
                        <div class="col-xs-9">
                            <label class="lead">Question <?php echo $i; ?> :</label>
                        </div>
                        <div class="col-xs-3">
                            <label class="lead">Relevance :</label>
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="col-xs-9">
                            <textarea required
                                    class="form-control"
                                      style="height : 80px;"
                                      <?php echo " name='question".$i."' "; ?>
                                placeholder="Question"></textarea>
                        </div>
                        <div class="col-xs-3">
                            <div>
                                <select required class="form-control" 
                                    <?php 
                                    echo "name='criteria".$i."' >\n";
                                    for($j=1; $j<=12; $j++) { ?>
                                    <option><?php echo "po".$j  ?></option>
                                    <?php   }   ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div> 
                 <?php }   ?>
            
             
                
                <input type="submit"
                name ="submit"
                value="Submit"
                class="btn btn-success">
                
            <?php  } }  ?>
            </div>
            
        </div>
        <div style="height:50px;"></div>
    </form>
        <?php  
        if(isset($insert_sub)) {
            if($insert_sub && isset($_POST['submit'])) 
                echo "<script>"
                . "alert('Subject $sub_code was addded Successfully');"
                . "</script>";
            } 
        ?>
    </body>
</html>
