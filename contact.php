<?php require 'header.php'; ?>


<section class="page-fifth">
	<div class="container">
		<div class="page-fifth-title">
			<h2>Contact</h2>
		</div>

		<nav class="page-fifth-nav">
			<a href="#">Home</a>
			<a href="#">Contact</a>
		</nav>
	</div>
</section>

<section class="page-fifth-location">
	<div class="container">
		<img src="imagenes/contact/mapa.png" alt="img">
	</div>	
</section>

<section class="page-fifth-contact">
	<div class="container">
		<header class="page-fifth-contact-header">
			<h3>CONTACT</h3>
			<h2>Contact us to get <br> free suport</h2>
		</header>

		<form class="page-fifth-formulario" method="GET">
			<div class="page-fifth-formulario-1">
				<input type="text" id="description" name="description" placeholder="Description">
			</div>

			<div class="page-fifth-formulario-2">
				<div>
					<input type="text" id="description" name="description" placeholder="Subject">
				</div>

				<div>
					<input type="text" id="description" name="description" placeholder="Name / Surname">
				</div>

				<div>
					<input type="text" id="description" name="description" placeholder="Email">
				</div>

				<div>
					<button type="submit">Send<img src="imagenes/send.png" alt="img"></button>
				</div>
			</div>	
		</form>

		<ul class="page-fifth-description">
			<li class="page-fifth-list">
				<div class="page-fifth-imagen">
					<img src="imagenes/contact/mail.png" alt="img">
				</div>
				<h4>Email</h4>
				<p>example@yahoo.com</p>
				<p>exampleemail2@yahoo.com</p>
			</li>

			<li class="page-fifth-list">
				<div class="page-fifth-imagen">
					<img src="imagenes/contact/phone.png" alt="img">
				</div>
				<h4>Phone</h4>
				<p>+0 320 422 4254</p>
				<p>+0 342 552 523</p>
			</li>

			<li class="page-fifth-list">
				<div class="page-fifth-imagen">
					<img src="imagenes/contact/location.png" alt="img">
				</div>
				<h4>Location</h4>
				<p>Main Str Chicago Ilinois</p>
				<p>Main Street New York City</p>
			</li>
		</ul>
	</div>	
</section>

<section class="page-fifth-final">
	<div class="container">
		<header class="page-fifth-final-header">
			<h3>Photos</h3>
			<h2>See our latest photos <br> from restaurant and hotel</h2>
		</header>
	</div>

	<ul class="page-fifth-final-description">
		<li class="page-fifth-final-description-list">
			<img src="imagenes/photo-2.png" alt="img">
		</li>

		<li class="page-fifth-final-description-list">
			<img src="imagenes/photo-3.png" alt="img">
		</li>

		<li class="page-fifth-final-description-list">
			<img src="imagenes/photo-1.png" alt="img">
		</li>

		<li class="page-fifth-final-description-list">
			<img src="imagenes/photo-4.png" alt="img">
		</li>
	</ul>
</section>


<?php require 'footer.php'; ?>
