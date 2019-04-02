<!DOCTYPE html>

<?php
    include 'header.php';
    if(!isset($_SESSION['user'])) {
        header("location:login.php");
    }
    if(isset($_POST['submit'])) {
        
        //if(isset)
        
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
                        <?php
                            if(!isset($_POST['add'])) {
                           ?>
                        <label class="lead col-xs-5">Scheme : </label>
                        
                                
                        <select required
                                name="year"
                                class="lead col-xs-7 form-control" >
                            <option value="2010">2010</option>
                            <option value="2015">2015</option>
                            <option value="2017">2017</option>
                        </select>
                            <?php } ?>
                    </div>
            </div>
            <br>
            
            <?php
            if(!isset($_POST['year'])) {
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
                                <select required name="criteria" class="form-control">
                                    <?php for($j=1; $j<=$num; $j++) { ?>
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
    </body>
</html>
