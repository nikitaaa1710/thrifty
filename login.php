<?php $title="Login Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

<style>
    body{
        background-color:#d3d3d3;
    }
</style>
<body>

<div class="row">

	<div class="col-lg-4" ></div>
	<div class="col-lg-4 mt-5 mb-5 p-5" style="color:#606C5D; font-family: Arial, Helvetica, sans-serif; letter-spacing:0.05em;">

		<form action="loginprocess.php" method="post">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Username</label>
				<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">	
			</div>

			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1">
			</div>
			<button type="submit" style="background-color:#606C5D; letter-spacing:0.05em;" class="btn btn-primary">Submit</button>
            <br> <br>
            <p style="color:#606C5D; font-family: Arial, Helvetica, sans-serif;"> Don't have an account?</p>
            <a href="register.php" style="color:#606C5D; font-family: Arial, Helvetica, sans-serif; "> Click to Register</a>
		</form>

		<?php 
		if (isset($_GET['error'])) {
			echo "<div class='mt-5 alert alert-danger' role='alert'>
			Registration Failure
			</div>";
		} ?>

	</div>
	<div class="col-lg-4"></div>
</div>
<?php include_once 'includes/footer.php'; ?>
    
</body>