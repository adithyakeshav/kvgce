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
<script>
      
    function execch()
    {
     
        var selected = $("#ty").val();
        var sect1=document.getElementById('sec1');
        var sect2=document.getElementById('sec2');
       
         if(selected=="1")
         {
            
          sect2.style.display='none';
          sect1.style.display='block';
         }
        if(selected=="2")
        {
         
          sect1.style.display='none';
          sect2.style.display='block';
        }
      }
  </script>
</head>
<body style="background-color: lightseagreen">
    <div style="height:50px"></div>
    <div class="row">
        <div class="col-xs-4"></div>
        
        <div class="col-xs-4"  style="background-color:white;text-align: center"> 
             <br><h1>Login Form</h1><br>
            <div align="center">
                <img src="images/avatar.png"  class="avatar">
            </div>
            <div style="padding:30px">
                <select id="ty" name="ty" class="form-control" onchange="execch()">
                    <option value="1"> Student</option>
                    <option value="2">Faculty</option>
                </select>
                <form method="post">
                    <div id="sec1"> <br> 
                        <input type="text" placeholder="USN" name="usn" required  class="form-control"><br> 
                        <input type="password" placeholder="Parent Phone No." name="passwd" required class="form-control"><br>
                        <input type="submit" class="btn btn-success form-control" name="submit" >
                    </div>
                </form>
                <form method="post">
                    <div id="sec2" style="display:none"> <br> 
                        <input type="text" placeholder="Email" name="uname" required  class="form-control"><br> 
                        <input type="password" placeholder="Password" name="passwd" required class="form-control"><br>
                        <input type="submit" class="btn btn-success form-control" name="submit" ><br>
                    </div>
                </form>
               </div>
             
             <?php
             if(isset($_POST["usn"])) { 
                    $sql = "select * from students where USN='".$_POST["usn"]."' and parnum='".$_POST['passwd']."';";
                    $result = mysqli_query($db, $sql);
                    if ( mysqli_num_rows($result) > 0 )  {
                            $_SESSION["student"] = $_POST["uname"];
                            header("location:menu.php");
                    }    else {
                        $error=1;
                    }
            }
            if(isset($_POST["uname"])) { 
                $sql = "select * from faculty where email='".$_POST["uname"]."' and pass='".$_POST['passwd']."';";
                    $result = mysqli_query($db, $sql);
                    if ( mysqli_num_rows($result) > 0 )  {
                            $_SESSION["user"] = $_POST["uname"];
                            header("location:menu.php");
                    }    else {
                        $error=1;
                    }
            }
            
             
             if(isset($error)) { ?>
           <div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              Incorrect <b>username</b> or <b>password</b> try again ! 
             </div><br><?php } ?>
        </div>
        <div class="col-xs-4"></div>
    </div>
 

</body>
</html>
