<?php session_start();


  error_reporting(E_WARNING);
   error_reporting(0);
 

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name ='csiberdb';
    $conn = mysqli_connect($host,$username,$password,$database_name) or die(mysql_error_connect());
  
  if ($_POST['show']=='Show') 
  {   

     $sq="select name from  student where en_roll='".$_POST['en']."' ";
     $rev = mysqli_query($conn,$sq);
     $studn=mysqli_fetch_array($rev,MYSQLI_ASSOC);

     $_SESSION['sname']=$studn[name];

    $sql="select * from  result where class_year='".$_POST['year']."' and class_sem ='".$_POST['sem']."' and class_name='".$_POST['cname']."' and enroll='".$_POST['en']."' ";
    // insert querry
    $retval = mysqli_query($conn,$sql);// or die(mysqli_error($conn));
     $display=mysqli_fetch_array($retval,MYSQLI_ASSOC);

     $_SESSION['enrollment']=$display[enroll];
     $_SESSION['class_n']=$display[class_name];
     $_SESSION['class_y']=$display[class_year];
     $_SESSION['class_s']=$display[class_sem];

    
        $_SESSION['sub1']=$display[s1];
        $_SESSION['t1']=$display[t1];
        $_SESSION['p1']=$display[p1];

     
        $_SESSION['sub2']=$display[s2];
        $_SESSION['t2']=$display[t2];
        $_SESSION['p2']=$display[p2];
    
        $_SESSION['sub3']=$display[s3];
        $_SESSION['t3']=$display[t3];
        $_SESSION['p3']=$display[p3];
    
        $_SESSION['sub4']=$display[s4];
        $_SESSION['t4']=$display[t4];
        $_SESSION['p4']=$display[p4];
    
        $_SESSION['sub5']=$display[s5];
        $_SESSION['t5']=$display[t5];
        $_SESSION['p5']=$display[p5];
    
        $_SESSION['sub6']=$display[s6];
        $_SESSION['t6']=$display[t6];
        $_SESSION['p6']=$display[p6];
    
        $_SESSION['sub7']=$display[s7];
        $_SESSION['t7']=$display[t7];
        $_SESSION['p7']=$display[p7];
     
        $_SESSION['sub8']=$display[s8];
        $_SESSION['t8']=$display[t8];
        $_SESSION['p8']=$display[p8];

        $_SESSION['tot']=$display[total];
        $_SESSION['pers']=$display[per];

        include 'student_result.php';
  }

  

?>

<!DOCTYPE html>
<html>
<head>
  <title>Class</title>
  <link rel="stylesheet" href="css/home.css">
</head>
<script type="text/javascript">
  function call() 
  {
    window.location="http://localhost/result_sys/php111/student_result.php";    
  }

</script>

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

<h1 style=" text-align: center; font-family: Bell MT ; font-size:80px ;">STUDENT RESULT</h1>

<div class="container">
 <form id="" name="" action="" method="POST" >
<a href="main_admin.php"><h4 style="text-align: left;">Back</h4></a>

  <label for="id">Enroll Number</label>
    <input type="text" id="en" name="en" value="2105390000" placeholder="Enter ID" required>

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
 <input type="submit" value="Show" name="show" >

</div>
    
   
  </form>
   
</div>



</body>
</html>
