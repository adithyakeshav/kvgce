<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <form method="post">
                <div class="container jumbotron " >
                <p  align="center"><font size="+3">Department of Computer Science and Engineering</font></p>
                <p  align="center"> <font size="+2">  BE Students Exit Feedback</font> </p>
                <div class="row">
                    <div class="col-md-4"> <br><p><font size="+1">Name :  <br>
                            <input type="text" pattern="[a-zA-Z]{4,}" name="name" class="form-control" required></font></p>
                    </div>
                    <div class="col-md-4"> <br>
                        <p><font size="+1">USN :<br> 
                            <input type="text" name="usn"  minlength="10"
                                   pattern="[4][kK][vV][1-9]{2}[cC][sS][0-9]{3}"
                                   maxlength="10" class="form-control" required>
                            </font></p>
                    </div>

                    <div class="col-md-4"> <br>
                        <p>
                            <font size="+1">Subject Code : <br>
                            <select name="code" class="form-control">
                                <?php   
                                $code = mysqli_query($db, "SELECT sub_code FROM subject;");
                                if(mysqli_num_rows($code)>0) {
                                    while($row=mysqli_fetch_assoc($code)) {
                                        echo "<option value='".$row['sub_code']."'>".$row['sub_code']."</option>\n";
                                }} ?>
                            </select>
                            </font>
                        </p>
                    </div>
                </div> 
                <div class="row col-md-2">
                    <input type="submit" name="show"
                           class="btn btn-success form-control"
                           >
                </div>
                
            </div>
            </form>
        </div>
    </body>
</html>
