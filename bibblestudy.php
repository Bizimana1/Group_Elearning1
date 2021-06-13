<?php session_start();?>

<html>
    <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <?php
        include 'config.php';
       $_SESSION["status"]="";
        
        if(isset($_POST["submit"])){
           
            $word=$_POST["word"];
            $interest=$_POST["interest"];
            $doubt=$_POST["doubt"];
            $status=$_POST["status"];
            $preacher=$_POST["preacher"];
            
            $date=date("Y-m-d");
            
           $sql="insert into bible_study (date,word,interest,doubt,status,preacher) values('$date','$word','$interest','$doubt','$status','$preacher')";
       $conn->query($sql);
   if($conn->query($sql)===true){
        $_SESSION["status"]="you've submitted!!";
   }

        }
        
 if(isset($_POST["new"])){
  $doubt=$_POST["quest"]; 
   $title=$_POST["title"];  
  $date=date("Y-m-d");
  $sql="insert into bible_study (date,word,interest,doubt,status,preacher) values('$date','$title','----','$doubt','question','-----')";
       $conn->query($sql);
   if($conn->query($sql)===true){
        $_SESSION["status"]="you've submitted!!";
   }

        }
        
        if(isset($_POST["add_idea"])){
  $name=$_POST["new_idea"]; 
   $details=$_POST["details"];  
  $date=date("Y-m-d");
  $sql="insert into ideas (date,name,details,status) values('$date','$name','$details','bible')";
       $conn->query($sql);
   if($conn->query($sql)===true){
        $_SESSION["status"]="you've submitted!!";
   }

        }
        
       ?>
        
    </head>
    
<style>
    body{
        background-color: bisque;
        
    }
    #word input{
        widows: inherit;
        width: 70%;
        height: 10%;
    }
    
    </style>
    
<body>

    <script>
        if(screen.width>=360)
            {
                document.getElementsByTagName("INPUT").style.width="100%";
            }
        var a=document.getElementById("status").innerHTML;
        if(a=="you have submitted!!")
            {
              document.getElementById("submit").style.visibility="hidden";  
            }
        </script>
    
     <script>
   $(document).ready(function(){
        $("#devotion").hide();
        $("#fellowship").hide();
        $("#interest").hide();
       $("#idea").hide();
        $("#week").hide();
       $("#question").hide();
       
  $("#dev").click(function(){
       $("#new").hide();
       $("#fellowship").hide();
        $("#interest").hide();
      $("#idea").hide();
      $("#question").hide();
       $("#week").hide();
      $("#devotion").show();
  });
    
       
        $("#start").click(function(){
      $("#devotion").hide();
        $("#fellowship").hide();
        $("#interest").hide();
            $("#idea").hide();
            $("#question").hide();
             $("#week").hide();
            $("#new").show();
  });
       
        $("#int").click(function(){
          $("#devotion").hide();
         $("#new").hide();
        $("#fellowship").hide();
            $("#idea").hide();
             $("#week").hide();
            $("#question").hide();
        $("#interest").show();
  });
        $("#fell").click(function(){
          $("#devotion").hide();
         $("#new").hide();
        $("#interest").hide();
            $("#idea").hide();
            $("#question").hide();
             $("#week").hide();
             $("#fellowship").show();
  });
       $("#id").click(function(){
          $("#devotion").hide();
         $("#new").hide();
        $("#fellowship").hide();
        $("#interest").hide();
           $("#question").hide();
            $("#week").hide();
        $("#idea").show();
  });
       $("#que").click(function(){
          $("#devotion").hide();
         $("#new").hide();
        $("#fellowship").hide();
        $("#interest").hide();
        $("#idea").hide();
            $("#week").hide();
           $("#question").show();
  });
       
       $("#end").click(function(){
          $("#devotion").hide();
         $("#new").hide();
        $("#fellowship").hide();
        $("#interest").hide();
        $("#idea").hide();
           $("#question").hide();
           $("#week").show();
  });
       
});
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
    <button id="start">Set New</button>
    <button id="dev">Devotion</button>
    <button id="fell">Fellowship</button>
    <button id="int">what I have   learnt </button>
    <button id="end">Week check up</button>
    <button id="id">Ideas(Topics)</button>
     
    <button id="que">Questions</button>
    
    <!-- display a form to fill-->
    <div id="new">
    
        
    <form id="word" action="" method="post">
    <input type="text" placeholder="where reading is from? Eg: Deuteronomy 18:13 " name="word"> <br>
         <input type="text" placeholder="Do you have any Doubts(question)?" name="doubt"> <br>
          <input type="text" placeholder="what have u learnt? Eg: You must be blameless before the LORD your God." name="interest"> <br>
           <select name="status">
        <option value="Devotion">Devotion</option>
               <option value="Fellowship">Fellowship</option>
               <option value="Friend">Friend</option>
        </select> <br>
        <input type="text" placeholder="Who Was Preaching" name="preacher"> <br>
        <input type="submit" value="submit" name="submit" id="submit" style="width:30%">
    </form>
    </div>
    
