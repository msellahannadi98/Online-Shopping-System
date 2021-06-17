<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['SID'])){
$sql = "DELETE FROM supplier WHERE SID = ".$_GET['SID'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: viewSupplier.php");
}
?>