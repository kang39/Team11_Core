<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: The Beverage Delivery </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template.css">
        <link rel = "stylesheet" href= "css/offcanvas.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(39.171040, -86.516896),
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var ThePourHouseCafe=new google.maps.LatLng(39.166342, -86.530272);
var Soma_3rd=new google.maps.LatLng(39.163889, -86.516263);
var Soma_d=new google.maps.LatLng(39.166187, -86.529961);
var Starbucks_IU=new google.maps.LatLng(39.166107,-86.526934);
var Starbucks_IMU=new google.maps.LatLng(39.167876, -86.524164);
var Starbucks_B=new google.maps.LatLng(39.165677, -86.498640);
var Starbucks_J=new google.maps.LatLng(39.168504, -86.573092);
var Starbucks_W=new google.maps.LatLng(39.145492, -86.531586);
var Starbucks_C=new google.maps.LatLng(39.161752, -86.494205);
var RuncibleSpoon=new google.maps.LatLng(39.167327, -86.529073);

var marker=new google.maps.Marker({
  position:Starbucks_IU,
  });

var marker2=new google.maps.Marker({
  position:Starbucks_IMU,
  });

var marker3=new google.maps.Marker({
  position:Starbucks_B,
  });

var marker4=new google.maps.Marker({
  position:Soma_3rd,
  });

var marker5=new google.maps.Marker({
  position:Soma_d,
  });

var marker6=new google.maps.Marker({
  position:ThePourHouseCafe,
  });

var marker7=new google.maps.Marker({
  position:Starbucks_J,
  });

var marker8=new google.maps.Marker({
  position:Starbucks_W,
  });

var marker9=new google.maps.Marker({
  position:Starbucks_C,
  });

var marker10=new google.maps.Marker({
  position:RuncibleSpoon,
  });

marker.setMap(map);
marker2.setMap(map);
marker3.setMap(map);
marker4.setMap(map);
marker5.setMap(map);
marker6.setMap(map);
marker7.setMap(map);
marker8.setMap(map);
marker9.setMap(map);
marker10.setMap(map);

var infowindow=new google.maps.InfoWindow({
  content:"Starbucks-Indiana University"
  });
var infowindow2=new google.maps.InfoWindow({
  content:"Starbucks-Indiana Memorial Union"
  });
var infowindow3=new google.maps.InfoWindow({
  content:"Starbucks-3rd St&46 Bypass"
  });
var infowindow4=new google.maps.InfoWindow({
  content:"Soma"
  });
var infowindow5=new google.maps.InfoWindow({
  content:"Soma"
  });
var infowindow6=new google.maps.InfoWindow({
  content:"The Pour House Cafe"
  });
var infowindow7=new google.maps.InfoWindow({
  content:"Starbucks-SR 48&SR 37"
  });
var infowindow8=new google.maps.InfoWindow({
  content:"Starbucks-Walnut&Miller"
  });
var infowindow9=new google.maps.InfoWindow({
  content:"Starbucks-Target Bloomington"
  });
var infowindow10=new google.maps.InfoWindow({
  content:"Runcible Spoon"
  });


google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
google.maps.event.addListener(marker2, 'click', function() {
  infowindow2.open(map,marker2);
  });
google.maps.event.addListener(marker3, 'click', function() {
  infowindow3.open(map,marker3);
  });
google.maps.event.addListener(marker4, 'click', function() {
  infowindow4.open(map,marker4);
  });
google.maps.event.addListener(marker5, 'click', function() {
  infowindow5.open(map,marker5);
  });
google.maps.event.addListener(marker6, 'click', function() {
  infowindow6.open(map,marker6);
  });
google.maps.event.addListener(marker7, 'click', function() {
  infowindow7.open(map,marker7);
  });
google.maps.event.addListener(marker8, 'click', function() {
  infowindow8.open(map,marker8);
  });
google.maps.event.addListener(marker9, 'click', function() {
  infowindow9.open(map,marker9);
  });
google.maps.event.addListener(marker10, 'click', function() {
  infowindow10.open(map,marker10);
  });


infowindow.open(map,marker);
infowindow2.open(map,marker2);
infowindow3.open(map,marker3);
infowindow4.open(map,marker4);
infowindow5.open(map,marker5);
infowindow6.open(map,marker6);
infowindow7.open(map,marker7);
infowindow8.open(map,marker8);
infowindow9.open(map,marker9);
infowindow10.open(map,marker10);
}


