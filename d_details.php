<!DOCTYPE html>

<?php
	include("functions/function.php");
?>

<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width= device-width, initial-scale = 1">
        <meta name = "description" content = "Informatics Capstone Project: Template for Team Core">
        <title> BeQuick: The Beverage Delivery </title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/template2.css">
        <link rel = "stylesheet" href= "css/offcanvas.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
                    <a class="navbar-brand" href="index.html"> BQ Service </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="store.php"> Store </a></li>
                        <li><a href = "register.php"><span class = "glyphicon glyphicon-user"></span> &nbspSign-Up </a></li>
                        <li><a href="login.php"><span class = "glyphicon glyphicon-log-in"></span> &nbspLogin </a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12">
                    <div class = "visible-xs">
                        <button class = "btn btn-primary btn-xs" data-toggle = "offcanvas">Hide/Show HelpBar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container">
            <div class = "row row-offcanvas row-offcanvas-left">
                <div class = "col-md-3 sidebar-offcanvas" id = "sidebar">
                    <div class = "list-group">
						<?php d_getProductCat(); ?>
                    </div>
                </div>
				<div class = "col-md-9">
					<div id="shopping_cart" align = "right"; style = "border: 2px #f05f40 solid;">
						<span style = "font-size: 15px; padding: 5px; line-height: 30px;">
							Welcome Guest! <b>Shopping Cart -</b> Total Items: <b><?php total_items(); ?></b>  Total Price: <b><?php total_price(); ?></b>  <a href = "cart.php"> View Cart </a>
						</span>
					</div>
					<div id = "content_box" class = "row">
						<h1 align="center">< <?php storeName(); ?>'s Menu ></h1>
						<h2 align="center">This is <?php storeName(); ?>'s Delivery available Menu!</h2><br>
						<?php d_productMenu(); ?>
					</div>
				</div>
			</div>
		</div>
        <div class = "container">
			<div class = "row row-offcanvas row-offcanvas-left">
				<hr>
				<footer>
					<div class = "row">
						<div class = "col-lg-12" align = "center">
							<p> Copyright & Copy; Team Core 2016 </p>                    
						</div>
					</div>
				</footer>
			</div>
        </div>
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/offcanvas.js"></script>
    </body>
</html>