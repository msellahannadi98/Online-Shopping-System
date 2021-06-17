<?php include_once('connect.php');




?>
<html>
<head>
<link rel="stylesheet" type="text/CSS" href="../css/style.css">

</head>
<body>
<div class="topnav">
    <a style="padding:0px 0px" href="index.php"><img class="logo" src="../images/logo.jpg"></a>
  <!-- <a class="active" href="#home">Home</a> -->
  <a href="women_clothing.php">Categories</a>
  <a href="trending.php">Trending</a>
  <a href="#about">About Us</a>
  <b class="headcaption" style="padding-left:10%;">Love Shopping? Scroll down and enjoy!</b>
  <a href="logout.php" style="float:right ">Log Out</a>
  <a href="#profile" style="float:right">Hello <?php echo $_SESSION['username']; ?></a>
  </div>



</body>
</html>