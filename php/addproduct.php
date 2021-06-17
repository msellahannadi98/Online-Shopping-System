<?php require_once('connect.php');
$sql4="select max(itemId) from item";
$result4=mysqli_query($connection,$sql4);
$max=mysqli_fetch_assoc($result4);
//echo $max;
//print_r ($max);
$maxid=$max['max(itemId)'];
$nextid=(integer)$maxid+1;
?>
<html>
	<head>
		<title>Add New Product</title>
		<link rel="stylesheet" type="text/css" href="../css/addproduct.css">
	</head>
	<body>
		<div class="loginbox">
		<h1>Add New Product</h1>
		<form enctype="multipart/form-data" action="addproduct.php" method="POST">
			<p>Product ID : </p>
			<input type="text" name="pid" Value="<?php echo $nextid ?>" placeholder="Enter the Product ID" readonly /><br />
			<p>Supplier ID : <select name=sid >
									<?php
									$sql1="SELECT * FROM supplier";
									$val=$connection->query($sql1);
									while($row0=$val->fetch_assoc()){
										echo "<option value='".$row0['SID']."'>".$row0['SID']." - ".$row0['sFname']."</option>";}
									?>
									</select>
			</p><br>
			<p>Product Name : </p>
			<input type="text" name="pname" placeholder="Enter the Product Name" required/><br />
			<p>Product Category: <select name=category>
									<?php
									$sql2="SELECT * FROM category";
									$valu=$connection->query($sql2);
									//print_r($valu);
									//echo
									//foreach($valu as $row){echo "dumi";}
									while($data=$valu->fetch_assoc()){
										//echo "dumi";}
										echo "<option value='".$data['catId']."'>".$data['catName']."</option>";}
									?>
									</select>
									
			</p><br />
			<p>Product sub Category: <br><br> <select name=subcategory required>
									<option value="0">--</option>
									<?php
									$sql2="SELECT * FROM subcategory";
									$valu=$connection->query($sql2);
									while($data=$valu->fetch_assoc()){
										echo "<option value='".$data['subcatId']."'>".$data['subcatName']."</option>";}
									?>		
									</select>	
			</p><br />
			<p>Product Title : </p>
			<input type="text" name="ptitle" placeholder="Enter the Product Title" required/><br />
			<p>Product Price : </p>
			<input type="text" name="pprice" placeholder="Enter the Price" required/><br />
			<p>Quantity on hand : </p>
			<input type="text" name="qty" placeholder="Enter the Quantity" required/><br />
			<p>Description: </p>						
			<textarea rows="4" cols="32" name="desc" ></textarea><br />				
			<p>Product-image : </p><br />
			<input type="file" name="file" id="image"><br/><br />
			<div class="center">
				<input type="submit" class=button name="submit" value="Add"> <input type="reset" class=button name="reset" value="Cancel"><br />
				<a href="viewproduct.php"><button type="button" class="button">View</button></a>
			</div>
			</form>
		</div>
	</body>
</html>

<?php
	
	if(isset($_POST['submit'])){

	$sql = "INSERT INTO item(itemId,iName,SID,iCategory,iSubcategory,iTitle,iPrice,qtyOnHand,description) values ('".$_POST['pid']."','".$_POST['pname']."','".$_POST['sid']."','".$_POST['category']."','".$_POST['subcategory']."','".$_POST['ptitle']."','".$_POST['pprice']."','".$_POST['qty']."','".$_POST['desc']."')";
	$result=$connection->query($sql);
	print_r($result);
	if($result){
	echo "<script> alert('Registered Sucessfully') </script>";}
	else{
	echo "failed";
	}
	
	$targetdir = '../images/';   
    $name=$nextid;
	$ext=".jpg";
    $targetfile = $targetdir.$name.$ext;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfile)) {
    
        //echo "Done";
    } else { 
        //echo "Not uploaded";
    
  	}
  
	}

?>
