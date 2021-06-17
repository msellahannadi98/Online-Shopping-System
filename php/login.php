<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/CSS" href="../css/login.css">
	</head>
	<body>
		<div class="loginbox">
			<div class="center">
				<img src="../images/avatar1.png" class="avatar">
			</div>
				<h1>Login Here</h1>
				<form method="post" action="login.php" >
					<p>Username</p>
					<input type="text" name="name" placeholder="Enter your Username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" class="button" name="submit" value="LOGIN"><br /><br />
					<div class="txt">Don't have an account? <a href="signup.php" class="txt1"> Sign Up</a></div><br />
				</form>
			</div>
		</div>
	</body>
</html>

<?php 
	require_once('connect.php');
	session_start();
	//$_SESSION['loggedin']=1;
	if(isset($_POST['submit'])){
		$uname=$_POST['name'];
		$pwd=$_POST['password'];

		$sql="SELECT * FROM user WHERE username='".$uname."' AND userPassword='".$pwd."'";
		$result=mysqli_query($connection,$sql);
		//echo "dd";
		//print_r ($result);
		if($result->num_rows==1){
			$user=$result->fetch_assoc();
			$_SESSION['loggedin']=1;
			$_SESSION['username']=$user['username'];
			$_SESSION['userid']=$user['CId'];
			
			if($user['admin']==1){
				header("Location: adminindex.php");
			}else{
				header("Location: index.php");
			}
		}
	}
?>