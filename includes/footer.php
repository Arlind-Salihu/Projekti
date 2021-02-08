		<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<div class="contact-info">
							<p><i class="fa fa-map-marker"></i> Podujevë</p>
							<p><i class="fa fa-envelope"></i> as47047@ubt-uni.net</p>
							<p><i class="fa fa-envelope"></i> vb47540@ubt-uni.net</p>
							<p><i class="fa fa-phone"></i> ( +383 45-414-999 ) & ( +383 45-671-686 )</p>
							<div class="social">
								<a href="https://twitter.com/ubteducation"><i class="fab fa-twitter"></i></a>
								<a href="https://www.facebook.com/UniversitetiUBT/"><i
										class="fab fa-facebook-f"></i></a>
								<a
									href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFLbLNGEoEeFQAAAXXdxiIYMrBJxV00wYtw7Z3HGeSGzu0nYRktWIPvjk1CgOjpBOUpvGUeNXG_zDBqdMPFMmAT6uIyA66LxlKIkMXdNorc21TO3JrNC3TEAE49OQ12-D8IAto=&originalReferer=https://www.ubt-uni.net/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fubt---university-for-business-and-technology%2F"><i
										class="fab fa-linkedin-in"></i></a>
								<a href="https://www.instagram.com/ubt_official/"><i class="fab fa-instagram"></i></a>
								<a href="https://www.youtube.com/channel/UCS76ozJN2tcsmQ8XG4KIruQ"><i
										class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<center>
		<div class="footer-bottom" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 copyright">
						<p>UBT© <a href="https://www.ubt-uni.net/sq/ballina/">UBT - Web Page</a>. Të gjitha të drejtat e rezervuara
						</p>
					</div>
				</div>
			</div>
		</div>
	</center>
	</div>
	<script>
		var slideIndex = [1, 1];
		var slideId = ["mySlides", "mySlides"]
		showSlides(1, 0);
		showSlides(1, 1);

		function plusSlides(n, no) {
			showSlides(slideIndex[no] += n, no);
		}

		function showSlides(n, no) {
			var i;
			var x = document.getElementsByClassName(slideId[no]);
			if (n > x.length) { slideIndex[no] = 1 }
			if (n < 1) { slideIndex[no] = x.length }
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex[no] - 1].style.display = "block";
		}
	</script>
</html>