google.maps.event.addDomListener(window, 'load', initialize);
</script>
   </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> BQ Service: Drink your Happiness! </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="pickup_con.php"> Pick-Up </a></li>
                        <li><a href="delivery_con.php">Delivery</a></li>
                        <li><a href = "user_set.php"><span class = "glyphicon glyphicon-cog"></span> &nbsp<?= $fgmembersite->UserFullName(); ?>&nbsp Settings </a></li>
                        <li><a href="logout.php"><span class = "glyphicon glyphicon-log-out"></span> &nbspLog-Out </a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12">
                    <div class = "visible-xs">
                        <button class = "btn btn-primary btn-xs" data-toggle = "offcanvas"> Toogle Lists </button>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <div class = "row row-offcanvas row-offcanvas-left">
                <div class = "col-md-3 sidebar-offcanvas" id = "sidebar">
                    <div class = "list-group">
                        <a href = "#" class = "list-group-item active"> All </a>
                        <a href = "#" class = "list-group-item"> Blu Boy Chocolate Cafe & Cakery </a>
                        <a href = "#" class = "list-group-item"> Bubs Burgers & Ice Cream </a>
						<a href = "#" class = "list-group-item"> McAlisters Deli </a>
						<a href = "#" class = "list-group-item"> Panera Bread </a>
						<a href = "#" class = "list-group-item"> Red Mango </a>
						<a href = "#" class = "list-group-item"> Scholars Inn Bakehouse </a>
						<a href = "#" class = "list-group-item"> Soma </a>
						<a href = "#" class = "list-group-item"> Starbucks </a>
						<a href = "#" class = "list-group-item"> The Chocolate Moose </a>
						
                    </div>
                </div>
               <div class = "col-md-9">
                    <div id="googleMap" style="width:850px;height:320px;"></div>
					<br></br>
                    <div class = "row">
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/soma.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 15 Minutes </h4>
                                    <h4><a href = "#"> Soma </a></h4>
                                    <p><li>322 E Kirkwood Ave</li>
									<li>Opens at 6:30 AM</li></p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 15 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/panerabread.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 16 Minutes </h4>
                                    <h4><a href = "#"> Panera Bread </a></h4>
                                    <p><li>322 S College Mall Rd</li>
									<li>Opens at 6:00 AM</li></p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 18 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/starbucks.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 20 Minutes </h4>
                                    <h4><a href = "#"> Starbucks </a></h4>
                                    <p><li>110 S Indiana Ave</li>
									<li>Opens at 6:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 11 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/bluboy.png" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 22 Minutes </h4>
                                    <h4><a href = "#"> Blu Boy Chocolate Cafe & Cakery </a></h4>
                                    <p><li>112 E Kirkwood Ave</li>
									<li>Opens at 10:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 15 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/bubs.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 24 Minutes </h4>
                                    <h4><a href = "#"> Bub's Burger & Ice Cream </a></h4>
                                    <p><li>480 N Morton St</li>
									<li>Opens at 11:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 20 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/mcalisters.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 22 Minutes </h4>
                                    <h4><a href = "#"> McAlister's Deli </a></h4>
                                    <p><li>2510 E 3rd St</li>
									<li>Opens at 10:30 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 16 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/ChocoMoose.png" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 25 Minutes </h4>
                                    <h4><a href = "#"> The Chocolate Moose </a></h4>
                                    <p><li>401 S Walnut St</li>
									<li>Opens at 11:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 5 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  

                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/stonecutters.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 26 Minutes </h4>
                                    <h4><a href = "#"> Stone Cutters Cafe & Roastery </a></h4>
                                    <p><li>919 15th St</li>
									<li>Opens at 07:30 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 23 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class = "col-sm-4 col-lg-4 col-md-4">
                            <div class = "thumbnail">
                                <img src = "include/redmango.jpg" alt = "">
                                <div class = "caption">
                                    <h4 class = "pull-right"> 29 Minutes </h4>
                                    <h4><a href = "#"> Red Mango </a></h4>
                                    <p><li>1793 E 10th St</li>
									<li>Opens at 12:00 AM</li> </p>
                                </div>
                                <div class = "ratings">
                                    <p class = "pull-right"> 31 reviews </p>
                                    <p>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star"></span>
                                        <span class = "glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <hr>
            <footer>
                <div class = "row">
                    <div class = "col-lg-12" align = "center">
                        <p> Copyright & Copy; Team Core 2016 </p>                    
                    </div>
                </div>
            </footer>
        </div>
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/offcanvas.js"></script>
    </body>
</html>