<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <meta name="viewport"content="width-device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fluid">
    <!---header section-->
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

    <!---carousel slider---->
        <div class="carousel slide" id="myCarousel" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/s1.jpg" alt="" style="width: 100%;height: 400px">
                </div>
                <div class="carousel-item">
                    <img src="images/s2.jpg" alt="" style="width: 100%;height: 400px">
                </div>
                <div class="carousel-item">
                    <img src="images/s3.jpg" alt="" style="width: 100%;height: 400px">
                </div>
               <!-- <div class="carousel-item">
                    <img src="images/s4.jpg" alt="" style="width: 100%;height: 400px">
                </div>-->
            </div>
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
        </div>
    <!---carousel slider end--->

        <!--modal start--->
        <div class="modal fade" id="myModal" role="dialog">
             <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="login-section">
                            <div class="login-form">
                                <h1> User Login</h1>
                                <form action="login_action.php" method="post">
                                    <table align="center">
                                        <tr>
                                            <td>
                                                <input type="text" name="user_name" placeholder="User Name" id="userName" required/>
                                            </td>
                                            <td>
                                                <span id="userNameError" style=""></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input type="password" name="password" placeholder="Password" id="password" required/>
                                            </td>
                                            <td>
                                                <span id="passwordError"></span>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <input type="submit" name="submit" class="login_btn"value="LOGIN"id="logInBtn"/>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--card start--->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">This is card</div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <!--card end-->
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
