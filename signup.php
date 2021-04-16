<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel='icon' href='favicon.ico' type=./img/pic2.jpg>
</head>
<body>
<h1>Welcome to CarRadio</h1>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Phone</label>
          <?php if (isset($_GET['phone'])) { ?>
               <input type="int" 
                      name="phone" 
                      placeholder="Phone"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="int" 
                      name="phone" 
                      placeholder="Phone"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

          <label>User Type</label>
          <select name="type">
 <option>---Select User Type--</option>
 <option value="customer">Customer</option>
 <option value="seller">Seller</option>
 </select>
          <?php if (isset($_GET['type'])) { ?>
               <input type="text" 
                      name="type" placeholder="User Type"      
                      value="<?php echo $_GET['type']; ?>"><br>
          <?php }else ?>
                  



     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
<style>

body {
  background: grey;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
}

* {
  font-family: "Poppins", sans-serif;
  box-sizing: border-box;
}

form {
  width: 500px;
  border: 2px solid #ccc;
  padding: 30px;
  background: #fff;
  border-radius: 15px;
}

h2 {
  text-align: center;
  margin-bottom: 40px;
}

input {
  display: block;
  border: 2px solid #ccc;
  width: 95%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}
label {
  color: #888;
  font-size: 18px;
  padding: 10px;
}


button {
  float: right;
  background: #555;
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
}
button:hover {
  opacity: 0.7;
}
.error {
  background: #f2dede;
  color: #a94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;
}

.success {
  background: #d4edda;
  color: #40754c;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;
}

h1 {
  text-align: center;
  color: #fff;
}

.ca {
  font-size: 14px;
  display: inline-block;
  padding: 10px;
  text-decoration: none;
  color: #444;
}
.ca:hover {
  text-decoration: underline;
}


</style>
</html>