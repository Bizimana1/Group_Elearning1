<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Radio Buttons</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
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
    <a href="dailly.php" target="display"><button> Questions</button></a>
    <a href="answers.php" target="display"><button>Check your answers </button></a>
    <marquee behavior="alternate" scrollamount="4"><h2 style=" font-family: monospace;color: burlywood">Every day we have to do something special</h2></marquee>    
    
<?php 
   include'config.php';
$java;
    $ds;
    $dbms2;
$p=1;
$date;
    if($_SESSION["date"]!=null)
    {
        $date=$_SESSION["date"]; 
    }
    else
    {
       $date=date("Y-m-d"); 
    }
   
$username=$_SESSION["you"];
      echo "<div id='java'>";
    echo "<h1> your answers in java </h1>";
    
$sql = "SELECT distinct question, answer from java_answers where student='$username' and date>='$date'";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{

    $question=$row["question"];
    
     $answer=$row["answer"];
   
    echo"<p><strong>".$p.".".$question."</strong></p>";
    echo"<p> <mark>Your answer</mark>: <strong style='color:red'>".$answer."</strong></p>";


}
        $p++;
    }
}


else
{
    echo"<p style='color:red'> You Haven't Answered Java Yet !!!";
}


echo "<br><br> <input type='button' id='next1' value='next'>";
  
    echo"</div>";
    
    
    $p=1;
          echo "<div id='ds'>";
    echo "<h1> your answers in Data Structure   </h1>";
    
$sql = "SELECT distinct question, answer from ds_answers where student='$username' and date like'%$date%'";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{

    $question=$row["question"];
    
     $answer=$row["answer"];
   
    echo"<p><strong>".$p.".".$question."</strong></p>";
    echo"<p> <mark>Your answer</mark>: <strong style='color:red'>".$answer."</strong></p>";


}
        $p++;
    }
}


else
{
    echo"<p style='color:red'> You Haven't Answered Data Structure Yet !!!";
}

  echo "<br><br> <input type='button' id='back1' value='back'>";
echo "<input type='button' id='next2' value='next'  style='margin-left:10px'>";
  
    echo"</div>";
    
     $p=1;
          echo "<div id='dbms2'>";
    echo "<h1> your answers in DBMS_2   </h1>";
    
$sql = "SELECT distinct question, answer from dbms2_answers where student='$username' and date like'%$date%'";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{

    $question=$row["question"];
    
     $answer=$row["answer"];
   
    echo"<p><strong>".$p.".".$question."</strong></p>";
    echo"<p> <mark>Your answer</mark>: <strong style='color:red'>".$answer."</strong></p>";


}
        $p++;
    }
}


else
{
    echo"<p style='color:red'> You Haven't Answered DBMS2 Yet !!!";
}

  echo "<br><br> <input type='button' id='back2' value='back'>";

  
    echo"</div>";
    

?>
 <script>     
$(document).ready(function(){
    
        $("#ds").hide();
        $("#dbms2").hide();
        $("#back1").hide();
  $("#next1").click(function(){
                $("#java").hide();
                $("#ds").show();
                 $("#back1").show();
          });
 $("#back1").click(function(){
                $("#java").show();
                $("#ds").hide();
                
         });
$("#next2").click(function(){
              
                $("#ds").hide();
                 $("#dbms2").show();
  });
    
$("#back2").click(function(){
                $("#ds").show();
                $("#dbms2").hide();
                
         });
    
});
</script>
   
    </body>
</html>