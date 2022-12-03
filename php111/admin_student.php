<?php


  error_reporting(E_WARNING);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());
  
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
   if ($_POST['delete']=='delete') 
   {
    $sql= "DELETE FROM student WHERE en_roll='".$_POST['en']."'";
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));


   }
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

</style>



<body style="padding: 0px; background-image: url('image/slider1.jpg'); ;">

<h1 style=" text-align: center; font-family: Bell MT ; font-size:80px ;">STUDENT</h1>

<div class="container">
 <form id="" name="" action="" method="POST" >
<a href="main_admin.php"><h4 style="text-align: left;">Back</h4></a>
    <label for="id">Enroll Number</label>
    <input type="text" id="en" name="en" value="2105390000" placeholder="Enter ID" required>

    <label for="name">Name</label>
    <input type="text" id="name" name="name"  placeholder="Enter Name" >

    <label for="name">DOB</label>
    <input type="text" id="dob" name="dob"  placeholder="Enter DOB" >

    <label for="name">Phone</label>
    <input type="text" id="phone" name="phone"  placeholder="Enter Phone Number" >

    <label for="name">Gmail</label>
    <input type="text" id="gmail" name="gmail"  placeholder="Gmail" >

    <label for="posts">Branch</label>
    <select id="branch" name="branch">
      <option value="mca">MCA</option>
      <option value="mba">MBA</option>
      <option value="msw">MSW</option>
    </select>

    <label for="location">Address</label>
     <textarea id="address" name="address" placeholder="Address....." style="height:120px"></textarea>

    <input type="submit" value="save" name="save" onclick="alert('Data Is Saved')">
    <input type="submit" value="update" name="update" onclick="alert('Data Is Updated')">
    <input type="submit" value="delete" name="delete" onclick="alert('Data Is Deleted')">
    <br><br>
   
  </form>
   
</div>



</body>
</html>
