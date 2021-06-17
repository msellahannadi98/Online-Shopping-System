<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
	<?php
		$sql = "SELECT * FROM item";
		mysqli_query($connection, $sql);
		$result = mysqli_query($connection,$sql);

		if($result){
			//echo "Sucessfull";
		}else{	
			echo"failed";	
			}
		?>
	<head>	
		<title>viewproduct</title>
		<link rel="stylesheet" type="text/css" href="../css/viewproduct.css">
	</head>
	<body>
		<div class="loginbox">
		<div class="center">
			<h1>Products</h1>
		<table border=1 padding=00px>
			<tr bgcolor=#4CAF50 font color= white>
				<td>itemId</td>
				<td>iName</td>
				<td>SID</td>
				<td>iCategory</td>
				<td>iSubcategory</td>
				<td>iTitle</td>
				<td>iPrice</td>
				<td>qtyOnHand</td>
				<td>Delete</td>

			</tr>
			<?php
			while($row=mysqli_fetch_assoc($result)){
				?>
		
				<tr>
				<td><?php echo $row['itemId'] ?></td>
				<td><?php echo $row['iName'] ?></td>
				<td><?php echo $row['SID'] ?></td>
				<td><?php echo $row['iCategory'] ?></td>
				<td><?php echo $row['iSubcategory'] ?></td>
				<td><?php echo $row['iTitle'] ?></td>
				<td><?php echo $row['iPrice'] ?></td>
				<?php echo "<td><a href =updateproduct.php?itemId=".$row['itemId']."> update </a> </td>"?>
				<?php echo "<td><a href =deleteproduct.php?itemId=".$row['itemId']."> delete </a> </td>"?>
			</tr>
			<?php
		}
		?>
		
		</table>
		<div class="center">
		<br><a href="addproduct.php"><button type="button" class="button">Add</button></a>
		</div>
		</div>
		<div>
	
	</body>
</html>

