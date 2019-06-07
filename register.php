<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css"
	<meta name="viewport"content="width-device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>
	<div class="maincontainer">

				<div class="header">
						<div class="logo">
								<img src="images/logo.jpg">
						</div>
						<div class="website-title">
								<h1>ICT ASSOCIATION</h1>
						</div>
						<div class="search-area">
								<input type="text" placeholder="Search..">
								<button class="btn btn-success w--100 mt-2" type="search">Search</button>

						</div>
						<div class="clearfix"></div>
				</div>
				<!---header section end-->

				<nav class="navbar navbar-light bg-light navbar-expand-md">
				<div class="container">
					<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler" data-toggle="collapse" data-target="#fristnav"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse " id="fristnav">
						<ul class="navbar-nav mr-auto" >
								<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
								<li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#myModal">Login</a></li>
								<li class="nav-item"><a class="nav-link" href="register.php">SignUp</a></li>
								<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">DropDown</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Hello</a>
									<a class="dropdown-item" href="#">Hi</a>
									<a class="dropdown-item" href="#">Bye</a>
								</div>
								</li>
								<li class="nav-item"><a class="nav-link" href="#">About</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							</ul>
					</div>
		</div>
	</nav>

		<div class="register-section">
				<div class="register-area">
					<h3>Registration Form:</h3>
					<form class="login-form form-group" action="register_action.php" method="post">
						<table>
								<td>User name:</td>
								<td><input type="text" class="form-control"name="user_name"placeholder="user_name" id="userName"></td>
                                <td><span id="userNameError"></span></td>
							</tr>
							<tr>
								<td>Enter password:</td>
								<td><input type="password"class="form-control" name="password"placeholder="password" id="password"></td>
                                <td id="passwordError"></td>
							</tr>
						</table>
						<button type="submit"class="btn form-control btn-success w-25 mt-5"name="btn">Register</button>
					</form>
					<a style="float:right;display: inline-block;color: black;margin-right:200px;margin-top:-10px;"class="Alrady-registered" href="login.php">Alrady registered?</a>
					<div class="clearfix"></div>
				</div>

		<div class="footer-section">
			<footer>&copy; 2018-All rights reserved by Nazmul Sharif</footer>
		</div>
	</div>



    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/my-script.js"></script>


</body>
</html>
