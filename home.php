<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' href='favicon.ico' type=./img/pic2.jpg>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body style="background-color:#F0F0F0">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Car Rodio</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="home.php" class="w3-bar-item w3-button">HOME</a>
      <a href="about.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
      <a href="Shop.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SHOP</a>
      <a href="Seller.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SELLER</a>
      <a href="help" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> HELP</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOGIN/REGISTER</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>



<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
<hr class="style17">
<style>
hr.style17 {
	border-top: 1px solid #8c8b8b;
	text-align: center;
}
hr.style17:after {
	content: '§';
	display: inline-block;
	position: relative;
	top: -14px;
	padding: 0 10px;
	background: #f0f0f0;
	color: #8c8b8b;
	font-size: 18px;
	-webkit-transform: rotate(60deg);
	-moz-transform: rotate(60deg);
	transform: rotate(60deg);
}

</style>
  <h3 class="w3-center">NEWLY LISTED CARS</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">

    </div>
    
  </div>
    <div class="row">
  <div class="column">
    <img src="./img/pic1.jfif" alt="Snow" style="width:80%">
  </div>
  <div class="column">
    <img src="./img/pic2.jpg" alt="car2" style="width:80%">
  </div>
  <div class="column">
    <img src="./img/pic3.jpg" alt="car3" style="width:80%">
  </div>

</div>
<style>
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
  
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>


  <br>
  <center><p><a href="Shop.php" class="w3-button w3-black"><i class="fa fa-th"> </i> SHOP NOW</a></p> </center>
</div>



<hr class="style17">
<style>
hr.style17 {
	border-top: 1px solid #8c8b8b;
	text-align: center;
}
hr.style17:after {
	content: '§';
	display: inline-block;
	position: relative;
	top: -14px;
	padding: 0 10px;
	background: #f0f0f0;
	color: #8c8b8b;
	font-size: 18px;
	-webkit-transform: rotate(60deg);
	-moz-transform: rotate(60deg);
	transform: rotate(60deg);
}

</style>
<h3 class="w3-center">FEATURED PRODUCTS</h3>

<div class="row1">
  <div class="column1">
    <img src="./img/pic4.jpg" alt="car4" style="width:100%">
    <br><br>
    <center>Product Name</center>
    <center> $300</center>
  </div>
  <div class="column1">
    <img src="./img/pic5.jpg" alt="car5" style="width:100%">
    <br><br>
    <center>Product Name</center>
    <center> $300</center>
  </div>


</div>
</div>
<style>
.column1 {
  float: left;
  width: 50%;
  padding: 95px;
  
}

/* Clear floats after image containers */
.row1::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
<div id="textbox">
  <p class="alignleft" >NOTIFICATION</p>
  
  <button p class="alignright" type="submit">SEND NOTIFICATION</p>
  </button>

  <input p class="alignright" type="text" placeholder="Email" required name="Email"></p>
</div>  </div>
<style>
.alignleft {
	float: left;
  font-size:30px;
}
.alignright {
	float: right;
  margin: 10px;
  font-size:16px;
  height: 45px;
  padding: 5px;
}
</style>
<div style="clear: both;"></div>
<div class="w3-container" style="padding:128px 16px" id="team">
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team3.jpg" alt="Pic1" style="width:100%">
        <div class="w3-container">
          <h3>Picture</h3>

        
        </div>
      </div>
    </div>

    
  
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/w3images/team4.jpg" alt="Pic2" style="width:100%">
        <div class="w3-container">
          <h3>Picture</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
 <!-- Footer main -->
 <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">Vehicles</h2>
      <ul>
        <li><a href="#">All Models</a></li>
        <li><a href="#">Outlanders</a></li>
        <li><a href="#">Eclipse Cross</a></li>
        <li><a href="#">Outlander Sport</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Up to Speed</h2>
      <ul>
        <li><a href="#">Car History</a></li>
        <li><a href="#">Lancer History</a></li>
        <li><a href="#">Up to speed</a></li>
        <li><a href="#">Compare Vehicles</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Discover</h2>
      <ul>
        <li><a href="#">What Drives us</a></li>
        <li><a href="#">Company</a></li>
        <li><a href="#">Warranty</a></li>
        <li><a href="#">Find a Leader</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Owners</h2>
      <ul>
        <li><a href="#">Login/Sign-up</a></li>
        <li><a href="#">Parts/Accessories</a></li>
        <li><a href="#">Recall Information</a></li>
      </ul>
    </div>
    </footer>
<style>
* {
  box-sizing: border-box;
  font-family: "Lato", sans-serif;
  margin: 0;
  padding: 0;
}
ul {
  list-style: none;
  padding-left: 0;
}
footer {
  background-color: #555;
  color: #bbb;
  line-height: 1.5;
}
footer a {
  text-decoration: none;
  color: #eee;
}
a:hover {
  text-decoration: underline;
}
.ft-title {
  color: #fff;
  font-family: "Merriweather", serif;
  font-size: 1.375rem;
  padding-bottom: 0.625rem;
}
/* Sticks footer to bottom */
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}
.container {
  flex: 1;
}
/* Footer main */
.ft-main {
  padding: 1.25rem 1.875rem;
  display: flex;
  flex-wrap: wrap;
}
@media only screen and (min-width: 29.8125rem /* 477px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
@media only screen and (min-width: 77.5rem /* 1240px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
.ft-main-item {
  padding: 1.25rem;
  min-width: 12.5rem;
}

/* Footer main | Newsletter form */
form {
  display: flex;
  flex-wrap: wrap;
}
input[type="email"] {
  border: 0;
  padding: 0.625rem;
  margin-top: 0.3125rem;
}
input[type="submit"] {
  background-color: #00d188;
  color: #fff;
  cursor: pointer;
  border: 0;
  padding: 0.625rem 0.9375rem;
  margin-top: 0.3125rem;
}
/* Footer social */
.ft-social {
  padding: 0 1.875rem 1.25rem;
}
.ft-social-list {
  display: flex;
  justify-content: center;
  border-top: 1px #777 solid;
  padding-top: 1.25rem;
}
.ft-social-list li {
  margin: 0.5rem;
  font-size: 1.25rem;
}
/* Footer legal */
.ft-legal {
  padding: 0.9375rem 1.875rem;
  background-color: #333;
}
.ft-legal-list {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.ft-legal-list li {
  margin: 0.125rem 0.625rem;
  white-space: nowrap;
}
/* one before the last child */
.ft-legal-list li:nth-last-child(2) {
    flex: 1;
}
</style>
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
