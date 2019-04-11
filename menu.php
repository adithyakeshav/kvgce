<html>
<?php 
include 'header.php';
?>
<head>
<title>FEEDBACK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
.ams{
    background-image: url("images/Slider2.jpg");
    height: 300px;
}
p {
    text-align: justify;
}

</style>
</head>

<body>
    <div >
       <img class="mySlides" src="images/Slide1.jpg" >
       <img class="mySlides" src="images/Slider2.jpg" >
</div>
    <br><div class=" container ">
        <div class="col-xs-3" style="border: 3px solid gray;background-color: white;height: 230px">
            <h2><b>Exit Programme Feedback</b></h2>
            <p>To be submitted by those who graduated from this institution.</p><br>
   
             <?php
                                if(isset($_SESSION['usn'])) {
                                ?>
            <a class="btn btn-primary " href="exit.php">Fill Form</a>
                                <?php }
                                if(isset($_SESSION['user'])) {
                                ?>
            <a class="btn btn-primary " href="view_exit.php">View Result</a>
                                  <?php } ?>
            <br> <br></div>
        <div class="col-xs-1"></div>
        <div class="col-xs-4" style="border: 3px solid gray;background-color: white;height: 230px">
            <h2><b>Content Beyond Feedback</b></h2>
            <p>To be submitted by the students who currently study in KVGCE for activities that are beyond curriculum</p>
   
             <?php
                                if(isset($_SESSION['usn'])) {
                                ?>
            <a class="btn btn-primary " href="cb_feedback.php">Fill Form</a>
                                <?php }
                                if(isset($_SESSION['user'])) {
                                ?>
            <a class="btn btn-primary " href="add_subject.php">Add Questions</a>
         <a class="btn btn-primary " href="cb_report.php">View Result</a>
                                  <?php } ?>
            <br> <br></div>
        
        <div class="col-xs-1"></div>
        <div class="col-xs-3" style="border: 3px solid gray;background-color: white;height: 230px">
            <h2><b>Course Outcome Feedback</b></h2>
            <p>To be submitted by those who graduated from this institution.</p><br>
   
             <?php
                                if(isset($_SESSION['usn'])) {
                                ?>
            <a class="btn btn-primary " href="co_feedback.php">Fill Form</a>
                                <?php }
                                if(isset($_SESSION['user'])) {
                                ?>
            <a class="btn btn-primary " href="co_questions.php">Add Questions</a>
            <a class="btn btn-primary " href="co_report.php">View Result</a>
                                  <?php } ?>
            <br> <br></div>
        
        
    </div>
  
<footer>
    <div  style="background-color: #191970;height: 20px;margin-top: 20px;"></div>
</footer>
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
