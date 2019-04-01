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
                        
                                
                        <select name="year"
                                class="lead col-xs-7 form-control" >
                            <option value="#">--select year--</option>
                            <option value="2010">2010</option>
                            <option value="2015">2015</option>
                            <option value="2017">2017</option>
                        </select>
                            <?php } ?>
                    </div>
            </div>
            <br>
            
            <?php
            if(isset($_POST['add']))
                if(isset($_COOKIE['questions']))
                    array_push ($_COOKIE['questions'],$_POST['question']);
                else $_COOKIE['questions'] = array($_POST['question']);
            ?>
            <div class="jumbotron">
                <div class="row">
                        <div class="col-xs-9">
                            <label class="lead">Question :</label>
                        </div>
                        <div class="col-xs-3">
                            <label class="lead">Criteria :</label>
                        </div>
                    </div>
                <form method="post">
                    
                    <div class="row">
                        <textarea class="col-xs-9"
                                  style="height : 80px;"
                                  name ="question"
                            placeholder="Question"></textarea>
                        <div class="col-xs-3">
                            <div>
                                <label class=>P1 <input type="checkbox" name="p1"></label>
                                <label class=>P2 <input type="checkbox" name="p2"></label>
                                <label class=>P3 <input type="checkbox" name="p3"></label>
                                <label class=>P4 <input type="checkbox" name="p4"></label>
                                <label class=>P5 <input type="checkbox" name="p5"></label>
                            </div>
                        </div>
                    </div>
                    <br>
                   <input type="submit"
                name ="add"
                value="Add Question"
                class="btn btn-info">
            </div> 
            
                <?php 
                
                if(isset($_COOKIE['questions'])) {
                
                ?>
                <input type="submit"
                name ="submit"
                value="Submit"
                class="btn btn-success">
                
                <?php }
                if(isset($_COOKIE['questions']))
                    echo implode(" ",$_COOKIE['questions']);
                ?>
            </div>
            
        </div>
        <div style="height:50px;"></div>
        </form>
    </body>
</html>
