<?php   session_start(); 
require_once("../../includes/db/connection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Spring Street</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../styles/css/star-rating.css" rel="stylesheet" type="text/css" />
        <link href="../../styles/css/jquery.raty.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
            <link href="../../styles/css/bootstrap-switch.css" rel="stylesheet">

    </head>
    <body class="skin-blue" style="overflow:hidden">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://rishihero.heromotocorpdealers.com/HMC/Default.aspx/" target="_blank" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Spring Street
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                          <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i><!--feed change-->
                                <span class="label label-success" id="feednum">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 message</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Wanna Make it more Easy?
                                                    <small><i class="fa fa-clock-o"></i> 2 mins</small>
                                                </h4>
                                                <p>Why not you Register?</p>
                                            </a>
                                        </li><!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Guest <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Spring Street
                                        <small>Service Springs here..</small>
                                    </p>
                                </li>
                            
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="login.php" class="btn btn-default btn-flat">Login</a><!-- Changed -->
                                    </div>
                                    <div class="pull-right">
                                        <a href="register.php" class="btn btn-default btn-flat">Register</a><!-- Changed -->
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Guest</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                     <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" target="_blank"><!-- Changed -->
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Register/Login</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="login.php"><i class="fa fa-angle-double-right"></i> Login</a></li><!-- Changed -->
                                <li><a href="register.php"><i class="fa fa-angle-double-right"></i> Register</a></li><!-- Changed -->
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Spring Street
                        <small>Guest Order</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Spring Street</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Customer Order Details</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Customer Order Details</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="form-group" style="margin-left:15px"> 
                                         <label >Service Type :</label>
                                            <select style="margin-left:5px"class="target" id="ser">
                                                <option value="option1" selected="selected">Normal</option>
                                                <option value="option2">Emergency</option>
                                              </select>
                                        </div>
                                         <div style="clear:both;font-style:italic;color:#a7a7a7;margin-left:15px" >#Select Emergency service ,only if it is an onroad repair!!
                                        </div>
                                        <div style="clear:both;font-style:italic;color:rgb(143, 63, 63);;display:none;margin-left:15px" id="emerNote" >#Emergency service is available only from 9am to 9pm!!
                                        </div>
                                    
                                           <div class="btn-group btn-toggle form-group" style="margin-left:10px;margin-top:15px;"> 
                                            <button class="btn btn-xs btn-default active">Near By</button>
                                            <button class="btn btn-xs btn-primary ">View All</button>
                                            </div>
                                <div class="box-body table-responsive" id="shwRumTable">
                             
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                               <th>Select</th>
                                                <th>Service Provider</th>
                                                <th style="width:12%;">Rating</th>
                                                <th>Address</th>
                                                <th>Amenities</th>
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                  <th>Select</th>
                                                <th>Service Provider</th>
                                                <th>Rating</th>
                                                <th>Address</th>
                                                <th>Amenities</th>
                                             </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-body">
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Name<span class="error" id="usrn">*</span></label>
                                            <input type="text" class="form-control half-width" name="name" id="exampleInputPassword1" placeholder="Please enter your full name">
                                        </div>
                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                                              <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
                                            <script type="text/javascript">
                                             $('#shwCheck').change(function () {
                                                alert('changed');
                                             });
                                            var flag = 1;
                                                      $( ".target" ).change(function() {
                                                        if(flag == 1)
                                                        {
                                                            document.getElementById('shwRumTable').style.display="none";
                                                            document.getElementById('emerNote').style.display="block";
                                                            document.getElementById('addInfo').style.display="none";
                                                            document.getElementById('homePick').style.display="none";
                                                            flag=0;
                                                        }
                                                      else
                                                      {
                                                            document.getElementById('shwRumTable').style.display="block";
                                                            document.getElementById('addInfo').style.display="block";
                                                            document.getElementById('homePick').style.display="block";
                                                            document.getElementById('emerNote').style.display="none";

                                                            flag=1;
                                                      }
                                                    });
                                            </script>
                                 
                                          <div class="form-group" style="clear:both;">
                                            <label for="exampleInputPassword1">Request In-Brief</label>
                                            <input type="text" class="form-control half-width" id="exampleInputPassword1" name="reqDetail" placeholder="Brief your Request">
                                        </div>
                                    
                                        <div class="form-group" id="addInfo">
                                            <label for="exampleInputPassword1">Additional Info</label>
                                            <input type="text" class="form-control half-width" name="addr" id="exampleInputPassword1" placeholder="Any other Info you would  like to share...">
                                        </div>
                                         <label for="exampleInputPassword1">Mobile Number<!--Added--><span class="error">*</span></label>
                                        <input type="text" class="form-control half-width" name="phnum" id="ph" placeholder="10 Digit Mobile Number">
                                    </div>
                                <div class="form-group" style="">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" style="" class="form-control half-width" id="email" onchange="checkfield();" placeholder="Enter Your Valid  email">
                                </div>
                                        <div class="checkbox" style="margin-left:0px"    id="homePick">
                                            <label>
                                                <input type="checkbox" name="pickUp"> Need Home Pick-Up
                                            </label>
                                        </div>
                                         <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Query</button>
                                    </div>
                                    </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../script/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../../script/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../script/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- page script -->
         <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
         <script src="../../script/js/star-rating.js"></script>
         <script src="../../script/js/jquery.raty.js"></script>
<<<<<<< HEAD
         <script src="../../script/js/bootstrap-switch.js"></script>
=======

<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
$dist=3.00;

$place=$_SESSION['area'];
       
    $query = "SELECT * FROM area where area='".$place."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query2 = "SELECT * FROM area";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $O_row=" ";
   
   
    $src=mysql_fetch_array($query_result);
    $areas="'".$src['area']."'";
    while ($rw1 = mysql_fetch_array($query_result2)) {
          if(distance($src['lati'],$src['longi'],$rw1['lati'],$rw1['longi'])<$dist and $src['area']!=$rw1['area']){
            $areas = $areas.",'".$rw1['area']."'";
        }
    }
    $queryx = "SELECT * FROM serv_center where area in (".$areas.") ";
    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    
    while ($rw1 = mysql_fetch_array($queryx_result)) {



        $query = "SELECT amenity,description FROM Amenities where S_id='".$rw1[S_id]."'";         
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());         $amnty="";
        while($amm = mysql_fetch_array($query_result)){
        $amnty.=$amm['amenity']." - ".$amm['description'].", ";         
        }

        

        $O_row.="<tr>";
        $O_row.='<th><input type="checkbox" name="chk_$sid" id="chk_$sid" ></th>';
        $O_row.="<td>$rw1[S_name]</td>";
        $O_row.='<th><div id="r_'.$rw1[S_id].'" type="number" class="rating" ></div></th>';
        $O_row.="<td>$rw1[address]</td>";
        $O_row.="<td>".$amnty."</td>";
        $O_row.="</tr>";
        
     }


