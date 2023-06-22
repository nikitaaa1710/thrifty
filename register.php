<html><?php $title="Login Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>
<head>
<style>
    body{
        background-color:#d3d3d3;
    }
</style>
</head>
<body>

<div class="row">

	<div class="col-lg-4"></div>

	<div class="col-lg-4 mt-5 mb-5 p-5" style="background-color:#B8BEB7; font-family: Arial, Helvetica, sans-serif;letter-spacing:0.1em;">

		<form action="registrationprocess.php" method="post">
        <h3  class="titlee" style="font-family: Arial, Helvetica, sans-serif; letter-spacing:0.2em; font-size:30px;"><b>REGISTRATION </b></h3>
          <label for="uname">First name:</label><br>
          <input type="text"  name="firstname" class="form-control" required>
          <br>
          <label for="lastname">Last name:</label> <br>
          <input type="text"  name="lastname" class="form-control" required>
          <br>
          <label for="username">Username:</label><br>
          <input type="text" name="username" class="form-control" required>
          <br>
          <label for="gender">Gender:</label><br>
          <input type="radio"  name="gender" required>Male
          <input type="radio" name="gender" required>female
          <input type="radio"  name="gender" required>others
          <br>
          <label for="email">Email</label><br>
          <input type="email"  name="email" class="form-control" required>
          <br>
          <label for="pswd">Password:</label><br>
          <input type="password"  name="password" class="form-control" required>
          <br>
          <label for="phone">Phone:</label><br>
          <select>
          <option>977</option>
          <option>978</option>
          <option>056</option>
          <option>058</option>
          <option>057</option> 
          </select><br>
          <input type="text"  name="phone" class="form-control" required>
           <br>

        <button type="submit" style="background-color:#606C5D; letter-spacing:0.05em;" class="btn btn-primary">Submit</button>
        <button type="button" style="background-color:#606C5D; letter-spacing:0.05em;" class="btn btn-primary"
         onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  
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
</html>

