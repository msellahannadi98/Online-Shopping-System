<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['itemId'])){
$sql1 = "SELECT * FROM item WHERE itemId  =".$_GET['itemId'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){
	//echo "Sucessfull";
}
else{
echo "failed";	
}

}

if(isset($_POST['updateB'])){
$sql2 = "UPDATE item SET itemId  ='".$_POST['iid']."', iName  ='".$_POST['iname']."', SID  ='".$_POST['sid']."', iCategory ='".$_POST['icat']."', iSubcategory ='".$_POST['iscat']."', iTitle ='".$_POST['ititle']."',iPrice ='".$_POST['iprice']."',qtyOnHand ='".$_POST['qty']."',description='".$_POST['desc']."' WHERE itemId  ='".$_POST['pid']."'";   
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM item WHERE itemId ='".$_POST['pid']."'";
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
//print_r($row);
//echo $_POST['pname'];
//echo "<script> alert('Updated Sucessfully') </script>";
//header("Location: viewproduct.php");
}
// if(!isset($_GET['itemId'])&&!isset($_POST['updateB'])){
// header("Location: viewproduct.php");
// }


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/viewproduct.css">
	<title>updateProduct</title>
	<table>
		<tr>
			<td>itemId </td>
			<td>iName </td>
			<td>SID </td>
			<td>iCategory </td>
			<td>iSubcategory </td>
			<td>iTitle </td>
			<td>iPrice </td>
			<td>qtyOnHand </td>
			<td>qtyOnHand </td>

		</tr>
		<form action='updateproduct.php' method ='post'>
			<tr>
			<?php echo "<td><input type = 'text' name='iid' required value ='".$row['itemId']."' readonly></td>";
			echo "<td><input type = 'text' name='iname' required value ='".$row['iName']."'></td>";
			echo "<td><input type = 'text' name='sid' required value ='".$row['SID']."'></td>";
			echo "<td><input type = 'text' name='icat' required value ='".$row['iCategory']."' ></td>";
			echo "<td><input type = 'text' name='iscat' required value ='".$row['iSubcategory']."'></td>";
			echo "<td><input type = 'text' name='ititle' required value ='".$row['iTitle']."'></td>";
			echo "<td><input type = 'text' name='iprice' required value ='".$row['iPrice']."'></td>";
			echo "<td><input type = 'text' name='qty' required value ='".$row['qtyOnHand']."'></td>";
			echo "<td><textarea name='desc' rows='4' placeholder =''>".$row['description']."</textarea></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="viewproduct.php"><button type="button" class="button">view</button></a></td>
		</tr>
		</form>
	</table>
</head>
<body>
	
</body>
</html>