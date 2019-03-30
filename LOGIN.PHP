<!DOCTYPE html>
<?php
        session_start();
     $db = mysqli_connect("localhost","root","", "kvgce");
?>
<html>
<head>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <link rel="shortcut icon" href="images/kvg_logo.jpg"/>
<style>
body {font-family: Arial, Helvetica, sans-serif;color : #132853; }
form {border: 3px solid #f1f1f1;}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

</style>
</head>
<body style="background-color: lightseagreen">
    <div style="height:50px"></div>
    <div class="row">
        <div class="col-xs-4"></div>
        
        <div class="col-xs-4"  style="background-color:white"> 
        <h1>Login Form</h1>
        <form method="POST">
            <br><div align="center">
              <img src="images/avatar.png"  class="avatar">
          </div>

            <div style="padding:30px">
                <br><label class="lead"><b>Username</b></label><br>
              <input type="text" placeholder="Enter Username" name="uname" required  class="form-control">

              <br> <label class="lead"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="passwd" required class="form-control"><br>

              <button type="submit" class="btn btn-success form-control" name="submit">Login</button>
                <br><br><p align="center" class="lead">--- OR ---</p>
            <a href="signup.php" class="btn btn-info form-control">Sign Up</a>
           </div>
        </form>
          <br>
        </div>
        <div class="col-xs-4"></div>
    </div>
    <?php
	if(isset($_POST['submit'])) {
		
		$sql = "select passwd from login where username='".$_POST["uname"]."' and passwd='".$_POST['passwd']."';";
		$result = mysqli_query($db, $sql);
		if ( mysqli_num_rows($result) > 0 )  {
			$_SESSION["user"] = $_POST["uname"];
			header("location:exit.php");
		
		}

        }
?>

</body>
</html>
