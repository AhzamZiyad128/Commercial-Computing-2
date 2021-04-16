<?php 
// Include the database configuration file  
require_once 'connection.php'; 
 
// Get image data from database 
$result = $conn->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>
<!DOCTYPE html>
<head>
<title>Advertisements</title>
<meta charset="utf-8">

</head>
<body>
<div class="container">


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
.container {
  display: flex;
  width: 350px;
  height: 300px;

}
* {
  box-sizing: border-box;
}
.container {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.container div {
  flex: 1;
}
.container img {
  max-width:100%;
}
</style>
</body>
</html>

