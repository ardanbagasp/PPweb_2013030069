<html> 
    <head> 
        <title>tugas 5 bab 7</title> 
    </head> 
    <body> <h2>NILAI</h2> 

    <form method="post" action=""> 
    NILAI <input type="text" name="nilai" /><br />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

<?php
if(isset($_POST['submit'])){ 
$nilai=$_POST['nilai'];

if ($nilai<40)
{
    echo "$nilai DALAM HURUF E"; 
}
else if($nilai<55)
{
    echo "$nilai DALAM HURUF D"; 
}
else if($nilai<60)
{
    echo "$nilai DALAM HURUF C"; 
}
else if($nilai<70)
{
    echo "$nilai DALAM HURUF B"; 
}
else if($nilai<80)
{
   echo "$nilai DALAM HURUF AB"; 
}
else if ($nilai<=100)
{
    echo "$nilai DALAM HURUF A"; 
}
}
?>
</body> 
</html>