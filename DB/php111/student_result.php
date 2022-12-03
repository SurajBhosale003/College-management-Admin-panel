<?php session_start(); 
  error_reporting(E_WARNING);
    error_reporting(0);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RESULT</title>
	  <link rel="stylesheet" href="css/home.css">
<style type="text/css">
	
h1
{
font-family:serif;
font-size: 80px;
margin-bottom: 10px ;
}
.main
{
font-family:serif;
font-size: 12px;
margin-bottom: 50px ;
}
.main div
{
	display: grid;
	grid-template-columns: 50% 25% 25%;
	margin-top: 30px;
	margin-bottom: 30px;
}
.result
{

	text-align: right;
	font-size: 17px;
	color: steelblue;
}
.bodys
{
	padding: 80px;
}

</style>



</head>
<body style="padding:30px ">

<center><h1>RESULT</h1></center>

<div class="bodys">

<div class="main">
<h2>Enrollment Number :	<?php echo( $_SESSION['enrollment']); ?></h2>
<h2>Name :	<?php echo($_SESSION['sname']);?></h2>
<h2>Branch : <?php echo( $_SESSION['class_n']); ?>	</h2>
<h2>Semester : <?php echo( $_SESSION['class_s']); ?></h2>
<h2>Year : <?php echo( $_SESSION['class_y']); ?></h2>
</div>
<div class="main">
	
<div><h2>Subject:</h2> <h2>Theory Marks :</h2> <h2>Practical Marks:</h2> </div>


<?php  
$t=1;
$p=1;

for ($i=1; $i <9 ; $i++) { 

$s='sub'.$i;
$Internal="Internal";
$external="external";
$t1='t'.$t;
$p1='p'.$p;
 ?>

<center><div><h2><?php echo( $_SESSION[$s]);?></h2> <h2><?php echo( $_SESSION[$t1]);?></h2> <h2><?php echo( $_SESSION[$p1]);?></h2></div></center>

<?php
$t=$t+1;
$p=$p+1;
 }?>

<h2>Total : <?php echo( $_SESSION['tot']);?></h2>
<h2>Percentage : <?php echo( $_SESSION['pers']);?></h2>
<?php 
$check= $_SESSION['pers'];
if ($check>39) 
{
	$resultss="Pass";
}
else
{
	$resultss="Fail";	
}


?>

</div>
<div class="result">
	<?php echo($resultss);?>
</div>



</div>
</body>
</html>