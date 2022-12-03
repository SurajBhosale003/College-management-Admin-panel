<?php  



  error_reporting(E_WARNING);
  error_reporting(0);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());



$i=1;
$s='s'.$i;
$subjectA;
$sql="select * from  classroom where class_year='2019' and class_sem ='2' "; // sql querry of display 
    $retval = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // passs two var conn and sql .
    $row=mysqli_fetch_array($retval,MYSQLI_ASSOC);
    
    $r=mysqli_fetch_array($retval,MYSQLI_ASSOC);
    for ($ss=1; $ss <9 ; $ss++)
    {
      $subjectA[$i] = $row[$s];
      $i=$i+1;
    }

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>temp</title>
</head>
<body>

<?php 
for ($i=1; $i <9 ; $i++)
{
echo $subjectA[$i];
}
?>
hi
<center><div><h2>sub</h2> <h2>t</h2> <h2>p</h2> <h2>total</h2> <h2>per</h2> </div></center>

</body>
</html>