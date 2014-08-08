<!DOCTYPE html>
<html lang="en">
<?php
require_once("includes/db/connection.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spring Street</title>

    <link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/ico">
    <link href="styles/css/stylish-portfolio.css" rel="stylesheet">
    <link href="styles/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/jQueryUI/jquery-ui.css">
    <link href="styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
</head>
<script>
    function bikelist(company)
    {

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
        document.getElementById("bikediv").innerHTML=xmlhttp.responseText;
    }
}
xmlhttp.open("GET","docs/Service/bikelist.php?company="+company,true);
xmlhttp.send();
}


</script>
<body>

    <!-- Side Menu -->

    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle">Menu<i style="margin-left:5px;" class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="">Hero</a>
            </li>
            <li><a href="#top">Home</a>
            </li>
            <li><a href="#about">About</a>
            </li>
            <li><a href="#services">Services</a>
            </li>
            <li><a href="#contact">Location</a></li>
            <li><a href="docs/profile/contact.php" target="_blank">Contact</a></li>
            <li><a href="docs/profile/login.php" target="_blank">Login</a>  <!-- Changed -->
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->

    <div id="top" class="content">
        <div class="vert-text">
            <img src="styles/img/spring_logo.png" style="float:left;margin-left:23.5%;width:14%;height:auto;margin-bottom:5px;">
            <h3 style="margin-left:-42%;clear:both;font-size:135% !important;">
                ...&nbsp;<em>Service</em>&nbsp;
                <em>Springs </em><em>&nbsp;here...</em> </h3>
                <a href="#about" class="btn btn-primary btn-lg" style="margin-left:-42%;">Book A Service</a>
            </div>
        </div>
        <!-- /Full Page Image Header Area -->

        <!-- Intro -->
        <div id="about" class="intro">
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2>Our Philosophy!</h2>
                        <p class="lead">Spring Street aims at delivering quality service to customers in the right time ,at the right place.<!-- <br/>We value your time and provide you the best service by allowing you to pick from the best. -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Intro -->

            <!-- Services -->
            <div id="services" class="services" style="margin-top: -60px;">
                <div class="container">

                    <div class="row" style="margin-top: -60px;">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <h2>Service Booking</h2>
                            <hr>
                        </div>
                    </div>
                </a>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6 " >
                        <!-- general form elements -->
                        <div class="box box-primary" style="">
                            <!-- form start -->
                            <form role="form" action ="docs/Service/choice.php" method="POST">
                                <div class="box-body">               
                                    <div class="col-xs-12" >
                                        <div class="form-group" style="">
                                            <label for="exampleInputPassword1">Your Location<!--Added--><span class="error" >*</span></label>
                                            <input type="text" class="form-control" onchange="checkfield();" name="area" id="area" placeholder="Start typing your area, eg. Domlur">
                                        </div>
                                    </div>
                                    <div class="col-xs-6" >
                                        <div class="form-group" style="">
                                            <label>Service Category<!--Added--><span class="error" id="scat">*</span></label>
                                            <select class="form-control" onchange="checkfield();" name="servicetype" id="stype">
                                                <option selected="true">--Select--</option>
                                                <option value="Periodic Servicing">Periodic Servicing</option>
                                                <option value="Waterwash Service">Waterwash Service</option>
                                                <option value="Repair">Repair</option>
                                                <option value="Accidental">Accidental</option>
                                                <option value="Puncture">Puncture</option>
                                                <option value="Insurance Renewal">Request for Insurance Renewal</option>
                                                <option value="Accessories/Spairs">Accessories/Spares</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-6" >
                                        <div class="form-group" style="">
                                            <label style="">Appointment Date&nbsp;<span class="error" id="adt">*</span></label>
                                            <p id="datepairExample">
                                                <input type="text" onchange="checkfield();" style="" class="date start form-control" id="date_" name="date_" placeholder="eg.:27/07/2014"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 " >
                                            <div class="form-group" style="">
                                             <label>Bike Company<span class="error" id="scat">*</span></label>
                                             <select class="form-control" id="company" name="company" onchange="bikelist(this.value)">
                                                 <option value="">--Select--</option>
                                                 <option value="Bajaj">Bajaj</option>
                                                 <option value="Hero">Hero</option>
                                                 <option value="Honda">Honda</option>
                                                 <option value="TVS" >TVS</option>
                                                 <option value="Enfield" >Royal Enfield</option>
                                                 <option value="Yamaha" >Yamaha</option>
                                                 <option value="Suzuki" >Suzuki</option>
                                                 <option value="KTM" >KTM</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-xs-6 " >
                                        <div class="form-group" style="">
                                         <label>Bike Model<span class="error" id="bikename">*</span></label>
                                         <select class="form-control" id="bikediv" onchange="checkfield();" name="model">
                                         <option value="">--Select--</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-xs-12" >
                                <div class="box-footer">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary" disabled>Submit</button>
                                </div>
                            </form>
                        </div><!-- /.box -->
                    </div>

                </div>
            </div>
            <div class="col-md-6" style="padding-left:80px"></br>
               <div class="box box-primary">
                  <div class="box box-solid">
                    <div class="box-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="styles/img/hero_cover.png" alt="First slide"  style="width:600px;height:350px;"><!-- Changed -->
                                    <div class="carousel-caption">
                                        <h4 style="color: #Fff;">Welcome</h4><!-- Changed -->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="styles/img/goodlife.jpg" alt="Second slide" style="width:600px;height:350px;"><!-- Changed -->
                                    <div class="carousel-caption">
                                        <h4 style="color: #Fff;">Hero's GoodLife</h4><!-- Changed -->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="styles/img/hero_latest3.jpg" alt="Third slide" style="width:600px;height:350px;"><!-- Changed -->
                                    <div class="carousel-caption">
                                     <h4 style="color: #Fff;"> What's New ?</h4><!-- Changed -->
                                 </div>
                             </div>
                             <div class="item">
                                <img src="styles/img/hero_cover1.jpg" alt="Third slide" style="width:600px;height:350px;"><!-- Changed -->
                                <div class="carousel-caption">
                                 <h4 style="color: #Fff;"> What's New ?</h4><!-- Changed -->
                             </div>
                         </div>
                     </div>
                     <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <!-- Info box -->
    </div><!-- /.box-body -->
