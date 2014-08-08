<!DOCTYPE html>
<?php   session_start(); 
require_once("../../includes/db/connection.php"); ?>
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
    <!-- DATA TABLES -->
    <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
</head>
<body class="skin-blue" style="overflow:hidden">
<script>

var togg=1;
function fillgrid(){
    var x = document.getElementById("nearby");
    var dist__=50;
    var area__="Domlur";
    var servicetype = "<?php echo $_SESSION['servicetype'];?>";
    var company__="<?php echo $_SESSION['company'];?>";
    if(togg == 0){
        dist__=3;
        togg=1;
        area__="<?php echo $_SESSION['area'];?>";
    }
    else{
        togg=0;
    }
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("detail_tab").innerHTML=xmlhttp.responseText;
        }
    }
xmlhttp.open("POST","../Service/fetch_shwrum.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("dist="+dist__+"&area="+area__+"&company="+company__+"&servicetype="+servicetype);
}

function showMarker(lat,lon){
      
    var gMarker = null;
    var center = null;
    console.log(marker);
    var Coba1center = new google.maps.LatLng(lat,lon);
    var marker = new google.maps.Marker({
    position:Coba1center,
    });
        gMarker = marker;
        center = Coba1center;
    

    console.log(gMarker);
    console.log(center);
    google.maps.event.trigger(gMarker, 'click', {
        latLng: center
    });
      var mapCenter = new google.maps.LatLng(lat,lon);
var infowindow = null;

var mapProp = {
  center:mapCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);


google.maps.event.addListener(marker,'click',function() {
    map.setZoom(20);
    map.setCenter(marker.getPosition());
    if (infowindow) {
        infowindow.close();
    }
    infowindow = new google.maps.InfoWindow();
    infowindow.setContent("Coba1")
    infowindow.open(map,marker);
    });


marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
                            <div class="box-body table-responsive">
                               <div class="checkbox" style="margin-left:0px">
                                <label>
                                    <input type="Button" name="nearby" id="nearby" onclick="fillgrid();">Show only NearBy Service-Centres
                                </label>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                     
                                     <th>Service Provider</th>
                                     <th>Rating</th>
                                     <th>Address</th>
                                     <th>Amenities</th>
                                     <th>Price</th>
                                     <th>Select</th>
                                 </tr>
                             </thead>
                             <tbody id="detail_tab">
                                
                         </tbody>
                         <tfoot>
                            <tr>
                              <th>Service Provider</th>
                              <th>Rating</th>
                              <th>Address</th>
                              <th>Amenities</th>
                              <th>Price</th>
                              <th>Select</th>
                          </tr>
                      </tfoot>
                  </table>
              </div><!-- /.box-body -->
              <form action="cat1.php" method="POST">
              <div id="shwRum_buk_slots"  style="display:none;"  class="box">
                 <div class="box-body" >
                         <div id="googleMap" style="float:left;width:250px;height:150px;"></div> 
                        <div id="shwRum_buk_slots_"    class="box"></div>      
                </div>
                <div class="box-body" style="clear:both">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name<span class="error" id="usrn">*</span></label>
                        <input type="text" class="form-control half-width" name="name" id="exampleInputPassword1" placeholder="Please enter your full name">
                    </div>
                    <div class="form-group"> 
                       <label style="float:left;">Service Type :</label>
                       <select style="margin-left:10px"class="target" name="payment">
                        <option value="Free" >Free</option>
                        <option value="Paid" selected="true">Paid</option>
                    </select>
                </div>
                <div style="clear:both;font-style:italic;color:#a7a7a7;" >#Select Free service ,only if your bike is new and eligible for free service !!
                </div>
                <div class="form-group" style="clear:both;">
                    <label for="exampleInputPassword1">Request In-Brief</label>
                    <input type="text" class="form-control half-width" id="exampleInputPassword1" name="reqDetail" placeholder="Brief your Request">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Additional Info</label>
                    <input type="text" class="form-control half-width" name="addInfo" id="exampleInputPassword1" placeholder="Any other Info you would  like to share...">
                </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control half-width" name="addr" id="exampleInputPassword1" placeholder="Any other Info you would  like to share...">
                </div>
               
                <div class="checkbox" style="margin-left:0px">
                    <label>
                        <input type="checkbox" name="pickup"> Need Home Pick-Up
                    </label>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>            </div><!-- /.box-body -->
            </form>
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
    });
