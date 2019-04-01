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
        <div class="container">
            <div class="form-inline">
                <form>
                    <input type="text" maxlength="40" name="sub_name" placeholder="Subject Name" class="form-control">
                    <input type="submit" name="submit" value="Add Subject" class="btn btn-success">
                </form>
            </div>
            <br>
            <div class="jumbotron row">
                <form>
                    <div class="col-xs-6 row" align="center">
                        <label class="lead col-xs-5">Subject Code : </label>
                        <input 
                            type="text" 
                            maxlength="40" 
                            class="col-xs-7 lead" 
                            name="sub_code" 
                            placeholder="Code">
                    </div>
                    <div class="col-xs-6 row" align="center">
                        <label class="lead col-xs-5">Scheme : </label>
                        <select name="year" class="lead col-xs-7" >
                            <option value="#">--select year--</option>
                            <option value="2010">2010</option>
                            <option value="2015">2015</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>
                </form>
            </div>
            
        </div>
    </body>
</html>
