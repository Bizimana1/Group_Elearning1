<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <?php
       $_SESSION["status"]="";
        
        if(isset($_POST["submit"])){
            include'submit.php';
        }
        
        if(isset($_POST["select"])){
            $_SESSION["date"]=$_POST["date"];
        }
        
       ?>
        
    </head>
    
<style>
    body{
        background-color: bisque;
        
    }
    
    </style>
    
<body>

    <script>
        
        var a=document.getElementById("status").innerHTML;
        if(a=="you have submitted!!")
            {
              document.getElementById("submit").style.visibility="hidden";  
            }
        </script>

    
    


    <p style="width:100%"> Today's date:  <span id="date" style="color: salmon"></span>  Time:  <span id="time" style="color: red"></span></p>
    <p id="status" style="margin-right:2%;color:green">       <?php echo $_SESSION["status"];?></p>
   
    <script>
    
      var a=document.getElementById("status").innerHTML;
        if(a==="you have submitted!!")
            {
              alert(a);  
             
            }
        
    </script>

<script>
var myVar = setInterval(myTimer, 0);

function myTimer() {
  var d = new Date();
   
     document.getElementById("date").innerHTML =d.toLocaleDateString();
     document.getElementById("time").innerHTML = d.toLocaleTimeString();
}
    </script>
    <form action="" method="post">
        <b>SELECT DATE:</b>
    <input type="date" name="date">
        <input type="submit" name="select">
    </form>
    
    <br>
    <a href="dailly.php" target="display"><button> Questions</button></a>
    <a href="answers.php" target="display"><button>Check your answers </button></a>
    <marquee behavior="alternate" scrollamount="4"><h2 style=" font-family: monospace;color: burlywood">Every day we have to do something special</h2></marquee>
    
    <form id="question" action="" method="post">
        
    <div id="java">
         <strong>About java</strong>
   
        <?php include'java.php';?>
       <br>
        
        </div>
        <br><br>
        
        <div id="ds">
        <strong>About Data structure</strong>
        
    <?php include'ds.php';?>
            <br><br>
       
        </div>
        <br><br>
        
        <div id="dbms2">
        <strong>About DBMS_2</strong>
     <?php include'dbms2.php';?>
         
        </div>
        <br><br>
        
        
        <input type="submit" value="submit" name="submit" id="submit">
    </form>
    
    
</body>
</html>
