<?php 
	include 'db.php';
	include 'header.php';

	echo '
	<div class="bgvideo">
			<img src="/img/homepage.jpg" alt="">
			<div class="nigersearch">
				<h1>The World\'s #1 Marketplace to buy & sell beats</h1>
				<form action="" class="searchniger">
					<button class="nsearch"><img src="img/search.png" alt=""></button>
					<input type="text" placeholder=\'Try "Hip hop beat" or "Drake type beat"\'>
					<select name="janr" id="">
						<option value="All">All</option>
						<option selected value="Tracks">Tracks</option>
						<option value="Musicians">Musicians</option>
						<option value="Playlists">Playlists</option>
						<option value="Albums">Albums</option>
						<option value="Services">Services</option>
					</select>
				</form>
				<div class="trands">
					<span>Tranding: </span>
					<a href="">
						<div class="tranding">lil drunk</div>
					</a>
					<a href="">
						<div class="tranding">travis scott</div>
					</a>
					<a href="">
						<div class="tranding">drake</div>
					</a>
					<a href="">
						<div class="tranding">trap</div>
					</a>
					<a href="">
						<div class="tranding">trapsoul</div>
					</a>
				</div>
			</div>
	</div>
	<div class="wrapper">


	</div>
	</div>
</body>
</html>
';

?>