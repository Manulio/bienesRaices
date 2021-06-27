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
			<h1>Nuestro Blog</h1>
			<article class="entrada-blog">
				<div class="imagen">
					<a href="entrada.php">
						<picture>
							<source srcset="build/img/blog1.webp" type="image/webp" />
							<source srcset="build/img/blog1.jpg" type="image/jpeg" />
							<img
								loading="lazy"
								src="build/img/blog1.jpg"
								alt="Texto Entrada
							Blog"
							/>
						</picture>
					</a>
				</div>
				<div class="texto-entrada">
					<a href="entrada.php">
						<h4>Terraza en el techo de tu casa</h4>
						<p>Escrito el <span>20/10/2021</span> por <span>Admin</span></p>
						<p>
							Consejos para contruir una terraza en el techo de tu casa con los
							mejores materialies y ahorrando dinero
						</p>
					</a>
				</div>
			</article>

			<article class="entrada-blog">
				<div class="imagen">
					<a href="entrada.php">
						<picture>
							<source srcset="build/img/blog2.webp" type="image/webp" />
							<source srcset="build/img/blog2.jpg" type="image/jpeg" />
							<img
								loading="lazy"
								src="build/img/blog2.jpg"
								alt="Texto Entrada Blog"
							/> </picture
					></a>
				</div>
				<div class="texto-entrada">
					<a href="entrada.php">
						<h4>Guía para la decoración de tu hogar</h4>
						<p>Escrito el <span>20/10/2021</span> por <span>Admin</span></p>
						<p>
							Maximiza el espacio de tu hogar con esta guía, aprende a cambiar
							muebles y colores para darle vida a tu espacio
						</p>
					</a>
				</div>
			</article>
			<article class="entrada-blog">
				<div class="imagen">
					<a href="entrada.php">
						<picture>
							<source srcset="build/img/blog3.webp" type="image/webp" />
							<source srcset="build/img/blog3.jpg" type="image/jpeg" />
							<img
								loading="lazy"
								src="build/img/blog3.jpg"
								alt="Texto Entrada
							Blog"
							/>
						</picture>
					</a>
				</div>
				<div class="texto-entrada">
					<a href="entrada.php">
						<h4>Terraza en el techo de tu casa</h4>
						<p>Escrito el <span>20/10/2021</span> por <span>Admin</span></p>
						<p>
							Consejos para contruir una terraza en el techo de tu casa con los
							mejores materialies y ahorrando dinero
						</p>
					</a>
				</div>
			</article>

			<article class="entrada-blog">
				<div class="imagen">
					<a href="entrada.php">
						<picture>
							<source srcset="build/img/blog4.webp" type="image/webp" />
							<source srcset="build/img/blog4.jpg" type="image/jpeg" />
							<img
								loading="lazy"
								src="build/img/blog4.jpg"
								alt="Texto Entrada Blog"
							/>
						</picture>
					</a>
				</div>
				<div class="texto-entrada">
					<a href="entrada.php">
						<h4>Guía para la decoración de tu hogar</h4>
						<p>Escrito el <span>20/10/2021</span> por <span>Admin</span></p>
						<p>
							Maximiza el espacio de tu hogar con esta guía, aprende a cambiar
							muebles y colores para darle vida a tu espacio
						</p>
					</a>
				</div>
			</article>
		</main>
			<?php include 'includes/templates/footer.php' ?>


		<script src="build/js/bundle.min.js "></script>
	</body>
</html>