</script>
<script type="text/javascript">
    function shwSlots(id){
        if(document.getElementById("shwRum_buk_slots").style.display == "block")
          {  document.getElementById("shwRum_buk_slots").style.display = "none";

           
        }else{
            document.getElementById("shwRum_buk_slots").style.display = "block";
            var shwrum_name = id;
            var index = id.indexOf("_");
            var sname = id.substring(0,index);
            var dt="<?php echo $_SESSION["date"]; ?>";
            lat_lon = id.substring(index+1,id.length);
            lat_lon_index = lat_lon.indexOf("_");
            lat = lat_lon.substring(0,lat_lon_index);
            lon = lat_lon.substring(lat_lon_index+1,lat_lon.length);
            var dataString = 'shwrum_name='+sname+'&date='+dt ;
            $.ajax({
                type: "POST",
                url: "getShwrumDet.php", // Name of the php files
                data: dataString,
                success: function(html)
                {
                    $("#shwRum_buk_slots_").html(html);
                    showMarker(lat,lon);
                }
            });

              
        }
    }
</script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    
    $tim=time();
    //post to user table

    $query = "Replace into user values( '".$_POST['name']."','".$_SESSION['area']."','".$tim."','". $_SESSION['mobile']."','".$_SESSION['email']."','".$_POST['addr']."')";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    
    //post to vendor_order
    $sid=substr ($_POST['slot'],0,strpos($_POST['slot'],"_"));
    $exp_apt=substr ($_POST['slot'],strpos($_POST['slot'],"_")+1);
    $pkp=0;
    if($_POST['pickup']=='on'){
        $pkp=1;
    }
    $query = "Insert into vendor_order values( '". $_SESSION['mobile']."','".$sid."','".$tim."100','". $_SESSION['mobile']."','".$_SESSION['company']." ".$_SESSION['bike']."','".$_SESSION['date']."','".$exp_apt."',";
    $query .= "NULL,NULL,'1','Decision Pending','','No Advice!!','','".$_SESSION['area']."','".$pkp."')";   
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());


    //post to order det
    $query = "Insert into order_det values( '".$tim."','".$tim."100','".$_SESSION['servicetype']."','". $_POST['addInfo']."','".$_POST['reqDetail']."')";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());

    //update slots

    
}
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
    $queryx = "SELECT * FROM serv_center where area in (".$areas.")";
    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    while ($rw1 = mysql_fetch_array($queryx_result)) {

        $query = "SELECT quality FROM showroom_quality where S_id='".$rw1[S_id]."'";
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());
        $qual = mysql_fetch_array($query_result);
        $q=$qual['quality'];

        $query = "SELECT amenity,description FROM Amenities where
S_id='".$rw1[S_id]."'";         $query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());         $amnty="";
while($amm = mysql_fetch_array($query_result)){
$amnty.=$amm['amenity']." - ".$amm['description'].", ";         }

        $query = "SELECT price FROM prices where (S_id='".$rw1[S_id]."' and item_name='".$_SESSION['servicetype']."')";
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());
        $qual = mysql_fetch_array($query_result);
        $p=$qual['price'];


        $O_row.="<tr>";
        $O_row.="<td>$rw1[S_name]</td>";
        $O_row.="<td>".$q."</td>";
        $O_row.="<td>$rw1[address]</td>";
        $O_row.="<td>".$amnty."</td>";
        $O_row.="<td>Rs. ".$p."</td>";
        $O_row.='<td><button id="'.$rw1[S_id].'_'.$rw1['lati'].'_'.$rw1['longi'].'" class="btn btn-success btn-flat" style="margin-left:35px" onclick="shwSlots(this.id);">Select</button></td>';
        $O_row.="</tr>";
     }


print "<script>document.getElementById('detail_tab').innerHTML='".$O_row."';</script>";

    ?>

