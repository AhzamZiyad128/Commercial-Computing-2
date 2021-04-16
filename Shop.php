<?php 
// Include the database configuration file  
require_once 'connection.php'; 
 
// Get image data from database 
$result = $conn->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>
<!DOCTYPE html>
<meta charset="utf-8">


<title>Shop</title>
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
<center><h1>CAR ZIP</h1></center>
<center><hr style="height:2px;width:50%;color:gray;background-color:gray"></center>

<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<br><br><br><br>
<style>


* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: grey;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}


</style>
<center>
<h2>Featured Car Brands</h2></center>
</div>
    <div class="row">
  <div class="column">
    <img src="./img/ford.jfif" alt="Snow" style="width:80%">
    <br>
    <center>FORD</center>
  </div>
  <div class="column">
    <img src="./img/audi.jfif" alt="car2" style="width:80%">
    <br>
    <center>AUDI</center>
  </div>
  <div class="column">
    <img src="./img/benz.jfif" alt="car3" style="width:80%">
    <br>
    <center>BENZ</center>
  </div>


<div class="column">
    <img src="./img/car.png" alt="car3" style="width:80%">

  </div>

</div>
<style>
.column {
  float: left;
  width: 24.33%;
  height: 20%;
  padding: 8px;

  
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<br>
<center><hr style="height:2px;width:95%;color:gray;background-color:gray"></center>
<br><br>
<center><h2>Available Cars</h2></center>
<br>
<center><hr style="height:2px;width:95%;color:gray;background-color:gray"></center>

<div class="container1">


<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
</div>
<style>
.container1 {
  
  height: 300px;
  width: 300px; 
  float:left

}
.container1 div {
  flex: 1;
}
.container1 img {
  max-width:100%;
}
</style>

</body>
</html>
