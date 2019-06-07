<?php
	$conn=mysqli_connect("localhost","root","","tutorial");
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$data="INSERT INTO user_registration(fid,user_name,password)VALUES('',
	'$user_name','$password')";
	$result=mysqli_query($conn,$data);
	if($result==1){
		echo "thanks for sign Up";
	}
?>
<html>
	<head>
	</head>
	<body>
		<a href="login.php">
		<input type="submit" name="submit" class="login_btn"value="LOGIN to continue"/>
		</a>
	</body>
</html>