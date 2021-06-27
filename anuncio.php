<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bienes Raices</title>
		<link rel="stylesheet" href="build/css/app.css" />
	</head>

	<body>
			<?php include 'includes/templates/header.php' ?>


		<main class="contenedor seccion contenido-centrado">
			<h1>Casa en Venta Frente al Bosque</h1>
			<picture>
				<source srcset="build/img/anuncio2.webp" type="image/webp" />
				<source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
			</picture>

			<div class="resumen-propiedad">
				<p class="precio">$3.000.000</p>
				<ul class="iconos-caracteristicas">
					<li>
						<img loading="lazy" src="build/img/icono_wc.svg" alt="icono WC" />
						<p>3</p>
					</li>
					<li>
						<img
							loading="lazy"
							src="build/img/icono_estacionamiento.svg"
							alt="icono Estacionamiento"
						/>
						<p>3</p>
					</li>

					<li>
						<img
							loading="lazy"
							src="build/img/icono_dormitorio.svg"
							alt="icono Habitaciones"
						/>
						<p>4</p>
					</li>
				</ul>

				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi
					soluta beatae quidem laudantium minima numquam autem impedit
					voluptatibus atque suscipit molestiae saepe tempora ipsam doloremque
					repudiandae, laboriosam amet maiores nulla.
				</p>
			</div>
		</main>
			<?php include 'includes/templates/footer.php' ?>


		<script src="build/js/bundle.min.js "></script>
	</body>
</html>
