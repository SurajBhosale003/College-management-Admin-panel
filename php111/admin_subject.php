<?php


  error_reporting(E_WARNING);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());
  
  if ($_POST['save']=='save' && isset($_POST['name'])) 
  {   
    $sql = " insert into teacher_info( tid,name,dept,year,mobno,email,edu) values ('".$_POST['tid']."','".$_POST['name']."','".$_POST['branch']."','".$_POST['year']."','".$_POST['phone']."','".$_POST['gmail']."','".$_POST['edu']."')";
    // insert querry
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
  
  if ($_POST['update']=='update') 
  {
  
    $sql= "UPDATE teacher_info SET tid='".$_POST['tid']."', name='".$_POST['name']."',dept='".$_POST['branch']."',year='".$_POST['year']."', mobno='".$_POST['phone']."', email='".$_POST['gmail']."', edu='".$_POST['edu']."' WHERE tid= '".$_POST['tid']."' ";
    //Update query
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
  }
   if ($_POST['delete']=='delete') 
   {
    $sql= "DELETE FROM teacher_info WHERE tid='".$_POST['tid']."'";
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


</script>


 
<body style="padding: 0px; background-image: url('image/slider1.jpg'); ;">

<h1 style=" text-align: center; font-family: Bell MT ; font-size:80px ;">TEACHER</h1>

<div class="container">
 <form id="" name="" action="" method="POST" >
    <label for="id">Enroll Number</label>
    <input type="text" id="tid" name="tid" value="T00" placeholder="Enter ID" required>

    <label for="name">Name</label>
    <input type="text" id="name" name="name"  placeholder="Enter Name" >


    <label for="posts">Branch</label>
    <select id="branch" name="branch">
      <option value="mca">MCA</option>
      <option value="mba">MBA</option>
      <option value="msw">MSW</option>
    </select>
    <label for="posts">Year</label>
    <select id="year" name="year">
      <option value="fy">FY</option>
      <option value="sy">SY</option>
      <option value="ty">TY</option>
    </select>
    <label for="name">Phone</label>
    <input type="text" id="phone" name="phone"  placeholder="Enter Phone Number" >

    <label for="name">Gmail</label>
    <input type="text" id="gmail" name="gmail"  placeholder="Gmail" >

    <label for="name">Education</label>
    <input type="text" id="edu" name="edu"  placeholder="Education" >



    <input type="submit" value="save" name="save" onclick="alert('Data Is Saved')">
    <input type="submit" value="update" name="update" onclick="alert('Data Is Updated')">
    <input type="submit" value="delete" name="delete" onclick="alert('Data Is Deleted')">
    <br><br>
   
  </form>
   
</div>



</body>
</html>
