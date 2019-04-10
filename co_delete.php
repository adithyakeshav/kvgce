<?php  
 $db = mysqli_connect("localhost", "root", "", "kvgce");
  session_start();
if(isset($_GET['qn']))
{
    $id = $_GET['qn'];
}
         mysqli_query($db, "delete from cb_feedback where qn_id='$id';");
         mysqli_query($db, "delete from question where qn_id='$id';");
       
         header("location:co_questions.php");
        ?>
 
