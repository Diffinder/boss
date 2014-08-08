<?php require_once("../../includes/db/connection.php"); ?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Hero | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="login.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block" name="signIN">Sign me in</button>  
                    
                   <!--  <p><a href="#">I forgot my password</a></p> -->
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
            </form>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>
<?php
if(isset($_POST['signIN'])){
    $query = "SELECT pwd FROM user where mobile='".$_POST['userid']."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
   $rw1 = mysql_fetch_array($query_result);
   if(rw1['pwd']==$_POST['userid']){
    echo '<script type="text/javascript"> window.location.href = "http://localhost/boss/docs/UI/cat3.php";</script>';
   }

}
?>
