<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <script>
$(document).ready(function(){
     $("#button1").hide();
    $("#button2").hide();
  $("#makealarm").click(function(){
    $("#button1").show();
      $("#button2").show();
  });
});
</script>
    
<body>

<audio id="myAudio">
  <source src="West Life  Queen Of My Heart.mp3" type="audio/ogg">
  <source src="West Life  Queen Of My Heart.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<h1> sometimes you wanna make An alarm</h1>

<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
</script>

    
    


<p> Time:  <span id="demo" style="color: salmon"></span></p>
    

<script>
var myVar = setInterval(myTimer, 000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
    
</script>



<button id="makealarm" onclick="makealarm()">make alarm</button>

<script>
    function makealarm(){
    
        var b=prompt("WHAT'S THE TITLE OF YOUR ALARM:");
        var a=parseInt(prompt(" You want break after how many minutes?:"));
    setTimeout(myFunction, (a*60000));

    function myFunction(){
    
            var x = document.getElementById("myAudio"); 
            x.play(); 
        document.getElementById("title").innerHTML ="your title:"+b;
    

}
}
</script>

    
<br>
    <br>
    <h1 id="title" style="color:coral"></h1>
<button id="button1" onclick="playAudio()" type="button">Play</button>
<button id="button2" onclick="pauseAudio()" type="button">Pause</button> 
    
</body>
</html>
