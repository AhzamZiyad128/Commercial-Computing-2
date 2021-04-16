
<!DOCTYPE html>
<meta charset="utf-8">


<title>Admin</title>
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
<body>

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
<br><br><br><br>


<a href="admin1.php" ><h3 class="w3-center">Verify Advertisements</h3></a>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">

    </div></div>

    <h3 class="w3-center">Verify Users</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">

    </div></div>
    <center>
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Name</th><th>Phone</th><th>Type</th><th>Action</th></tr>";
 
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
    
}

$servername = "localhost";
$dbuser="root";
$debpass="";
$dbname = "login_data";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser="root", $debpass="");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, phone, type FROM users");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

  </center>
 <br>
  <style>
.button {
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 130px;
}
</style>
<center>
<a href="#" class="button">Reports</a>  </center>



<br><br><br><br>
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
