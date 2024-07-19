<?php 
$active = 'index';
include('header.php'); 
?>

<main>
<div class="space"></div>

<div class="background__viva">
    <img src="img/logo2.png" class="home__viva">
</div>

<article class="container-fluid container-lg px-0 px-lg-2 primer__bloque">
    <div class="contenedor__home">
        <h2 class="titulo"><strong>VIVA</strong> Hotel</h2>
        <p class="subtitulo">Vida solo hay una</p>
        <p class="texto">Y queremos que la disfrutes de la mejor forma posible.</p>
        <p class="texto">Un oasis de elegancia en el corazón de la ciudad. Este hotel minimalista ofrece una experiencia de alojamiento única que combina la simplicidad y los medios para crear un ambiente vanguardista y entretenido.</p>
        <p class="texto">Diseñamos este hotel pensando en aquellas personas que quieren vivir nuevas experiencias, que no tienen miedo de viajar sin acompañantes o que necesitan unos días de relax para descansar de la rutina.</p>
    </div>
    <div>
        <img src="img/home1.jpeg" class="imagen__home">
    </div>
</article>

<article class="container-fluid container-lg px-0 px-lg-2 primer__bloque">
    <div class="container d-flex order-lg-2 grupo__completo">
        <div class="palabras">
            <h3 class="palabras__clave">AMBIENTE</h3>
            <h3 class="palabras__clave">RELAX</h3>
            <h3 class="palabras__clave">DESCONEXIÓN</h3>
            <h3 class="palabras__clave-titulo">VIVA</h3>
            <h3 class="palabras__clave">OCIO</h3>
            <h3 class="palabras__clave">NOVEDAD</h3>
            <h3 class="palabras__clave">GASTRONOMÍA</h3>
        </div>
        <div class="flecha__scroll">
            <img class="flecha" src="img/flecha.webp">
        </div>
    </div>
    <div class="order-lg-1">
        <img src="img/home2.jpeg" class="imagen__home">
    </div>
</article>

<section class="background__black ">
    <article class="container d-lg-flex">
        <h1 class="subtitulo2 container">¿Y por qué VIVA?</h1>

        <div class="container bloque__parrafos">
            <p class="primer__parrafo">Nuestro hotel cuenta con habitaciones equipadas de comodidades y tecnología, que vas a necesitar durante tu estancia.</p>
            <hr class="linea">
            <p class="segundo__parrafo">Desde televisores de pantalla plana y sistemas de sonido envolvente hasta termostatos inteligentes y luces de ambiente personalizables.</p>
            <hr class="linea">
            <p class="tercer__parrafo">También ofrecemos acceso a Internet de alta velocidad y estaciones de carga para dispositivos móviles en todas las habitaciones.</p>
        </div>
    </article>
</section>

<section class="background__black-dos">
    <article class="container d-lg-flex">
        <p class="container"></p>
        <div class="boton container">
            <a href="salas.php" class="boton__clic">
                <p class="boton__texto">Sorpréndeme</p>
            </a>
        </div>
    </article>
</section>
    </main>

<?php include('footer.php'); ?>