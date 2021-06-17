<?php require_once('connect.php');
$sql4="select max(SID) from supplier";
$result4=mysqli_query($connection,$sql4);
$max=mysqli_fetch_assoc($result4);
//echo $max;
//print_r ($max);
$maxid=$max['max(SID)'];
$nextid=$maxid+1;

?>

<html>
	<head>
		<title>Add_Supplier</title>
		<link rel="stylesheet" type="text/css" href="../css/addsupplier.css">
	</head>
	<body>
		<div class="loginbox">
			<h1>Add New Supplier</h1>
			<form action="addsupplier.php" method="POST">
				<p>Supplier ID : </p>
				<?php echo "<input type='text' name='sid' value='".$nextid."' /><br />"; ?>
				<p>First Name : </p>
				<input type="text" name="fname" placeholder="Enter the first name"/><br />
				<p>Last Name :  </p>
				<input type="text" name="lname" placeholder="Enter the last name"/><br />
				<p>Adress :  <p>
				<input type="text" name="address" placeholder="Enter the address"/><br />
				<p>Email :  </p>
				<input type="text" name="email" placeholder="Enter the email address"/><br />
				<p>Telephone :  </p>
				<input type="text" name="telephone" placeholder="Enter the telephone no"/><br />
				<div class="center">
					<input type="submit" class="button" name="submit" value="Submit"><input type="reset" class="button" name="reset" value="Cancel">
				</div>
			</form>
		</div>
		<div class="next">
			<a href="viewSupplier.php"><button type="button" class="button">View</button></a>
		</div>
	</body>
</html>

<?php
	require_once('connect.php');

	






	if(isset($_POST['submit'])){

	$sql = "INSERT INTO supplier(SID,sFname,sLname,sAddress,sEmail,sTele) values ('".$_POST['sid']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['email']."','".$_POST['telephone']."')";
	//echo $sql;
	//$result = mysqli_query($connection,$sql);
	$result=$connection->query($sql);
	//print_r($result);
	if($result){
	echo "<script> alert('Registered Sucessfully') </script>";
	
	//header("Location: viewSupplier.php");
	die();
	}
	else{
	echo "failed";
	die();}

	}

?>
