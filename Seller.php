<!DOCTYPE html>
<html>
<title>Seller</title>
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

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Car Rodio</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="home.php" class="w3-bar-item w3-button">HOME</a>
      <a href="about.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
      <a href="Shop.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SHOP</a>
      <a href="help" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> HELP</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOGIN/REGISTER</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

    
<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
<div class="w3-container w3-row w3-center w3-grey w3-padding-64">

  <h2 class="w3-center">Seller</h2>
  <hr>



          <div class="buttons">
          <a href="advertisements.php"><button  name="submit" class="action_btn submit" type="submit" value="Save" onclick="myFunction()">add</button></a>
		<button name="submit" class="action_btn cancel" type="submit" value="Cancel" onclick="myFunction2()">View</button>
		<p id="saved"></p>
</div>
<style>
.buttons {
  width: 760px;
  margin: 10px auto;
}

.action_btn {
  display: inline-block;
  width: calc(50% - 4px);
  margin: 0 auto;
}
</style>

</form>
             
  </div><br>
<center> <h3>Posted Advertisements</h3></center>
<hr>


<center> <img src="./img/pic1.jfif" alt="Snow" style="width:20%"><br>
Name: Benz Descitpion: Used Price: 1200000LKR

<a href="#"  class="button1" ><button>Edit</button></a>
<a href="#"  class="button1"> <button>Delete</button></a></center>


</div>


<hr> </div>
<style>


footer {
  text-align: center;

  background-color: silver;
  color: black;
  position:absolute;
   bottom:0;
   width:100%;
   height:80px;   /* Height of the footer */
}
</style>
<footer>
  <p><a href="home.php">Home</a> | <a href="about.php">About</a> | <a href="shop.php">Shop</a> | <a href="home.php">Help</a><br>
  Car Rodio.lk</p>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>