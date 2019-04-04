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
                                    if (mysqli_num_rows($code) > 0) {
                                        while ($row = mysqli_fetch_assoc($code)) {
                                            echo "<option value='" . $row['sub_code'] . "'>" . $row['sub_code'] . "</option>\n";
                                        }
                                    }
                                    ?>
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
       <?php 
       if(isset($_POST['show'])){
           $query = mysqli_query($db,"select * from question where sub_code='".$_POST['code']."' ;  ");
          $i=1; ?>
            <?php if (mysqli_num_rows($query) > 0) {
                                        while ($row1 = mysqli_fetch_assoc($query)) {   ?>
                                               <div class="row">
                                            <div class="col-xs-1 lead"><?php echo $i; ?></div>
                                            <div class="col-xs-9">
                                                <p class="lead text-justify"><?php echo  $row1['statement']; ?> </p>
                                                <?php //variables nmaes not changed change it!! ?>
                                                <label class="text-primary form-control" >  <input type="radio" name="ps1" required value="3"> Strongly Agree</label><br>
                                                <label class="text-primary form-control" ><input type="radio" name="ps1" value="2"> Fairly Agree</label><br>
                                                <label class="text-primary form-control" ><input type="radio" name="ps1" value="1"> Disagree</label><br>
                                            </div>  
                                            <div class="col-xs-2"><p><?php  echo $row1['criteria']; ?></p></div>
                                        </div>
<?php        
                                    $i=$i+1;    }
                           }
       }
       ?>
        
    </body>
</html>
