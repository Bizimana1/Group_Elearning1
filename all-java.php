
   <!DOCTYPE html>
<html>
<head>
    <title>JavaScript Radio Buttons</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
     
     
        
           
<?php 
/*

   include'config.php';
$question=NULL;
$option1=NULL;
$option2=NULL;
$option3=NULL;
$option4=NULL;
$p;
$date=date("Y-m-d");

$sql = "SELECT distinct * from java where date like'%$date%'";
$result = $conn->query($sql);
     
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{

    $question=$row['QUESTION'];
    $option1=$row['OPTION1'];
        $option2=$row['OPTION2'];
        $option3=$row['OPTION3'];
     $option4=$row['OPTION4'];
}
    }
}
else
    {

$question="no";
}
 


if($question!="no")
{
echo"<p>".$question."</p>";
}


if($option1=="" and $option2=="" and $option3=="" and $option3=="" and $question!="no"){
    echo" <input type='text' name='java' placeholder='enter your answer'  required>";
    
}
else if (isset($sql) and $question!="no"){
    
    echo " <input type='radio' name='java' value='$option1'>".$option1."<br>";
    echo " <input type='radio' name='java' value='$option2'>".$option2."<br>";
    echo " <input type='radio' name='java' value='$option3'>".$option3."<br>";
    echo " <input type='radio' name='java' value='$option4'>".$option4."<br>";
    $p=1;
}

else
{
    echo"<p> There is no question set today";
}

*/

 include'config.php';

echo"  <script>
        const btn = document.querySelector('#btn1');
        // handle click button
        btn.onclick = function () {
            const rbs = document.querySelectorAll('input[name='java']');
            let selectedValue;
            for (const rb of rbs) {
                if (rb.checked) {
                    selectedValue ='you have selected';
                    break;
                }
            }
            alert(selectedValue);
            if(selectedValue=='you have  selected')
            {
                
            document.getElementById('a').style.visibility='visible';
            }
        };
    </script>
  ";

$question=NULL;
$option1=NULL;
$option2=NULL;
$option3=NULL;
$option4=NULL;
$p=1;
$date=date("Y-m-d");

$sql = "SELECT distinct * from java";
$result = $conn->query($sql);
     
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
{

    $question=$row['QUESTION'];
    $option1=$row['OPTION1'];
        $option2=$row['OPTION2'];
        $option3=$row['OPTION3'];
     $option4=$row['OPTION4'];
    
    echo"<p>".$p.".".$question."</p>";
    if($option1=="" and $option2=="" and $option3=="" and $option3=="" and $question!="no")
    {
    echo" <input type='text' name='java' placeholder='enter your answer' id='abc'  required>";
    
   }
   else if (isset($sql) and $question!=null){
    
    echo " <input type='radio' name='java' value='$option1'>".$option1."<br>";
    echo " <input type='radio' name='java' value='$option2'>".$option2."<br>";
    echo " <input type='radio' name='java' value='$option3'>".$option3."<br>";
    echo " <input type='radio' name='java' value='$option4'>".$option4."<br>";
    }
    $p=$p+1;
    }
  }

}

if($question==null)

{
    echo"<p> There is no question set today";
}

echo "<br><br> <input type='button' id='btn1' value='next'>";

?>
    
    
    <script>
        var status;
        var val;

        const btn = document.querySelector('#btn1');
        // handle click button
        btn.onclick = function () {
            const rbs = document.querySelectorAll('input[name="java"]');
            let selectedValue;
            for (const rb of rbs) {
                if (rb.checked) {
                    selectedValue ="yes";
                    status=selectedValue;
                    break;
                }
            }
        };
        
        
$(document).ready(function(){
        $("#ds").hide();
        $("#dbms2").hide();
        $("#submit").hide();
  $("#btn1").click(function(){
     
      if(status=="yes" || (document.getElementById("abc").value)!="")
            {
                $("#java").hide();
       $("#ds").show();
            }
      else{
           alert("Please don't skip any question"); 
        }
    
  });
    
});
</script>
    </body>
</html>