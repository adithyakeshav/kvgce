<!DOCTYPE html>
<?php
        session_start();
     $db = mysqli_connect("localhost","root","", "kvgce");
?>
<html>
<head>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="IMAGES/KVG_LOGO.JPG" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href="font/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

</style>
</head>
<body style="background-color:grey">
    <div style="height:50px"></div>
    <div class="row">
        <div class="col-xs-3"></div>
        
        <div class="col-xs-6"  style="background-color:white"> 
        <h1>Login Form</h1>
        <form method="POST">
            <br><div align="center">
              <img src="images/avatar.png" alt="Avatar" class="avatar">
          </div>

            <div style="padding:30px">
                <br><label class="lead"><b>Username</b></label><br>
              <input type="text" placeholder="Enter Username" name="uname" required  class="form-control">

              <br> <label class="lead"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="passwd" required class="form-control"><br>

              <button type="submit" class="btn btn-success" name="submit">Login</button>
            <button type="reset" class="btn btn-danger">Clear</button>
           </div>
             </form>
        </div>
        <div class="col-xs-3"></div>
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
