    <?php
    session_start(); 
    
          
        $_SESSION['servicetype'] =$_POST['servicetype'];
        $_SESSION['mobile'] =$_POST['phNum'];
        $_SESSION['area'] =$_POST['area'];
        $_SESSION['bike']=$_POST['model'];
        $_SESSION['company']=$_POST['company'];
        $_SESSION['email'] =$_POST['email'];
        $_SESSION['date'] =$_POST['date_'];   
        if($_POST['servicetype']=='Periodic Servicing' or $_POST['servicetype']=='Water-wash Service' or $_POST['servicetype']=='Insurance Renewal'){
            echo '<script type="text/javascript"> window.location.href = "http://localhost/boss/docs/UI/cat1.php";</script>';
        }elseif($_POST['servicetype']=='Repair' or $_POST['servicetype']=='Accidental'){
            $_SESSION['servicetype']='Repair';
             echo '<script type="text/javascript"> window.location.href = "http://localhost/boss/docs/UI/cat2.php";</script>';
        }else{
            echo '<script type="text/javascript"> window.location.href = "http://localhost/boss/docs/UI/cat3.php";</script>';
        }
    
    ?>