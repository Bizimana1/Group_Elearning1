              
<?php 
   include'config.php';
$question=NULL;
$option1=NULL;
$option2=NULL;
$option3=NULL;
$option4=NULL;
$radio="";
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

$sql = "SELECT distinct * from dbms2 where date>='$date'";
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
   
    $_SESSION["dbms2question".$p]= $question;
    
    echo"<p>".$p.".".$question."</p>";
    if($option1=="" and $option2=="" and $option3=="" and $option3=="" and $question!="no")
    {
    echo" <input type='text' name='dbms2$p' placeholder='enter your answer' id='abc'  required>";
    
   }
   else if (isset($sql) and $question!=null){
    
    echo " <input type='radio' name='dbms2$p' value='$option1'>".$option1."<br>";
    echo " <input type='radio' name='dbms2$p' value='$option2'>".$option2."<br>";
    echo " <input type='radio' name='dbms2$p' value='$option3'>".$option3."<br>";
    echo " <input type='radio' name='dbms2$p value='$option4'>".$option4."<br>";
    }
    
    }
        $p=$p+1;
  }
$_SESSION["dbms2limit"]=$p;
}

if($question==null)
{

    echo"<p> There is no question set today";
}


?>