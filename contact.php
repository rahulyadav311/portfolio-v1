<?php
$title = "Contact";
include 'includes/header.php';
?>

<!--  Banner Section  -->
<section class="banner">
	<div class="container">
		<h2 class="banner-title" data-aos="fade-in">Contact</h2>
		<div class="banner-breadcrumb" data-aos="fade-in">
			<span><a href="index.php">Home</a></span>
			<span><a href="about.php">Contact</a></span>
		</div>
	</div>
</section>
<!--  Banner Section Close  -->

<div class="section-break"></div>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="svg-img">
					<img src="images/svg/contact.svg">
				</div>
			</div>
			<div class="col-md-6">
				<div class="box" data-aos="fade-up-left">
					<h5>Phone</h5>
					<p><a href="tel:8693032463">8693032463</a></p>
				</div>
				<div class="box" data-aos="fade-up-left">
					<h5>Email</h5>
					<p><a href="mailto:rahul.yadav6131766@gmail.com">rahul.yadav6131766@gmail.com</a></p>
				</div>
				<div class="box" data-aos="fade-up-left">
					<h5>Address</h5>
					<p>Subhash Nagar, Pok. no. 2,Thane (W) - 400601</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 col-md-12">
				<h6 data-aos="fade-up">Let's' bring your ideas to life!</h6>
				<form method="POST" data-aos="fade-up">
					<input type="text" name="" placeholder="Name">
					<input type="tel" name="" placeholder="Phone no.">
					<input type="email" name="" placeholder="Email Id.">
					<textarea rows="4" placeholder="Discription"></textarea>
					<button type="submit">Submit</button>
				</form>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</section>

<div class="section-break"></div>

<?php include 'includes/footer.php'; ?>