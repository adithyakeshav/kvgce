<?php  
 $db = mysqli_connect("localhost", "root", "", "kvgce");
  session_start();
if(isset($_GET['qn']))
{
    $id = $_GET['qn'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        mysqli_query($db, "delete from question where qn_id=$id;");
        header("location:add_subject.php");
        ?>
    </body>
</html>
