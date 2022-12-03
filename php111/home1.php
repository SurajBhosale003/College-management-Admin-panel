<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/mainst.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div class="head">
			
				<div class="logo">
					<img src="image/csiberlogo.png">
				</div>
				<div class="title">
					<h1> CSIBER COLLEGE, KOLHAPUR</h1>
					<h4>RESULT PROCESS SYSTEM</h4>
				</div>

		</div>
		
<div class="navbar">
  <a  class="active" href="#home" style="font-size: 17px; "><i class="fa fa-fw fa-home"></i>Home</a>
 
  	<div class="dropdown">
    	<button  class="dropbtn">About<i class="fa fa-caret-down"></i>
    	</button>
    				<div class="dropdown-content">
    					<div class="row">
    						<div class="column">
    							<h3>Trustee</h3>
    							<a href="trustee.php">Trustee</a>
     				 			<a href="vismis.php">Vision & Mission</a>
    						</div>
    						
     							 
     				 	</div>
    				</div>

  	</div> 

  	<div class="dropdown">
    	<button class="dropbtn">Programms<i class="fa fa-caret-down"></i>
    	</button>
    				<div class="dropdown-content">
     							 <a href="progmba.php">Master Of Bussiness Administraion</a>
     				 			
     				 			<a href="progmca.php">Master Of Computer Application</a>
     				 			<a href="progmsw.php">Master Of Social Work</a>
     				 			


    				</div>
  
  	</div>
  	<div class="dropdown">
    	<button class="dropbtn">Faculty<i class="fa fa-caret-down"></i>
    	</button>
    				<div class="dropdown-content">
     							 <a href="dcom.php">Dept. of Commerce and Managment</a>
     				 			<a href="dcomputsci.php">Dept. of Computer Studies</a>
     				 			
     				 			<a href="dsocwork.php">Dept. of Social Work</a>
     				 			
    				</div>
  
  	</div>

  	<a href="main_result.php">Result</a>

  	 <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>


  	 <a href="admin.php" style="float:right;">Admin</a>

  	 
</div>

<script type="text/javascript">
	var i = 0;
function change() {
  var doc = document.getElementById("news");
  var color = ["red", "blue", "brown", "green"];
  doc.style.backgroundColor = color[i];
  i = (i + 1) % color.length;
}
setInterval(change, 700);
</script>
<div class="mainbody">
		<img src="image/csiber2.jpg" height="900px" width="100%">
</div>


	
		
		<div class="footer">
			<marquee><b style="color:darkred;"> CSIBER © 2021 Chhatrapati Shahu Institute of Business Education and Research.</b> </marquee>
		</div>

</body>
</html>