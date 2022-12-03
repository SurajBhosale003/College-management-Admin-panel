<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/w3.css">

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<style>
.mySlides 
{
  display:none;
  height: 298px;
  width: 500px;
}

</style>
<style>

marquee{
background-color:#000000; color:#FFFFFF;
margin-top: 10px;
padding-top: 5px;
padding-bottom: 5px;

}


* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 55%;
  height: 360px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
  margin-top: 10px;
  text-align: justify;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  margin-top: 10px;
  float: left;
  padding: 0px;
  width: 45%;
  background-color: #f1f1f1;
  height: 360px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

<?php // Grid view CODE******************************************* ?>

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
  background-color: #777;
  padding: 10px;
}

.grid-container > div {
  
  border: 1px solid black;
  text-align: center;
  font-size: 17px;
}



<?php // Grid view CODE******************************************* ?>


</style>

</head>
<body style="padding: 0px; background-image: url('image/slider1.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;">

<div>
  <img src="image/logo1.jpg" width="84px" height="74px" align="left" >
  <br>
<ul>
  <li><a href="home.php">Home</a></li>
  <li class="dropdown"> 
  <a href="javascript:void(0)" class="dropbtn">Members</a>
  <div class="dropdown-content">
     <a href="m_showall.php">Show All</a>
     <a href="adminlogin.php">Admin Panel</a> 
  </div>
</li>

    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">EVENTS</a>
       <div class="dropdown-content">
      <a href="events.php">Events</a>
      <a href="sport.php">Sports Event</a>
    </div>
    </li>

    <li><a href="ourWork.php">Our-Work</a></li>
    <li><a href="donation.php">Donation</a></li>
    <li><a href="aboutus.php">About us</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
  
</ul>
</div>

<h2 style="font-size: 80px; font-family: Bell MT ; text-align:center;">शैक्षणिक व्यासपीठ शाहूवाडी</h2>
<marquee width="100%" direction="right" height="30px"   >
शाहूवाडी शैक्षणिक व्यासपीठ
</marquee>
<section>
<nav>
 <h1>जाणून घ्या शैक्षणिक व्यासपीठा विषयी..!</h1>

  शाहूवाडी तालुका शैक्षणिक व्यासपीठ, मलकापूर या संस्थेची स्थापना २००१ मध्ये सामाजिक बांधिलकीच्या जाणिवेतून झाली. ज्ञान, सेवा आणि प्रबोधन या त्रिसुत्री वर विद्यार्थी, पालक आणि शिक्षक यांचेसाठी सतत २० वर्षे उपलब्ध कार्यकर्ते, उपलब्ध आर्थिक मदत आणि उपलब्ध परिस्थिती याप्रमाणे कार्य करीत आले आहे.श्रीमंत छत्रपती शाहू महाराज, नाबार्ड चे माजी अध्यक्ष यशवंतराव थोरात,लोकमत वृत्तसमूहाचे संपादक दिनकर रायकर, पानिपतकार विश्वास पाटील,साहित्यिक चंद्रकुमार नलगे,आय पी एस अधिकारी धीरज पाटील,तुम्ही आम्ही पालकचे संस्थापक संपादक हरीश बुटले...... याचबरोबर अनेक दिग्गज व्यक्तिमत्वाचा सन्मान व्यासपीठाच्या वतीने करणेत आला आहे.समाजातील चांगुलपणा शोधून त्याचा गौरव करणेची संधी व्यासपीठ नेहमीच शोधत असते. विद्यार्थी, पालक व शिक्षक यांच्या विकासासाठी शैक्षणिक व्यासपीठ स्वयंस्फुर्तीने अविरत कार्य करीत आहे.आदरणीय इंद्रजित देशमुख साहेब यांच्या प्रेरणेने संस्थेचे कार्य सुरु आहे.साद माणुसकीची अभियान, सेवायोग संस्था यांचे सहकार्यातून कार्य सुरु आहे. शैक्षणिक व्यासपीठाच्या कार्याचा थोडक्यात घेतलेला आढावा...

   


</nav>
 <article>
<div class="w3-content w3-display-container" style="align-content: center;">
  <img class="mySlides" src="image/main/slider6.jpg" style="width:100%; height: 360px; background-color:hotpink;">
  <img class="mySlides" src="image/main/slider2.jpg" style="width:100%; height: 360px;">
  <img class="mySlides" src="image/main/slider3.jpg" style="width:100%; height: 360px;">
  <img class="mySlides" src="image/main/slider4.jpg" style="width:100%; height: 360px;">
  <img class="mySlides" src="image/main/slider5.jpg" style="width:100%; height: 360px;">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

</div>
</article>
</section>
<br>
<footer>
<div style="text-align: justify; padding-left:20px;padding-right:20px;padding-top:0px;padding-bottom:10px; ">
  <div class="grid-container">




</div>

<div style="text-align: justify; padding-left:20px;padding-right:20px;padding-top:0px;padding-bottom:10px; ">
 <h1> भविष्यातील संकल्प:-</h1>

●कायमस्वरूपी निधी उभारून गरजू मुलांच्या शिक्षणासाठी निधी उभारणे<br>
●कायमस्वरूपी अभ्यासिका व स्पर्धा परीक्षा केंद्र सुरु करणे<br>
●शिक्षक मार्गदर्शन केंद्र उभारणे<br>
●प्रत्येक गरजू मुलापर्यंत मदत पोहचवणे.एकही मूल शिक्षणापासून वंचित राहणार नाही यासाठी प्रयत्न करणे.<br>
●शाळा,शिक्षक व पालक यांना एकत्र जोडून सामाजिक विकास करणे<br><br>

अशा प्रकारचे अनेक उपक्रम शैक्षणिक व्यासपीठाने आयोजित करून सामाजिक बांधिलकी जपणेचा  प्रयत्न केला आहे. *आजवर ६०० च्या वर शिक्षक व ३००० च्या वर विद्यार्थ्यांचा सन्मान करण्याचे भाग्य शैक्षणिक व्यासपीठाला मिळाले. *शिक्षक देणगी, सामाजिक निधी १०० तसेच विविध संस्था, संघटना, दानशूर व्यक्ती शिक्षक बँक,पतसंस्था यांचे मदत व सहकार्यातून हे सर्व शक्य होत आहे.अशा या व्यासपीठाच्या कार्याला आपल्या सक्रिय सहभागाची व मदतीची खूप गरज आहे
</div>
</footer>
<br><br><br>
</body>
</html>