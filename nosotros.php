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


		<main class="contenedor seccion">
			<h1>Conoce más sobre nosotros</h1>

			<div class="contenido-nosotros">
				<div class="imagen">
					<picture>
						<source srcset="build/img/nosotros.webp" type="image/webp" />
						<source srcset="build/img/nosotros.jpg" type="image/jpeg" />
						<img
							loading="lazy"
							src="build/img/nosotros.jpg"
							alt="Sobre Nosotros"
						/>
					</picture>
				</div>
				<div class="texto-nosotros">
					<blockquote>25 Años de experiencia</blockquote>
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam nisi
						sapiente fugit quisquam quo. Ipsam iste laborum eaque dolorem soluta
						impedit hic, dolores ratione aliquid in aliquam sapiente, nemo
						porro. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
						Ipsam nisi sapiente fugit quisquam quo. Ipsam iste laborum eaque
						dolorem soluta impedit hic, dolores ratione aliquid in aliquam
						sapiente, nemo porro.
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos iusto
						saepe molestias porro culpa obcaecati dolorem, dolorum possimus non
						tempore quia quod, at iste ipsum soluta consequuntur minima quasi
						in.
					</p>
				</div>
			</div>
		</main>
		<section class="contenedor seccion">
			<h1>Más sobre nosotros</h1>

			<div class="iconos-nosotros">
				<div class="icono">
					<img
						src="build/img/icono1.svg"
						alt="Icono seguridad"
						loading="lazy"
					/>
					<h3>Seguridad</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at
						non, architecto facere autem quam sint ut est totam quis libero
						quisquam adipisci error nam iure consectetur magnam. Expedita,
						labore.
					</p>
				</div>
				<div class="icono">
					<img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
					<h3>Precio</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at
						non, architecto facere autem quam sint ut est totam quis libero
						quisquam adipisci error nam iure consectetur magnam. Expedita,
						labore.
					</p>
				</div>
				<div class="icono">
					<img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
					<h3>Tiempo</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque at
						non, architecto facere autem quam sint ut est totam quis libero
						quisquam adipisci error nam iure consectetur magnam. Expedita,
						labore.
					</p>
				</div>
			</div>
		</section>

		<?php include 'includes/templates/footer.php' ?>

		<script src="build/js/bundle.min.js "></script>
	</body>
</html>
