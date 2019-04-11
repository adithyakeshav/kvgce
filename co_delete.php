<?php  
 $db = mysqli_connect("localhost", "root", "", "kvgce");
  session_start();
if(isset($_GET['qn']))
{
    $id = $_GET['qn'];
}
mysqli_query($db, "delete from co_feedback where qn_id='$id';");
mysqli_query($db, "delete from co_questions where qn_id='$id';");

header("location:co_questions.php");
?>
 
