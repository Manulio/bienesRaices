<?php 
		require './includes/funciones.php';
		$inicio = true;
		incluirTemplate('header', true);
	?>


<main class="contenedor seccion">
    <h1>Más sobre nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
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
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp" />
                <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
                <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>
                    Casa en el lago con exelente vista, acabados de lujo a un exelente
                    precio
                </p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="icono WC" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono Estacionamiento" />
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg"
                            alt="icono Habitaciones" />
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--contenedor-anuncio-->
        </div>
        <!---anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp" />
                <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
                <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>
                    Casa en el lago con exelente vista, acabados de lujo a un exelente
                    precio
                </p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="icono WC" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono Estacionamiento" />
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg"
                            alt="icono Habitaciones" />
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--contenedor-anuncio-->
        </div>
        <!---anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp" />
                <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
                <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>
                    Casa en el lago con exelente vista, acabados de lujo a un exelente
                    precio
                </p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="icono WC" />
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg"
                            alt="icono Estacionamiento" />
                        <p>3</p>
                    </li>

                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg"
                            alt="icono Habitaciones" />
                        <p>4</p>
                    </li>
                </ul>

                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!--contenedor-anuncio-->
        </div>
        <!---anuncio-->
    </div>
    <!--contenedor-anuncios-->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tu sueños</h2>
    <p>
        Llena el formulario de contacto y el asesor se contactará contigo a la
        berevedad
    </p>
    <div class="alinear-derecha">
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </div>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp" />
                    <source srcset="build/img/blog1.jpg" type="image/jpeg" />
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada
							Blog" />
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">
                        Escrito el <span>20/10/2021</span> por <span>Admin</span>
                    </p>
                    <p>
                        Consejos para contruir una terraza en el techo de tu casa con
                        los mejores materialies y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp" />
                    <source srcset="build/img/blog2.jpg" type="image/jpeg" />
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog" />
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">
                        Escrito el <span>20/10/2021</span> por <span>Admin</span>
                    </p>
                    <p>
                        Maximiza el espacio de tu hogar con esta guía, aprende a cambiar
                        muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <img class="comilla" src="build/img/comilla.svg" alt="comilla" />

            <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                autem dolorem sunt odio debitis similique qui saepe nemo, aspernatur
                et ab repellat at.
            </blockquote>
            <p class="alinear-derecha">-Pasquale Lino</p>
        </div>
    </section>
</div>

<?php
		incluirTemplate('footer');
 ?>