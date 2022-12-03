<?php


  error_reporting(E_WARNING);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());
  
  if ($_POST['save']=='save') 
  {   
    $sql = " insert into classroom(class_name,class_year,class_sem,s1,s2,s3,s4,s5,s6,s7,s8) values ('".$_POST['cname']."','".$_POST['year']."','".$_POST['sem']."','".$_POST['s1']."','".$_POST['s2']."','".$_POST['s3']."','".$_POST['s4']."','".$_POST['s5']."','".$_POST['s6']."','".$_POST['s7']."','".$_POST['s8']."')";
    // insert querry
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
  
  if ($_POST['update']=='update') 
  {
  
    $sql= "UPDATE classroom SET s1='".$_POST['s1']."',s2='".$_POST['s2']."'s3='".$_POST['s3']."'s4='".$_POST['s4']."'s5='".$_POST['s5']."'s6='".$_POST['s6']."'s7='".$_POST['s7']."'s8='".$_POST['s8']."'  WHERE class_sem= '".$_POST['sem']."' and class_name='".$_POST['cname']."' and class_year='".$_POST['year']."' ";
    //Update query
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
   if ($_POST['delete']=='delete') 
   {
    $sql= "DELETE FROM classroom WHERE class_sem= '".$_POST['sem']."' and class_name='".$_POST['cname']."' and class_year='".$_POST['year']."'";
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));


   }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Class</title>
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



<body style="padding: 0px; background-image: url('image/slider1.jpg'); ">

<h1 style=" text-align: center; font-family: Bell MT ; font-size:80px ;">Class</h1>

<div class="container">
 <form id="" name="" action="" method="POST" >
<a href="main_admin.php"><h4 style="text-align: left;">Back</h4></a>
    <label for="cname">Class Name :</label>
    <select id="cname" name="cname">
      <option value="mba">MBA</option>
      <option value="mca">MCA</option>
      <option value="msw">MSW</option>
    </select>

    <label for="year">Class Year :</label>
       <select id="year" name="year">
     <?php 
     for ($i=(int)date('Y'); 2018 <$i ; $i--) { ?>
       
     <option value="<?=$i; ?>"><?=$i; ?></option>
    <?php
      }
     ?>
   </select>
 
    <label for="sem">SEM </label>
    
    <select id="sem" name="sem">
      <option value="1">Sem1</option>
      <option value="2">Sem2</option>
      <option value="3">Sem3</option>
      <option value="4">Sem4</option>
    </select>

<div class="gridM">

<div class="gridI">
 <label for="name">Subject 1 :</label>
 <input type="text" id="s1" name="s1" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 2 :</label>
 <input type="text" id="s2" name="s2" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 3 :</label>
 <input type="text" id="s3" name="s3" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 4 :</label>
 <input type="text" id="s4" name="s4" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 5 :</label>
 <input type="text" id="s5" name="s5" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 6 :</label>
 <input type="text" id="s6" name="s6" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 7 :</label>
 <input type="text" id="s7" name="s7" placeholder="Enter The Name Of Subject">
</div>
<div class="gridI">
 <label for="name">Subject 8 :</label>
 <input type="text" id="s8" name="s8" placeholder="Enter The Name Of Subject">
</div>

</div>
    <input type="submit" value="save" name="save" onclick="alert('Classroom is Created')">
    <input type="submit" value="update" name="update" onclick="alert('Classroom is Updated')">
    <input type="submit" value="delete" name="delete" onclick="alert('Classroom is Deleted')">
    <br><br>
   
  </form>
   
</div>



</body>
</html>
