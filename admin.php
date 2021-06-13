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
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 10px;
}

.alert.success {background-color: teal;}
.alert.info {background-color: teal;}
.alert.warning {background-color: teal;}

         
</style>
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
        text-decoration: none;
        text-decoration-line: none;
    }
    body{
       background-image: url(pictures/back.jpg);    
    }
    
       
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
    if(screen.widt>=1366)
        {
           document.getElementById("golive2").style.visibility="hidden"; 
        }
        else{
            
        }

</script>
    
</head>
<body translate="no">

<nav class="navbar1 navbar-inverse navbar-fixed-top" style="background-color:wheat;">
<div class="container">
<div class="navbar-header" style="background-color:">
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
    <button id="golive1" style="float:right;MARGIN-TOP:4%"> Go LIVE</button>
    <!--
<img src="pictures/salomon.PNG" height="80px" width="80px" style="margin: 0 0 0 0">
    
<img src="pictures/and.png" height="60px" width="120px" style="margin: 0 0 0 0">
    <img src="pictures/jessica.PNG" height="80px" width="80px" style="margin: 0 0 0 0">
-->
    
</div>
<div class="collapse navbar-collapse" id="nav" style="background-color:wheat" >
<ul class="nav navbar-nav pull-right" style="background-color:aliceblue;height: 12%;margin-top: 1%">
    <!--
<li class="abctive"><a href="setmath.php" target="display" style="color: darkcyan">Math</a></li>
<li><a href="setjava.php" target="display"style="color: darkcyan">java</a></li>
<li><a href="setds.php"target="display" style="color: darkcyan">Data Structures</a></li>
    <li><a href="setdbms2.php" target="display" style="color: darkcyan">DBMS2</a></li>
<li><a href="#" target="display"target="display" style="color: darkcyan"></a></li>
	<li><a href="answers.php"  target="display" contact style="color: darkcyan">Check answers</a></li>
            <li class="nav-item"> 
<li>
    <a href="questions.php" target="display" contact style="color: darkcyan">All questions</a>
    </li>
	<li>
    <a href="index.php" style="color: darkcyan">plattform</a>
    </li>
    -->
    <li><marquee behavior="alternate" scrollamount="2" style="margin-top: 4%;width: 80%;color: green"><h3> partnership is something we've to keep all the time</h3></marquee></li>
    
    
</ul>
</div>
</div>
</nav>


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
    
    <br>
      
    <div id="small" style="float: left;width:15%;background-color:red;margin-top:2%">
   
         <a id="golive2" href="homepage.php">
<div class="alert warning">
    <strong>GO LIVE</strong>
</div></a>
        <a href="setjava.php" target="display">
<div class="alert success">
 
    <strong>Java</strong>
</div>
</a>

         <a href="setdbms2.php" target="display">
<div class="alert success" target="display"> 
    <strong>Dbms2</strong>
             </div></a>

              <a href="setds.php" target="display">
<div class="alert info">
  
    <strong>DS</strong>
                  </div></a>

<a href="setmath.php" target="display">
<div class="alert warning">
    <strong>Math</strong>
</div></a>
        <a href="questions.php" target="display">
<div class="alert warning">
    <strong>Questions</strong>
</div></a>
        <a href="answers.php" target="display">
<div class="alert warning">
    <strong>Answers</strong>
</div></a>
        
    </div>
    <div id="big" style="float:right;width:85%;background-color:aliceblue;margin-top:1%">
     <iframe name="display" src="" height="90%" width="100%" scrolling="auto" style="margin-top: 0%;"></iframe>
    </div>
     
    
    
    
    </body>
</html>
 