print "<script>document.getElementById('det_tab').innerHTML=document.getElementById('det_tab').innerHTML+'".$O_row."';</script>";
?>
<?php
$text=<<<EOT
>>>>>>> 80e488c5ebc1e26867f8e8de90acb60e64314d1c
        <script type="text/javascript">
       
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
<<<<<<< HEAD
           $('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
        $(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
        $(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
        $(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
        $(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});

           $("[name='my-checkbox']").bootstrapSwitch();
=======
                // initialize with defaults
$( document ).ready(function() {
    console.log( "ready!" );

EOT;
   $queryx = "SELECT * FROM serv_center where area in (".$areas.")";
    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    
    while ($rw1 = mysql_fetch_array($queryx_result)) {

        $query = "SELECT (rate_1*1+rate_2*2+rate_3*3+rate_4*4+rate_5*5)/(rate_1+rate_2+rate_3+rate_4+rate_5) as rate FROM rating where S_id='".$rw1[S_id]."'";
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());
        $qual = mysql_fetch_array($query_result);
        $q=$qual['rate'];
        $text.= "\n$('#r_".$rw1[S_id]."').raty({\n";
        $text.= "score : ".$q.",\n";
        $text.= "readOnly : true\n";
        $text.= "});\n";


    }
$text.=<<<eod
>>>>>>> 80e488c5ebc1e26867f8e8de90acb60e64314d1c
$('#serRating').raty({
   score : 1.5,
   readOnly : true
});
$('#serRating1').raty({ score: 3.5,
   readOnly : true });

        });
});
        </script>
eod;
echo $text;
?>
<?php
if(isset($_POST['submit'])){
    
    $tim=time();
    //post to user table

    $query = "Replace into user values( '".$_POST['name']."','".$_SESSION['area']."','".$tim."','". $_POST['phnum']."','".$_POST['email']."','".$_POST['addr']."')";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    
    //post to vendor_order
    
    $query = "Insert into vendor_order values( '". $_POST['phnum']."','".$sid."','".$tim."100','". $_POST['phnum']."','".$_SESSION['company']." ".$_SESSION['bike']."','".$_SESSION['date']."','".$exp_apt."',";
    $query .= "NULL,NULL,'1','Decision Pending','','No Advice!!','','".$_SESSION['area']."','".$pkp."')";   
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());


    //post to order det
    $query = "Insert into order_det values( '".$tim."','".$tim."100','".$_SESSION['servicetype']."','". $_POST['addInfo']."','".$_POST['reqDetail']."')";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());

    //update slots

    
}

?>


    </body>
</html>

    
