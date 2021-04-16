<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='favicon.ico' type=./img/pic2.jpg>
    <title>CarRadio | Add Advertisement</title>
  </head>
<br><center>
<h2 class="text-center">CarRodio.lk</h2>
<h1 class="text-success text-center">Add your Advtertiment</h1>
</center>
<br>

<form action="upload.php" method="post" enctype="multipart/form-data">
<label for="formGroupExampleInput">First Name: </label>
              <input type="text" name="fname" class="form-control" id="formGroupExampleInput" placeholder="">
              <br>
<label for="formGroupExampleInput2">Last Name: </label>
              <input type="text" name="lname" class="form-control" id="formGroupExampleInput2" placeholder="">
              <br>
<label for="formGroupExampleInput2">Brand: </label>
            <select class="form-control form-control-sm" name="brand">
                <option>Select</option>
                <option>Toyota</option>
                <option>Suzuki</option>
                <option>BMW</option>
              </select>
              <br>
<label for="formGroupExampleInput2">Model:</label>
            <select class="form-control form-control-sm" name="model">
                <option>Select</option>
                <option>2020 Chevrolet Corvette</option>
                <option>2020 Hyundai Palisade</option>
                <option>2020 Toyota GR Supra</option>
              </select>
              <br>
<label for="formGroupExampleInput">Model Year:</label>
                <input type="number" name="model_year" class="form-control" id="formGroupExampleInput" placeholder="">
                <br>
<label for="formGroupExampleInput2">Mileage:</label>
              <input type="number" name="mileage" class="form-control" id="formGroupExampleInput2" placeholder="">
              <br>
<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Condition:</label>
                    <select class="form-control" name="conditions" id="inlineFormCustomSelect">
                      <option selected>Choose...</option>
                      <option value="1">New</option>
                      <option value="2">Used</option>
                      <option value="3">Reconditional</option>
                    </select>
                    <br>
<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Fuel Type:</label>
                    <select class="form-control" name="fuel" id="inlineFormCustomSelect">
                      <option selected>Choose...</option>
                      <option value="1">Diesel</option>
                      <option value="2">Petrol</option>
                      <option value="3">Electrical</option>
                    </select>
                    <br>
                <label for="formGroupExampleInput">Price:</label>
                <input type="number" class="form-control" name="price" id="formGroupExampleInput" placeholder="">
          <br> <br>

    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>

 <style>

.form-control{
  width: 60%;
  padding: 12px 20px;
  margin: 10px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


 </style>
</body>
</html>

 