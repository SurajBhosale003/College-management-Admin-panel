<?php
//<input type="submit" value="delete" name="delete" onclick="alert('Data Is Deleted')">

  error_reporting(E_WARNING);
  error_reporting(0);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());



//  $sql="select * from  classroom"; // sql querry of display 
//$retval = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // passs two var conn and sql .


 if ($_POST['sub']=='Show') 
  {   
    $per=30.33;
    $result="fail";
    $sql="select * from  classroom where class_year='".$_POST['year']."' and class_sem ='".$_POST['sem']."' and class_name ='".$_POST['class']."'"; // sql querry of display 
    $retval = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // passs two var conn and sql .
    $row=mysqli_fetch_array($retval,MYSQLI_ASSOC);
    /*
    $r=mysqli_fetch_array($retval,MYSQLI_ASSOC);
    for ($ss=1; $ss <9 ; $ss++)
    {
      $subjectA[$i] = $row[$s];
      
    }

    $subjectA[1]=$row[s1];
    $subjectA[2]=$row[s2];
    $subjectA[3]=$row[s3];
    $subjectA[4]=$row[s4];
    $subjectA[5]=$row[s5];
    $subjectA[6]=$row[s6];
    $subjectA[7]=$row[s7];
    $subjectA[8]=$row[s8];
*/
  }
 if ($_POST['cal']=='SAVE') 
  {


$subjectA;

$sql="select * from  classroom where class_year='".$_POST['year']."' and class_sem ='".$_POST['sem']."' and class_name ='".$_POST['class']."' "; // sql querry of display 
    $retval = mysqli_query($conn,$sql) or die(mysqli_error($conn)); // passs two var conn and sql .
    $row=mysqli_fetch_array($retval,MYSQLI_ASSOC);

  $subjectA[1]=$row[s1];
    $subjectA[2]=$row[s2];
    $subjectA[3]=$row[s3];
    $subjectA[4]=$row[s4];
    $subjectA[5]=$row[s5];
    $subjectA[6]=$row[s6];
    $subjectA[7]=$row[s7];
    $subjectA[8]=$row[s8];


$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];    
$t6=$_POST['t6'];  
$t7=$_POST['t7'];  
$t8=$_POST['t8'];

$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];    
$p6=$_POST['p6'];  
$p7=$_POST['p7'];  
$p8=$_POST['p8'];

$outof=$_POST['outof'];
$total_marks=$t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8;
$per=($total_marks*100)/$outof;


 $sql = "insert into result(enroll,class_name,class_year,class_sem,s1,t1,p1,s2,t2,p2,s3,t3,p3,s4,t4,p4,s5,t5,p5,s6,t6,p6,s7,t7,p7,s8,t8,p8,total,per) values ('".$_POST['en']."','".$_POST['class']."','".$_POST['year']."','".$_POST['sem']."','".$subjectA[1]."','".$_POST['t1']."','".$_POST['p1']."','".$subjectA[2]."','".$_POST['t2']."','".$_POST['p2']."','".$subjectA[3]."','".$_POST['t3']."','".$_POST['p3']."','".$subjectA[4]."','".$_POST['t4']."','".$_POST['p4']."','".$subjectA[5]."','".$_POST['t5']."','".$_POST['p5']."','".$subjectA[6]."','".$_POST['t6']."','".$_POST['p6']."','".$subjectA[7]."','".$_POST['t7']."','".$_POST['p7']."','".$subjectA[8]."','".$_POST['t8']."','".$_POST['p8']."','".$total_marks."','".$per."')";
    // insert querry
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));



   
  }


