<?php $title="Login Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

<div class="row">

	<div class="col-lg-4  md-3 overflow-x:hidden;">
        <img src="img/image11.jfif" alt="thrift" width="95%" >
    </div>
	<div class="col-lg-8 p-5" style="background-color:#FFF4F4; color:#606C5D; overflow-x:hidden;">
    <form action="contactprocess.php" method="post">

			<div class="mb-3 mt-5 md-5 background-color:#FFF4F4;">
				<label for="exampleInputEmail1" class="form-label">Name:</label>
				<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">	
			</div>

			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Email:</label>
				<input type="email" name="email" class="form-control" id="exampleInputPassword1">
			</div>

            <div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Subject:</label>
				<input type="text" name="subject" class="form-control" id="exampleInputPassword1">
			</div>

            <div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Message:</label>
				<input type="text" name="message" class="form-control" id="exampleInputPassword1">
			</div>

			<button type="submit" class="btn btn-primary" style="background-color:#606C5D">Submit</button>
		</form>

		<?php 
		if (isset($_GET['error'])) {
			echo "<div class='mt-5 alert alert-danger' role='alert'>
			Registration Failure
			</div>";
		} ?>

	</div>
</div>

<?php include_once 'includes/footer.php'; ?>