<?php  
 $db = mysqli_connect("localhost", "root", "", "kvgce");
  session_start();
if(isset($_GET['qn']))
{
    $id = $_GET['qn'];
}
         $sub = mysqli_query($db, "SELECT sub_code from question where qn_id='$id';");
         $code = mysqli_fetch_assoc($sub)['sub_code'];
         $count = mysqli_query($db, "SELECT count(*) as num from question where sub_code='".$code."';");
         mysqli_query($db, "delete from cb_feedback where qn_id='$id';");
         mysqli_query($db, "delete from question where qn_id='$id';");
         mysqli_query($db, "DELETE from subject where sub_code='".$code."'");
       
         header("location:add_subject.php");
        ?>
 
