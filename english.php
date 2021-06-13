<?php session_start();?>

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
   
    
    <br>
    <a href="" target="display"><button>Set New</button></a>
    <a href="" target="display"><button>Saved</button></a>
     <a href="" target="display"><button>Today</button></a>
     <a href="" target="display"><button>check out the week</button></a>
    
    
    <form id="word" action="" method="post">
    <input type="text" placeholder="word in english" name="english"> <br>
         <input type="text" placeholder="meaning in kinyarwanda" name="kinyarwanda"> <br>
         
        
        <input type="submit" value="Save" name="save" id="submit" style="width:30%">
    </form>
    
    
</body>
</html>
