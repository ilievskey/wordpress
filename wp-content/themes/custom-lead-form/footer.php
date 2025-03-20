<?php
?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer-container">
			<div class="footer-column">
				<h3>About Us</h3>
				<p>We are a leading provider of innovative solutions for businesses of all sizes. Our mission is to help our clients achieve their goals through technology.</p>
			</div>

			<div class="footer-column">
				<h3>Quick Links</h3>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
					<li><a href="#features">Features</a></li>
					<li><a href="#lead-form">Contact Us</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>

			<div class="footer-column">
				<h3>Contact Info</h3>
				<ul>
					<li><i class="fas fa-map-marker-alt"></i> 123 Business Street, Suite 100</li>
					<li><i class="fas fa-phone"></i> (555) 123-4567</li>
					<li><i class="fas fa-envelope"></i> info@example.com</li>
				</ul>
			</div>

			<div class="footer-column">
				<h3>Follow Us</h3>
				<div class="social-icons">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>

		<div class="copyright">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