<!-- display word!!!-->
      
<?php 
   include'config.php';
$p=1;

     echo "<div id='fellowship'>";
    echo "<h1> FELLOWSHIP</h1>";
    
$sql = "SELECT distinct word,interest,preacher from bible_study where status='fellowship'";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{
    $preacher=$row["preacher"];
    $word=$row["word"];
    
     $interest=$row["interest"];
   
    echo"<p><strong>".$p.". ".$word."</strong>  <mark>  (   By brother ".$preacher.")</mark></p>";
    echo"<p> <mark>My interest<br></mark><strong style='color:red'>".$interest."</strong></p>";


}
        $p++;
    }
}

else
{
    echo"<p style='color:red'> You Haven't Answered Java Yet !!!";
}
    echo"</div>";
    
    
    $p=1;

     echo "<div id='devotion'>";
    echo "<h1> MY DEVOTION  </h1>";
    
$sql = "SELECT distinct word,interest from bible_study where status='devotion'";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{
   
    $word=$row["word"];
    
     $interest=$row["interest"];
   if($interest!=null)
   {
       
    echo"<p><strong>".$p.". ".$word."</strong> </p>";
    echo"<p> <mark>My interest<br></mark><strong style='color:red'>".$interest."</strong></p>";
   }

}
        $p++;
    }
}

else
{
    echo"<p style='color:red'> You Haven't Answered Java Yet !!!";
}
    echo"</div>";
    
   
    
    
    $p=1;

     echo "<div id='interest'>";
    echo "<h1> WHAT I'VE LEARNT</h1>";
    
$sql = "SELECT distinct word,interest,status from bible_study order by no asc";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{
    
    $word=$row["word"];
     $interest=$row["interest"];
    $status=$row["status"];
   
    echo"<p><strong>".$p.". ".$word."</strong>  <mark>  (".$status.")</mark></p>";
    echo"<p> <mark>My interest<br></mark><strong style='color:red'>".$interest."</strong></p>";


}
        $p++;
    }
}

else
{
    echo"<p style='color:red'> You Haven't !!!";
}
    echo"</div>";
    
    
    
    
    
    
    $p=1;
     echo "<div id='idea'>";
    echo "<h1> Biblical Ideas(Topics)</h1>";
    
$sql = "SELECT distinct name,details,status from ideas where status='bible' order by no asc";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{
    
    $name=$row["name"];
     $details=$row["details"];
    $status=$row["status"];
   
    echo"<p><strong>".$p.". ".$name."</strong>  </p>";
    echo"<p><strong style='color:red'>".$details."</strong></p>";


}
        $p++;
    }
    
    
    echo "<form action='' method='post'>
    <input type='text' name='new_idea' placeholder='title' required'> 
    <input type='text' name='details' placeholder='type an idea' required'> 
    <input type='submit' name='add_idea' value='Add'> 
    </form>";
}

else
{
    echo"<p style='color:red'> You Haven't !!!";
}
    echo"</div>";
    
    
    
    $p;
     echo "<div id='question'>";
    echo "<h1> Biblical Questions(Doubts)</h1>";
    
$sql = "SELECT distinct word,doubt from bible_study order by no asc";
$result = $conn->query($sql);
     
  
if ($result->num_rows > 0) 
{
    $p=1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
{
    
    $word=$row["word"];
     $doubt=$row["doubt"];

     if($doubt!=null)
     {
        echo"<p><strong>".$p.". ".$word."</strong>  </p>";
    echo"<p><mark>Question:</mark><strong style='color:salmon'>".$doubt."</strong></p>";
          $p++;
     }
   
    


}
       
    }
    
    echo "<form action='' method='post'>
    <input type='text' name='title' placeholder='title' required'> 
    <input type='text' name='quest' placeholder='enter a new biblical quesstion' required'> 
    <input type='submit' name='new' value='Add'> 
    </form>";
}

else
{
    echo"<p style='color:red'> You Haven't !!!";
}
    echo"</div>";
    
    
    ?>
    
</body>
</html>