/*
$s1=$_POST['sub1'];
$s2=$_POST['sub2'];
$s3=$_POST['sub3'];
$s4=$_POST['sub4'];
$s5=$_POST['sub5'];
$total_marks=$s1+$s2+$s3+$s4+$s5;
$req_marks=500;
$per=($total_marks*100)/$req_marks;
if ($per>39) 
{
 $result="Pass";
}
else
{
 $result="Fail";
}
*/
/*  
  if ($_POST['save']=='save') 
  {   
    $per=30.33;
    $result="fail";
    $sql = "insert into mba(en_roll,s1,s2,s3,s4,s5,s6,per,result,year,sem) values ('".$_POST['en']."','".$_POST['sub1']."','".$_POST['sub2']."','".$_POST['sub3']."','".$_POST['sub4']."','".$_POST['sub5']."','".$_POST['sub6']."','".$per."','".$result."','".$_POST['year']."','".$_POST['sem']."')";
    // insert querry
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
  
  if ($_POST['update']=='update') 
  {
    $per=30.33;
    $result="fail";
    $sql= "UPDATE mba SET en_roll='".$_POST['en']."', name='".$_POST['name']."',dob='".$_POST['dob']."',phone='".$_POST['phone']."', email='".$_POST['gmail']."', branch='".$_POST['branch']."', address='".$_POST['address']."' WHERE en_roll= '".$_POST['en']."' ";
    //Update query
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
*/
   /*if ($_POST['delete']=='delete') 
   {
    $sql= "DELETE FROM student WHERE en_roll='".$_POST['en']."'";
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
   }
   */
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/home.css">
</head>

<style>
body {font-family: Arial, Helvetica, sans-serif;background-repeat: no-repeat;
  background-attachment: fixed;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
   margin-right:150px ;
  margin-left:150px;
  padding-left: 80px;
  padding-top: 30px ;
  padding-right: 80px;
  padding-bottom: 30px;

}


.gridM
{
  display: grid;
  grid-template-columns: auto auto;
  background-color: transparent;
  padding: 10px;
  margin-top: 8px;
}
.gridI
{
  display: grid;
  grid-template-columns: auto 40% 5% 40%;
  background-color: rgba(255, 255, 255, 0.8);

  padding: 10px;
  margin: 1px;

}
.gridI label
{
   display: flex;
   padding-top: 16px;
   padding-left: 4px;
   padding-right: 4px;
   padding-bottom: 4px;
  
}

</style>


<body style="padding: 0px; background-image: url('image/slider1.jpg'); ;">

<h1 style=" text-align: center; font-family: Bell MT ; font-size:80px ;">Result Form</h1>

<div class="container">
 <form id="" name="" action="" method="POST" >
    <center>
    <label for="id">Enroll Number</label>
    <input type="text" id="en" name="en" value="2105390000" placeholder="Enter ID" required style="width:290px">
    </center>
    <a href="main_admin.php"><h4 style="text-align: left;">Back</h4></a>
   <label for="posts">Class</label>
    <select id="class" name="class">
      <option value="mba">MBA</option>
      <option value="mca">MCA</option>
      <option value="msw">MSW</option>
    </select>
    

    <label for="posts">batch</label>
    <select id="year" name="year">
     <?php 
     for ($i=(int)date('Y'); 2018 <$i ; $i--) { ?>
       
     <option value="<?=$i; ?>"><?=$i; ?></option>
    <?php
      }
     ?>
    </select>
      <label for="posts">SEM</label>
    <select id="sem" name="sem">
      <option value="1">Sem1</option>
      <option value="2">Sem2</option>
      <option value="3">Sem3</option>
      <option value="4">Sem4</option>
    </select>

 <input type="submit" value="Show" name="sub">

<?php  
$t=1;
$p=1;

for ($i=1; $i <9 ; $i++) { 

$s='s'.$i;
$Internal="Internal";
$external="external";
$t1='t'.$t;
$p1='p'.$p;
 ?>
<div class="gridI">
    <div><label for="name"><?php echo $row[$s]?></label></div>
    <div><input type="text" id="sub1" name="<?php echo($t1)?>" placeholder="<?php echo($Internal)?>"></div>
    <div></div>
    <div><input type="text" id="sub1" name="<?php echo($p1)?>" placeholder="<?php echo($external)?>"></div>
</div>

<?php
$t=$t+1;
$p=$p+1;
 }?>
 <label for="name">outof</label>
 <input type="text" id="outof" name="outof" placeholder="outof">
 <input type="submit" value="SAVE" name="cal" onclick="alert('Marks Uploaded')">
  <br><br>
   
  </form>
   
</div>



</body>
</html>
