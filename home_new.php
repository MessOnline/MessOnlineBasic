<?php

include_once 'header.php';
if (isset($_SESSION['name'])) {

	echo '<div class="homecss">
		<section class="main-container">
			<div class="main-wrapper">
				<h2 class="pagetitle">Home</h2>
				
				"You are logged in!";

				</div>
				<div class="w3-content w3-section" style="max-width:50%">
					
					<img class="mySlides" src="http://sherebengal.com/wp-content/uploads/2017/09/Puri-Sabji.jpg" style="width:50%;height: 400px;">
					
					<img class="mySlides" src="https://zaykarecipes.com/wp-content/uploads/2017/08/Aloo-Paratha.jpg" style="width:50%;height: 400px;">

					<img class="mySlides" src="https://ik.imagekit.io/h16xi0jtm/images/blogs/12_14986521805Daliyarecipesforyourgrowingbaby737px414px.jpg" style="width:50%;height: 400px;">

					<img class="mySlides" src="https://www.seriouseats.com/recipes/images/2012/10/20121004-225008-mint-chutney.jpg" style="width:50%;height: 400px;">

					<img class="mySlides" src="https://d1u4oo4rb13yy8.cloudfront.net/article/79310-wfrgbwbprx-1516122023.jpg" style="width:50%;height: 400px;">

				</div>

				<script>
					var myIndex = 0;
					carousel();
					function carousel() {
						var i;
						var x = document.getElementsByClassName("mySlides");
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";
						}
						myIndex++;
						if (myIndex > x.length) {myIndex = 1}
							x[myIndex-1].style.display = "block";
							setTimeout(carousel, 3000);
							// Change image every 2 seconds
						}
					</script>
				</section>
			</div>';

			}
			include_once 'footer.php'; ?>