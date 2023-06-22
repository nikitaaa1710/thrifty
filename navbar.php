<link rel="stylesheet" href="navbar.css">
<nav class="navbar navbar-expand-lg navbar-light" style="background: #d3d3d3;">
	<div class="container-fluid">

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0 " style="font-size:15px;letter-spacing:0.01em; font-family: Arial, Helvetica, sans-serif;>

				<?php  

				if (!isset($_SESSION['username'])) {?>

					<li class="nav-item">
						<a class="nav-link" href="login.php" >Login</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="register.php">Register</a>
					</li>

                    <li>
                    <a href="addtocart.php" style="color:#606C5D;"><i class="fa fa-shopping-cart"></i></a>
                    </li>

				<?php 
					}
				else {?>

					<li><span class="nav-link" style="color: green;">Welcome <?php echo $_SESSION['username'] ?></span></li>

					<li class="nav-item">
						<a class="nav-link text-danger" href="logout.php">Logout</a>
					</li>

				<?php }
				?>
				</ul>

		</div>
	</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background: #606C5D;" text-align="center">
	<div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color:#d3d3d3; letter-spacing:0.2em; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:25px;"><b>THRIFTY</b></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="font-size:18px;letter-spacing:0.05em; font-family: Arial, Helvetica, sans-serif;">

				<li class="nav-item">
					<a class="nav-link " aria-current="page" href="about.php" style="color:#d3d3d3">About us</a>
				</li>

                <li class="nav-item">
					<a class="nav-link" href="products.php" style="color:#d3d3d3">Our Products</a>
				</li>

                <li class="nav-item">
                    <a class="nav-link" href="sell.php" style="color:#d3d3d3">Sell</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php" style="color:#d3d3d3">Contact</a>
                </li>
			</ul>

		</div>
	</div>
</nav>