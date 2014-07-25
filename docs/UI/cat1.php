
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
    <!-- DATA TABLES -->
    <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

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
                            <div class="box-body table-responsive">
                               <div class="checkbox" style="margin-left:0px">
                                <label>
                                    <input type="checkbox" name="pickUp" checked="true">Show only NearBy Service-Centres
                                </label>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                     <th>Select</th>
                                     <th>Service Provider</th>
                                     <th>Rating</th>
                                     <th>Address</th>
                                     <th>Amenities</th>
                                     <th>Price</th>
                                 </tr>
                             </thead>
                             <tbody id="det_tab">
                                <tr>
                                    <th>Rishi Hero</th>
                                    <th>Good</th>
                                    <th>Thubarahalli,Whitefield</th>
                                    <th>Free PickUp, GoodLife Membership</th>
                                    <th>1500 INR</th>
                                    <th>
                                        <button id="shwRum1_buk" class="btn btn-success btn-flat" style="margin-left:35px" onclick="shwSlots(this.id);">Select</button>
                                    </th>
                                </tr>
                                <tr>
                                 <th>Kaveri Motors</th>
                                 <th>Good</th>
                                 <th>Marathahalli,Whitefield</th>
                                 <th>Free WaterWash for Next Service</th>
                                 <th>1700 INR</th>
                                 <th> <button id="shwRum2_buk" class="btn btn-success btn-flat" style="margin-left:35px" onclick="shwSlots(this.id);">Select</button></th>
                             </tr>

                         </tbody>
                         <tfoot>
                            <tr>
                              <th>Select</th>
                              <th>Service Provider</th>
                              <th>Rating</th>
                              <th>Address</th>
                              <th>Amenities</th>
                              <th>Price</th>
                          </tr>
                      </tfoot>
                  </table>
              </div><!-- /.box-body -->
              <div id="shwRum_buk_slots"  style="display:none;"  class="box">
                  <div class="box-body" >
                      <div  class="shwRum1_buk_slots" >You have selected <strong>ShowRoom1</strong></div>
                      <div style="float:left;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31105.995778347893!2d77.72184!3d12.955881999999985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb41c26ffa4b3e311!2sRishi+Motors+Hero+Dealers+Bangalore!5e0!3m2!1sen!2sin!4v1404983321704" width="250" height="150" frameborder="0" style="border:0"></iframe>
                    </div>
                    <div class=" table-responsive no-padding" style="margin-left:3%;width:550px;float:left">
                        <table class="table table-hover"><i><strong>Book Your Slot...</strong></i>
                            <tr>
                                <th><input type="radio">&nbsp;&nbsp;9am&nbsp;<span class="badge bg-green">6 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;10am&nbsp;<span class="badge bg-grey">0 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;11am&nbsp;<span class="badge bg-green">4 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;12pm&nbsp;<span class="badge bg-grey">0 Slots</span></th>
                            </tr>
                            <tr>
                                <th><input type="radio">&nbsp;&nbsp;1pm&nbsp;&nbsp;<span class="badge bg-red">2 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;2pm&nbsp;&nbsp;<span class="badge bg-green">6 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;3pm&nbsp;&nbsp;<span class="badge bg-grey">0 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;4pm&nbsp;&nbsp;<span class="badge bg-green">6 Slots</span></th>
                            </tr>
                            <tr>
                                <th><input type="radio">&nbsp;&nbsp;5pm&nbsp;&nbsp;<span class="badge bg-green">9 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;6pm&nbsp;&nbsp;<span class="badge bg-green">5 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;7pm&nbsp;&nbsp;<span class="badge bg-green">4 Slots</span></th>
                                <th><input type="radio">&nbsp;&nbsp;8pm&nbsp;&nbsp;<span class="badge bg-red">1 Slots</span></th>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                    <div style="width:200px;float:right;">
                        <!-- Info box -->
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <h3 class="box-title" style="font-size:15px">Color Code</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body"  style="float:left;">
                                <p>
                                    <span class="badge bg-grey">Grey&nbsp;</span> &nbsp;- Slots Empty</br>
                                    <span class="badge bg-red">Red&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;- Few Slots</br>
                                    <span class="badge bg-green">Green</span> -&nbsp;More Slots 
                                </p>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div>
                <div class="box-body" style="clear:both">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name<span class="error" id="usrn">*</span></label>
                        <input type="text" class="form-control half-width" name="username" id="exampleInputPassword1" placeholder="Please enter your full name">
                    </div>
                    <div class="form-group"> 
                       <label style="float:left;">Service Type :</label>
                       <select style="margin-left:10px"class="target">
                        <option value="option1" >Free</option>
                        <option value="option2" selected="true">Paid</option>
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
                <div class="checkbox" style="margin-left:0px">
                    <label>
                        <input type="checkbox" name="pickUp"> Need Home Pick-Up
                    </label>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>            </div><!-- /.box-body -->

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
        var availableTags = [
        "KARIZMA ZMR",
        "KARIZMA",
        "XTREME",
        "HUNK",
        "IMPULSE",
        "ACHIEVER",
        "IGNITOR",
        "GLAMOUR PROGRAMMED FI",
        "GLAMOUR",
        "SUPER SPLENDOR",
        "MAESTRO",
        "PLEASURE",
        "PASSION XPRO",
        "PASSION PRO",
        "SPLENDOR ISMART",
        "SPLENDOR PRO(BLACK ALLOYS)",
        "SPLENDOR PRO",
        "SPLENDOR NXG",
        "SPLENDOR +",
        "HF DELUXE ECO",
        "HF DELUXE",
        "HF DAWN"
        ];
        $( "#tags" ).autocomplete({
          source: availableTags
      });
    });
</script>
<script type="text/javascript">
    function shwSlots(id){
        if(document.getElementById("shwRum_buk_slots").style.display == "block")
            document.getElementById("shwRum_buk_slots").style.display = "none";
        else
            document.getElementById("shwRum_buk_slots").style.display = "block";
    }
</script>>
</body>
</html>


