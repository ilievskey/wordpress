<?php

get_header();
?>

	<main id="primary" class="site-main">
		<section class="hero-section">
			<div class="container">
				<div class="hero-content">
					<h1 class="hero-title">Innovative Solutions for Your Business</h1>
					<p class="hero-description">We help businesses grow with cutting-edge technology and exceptional service. Our team of experts is dedicated to your success.</p>
					<a href="#lead-form" class="cta-button">Get Started Today</a>
				</div>
			</div>
		</section>

		<section id="features" class="features-section">
			<div class="container">
				<h2 class="section-title">Our Features</h2>
				<div class="features-grid">
					<div class="feature-card">
						<div class="feature-icon"><i class="fas fa-chart-line"></i></div>
						<h3 class="feature-title">Business Growth</h3>
						<p>Our solutions are designed to help your business scale efficiently and effectively.</p>
					</div>

					<div class="feature-card">
						<div class="feature-icon"><i class="fas fa-cogs"></i></div>
						<h3 class="feature-title">Automation</h3>
						<p>Streamline your operations with our powerful automation tools and save valuable time.</p>
					</div>

					<div class="feature-card">
						<div class="feature-icon"><i class="fas fa-users"></i></div>
						<h3 class="feature-title">Customer Management</h3>
						<p>Build stronger relationships with your customers using our advanced CRM features.</p>
					</div>

					<div class="feature-card">
						<div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
						<h3 class="feature-title">Security</h3>
						<p>Keep your data safe with our enterprise-grade security protocols and regular updates.</p>
					</div>

					<div class="feature-card">
						<div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
						<h3 class="feature-title">Mobile Ready</h3>
						<p>Access your information anytime, anywhere with our fully responsive mobile solutions.</p>
					</div>

					<div class="feature-card">
						<div class="feature-icon"><i class="fas fa-headset"></i></div>
						<h3 class="feature-title">24/7 Support</h3>
						<p>Our dedicated support team is always available to help you resolve any issues.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="lead-form" class="lead-form-section">
			<div class="container">
				<h2 class="section-title">Contact Us Today</h2>
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