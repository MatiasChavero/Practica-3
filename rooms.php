<?php require 'header.php'; ?>

<section class="page-second">
	<div class="container">
		<div class="page-second-title">
			<h2>Rooms</h2>
		</div>

		<nav class="page-second-navigation">
			<a href="#">Home</a>
			<a href="#">Rooms</a>
		</nav>

	</div>
</section>

<section class="rooms-options">
	<div class="container">
		<header class="rooms-options-title">
			<h3>ABOUT US</h3>
			<h2>Trust and quality <br> are our atuus</h2>
		</header>

		<ul class="rooms-options-blocks">
			<li class="rooms-options-list">
				<div class="rooms-options-image">
					<img src="imagenes/rooms/habitacion-2.png" alt="img">
				</div>

				<div class="rooms-options-title-link">
					<div class="rooms-description">
						<h5>BIG</h5>
						<h4>Spacious Room.</h4>
						<p>The most spacious room you will <br> ever see in our hotel. Equipped with <br> span and warm beds</p>
					</div>

					<div class="rooms-button">
						<a href="#" class="button"><img src="imagenes/rooms/flecha.png" alt="img"></a>
					</div>
				</div>	
			</li>

			<li class="rooms-options-list">
				<div class="rooms-options-image">
					<img src="imagenes/rooms/habitacion-1.png" alt="img">
				</div>

				<div class="rooms-options-title-link">
					<div class="rooms-description">
						<h5>SMALL</h5>
						<h4>Small Cheap Room</h4>
						<p>Smallest and the most economic <br> room in our hotel. Save an extra <br> buck for your holyday.</p>
					</div>

					<div class="rooms-button">
						<a href="#" class="button"><img src="imagenes/rooms/flecha.png" alt="img"></a>
					</div>
				</div>
			</li>	
			
			<li class="rooms-options-list">
				<div class="rooms-options-image">
					<img src="imagenes/rooms/habitacion-3.png" alt="img">
				</div>

				<div class="rooms-options-title-link">
					<div class="rooms-description">
						<h5>PREMIUM</h5>
						<h4>Big Room</h4>
						<p>Biggest room in our hotel fully <br> equipped with Wi-fi and hot coffee.</p>
					</div>

					<div class="rooms-button">
						<a href="#" class="button"><img src="imagenes/rooms/flecha.png" alt="img"></a>
					</div>
				</div>
			</li>

			<li class="rooms-options-list">
				<div class="rooms-options-image">
					<img src="imagenes/rooms/habitacion-4.png" alt="img">
				</div>

				<div class="rooms-options-title-link">
					<div class="rooms-description">
						<h5>EXPENSIVE</h5>
						<h4>Expensive Luxury Room</h4>
						<p>The most expensive room available <br> for milionars and very rich people.</p>
					</div>

					<div class="rooms-button">
						<a href="#" class="button"><img src="imagenes/rooms/flecha.png" alt="img"></a>
					</div>
				</div>
			</li>

			<li class="rooms-options-list">
				<div class="rooms-options-image">
					<img src="imagenes/rooms/habitacion-2.png" alt="img">
				</div>

				<div class="rooms-options-title-link">
					<div class="rooms-description">
						<h5>BIG</h5>
						<h4>Spacious Room</h4>
						<p>The most spacious room you will <br> ever see in our hotel. Equipped with <br> span and warm beds.</p>
					</div>

					<div class="rooms-button">
						<a href="#" class="button"><img src="imagenes/rooms/flecha.png" alt="img"></a>
					</div>
				</div>
			</li>	

			<li class="rooms-options-list">
				<div class="rooms-options-image">
					<img src="imagenes/rooms/habitacion-1.png" alt="img">
				</div>

				<div class="rooms-options-title-link">
					<div class="rooms-description">
						<h5>SMALL</h5>
						<h4>Small Cheap Room</h4>
						<p>Smallest and the most economic <br> room in our hotel. Save an extra <br> buck for your holyday.</p>
					</div>

					<div class="rooms-button">
						<a href="#" class="button"><img src="imagenes/rooms/flecha.png" alt="img"></a>
					</div>
				</div>
			</li>																																		
		</ul>		
	</div>
</section>

<section class="check">
	<div class="container">
		<form class="check-date" method="GET">
				<div class="check-in">
					<label for="checkindate">Check in date</label>
					<input type="date" id="checkindate" name="checkindate" placeholder="Check in date">
				</div>

				<div class="check-in">
					<label for="checkoutdate">Check out date</label>
					<input type="date" id="checkoutdate" name="checkoutdate" placeholder="Check out date">
				</div>

				<div class="check-in">
					<label for="rooms">Rooms</label>
					<input type="number" id="rooms" name="rooms" placeholder="rooms">
				</div>

				<div class="check-button">
					<button type="submit">Submit<img src="imagenes/rooms/enviar.png"></button>
				</div>
			</form>
	</div>
</section>

<section class="pre-footer">
	<div class="container">

		<header class="pre-footer-title">
			<h3>Photos</h3>
			<h2>See our latest photos <br> from restaurant and hotel</h2>
		</header>
	</div>

	<ul class="pre-footer-photo">
		<li class="pre-footer-tamaño">
			<img src="imagenes/photo-2.png" alt="img">
		</li>

		<li class="pre-footer-tamaño">
			<img src="imagenes/photo-3.png" alt="img">
		</li>

		<li class="pre-footer-tamaño">
			<img src="imagenes/photo-1.png" alt="img">
		</li>

		<li class="pre-footer-tamaño">
			<img src="imagenes/photo-4.png" alt="img">
		</li>
	</ul>
	
</section>


<?php require 'footer.php'; ?>