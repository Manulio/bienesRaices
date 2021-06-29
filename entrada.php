    <?php 
		require './includes/funciones.php';
		$inicio = true;
		incluirTemplate('header');
	?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <p class="informacion-meta">
            Escrito el <span>20/10/2021</span> por <span>Admin</span>
        </p>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp" />
            <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/destacada2.jpg" alt="anuncio" />
        </picture>

        <div class="resumen-propiedad">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi
                soluta beatae quidem laudantium minima numquam autem impedit
                voluptatibus atque suscipit molestiae saepe tempora ipsam doloremque
                repudiandae, laboriosam amet maiores nulla.
            </p>
        </div>
    </main>
    
<?php
		incluirTemplate('footer');
 ?>