<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM supplier ORDER bY SID";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/viewsupplier.css">
	</head>
<body>
	<div class="loginbox">
	<div class="center">
	<table border=1 padding=00px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>SID</td>
			<td>sFname</td>
			<td>sLname</td>
			<td>sAddress</td>
			<td>sEmail</td>
			<td>sTele</td>
			<td>Update</td>
			<td>Delete</td>

		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td><?php echo $row['SID'] ?></td>
			<td><?php echo $row['sFname'] ?></td>
			<td><?php echo $row['sLname'] ?></td>
			<td><?php echo $row['sAddress'] ?></td>
			<td><?php echo $row['sEmail'] ?></td>
			<td><?php echo $row['sTele'] ?></td>
			<?php echo "<td><a href ='updateSupplier.php?SID=".$row['SID']."' > update </a> </td>" ?>
			<?php echo "<td><a href ='deleteSupplier.php?SID=".$row['SID']."' > delete </a> </td>" ?>
		</tr>
		
		<?php
	}
	?>
	
	</table>
	<div class="button">
			<br><a href="addSupplier.php"><button type="button">Add</button></a>
	</div>
	</div>
	</div>

</body>
</html>

