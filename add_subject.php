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
        <title></title>
    </head>
    <body>
        <form method="post">
        <div class="container">
            <?php 
            if(isset($_POST['submit'])) {
                $scheme = $_POST['year'];
                $sub_name = strtoupper($_POST['sub_name']);
                $sub_code = strtoupper($_POST['sub_code']);
                $query = "INSERT INTO subject VALUES('".$sub_code."','".$sub_name."','".$scheme."');";

                $insert_sub = mysqli_query($db, $query);
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
            ?>
            <div class="form-inline ">
                    <label class="lead">Subject Name : </label>
                    <input required type="text" autocomplete="off"
                           <?php
                            if(isset($_POST['add'])) {
                                echo " readonly='true' value='".$_POST['sub_name']."' ";
                            }
                           ?>
                           maxlength="40" name='sub_name' placeholder="Subject Name" class="form-control">
            </div>
            
            <br>
            <div class="form-inline row">
                    <div class="col-xs-6 row" >
                        <label class="lead col-xs-4">Subject Code: </label>
                        <input
                            required
                            type="text" 
                            autocomplete="off"
                            maxlength="40"
                            <?php
                            if(isset($_POST['add'])) {
                                echo " readonly='true' value='".$_POST['sub_code']."' ";
                            }
                           ?>
                            class="col-xs-8  form-control" 
                            name="sub_code" 
                            placeholder="Code">
                    </div>
                    <div class="col-xs-6 row" align="center">
                        
                        <label class="lead col-xs-5">Scheme : </label>
                        <?php
                            if(!isset($_POST['add'])) {
                           ?>       
                        <select required
                                name="year"
                                class="lead col-xs-7 form-control" >
                            
                            <?php  
                            $scheme = mysqli_query($db, "select * from scheme;");
                            if(mysqli_num_rows($scheme) > 0) {
                                while($row = mysqli_fetch_assoc($scheme)) {
                                    
                                    echo "<option value='".$row['year']."'>".$row['year']."</option>\n";
                            ?>
                            <?php }}  ?>
                        </select>
                            <?php } else { ?>
                        <input name="year"
                                class="lead col-xs-7 form-control"
                                readonly="true"
                                <?php echo "value='".$_POST['year']."' " ; ?>
                            >
                        
                            <?php  } ?>
                    </div>
            </div>
            <br>
            
            <?php
            if(!isset($_POST['add'])) {
            ?>
            
            <div>
                <div class="form-inline row">
                    <label class="lead col-xs-3">How Many Questions?</label>
                    <input required class="col-xs-6 form-control" type="number" min="1" max="12" placeholder="Num" name="num">
                </div>
                <input type="submit" value="Add" class="btn btn-primary col-xs-1" name="add">
            </div>
            
            
            <?php   } else {
                $num = $_POST['num'];
                
                for($i=1; $i <= $num; $i++) {
                ?>
            
            <div class="jumbotron">
                    <div class="row">
                        <div class="col-xs-9">
                            <label class="lead">Question <?php echo $i; ?> :</label>
                        </div>
                        <div class="col-xs-3">
                            <label class="lead">Criteria :</label>
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
                <?php } ?>
            
             
                
                <input type="submit"
                name ="submit"
                value="Submit"
                class="btn btn-success">
                
            <?php  }  ?>
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
