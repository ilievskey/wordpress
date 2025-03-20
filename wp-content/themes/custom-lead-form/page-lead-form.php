<?php
get_header();
?>

	<main id="primary" class="site-main">
		<section class="hero-section">
			<div class="container">
				<div class="hero-content">
					<h1 class="hero-title">Contact Us Today</h1>
					<p class="hero-description">Fill out the form below to get in touch with our team. We'll help you find the right solution for your business needs.</p>
				</div>
			</div>
		</section>

		<section id="lead-form" class="lead-form-section">
			<div class="container">
				<div class="lead-form-container">
					<form id="pabau-lead-form" class="lead-form">
						<div class="form-group">
							<label for="first_name">First Name *</label>
							<input type="text" id="first_name" name="first_name" required>
							<div class="invalid-feedback"></div>
						</div>

						<div class="form-group">
							<label for="last_name">Last Name *</label>
							<input type="text" id="last_name" name="last_name" required>
							<div class="invalid-feedback"></div>
						</div>

						<div class="form-group">
							<label for="email">Email Address *</label>
							<input type="email" id="email" name="email" required>
							<div class="invalid-feedback"></div>
						</div>

						<div class="form-group">
							<label for="mobile">Phone Number</label>
							<input type="tel" id="mobile" name="mobile">
							<div class="invalid-feedback"></div>
						</div>

						<button type="submit" class="submit-btn">
							<span class="spinner"></span>
							<span class="button-text">Submit</span>
						</button>

						<div id="form-message"></div>
					</form>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
?>