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
			<h1>Contacto</h1>

			<picture>
				<source srcset="build/img/destacada3.webp" type="image/webp" />
				<source srcset="build/img/destacada3.jpg" type="image/jpeg" />
				<img
					loading="lazy"
					src="build/img/destacada3.jpg"
					alt="Imagen contacto"
				/>
			</picture>

			<h2>Llene el formulario de contacto</h2>

			<form action="" class="formulario">
				<fieldset>
					<legend>Información Personal</legend>
					<label for="nombre">Nombre</label>
					<input type="text" placeholder="Tu Nombre" id="nombre" />
					<label for="email">E-Mail</label>
					<input type="email" placeholder="Tu E-Mail" id="email" />
					<label for="tel">Teléfono</label>
					<input type="tel" placeholder="Tu Telefono" id="tel" />
					<label for="msg">Mensaje</label>
					<textarea id="msg"></textarea>
				</fieldset>
				<fieldset>
					<legend>Información sobre la Propiedad</legend>
					<label for="vende-compra">Vende o Compra</label>
					<select id="vende-compra">
						<option value="" disabled selected>--Seleccione--</option>
						<option value="compra">Compra</option>
						<option value="vende">Vende</option>
					</select>
					<label for="precio">Precio o Presupuesto</label>
					<input type="number" placeholder="Precio o Presupuesto" id="precio" />
				</fieldset>
				<fieldset>
					<legend>Contacto</legend>
					<p>Cómo desea ser contactado</p>
					<div class="forma-contacto">
						<label for="contactar-telefono">Teléfono</label>
						<input
							name="contacto"
							type="radio"
							value="telefono"
							id="contactar-telefono"
						/>

						<label for="contactar-email">E-mail</label>
						<input
							name="contacto"
							type="radio"
							value="telefono"
							id="contactar-email"
						/>
					</div>
					<p>
						Si eligió teléfono, elija la fecha y la hora para ser contactado
					</p>
					<label for="fecha">Fecha</label>
					<input type="date" id="fecha" />
					<label for="hora">Hora</label>
					<input type="time" id="hora" min="09:00" max="18:00" />
				</fieldset>

				<input type="submit" value="Enviar" class="boton-verde" />
			</form>
		</main>
			<?php include 'includes/templates/footer.php' ?>


		<script src="build/js/bundle.min.js "></script>
	</body>
</html>
