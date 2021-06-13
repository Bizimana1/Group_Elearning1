<?php session_start();?>

<html lang="en">
<head>
<meta charset="UTF-8">
     <link rel="stylesheet" href="style.css">

<link rel="apple-touch-icon" type="image/png" href="sasa.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="sasa.png" />
    <title> partnership is something we've to keep all the time</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dropdown.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  
<style>
/* USING BOOTSTRAP 3.0.3 */
body {
  padding-top: 60px;
}
nav .navbar-brand {
  font-size: 30px;
}
nav .navbar-toggle {
  margin: 13px 15px 13px 0;
}
nav a {
  font-size: 18px;
  padding-bottom: 20px !important;
  padding-top: 20px !important;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
nav.navbar.shrink {
  min-height: 35px;
}
nav.navbar.shrink .navbar-brand {
  font-size: 25px;
}
nav.navbar.shrink a {
  font-size: 15px;
  padding-bottom: 10px !important;
  padding-top: 10px !important;
}
nav.navbar.shrink .navbar-toggle {
  margin: 8px 15px 8px 0;
  padding: 4px 5px;
}
    .container{
        margin-left: 0px;
    }
    a{
        color: white;
    }
    body{
       background-image: url(pictures/back.jpg)
;    }
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
         <script>     
$(document).ready(function(){
     
  $("a").click(function(){
     $("#nav").slideToggle("fast");      
  });
   
   $(".navbar-toggle").click(function(){
     $("#nav").slideToggle("fast");     
  });
   
    
  });
    

</script>
    
</head>
<body translate="no">

<nav class="navbar1 navbar-inverse navbar-fixed-top" style="background-color:wheat;">
<div class="container">
    
<div class="navbar-header" style="background-color:">
<!--
<img src="pictures/salomon.PNG" height="80px" width="80px" style="margin: 0 0 0 0">
    
<img src="pictures/and.png" height="70px" width="50px" style="margin: 0 0 0 0">
    <img src="pictures/jessica.PNG" height="80px" width="80px" style="margin: 0 0 0 0">
-->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
    
    <?php
    if( $_SESSION["you"]=='keza')
    {
     echo "<img src='pictures/jessica.PNG' height='80px' width='80px' style='margin: 0 0 0 0'>";   
    }
    else
    {
        echo "<img src='pictures/salomon.PNG' height='80px' width='80px' style='margin: 0 0 0 0'>";   
    }
    
    ?>
    
</div>
<div class="collapse navbar-collapse" id="nav " style="background-color:wheat" >
<ul class="nav navbar-nav pull-right" style="background-color:aliceblue;height: 12%;margin-top: 1%">
<li class="abctive"><a href="#" style="color: darkcyan">home</a></li>
<li><a href="" style="color: darkcyan">Bible Study</a></li>
<li><a href="english.php" target="display" style="color: darkcyan">English</a></li>
    <li><a href="#" style="color: darkcyan">Ideas</a></li>
<li><a href="A.php" target="display" style="color: darkcyan">Class Issues</a></li>
	<li><a href="A.php"  target="display" contact style="color: darkcyan">Remainders</a></li>
            <li class="nav-item"> 
<li>
    <a href="A.php" target="display" contact style="color: darkcyan">Dailly Task</a>
    </li>
   
    
	
    	<li>
    <a href="logout.php" name="logout" style="color: darkcyan">Logout</a>
    </li>
    
</ul>
</div>
</div>
</nav>

    <label>new</label> <label>Today</label>  <label>This wek</label> 
    
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script id="rendered-js">
$(window).scroll(function () {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
//# sourceURL=pen.js
    </script>
    <marquee behavior="alternate" scrollamount="2" style="margin-top: 4%;width: 100%;color:salmon"><h3> I'm Blessed Coz I've Jesus</h3></marquee>
    <iframe name="display" src="bibblestudy.php" height="80%" width="100%" scrolling="auto1" style="margin-top: 0%;margin-left: 0%;background-color:bisque"></iframe>
    
    
    
    
    
    </body>
</html>
 