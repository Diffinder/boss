<!DOCTYPE html>
<html lang="en">

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
    <link href="styles/css/jquery.timepicker.css" rel="stylesheet" type="text/css" />
</head>

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
                        <div class="box box-primary">
                               <!--  <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div> /.box-header --> 
                                <!-- form start -->
                                <form role="form" action ="docs/UI/cat1.php" method="POST">
                                    <div class="box-body">
                                        <div class="form-group" style="width:465px">
                                            <label for="exampleInputPassword1">Your Location<!--Added--><span class="error" id="ph">*</span></label>
                                            <input type="text" class="form-control" name="phNum" id="tags" placeholder="Start typing your area, eg. Marathahalli">
                                        </div>
                                        <div class="form-group" style="clear:both;float:left;">
                                            <label>Service Category<!--Added--><span class="error" id="scat">*</span></label>
                                            <select class="form-control" name="servicing">
                                                <option selected="true">--Select--</option>
                                                <option>Periodic Servicing</option>
                                                <option>Water-wash Service</option>
                                                <option>Repair</option>
                                                <option>Accidental</option>
                                                <option>Puncture</option>
                                                <option>Request for Renewal</option>
                                                <option>Accessories/Spairs</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="float:left;margin-left:20px;">
                                         <label>Bike Company<span class="error" id="scat">*</span></label>
                                        <select class="form-control" id="mark" name="mark">
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
                                    <div class="form-group" style="float:left;margin-left:20px;">
                                     <label>Bike Model<span class="error" id="scat">*</span></label>
                                        <select class="form-control" id="series" name="series">
                                           <option value="">--Select--</option>
                                              <option value="Avenger" class="Bajaj">Avenger</option>
                                              <option value="Karizma" class="Hero">Karizma</option>
                                              <option value="Twister" class="Honda">Twister</option>
                                              <option value="ThunderBird" class="Enfield">ThunderBird</option>
                                              <option value="FZ" class="Yamaha">FZ</option>
                                              <option value="Duke" class="KTM">DUKE</option>
                                        </select>
                                    </div>
                                            <script src="script/js/jquery-1.10.2.js"></script>
                                            <script src="script/js/bootstrap.js"></script>
                                        <script type="text/javascript" src="script/js/jquery.chained.js"></script>
                                        <script type="text/javascript">
                                            $("#series").chained("#mark");
                                        </script>
                                        <div class="form-group" style="clear:both;width:465px">
                                            <label for="exampleInputPassword1">Mobile Number<!--Added--><span class="error" id="ph">*</span></label>
                                            <input type="text" class="form-control" name="phNum" id="exampleInputPassword1" placeholder="10 Digit Mobile Number">
                                        </div>
                                        <div class="form_elem" style="width:465px">
                                            <label>Appointment Date&nbsp;and&nbsp;Time<span class="error" id="adt">*</span></label>
                                            <p id="datepairExample">
                                                <input type="text" style="float:left;width:165px" class="date start form-control" name="date__" placeholder="27/07/2014"/>
                                                <input type="text" style="float:left;width:157px" class="time start form-control" name="time__" placeholder="11.30 am"/></p>
                                            </div>
                                            <div class="form-group" style="clear:both;width:465px">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Valid  email">
                                            </div>
                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div><!-- /.box -->
                            </div>
                            <div class="col-md-6" style="padding-left:80px">
                               <br/><br/>
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

                    </form>
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

    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script>
      $(function() {
        var availableTags = [
        "Srinivas nagar","Prashanth nagar","Konena Agrahara","Dr Rajkumar Road","Mango Mist Resort","JiganiAshwath Nagar","Marathahalli","Mangamanpalya","Muneshwara Nagar","Balepet","Valmiki Nagar","Kodihalli","Basapura,Hosur Road","kalipura","Dupanahalli, Indira Nagar","Kamakshipalya","BHEL Layout","Basaveshwaranagar","Chagaletty","Cambridge Road","Vasantnagar","Yeshwantpur Railway Station","Suddaguntapalya, C V Raman Nagar","Kanakpura road, Sarakki Signa","Karmelaram Railway Station","Puttenahalli","JP Nagar 4th Phase","Deepanjali Nagar","Taj Vivanta, Whitefield","St Johns Road","Ashok Nagar, Banashankari","Madhava Nagar","L.R. Nagar 2nd Stage","Bande Bommasandra","Sarjapur Road","Venkatpura","Gowripalaya","Chord Road","Medahalli, Krishnarajapura","Dollars Colony, JP Nagar","VV Puram","Jakkasandra","JC Road","SR Nagar","Malleshwaram Railway Station","Minarva Circle","Yeswanthpur Railway Station","Baiyappanahalli Metro ","Vidyaranyapura","Betadasana Pura","Jalahalli Cross","Jayanagar 2nd block","Kothanur","New BEL Road","Kumbal Godu, Kengeri","Dasarahalli,Magadi Road","Horamavu ","Hesaraghatta ","Mathikere-Bel Circle ","Mohan Kumar Nagar ","Sajjan Rao Circle ","Rajajinagar 6th Block ","Rajendranagar ","VV Nagar ","Lottegollahalli ","Gubbalala ","JP Nagar 8th Phase ","Koramangala 7th Block ","Valmiki Nagar 2nd Stage ","Uttarahalli ","seegehalli ","BEML Layout, RR Nagar ","MS Palya, Vidyaranyapura ","Anekal ","Mayo Hall, MG Road ","Classic paradise Layout ,Begur Road ","Tin Factory ","Hosapalya","Salarpuria GR Tech park, Whitefield ","Mysore Road , kengeri ","St. Marks Road ","Kattigenahalli ","Maruthi Nagar, Madivala ","Cantonment Railway Station ","KG Road ","Wind Tunnel Road ","JP Nagar 9th Phase ","KR Road ","Bhuvaneshwari Nagar ","Yediyur Lake ","Jayanagar 8th Block ","Koramangala 4th block ","ITC Gardenia ","Egipura ","Byataranyapura ","Double Road","Upparpete ","Konappana Agrahara ","Bungi Colony old airport ","Defence Colony, hesaraghatta road ","L.R. Nagar 1st Stage ","Itmadu ","Frazer Town ","Himagiri Meadows, Bannerghatta Road ","Chamarajpet","Basaveswara Nagar ","Kundanahalli ","Sriramapura ","Bagalakunte ","Sulakunte ","Jakkur ","Art of Living ashram, AOL","Bendre Nagar ","Metro Mall, Kanakapura Road ","Yeshwantpur ","Commercial Street ","Marathahalli","Jaibheem Nagar Near Sambagi Theater ","MSR Nagar ","Banasawadi Railway Station ","Chikka Tirupati ","Vignana nagar ","Bannerghatta Road, IIMB ","Hampi Nagar ","Koramangala 1st block ","A Narayanapura ","Geddalahalli ","LB Shastry Nagar ","Dodda Bidarkallu, Near Peenya Industrial Area ","Amrutahalli ","Roopena Agrahara ","Peenya Industrial Area ","576Kyalasanahalli ","577Victoria road ","578Seshadripuram ","579Global Village Ground ","580Kalasaipalayam ","581Kasturi Nagar ","582Gayatrinagar ","583Hosur road 584Doddabomasandra ","585Devarachikkana Halli ","586Varanasi,Old Madras Road ","587Kempegouda Bus Stand ","588Hirandahalli ","589Canara Bank Colony ","590Jayanagar 4T Block ","591Himalaya Talkies-Loop Road ","592Mahalakshmipuram ","593Chinnaswamy Stadium ","594Challaghatta ","595Orion Mall,Subramanyanagar ","596Adugodi ","597Varthur ","598Attiguppe ","599HAL","600Kalyan Nagar","601RMV 2nd Stage","602Gubbalala Gate, Kanakapura Road","603Indira Nagar","604Bangalore University Campus","605vydehi hospital, Whitefield","606Delmia Circle, JP Nagar","607Lalbagh Botanical Garden","608JP Nagar","609Thubrarahalli","610Vishwapriya Nagar","611Rampura","612East End Jayanagar","613Mallya Road","614Jaraganahalli,Kanakapura Road","615Cheemasandra","616Manjunatha Nagar","617Sadanandanagar","618Arasu Colony","619Sector B, Hsr Layout","620Kamala Nagar","621Palace Grounds","622Jalahalli West","623Ramanashree California Resort, Yelahanka","624CMH Road","625MS Palya,Sambhram College","626Padmanabha Nagar","627Rajajinagar 3rd Block","628Neelasandra","629Jalahalli East","630Bapuji Nagar","631Rajajinagar  5th Block","632Arkavathy Layout 2nd Block","633Domlur 1st Stage","634Kaggadasapura","635Koramangala 8th Block","636Jarganahalli, Kanakapura Road","637Vidyapeeta Circle","638Hennur Gardens","639Sultanpet","640Babusapalya","641The Park hotel MG road","642Forum Value Mall, Whitefield","643golden palm resort,tumkur road","644JP Nagar 1st Phase","645SP Road","646kasavanahalli","647Nelamangala","648Jayanagar 4th Block","649K R Market","650Nehru Nagar,Yelahanka","651Hombegowda Nagar","652Wonder La","653Manipal Hospital, Kodihalli","654Kumara Park West","655Kadubeesanahalli","656Storm Festival, Gonighattapura","657Nandidurga Road","658Vrindavan Tech Village","659HSR Layout","660Sampangi Rama Nagar","661Kumara Park East","662Jagriti Theatre, Whitefield","663Govindapura,Nagawara","664Nagarbhavi","665Malappa Layout","666Arkavathy Layout","667East Point College Of Engineering","668Malur","669Jayadeva Flyover Stop","670Hanumantha Nagar","671Tata Institute or IISc","672Urvashi Theatre, Lalbagh Road","673Sankey Road","674Siddartha Nagar","675Bahubali Nagar","676Vyalikaval","677KR Puram","678Jayanagar","679Chinnapanahalli","680kalkere,bannerghatta road","681Gandhinagar","682virannanapalya,hebbal","683Austin Town BDA Layout","684Vinayaka Layout,Whitefield","685jayanagar 1st east block","686LBS Nagar","687Sadahalli","688Old Madras Road","689BTM Layout","690Gandhi Bazaar, Basavanagudi","691Brigade Road","692Ramagondanahalli","693Vivek Nagar","694sunkadakatte, Magadi road","695Diamond District, Old Airport Road","696Gollahalli","697JP Nagar 2nd Phase","698Chikka Bommasandra","699kammanahalli, bannerghatta road","700kurubrahalli","701Tilak Nagar","702Arekere, Bannerghatta Road","703JP Nagar  5th Phase","704Abbigere","705Sowrashtrapet","706Mathikere","707Nandi Hill","708KR Puram Railway Station","709Vinayaka Layout,Tumkur Road","710Chikkabidarakallu","711Bank Colony","712HBR LayOut","713Cholanayakanahalli","714Channasandra,Uttarahalli","715Kammasandra","716Ragi Gudda","717Devara Jeevanahalli","718Richards Town","719Kodigehalli, Devinagar","720Akkipete","721Dr.Ambedkar Nagar,Whitefield","722Anekal Road","723Rajankunte","724Thanisandra","725Shivananda Circle","726Sector A, Hsr Layout","727Dooravaninagar","728Pillagana Halli,Bannerghatta Road","729Chikkalasandra","730Panatur","731Telecom Layout","732Malathahalli","733Ittamadu","734Anjana Nagar","735Bannerghatta Road, Shoppers Stop","736Saraswathipuram","737Kengeri Railway Station","738B Channasandra","739Garudachar Palya","740Chandra Layout","741Manyata Tech Park","742Ganapthy Nagar","743Koramangala  5th block","744Arekere Gate","745NAL Layout","746Ramesh Nagar","747Innovative Film City","748Kudlu Gate","749Bommasandra Industrial Area ","750Nagarathpet","751Shantala Nagar","752Chikkabyrathi","753CKB Layout","754Akshayanagar, Begur","755Heelalige","756Lingarajapuram","757Mantri Mall, Malleshwaram","758Rajarajeshwari Nagar","759Chandapura","760Baiyyappanahalli","761Baligeri","762Indian Express","763Dodda Banaswadi","764Vannarpet","765Gottigere, Bannerghatta Road","766RBI Layout","767Hebbagodi","768Bank Avenue Colony","769Singanayakanahalli, Doddaballapur Road","770Girinagar","771Sarjapur road,Sompura Gate","772Maruthi Nagar","773St. Thomas Town","774Rajaji Nagar","775Kanteerava Indoor Stadium, Nagarathpet","776Bidharahalli","777Esteem Mall, Hebbal","778Devarabeesanahalli","779Kammagondanahalli","780Mahadevapura","781BTM Water Tank","782Lalbagh Road","783Victoria Layout","784Gowtham Nagar","785Richmond Road","786Dairy Circle","787Rajajinagar 4th Block","788Badrappa Layout789Old Tharagupet","790Jayanagar 6th Block","791Vimanapura","792Navarang","793Vinobha Nagar","794Majestic Bus Stand","795Basavanagudi","796Gollarhatti,Magadi Road","797Vinayaka Nagar","798Kempapura Hebbal","799Doddanekundi","800Lakshmanpuri","801Kalena Agrahara, Bannerghatta Road","802Devasandra, KR puram","803Yelachenahalli","804Raghuvanahalli,Kanakapura Road","805Sadaramangala,Kadugodi","806Dollar Colony-New Bel Road","807JP Nagar 6th Phase","808Kanaka Nagar","809Anantnagar","810gantiganahalli","811JC Nagar","812JP Nagar 3rd Phase","813Bull Temple Road","814Bharathi Nagar","815Sony World jn, Koramangala","816Ullal","817Doddakallasandra, Kanakapura Road","818Delhi Public School,Dommasandra","819rest house road","820HAL 2nd Stage","821Jai Bheem Nagar","822Govindraj Nagar","823Hemanth Nagar","824Siddapura","825Jayanagar 7th Block","826Kaval Byrasandra","827Anandarao Circle","828JC Nagar, Jayamahal","829Arkavathy Layout 7th Block","830Doddakannelli, Sarjapur Rd","831Hotel Lalit Ashok","832Yarappanahalli","833Veerannapalya","834Hongasandra","835Kammanahalli","836Gavipuram","837Chansandra,Whitefield","838Somasundrapalya","839Marenahalli, Jp Nagar","840Balaji Nagar","841Srinagar","842Garuda Mall, Residency Road","843Marenahalli-Yelahanka","844Dattatreya Nagar","845OMBR Layout, Banasawadi","846Sadhashivnagar","847Mailasandra","848HMT Layout","849Hosakerehalli","850Bellandur","851Chikka Gubbi","852Ulal","853Kamakya,Banashankari","854Madanayakahalli","855Singasandra","856Bhoopasandra","857ISRO Layout","858Sarjapura","859West of Chord Road","860Domlur Layout","861Bangalore East Railway Station","862Town Hall Circle","863Rainbow Residency Layout","864Jai Bharat Nagar","865Jayanagar 9th Block","866Jal Vayu Vihar","867BEML Layout, Brookefield","868Lalbagh West Gate","869Bangarappanagar","870Brunton Road","871Bommanahalli","872Infantry Road","873Bilekahalli, Bannerghatta Road","874Jayanagar 1st block","875Basavanagar","876Bennigana Halli","877Banashankari","878HAL Airport","879Nagawara","880Avenue Road","881Koramangala 2nd Block","882Maruthi Seva Nagar","883Bethel AG Church, Hebbal","884Dickenson Road","885Srinivaspura,Banashankari","886Bannerghatta Road, Meenakshi Mall","887Satellite Bus Stand, Mysore road","888NIMHANS","889Palace Road","890M S Ramaiah Hospital","891Hulimavu, Bannerghatta Road","892Panduranga Nagar","893Devanahalli","894HMT Watch Factory Colony","895Geleyara Balaga Layout","896Ashok Nagar, MG Road","897Koramangala 6th block","898haralur road","899Madivala","900Vijaya bank Layout","901Anjanappa Garden Layout","902Kachamaranahalli","903Peenya 1st Stage","904Sultanpalya","905Avalahalli, KR Puram","906Risaldarstreet","907Hebbal","908Kathriguppe","909Bagmane Tech Park, C V Raman Nagar","910Ghouse Garden","911Anagalapura","912harlur","913Subramanyapura","914Garvebhavi palya","915Adarsh Palm Retreat","916Sundar Nagar","917Anjanapura","918Taj Vivanta, Yeshwantpur","919Hard Rock Cafe-MG ROAD","920Delhi Public School,Konanakunte","921Malleshwaram","922MG Road","923Indira Nagar 1st Stage","924Easwara Layout","925Abbayappa Garden","926Tavarkere","927Arekere layout","928Chikkajala","929Bismillah Nagar","930Munekollal","931Gayathrinagar-Malleshwaram Road","932AGB Layout","933Rajanukunte","934Immadahalli","935kalena agrahara","936St Marks Road","937Avalahalli, Banashankari","938Langford Road","939Corporation Circle","940Whitefield Railway Station","941Vakil Satellite Township","942DVG Road","943Ali Asker Road","944Ulsoor Road","945Shree Vinayaka Layout, Hebbal","946Mallasandra, Jalahalli West","947Mudalapalya, Vijaynagar","948Bannerghatta Road","949Hegde Nagar","950National Games Village, NGV-Ejpura","951Konankunte Cross","952Valluarpuram","953Vaddrapalya","954Thyagaraja nagar","955yamalur","956Banashankari 1st stage","957Kasturibai Nagar","958Rajajinagar 2nd Block","959Nagasandra,Tumkur Road","960Kodathi","961Hanumanthappa Colony","962Naganathapura","963global village","964Kengeri Satellite Town ","965Dasarahalli","966Chikkabanavara ","967Sunkadakatte","968Jeevanbhima Nagar","969Cosmos Mall,Whitefield","970Ejipura","971Magadi road","972Anantapura","973KR Market","974Sudhama Nagar","975Kadugodi","976Coffee Board Layout","977ITC Galleria Hote","l978Ganga Nagar","979Hennur Main Road","980New Thippasandra","981Lido Mall,Old Madras Road","982Austin Town","983Vidhana Soudha","984Balaji Layout","985Bilekahalli","986Jayanagar  5th Block","987Magrath Road","988Doddakallasandra","989Bagaluru","990Ashwath Nagar, HBR Layout","991Hosa road","992Kundanahalli gate","993Valapura","994Kumaraswamy Layout","995Sanjay Nagar","996Electronic City Phase II","997Mavalli","998Embassy Golf Links, Domlur","999Peenya 2nd Stage","1000NGEF Layout, Old madras road","1001Sri Krishna Nagar","1002T Dasarahalli","1003Indian Express Circle","1004Jagadish Nagar","1005Gorguntepalya","1006Nanja Reddy Colony","1007Yelahanka New Town","1008Shanti Nagar","1009Mallasandra, kanakapura road","1010Anil Kumble Circle","1011Dodda bomasandra Vidyaranyapura Main road","1012Mahalakshmi Layout","1013Anjaneya Koil","1014World Trade Centre, Brigade Gateway","1015Nayandahalli","1016Attibele","1017Shabari Nagar","1018Chokkanahalli","1019Yelenahalli","1020GM Palya","1021Bangalore International Exhibition Centre","1022B Narayanapura","1023Rajajinagar 1st Block","1024yelahanka railway station","1025Guttahalli","1026Muthyalamma Nagar-Langford Road","1027Doddathoguru","1028Valmiki Nagar 1 Stage","1029Judicial Layout","1030Residency Road","1031Nagavarapalya","1032Platinum City, HMT","1033Koramangala 3rd block","1034Bommasandra","1035Majestic","1036Kannur","1037Tunganagara,Magadi Road","1038City Railway Station","1039Gidada Konnenahalli","1040Ramamurthy Nagar","1041Byappanahalli Railway Station","1042Manipal Hospital, Old Airport Road","1043Wilson Garden","1044Vakil Marina Layout","1045JP Nagar 7th Phase","1046Jayanagar 3rd block","1047Kodichikkanahalli","1048Ambedkar Nagar (Lutheran Church)","1049Honnenahalli","1050Vasanthpura","1051Koramangala","1052Vyamshala","1053Prakruthi Township","1054Cunningham Road","1055Kodagihalli","1056Kalkere,Ramamurthy Nagar","1057Windsor Manor","1058Byappanahalli","1059HRBR Layout","1060Whitefield,Prestige Shantiniketan","1061Yelahanka","1062Kasturba Road","1063Chowdeswari Layout, Banasawadi","1064Battarahalli","1065Jnana Bharati","1066Cantonment","1067Jnana Ganga Nagar","1068Forum Mall, Koramangala","1069Nagashettyhalli","1070Agara","1071Byataranyapura, Mysore Road","1072Le Meridian Hote","l1073RT Nagar","1074Queens Road","1075Bileshivale","1076Sampige Road","1077Silk Board","1078Talaghattapura, Kanakapura Road","1079BTM 2nd Stage","1080BTM 1st Stage","1081IAS Officers Colony","1082Someshwaranagar","1083Bharat Nagar,Magadi road","1084Vibhutipura","1085Shastri Nagar","1086Taj Vivanta, MG Road","1087Banashankari 2nd Stage","1088HAL 3rd Stage","1089Jalahalli","1090Bannerghatta National Park","1091Subramanya Nagar","1092Jogupalya","1093Tippu Nagar","1094Mission Road","1095Byrathi","1096Malleshpalya","1097Srigandhada Kavalu","1098Old Airport Road","1099Hotel Leela Palace","1100Muthyalamma Nagar-Mathikere","1101Race course road","1102Vijaya Nagar","1103Dodda Gubbi","1104Hegganahalli","1105Shivajinagar","1106Sanjay Gandhi Nagara","1107Narayana Swamy Garden","1108Arkavathy Layout 3rd Block","1109Vijayanagar, Magadi road","1110AGS Layout","1111Btm 4th Stage","1112Raj Bhavan Road","1113Anubhav Nagar,Vijaynagar","1114TC Palya","1115Ananadapuram","1116Nettakallappa Circle","1117dommasandra","1118RS Palya","1119Lakkasandra","1120Kartik Nagar","1121Kadirenahalli","1122Banaswadi","1123Kaikondrahalli ,Sarjapur Road","1124Ranasingpet","1125Museum road","1126Arkavathy Layout 1st Block","1127MICO Layout-Begur Road","1128Parappana Agrahara","1129City Market","1130Hulimavu","1131ITC Factory,Bellary Road","1132Cambridge layout","1133Jigani","1134Nanjappa Garden","1135kanakapura road","1136Talaghattapura","1137CV Raman Nagar","1138Bagmane Tech Park","1139Avalahalli, Doddaballapur Main Road","1140Jayamahal Extension","1141Narayana Hrudayalaya","1142Vidya Nagar, Peenya Industrial Area","1143Gokula","1144Annapurneshwari Nagar","1145Ramachandra Pura","1146corporation","1147Nayandahalli Railway Station","1148Vivekananda Colony","1149Hotel Royal Orchid, Domlur","1150Konanakunte Cross, Kanakapura Road","1151Cubbon park","1152AECS Layout","1153Yemalur","1154Andrahalli","1155Mysore Road","1156Armane Nagar","1157Hosahalli","1158Sarvagna Nagar","1159Ashoka Pillar, Jayanagar","1160Anand Nagar","1161Indira Nagar 2nd Stage","1162Banashankari 3rd Stage","1163Domlur 2nd Stage","1164Murugeshpalya","116 5Ramaiah College","1166Azad Nagar","1167Sahakaranagara","1168SG Palya","1169Jayanthinagar","1170Bidadi, Mysore Road","1171Hedge Nagar-RT Nagar","1172Yelachenahalli, Kanakapura Road","1173Lavelle road","1174Vittal Mallya Road","1175St Thomastown","1176Pai Layout","1177Majestic railway station","1178Vangayana","1179Nandini Layout","1180Akshay Nagar","Rammurthy Nagar"
        ];
        $( "#tags" ).autocomplete({
          source: availableTags
      });
        $('#datepairExample .time').timepicker({
            'showDuration': true,
            'timeFormat': 'g:ia',
            'minTime':'9:00 am',
            'maxTime':'6:00 pm'
        });

        $('#datepairExample .date').datepicker({
            'format': 'yyyy-m-d',
            'autoclose': true
        });
        $("#bike_company").chained("#bike_model");
        $("#series").chained("#mark");
        });
</script>


</body>

</html>