</div><!-- /.box -->
</div><!--/.col (right) -->
</div>
</div>
</div>
<!-- /Services -->

<!-- Callout -->
<div class="callout">
    <div class="vert-text">
        <h1></h1>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center" style="">
                <div class="top-scroll">
                    <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                </div>
                <hr>
                <p>Copyright &copy; Rishi Motors 2014</p>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- JavaScript -->
<script src="script/js/jquery-1.10.2.js"></script>
<script src="script/js/bootstrap.js"></script>
<script type="text/javascript" src="script/js/jquery.chained.js"></script>
<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
<script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });


</script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>
<script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<script src="script/js/jquery-1.10.2.js"></script>
<script src="script/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="script/js/jquery.timepicker.js"></script>
<?php 
$query = "SELECT distinct area FROM area";
$query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());
$O_row="\"Halarur\"";
while ($rw1=mysql_fetch_array($query_result)) {
    $O_row.=",\"".$rw1[area]."\"";
}
?>

<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
  $(function() {
    var availableTags = [<?php             echo $O_row; ?>];
    $( "#area" ).autocomplete({
      source: availableTags
  });
    $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia',
        'minTime':'9:00 am',
        'maxTime':'6:00 pm'
    });

    $('#datepairExample .date').datepicker({
        'dateFormat': 'DD, d MM, yy',
        'minDate': +2, 'maxDate': "+1M +10D",'showAnim':"drop",
        'autoclose': true
    });
    $("#bike_company").chained("#bike_model");
    $("#series").chained("#mark");
});


  function checkfield(){
    var e1 = document.getElementById("area");
    var e2 = document.getElementById("ph");
    var e3 = document.getElementById("company");
    var e4 = document.getElementById("bikediv");
    var e5 = document.getElementById("stype");
    var e6 = document.getElementById("date_");
    var str1 = new Array(6);
    str1[0]  = e1.value;
    str1[1]  = e2.value;
    str1[2]  = e3.options[e3.selectedIndex].text;
    str1[3]  = e4.options[e4.selectedIndex].text;
    str1[4]  = e5.options[e5.selectedIndex].text;
    str1[5]  = e6.value;
    var x=0;
    for (i = 0; i < str1.length; i++) { 
     if(str1[i]=="" || str1[i]=="--Select--" || str1[i]=="undefined"){
       x=1;

   }
}
if(x==0){
    document.getElementById("submit").disabled = (1==0);
}else{
    document.getElementById("submit").disabled = (1==1);
}

}


</script>


</body>

</html>
<?php
if(isset($_POST['submit'])){ 
    if($_POST['servicing'] == "11" || $_POST['servicing'] == "12" || $_POST['servicing'] == "13"){
        header("location:docs/UI/cat1.php");
    }
    else if($_POST['servicing'] == "21" || $_POST['servicing'] == "22"){
        header("location:docs/UI/cat2.php");
    }
    else if($_POST['servicing'] == "31"){
        header("location:docs/UI/cat3.php");
    }
    else if ($_POST['servicing'] == "41") {
        header("location:docs/UI/cat4.php");
    }
    else{
        print("<script>");
        print("alert('Enter Correct Values');");
        print("</script>");
    }
}
?>
