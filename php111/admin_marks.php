<?php  



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Marks
	</title>
</head>
<body>
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
  grid-template-columns: auto auto auto;
  background-color: transparent;
  padding: 10px;
  margin-top: 20%;
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
	
	function mba()
	{
		  window.location="http://localhost/result_sys/php111/admin_mba.php";
	}
	function mca()
	{
		  window.location="http://localhost/result_sys/php111/admin_mca.php";
	}
	function msw()
	{
		  window.location="http://localhost/result_sys/php111/admin_msw.php";
	}

</script>

</head>
<body>
<div class="gridM">

	<div class="gridI"><button class="button button1" onclick="mba()" >MBA</button></div>
	<div class="gridI"><button class="button button1" onclick="mca()" >MCA</button></div>
	<div class="gridI"><button class="button button1" onclick="msw()" >MSW</button></div>
</div>
</body>
</html>
</body>
</html>