<?php  


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
<style type="text/css">
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
.gridM
{
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color: transparent;
  padding: 10px;
  margin-top: 10%;
}
.gridI
{

  background-color: rgba(255, 255, 255, 0.8);

  padding: 20px;
  font-size: 30px;
  text-align: center;
  margin: 15px;
}
.gridI img
{
	height: 150px;
	width: 140px;
}

</style>
<script type="text/javascript">
	
	function stud()
	{
		  window.location="http://localhost/result_sys/php111/admin_student.php";
	}
	function tech()
	{
		  window.location="http://localhost/result_sys/php111/admin_teacher.php";
	}
	function mark()
	{
		  window.location="http://localhost/result_sys/php111/admin_mba.php";
	}
	function clas()
	{
		  window.location="http://localhost/result_sys/php111/admin_class.php";
	}

</script>

</head>
<body>
<div class="gridM">
	<div class="gridI"><img src="image/admin/class.png"></div>
	<div class="gridI"><img src="image/admin/student.png"></div>
	<div class="gridI"><img src="image/admin/teacher.png"></div>
	<div class="gridI"><img src="image/admin/mark.png"></div>

	<div class="gridI"><button class="button button1" onclick="clas()" >Class</button></div>
	<div class="gridI"><button class="button button1" onclick="stud()" >Student</button></div>
	<div class="gridI"><button class="button button1" onclick="tech()" >Teacher</button></div>
	<div class="gridI"><button class="button button1" onclick="mark()" >Marks</button></div>
</div>
</body>
</html>