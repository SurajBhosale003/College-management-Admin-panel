<?php
//<input type="submit" value="delete" name="delete" onclick="alert('Data Is Deleted')">

  error_reporting(E_WARNING);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());


$s1=$_POST['sub1'];
$s2=$_POST['sub2'];
$s3=$_POST['sub3'];
$s4=$_POST['sub4'];
$s5=$_POST['sub5'];
$total_marks=$s1+$s2+$s3+$s4+$s5;
$req_marks=500;
$per=($total_marks*100)/$req_marks;






  
  if ($_POST['save']=='save' && isset($_POST['name'])) 
  {   
    $sql = " insert into student(en_roll,name,dob,phone,email,branch,address) values ('".$_POST['en']."','".$_POST['name']."','".$_POST['dob']."','".$_POST['phone']."','".$_POST['gmail']."','".$_POST['branch']."','".$_POST['address']."')";
    // insert querry
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
  
  if ($_POST['update']=='update') 
  {
  
    $sql= "UPDATE student SET en_roll='".$_POST['en']."', name='".$_POST['name']."',dob='".$_POST['dob']."',phone='".$_POST['phone']."', email='".$_POST['gmail']."', branch='".$_POST['branch']."', address='".$_POST['address']."' WHERE en_roll= '".$_POST['en']."' ";
    //Update query
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }

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

  background-color: rgba(255, 255, 255, 0.8);

  padding: 20px;
  margin: 1px;
}

</style>



<body style="padding: 0px; background-image: url('image/slider1.jpg'); ;">

<h1 style=" text-align: center; font-family: Bell MT ; font-size:80px ;">MBA Marks</h1>

<div class="container">
 <form id="" name="" action="" method="POST" >
    <center>
    <label for="id">Enroll Number</label>
    <input type="text" id="en" name="en" value="2105390000" placeholder="Enter ID" required style="width:290px">
    </center>
<div class="gridM">

<div class="gridI">
    <label for="name">Subject 1</label>
    <input type="text" id="sub1" name="name">
</div>
<div class="gridI">
    <label for="name">Subject 2</label>
    <input type="text" id="sub2" name="dob">
</div>
<div class="gridI">
    <label for="name">Subject 3</label>
    <input type="text" id="sub3" name="phone">
</div>
<div class="gridI">
    <label for="name">Subject 4</label>
    <input type="text" id="sub4" name="gmail">
</div>
<div class="gridI">
	<label for="name">Subject 5</label>
  <input type="text" id="sub5" name="gmail">
</div>
<div class="gridI">
  <label for="name">Subject 6</label>
  <input type="text" id="sub5" name="gmail">
</div>


<div class="gridI">
    <label for="posts">Year</label>
    <select id="year" name="year">
      <option value="fy">FY</option>
      <option value="sy">SY</option>
    </select>
</div>
<div class="gridI">
    <label for="posts">SEM</label>
    <select id="sem" name="sem">
      <option value="sem1">Sem1</option>
      <option value="sem2">Sem2</option>
      <option value="sem3">Sem3</option>
      <option value="sem4">Sem4</option>
    </select>
</div>
</div>
    <input type="submit" value="save" name="save" onclick="alert('Data Is Saved')">
    <input type="submit" value="update" name="update" onclick="alert('Data Is Updated')">
    
    
    
    <br><br>
   
  </form>
   
</div>



</body>
</html>
