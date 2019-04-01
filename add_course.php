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
            <div class="row">
                <div class="col-xs-3">
                    <input type="text" maxlength="40" name="course" placeholder="Course Name" class="form-control">
                    <input type="submit" name="submit" class="btn btn-success">
                </div>
            </div>
        </div>
    </body>
</html>
