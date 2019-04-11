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

</style>
</head>

<body>
    <div class="container-fluid" >
<div class="col-xs-9">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
          <img src="images/Slide1.jpg"  style="height:450px;">
         </div>

      <div class="item">
          <img src="images/Slider2.jpg"  style="height:450px;">
             </div>
    
      <div class="item">
          <img src="images/slide31.JPG" style="height:450px;">
       </div>
       
    </div>

  </div>
</div>
        <div class="col-xs-3" style="background-color:#483d8b;color: white;">
     <div >
            <h2><i>Exit Programme Feedback</i></h2>

   
             <?php
                                if(isset($_SESSION['usn'])) {
                                ?>
            <a class="btn btn-default " href="exit.php">Fill Form</a>
                                <?php }
                                if(isset($_SESSION['user'])) {
                                ?>
            <a class="btn btn-default " href="view_exit.php">View Result</a>
                                  <?php } ?>
            <br> <br></div>
        <div>
            <h2><i>Content Beyond Feedback</i></h2>
            <p  style="text-align:justify">

   
             <?php
                                if(isset($_SESSION['usn'])) {
                                ?>
                <a class="btn btn-default " href="cb_feedback.php">Fill Form</a>
                                <?php }
                                if(isset($_SESSION['user'])) {
                                ?>
            <a class="btn btn-default " href="cb_questions.php">Add Questions</a>
         <a class="btn btn-default " href="cb_report.php">View Result</a>
                                  <?php } ?>
            <br> <br></div>
        
        <div>
            <h2><i>Course Outcome Feedback</i></h2>

   
             <?php
                                if(isset($_SESSION['usn'])) {
                                ?>
            <a class="btn btn-default " href="co_feedback.php">Fill Form</a>
                                <?php }
                                if(isset($_SESSION['user'])) {
                                ?>
            <a class="btn btn-default " href="co_questions.php">Add Questions</a>
            <a class="btn btn-default " href="co_report.php">View Result</a>
                                  <?php } ?>
            <br> <br><br></div>
        </div>
    </div><br><br>
        
     </body>
</html>
