<?php


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button4 {border-radius: 12px;}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


body { font-family: Arial, Helvetica, sans-serif; background-repeat: no-repeat;
  background-attachment: fixed;}

</style>
</head>
<script type="text/javascript">
  
var password;

var pass1="1234";
var pass2="ram";
var pass3="infinity";

function fun()
{

password=prompt('Please enter your password to view this page!',' ');

if (password==pass1 || password==pass2 || password==pass3)
{
  alert('Password Correct! Click OK to enter!');
  window.location="http://localhost/result_sys/php111/main_admin.php";
}
else
   {
    alert('Wrong Password Go back at home page');
    }
}


function home()
{

  window.location="http://localhost/result_sys/php111/home.php";
}

</script>
<body>
<center>
<img src="image/csiberlogo.png" style="height:500px; width: 500px;">
<br>
<button class="button button1" onclick="fun()" >Login</button>
<button class="button button1" onclick="home()" >Home</button>
</center>
</body>
</html>
