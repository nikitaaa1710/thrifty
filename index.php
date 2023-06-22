<?php session_start(); ?>
<?php $title="Login Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>


	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/image3.png" class="d-block w-100" alt="">
			</div>
			<div class="carousel-item">
				<img src="img/image2.png" class="d-block w-100" alt="">
			</div>
            <div class="carousel-item">
				<img src="img/image12.png" class="d-block w-100" alt="">
			</div>
			
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
    <?php include_once 'includes/footer.php'; ?>
</body>
</html>