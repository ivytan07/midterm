<!DOCTYPE html>
<html>

<head>
	<title>MyShop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>

<body>
	<div class="header"> <!--Hearder-->
		<h1>Welcome to Myshop</h1> 
	</div>
	<div class="content">
		<h2>Product List</h2>
		<div class="content-body">
		
		<?php
		include 'dbconnect.php';
		
		$query = "SELECT * from tbl_products";
        $data = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($data) > 0)
		{
			?>
				<table class="table-bordered">
					<thead>
						<!--Table List-->
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Product Image</th>
							<th scope="col">Product Name</th>
							<th scope="col">Product Type</th>
							<th scope="col">Product Price(RM)</th>
							<th scope="col">Product Quantity</th>
						</tr>
					</thead>
					<tbody>
						<!--Fetch Data From Database-->
						<?php
					   while($query_row = mysqli_fetch_array($data)) 
					   {
						?>
							<tr>
								<th>
									<?php echo $query_row['prid']; ?>
								</th>
								<th>
									<?php echo '<img src="data:image;base64,'.base64_encode($query_row['image']).'" alt="ProductImage" style="width: 100px; height:100px;">';?> </th>
								<th>
									<?php echo $query_row['prname']; ?>
								</th>
								<th>
									<?php echo $query_row['prtype']; ?>
								</th>
								<th>
									<?php echo $query_row['prprice']; ?>
								</th>
								<th>
									<?php echo $query_row['prqty']; ?>
								</th>
							</tr>
							<?php } ?>
					</tbody>
				</table>
				<?php
		}
		else
		{
			echo "No Records Found";
		}
		?>
		</div>
	</div>
	<div class="bottomnavbar"> <!--Bottom navigation bar-->
		<a href="newproduct.php" class="w3-bar-item w3-button w3-right">Add New Product</a> 
	</div>
</body>

</html>