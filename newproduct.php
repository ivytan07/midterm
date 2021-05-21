<?php
include ('dbconnect.php');


if (isset($_POST['submit'])) {
  $prname = $_POST['name'];
  $prtype = $_POST['type'];
  $prprice = $_POST['price'];
  $prqty = $_POST['quantity'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

   
   $query    = "INSERT INTO tbl_products (prname, prtype, prprice, prqty, image) VALUES ('$prname', '$prtype', '$prprice', '$prqty', '$file')";
   $result   = mysqli_query($conn, $query);
   if ($result) {
 
     echo "<script> alert('Add New Product Successful')</script>";
     echo "<script> window.location.replace('../php/index.php')</script>";
   } else {
     echo "<script> alert('Add New Product Failed')</script>";
     echo "<script> window.location.replace('../php/newproduct.php')</script>";
   }

}
  


?>



<!DOCTYPE html>
<html>

<head>
<title>MyShop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/validate.js"></script>
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body> 
<div class="main">
      <div class="container">
         <form name="newProductForm" action="" method="POST" enctype="multipart/form-data">
            <h2>Add New Product</h2>
            <p>Please fill in this form to add new product.</p>
         
    
            <div class="row">
               <div class="col-25">
                  <label for="prname">Product Name</label> <!--Product Name-->
               </div>
               <div class="col-75">
                  <input type="text" id="prname" name="name" placeholder="e.g Brownie Cake" >
               </div>
            </div>

            <div class="row">
               <div class="col-25">
                  <label for="prtype">Product Type</label> <!--Product Type-->
               </div>
               <div class="col-75">
                  <input type="text" id="prtype" name="type" placeholder="e.g Cake/Flour/Nuts" >
               </div>
            </div>
           
							

            <div class="row">
               <div class="col-25">
                  <label for="prprice">Product Price (RM)</label> <!--Product Price-->
               </div>
               <div class="col-75">
                  <input type="text" id="prprice" name="price" placeholder="e.g 10.00" >
               </div>
            </div>

            <div class="row">
               <div class="col-25">
                  <label for="prqty">Product Quantity</label> <!--Product Quantity-->
               </div>
               <div class="col-75">
                  <input type="text" id="prqty" name="quantity" placeholder="e.g 1">
               </div>
            </div>

            <div class="row">
               <div class="col-25">
                  <label for="primage">Product Image</label> <!--Product Image-->
               </div>
               <div class="col-75">
               <input type="file" id="image" name="image" ><br>
               </div>
            </div>
            <br>
            <div class="row">
               <button type="submit" name="submit"class="addbtn">Add</button><br> <!--Add Button-->
            </div>

         </form>
      </div>
   </div>

    
</body>
</html>