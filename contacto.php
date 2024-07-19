<?php 
$active = 'contacto';
include('header.php'); 
?>

<div class="space"></div>
<main class="formulario">

<form action="https://formsubmit.co/franmorales7314@outlook.com" method="POST">
    <form >
    <h2 class="titulo__form">Reserva tu habitación</h2>

    <div class="input__group">

        <input class="casillas" type="text" name="name" id="name" placeholder="Nombre">

        <input class="casillas" type="text" name="name" id="surname" placeholder="Apellidos">

        <input class="casillas" type="text" name="name" id="phone" placeholder="Móvil">

        <input class="casillas" type="text" name="name" id="email" placeholder="Email">

        <hr class="separador__form">

        <input class="casillas" type="text" id="fecha-1" placeholder="Fecha de entrada">

        <input class="casillas" type="text" id="fecha-2" placeholder="Fecha de salida">

        <hr class="separador__form">


        <!-- habitacion 1 -->
        <ul class="check-card">
            <li class="check-card-item">
                <input type="checkbox" id="check01" name="check" value="1">
                <label for="check01" class="radio"></label>
                <div class="check-card-bg"></div>
                <div class="check-card-body">
                    <div class="check-card-toggle">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="check-card-body-in">
                        <h3 class="check-card-title">Habitación Temática</h3>
                        <p class="check-card-description">¡Clícame para reservarme!</p>
                        <p class="precio__habitaciones">75€</p>
                    </div>
                    <div class="check-card-cancel-1">¡seleccionada!</div>
                    <div class="check-card-cancel">Habitaciones que cambian de temática una vez cada tres meses.
                        No te prepares, será una sorpresa.
                    </div>
                    <div class="check-card-cancel-precio">75€/noche
                    </div>
                </div>
            </li>
        </ul>
        <!-- fin habitacion 1-->


        <!-- habitacion 2 -->
        <ul class="check-card">
            <li class="check-card-item">
                <input type="checkbox" id="check02" name="check" value="2">
                <label for="check02" class="radio"></label>
                <div class="check-card-bg"></div>
                <div class="check-card-body">
                    <div class="check-card-toggle">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="check-card-body-in">
                        <h3 class="check-card-title">Habitación Cápsula</h3>
                        <p class="check-card-description">¡Clícame para reservarme!</p>
                        <p class="precio__habitaciones">25€</p>
                    </div>
                    <div class="check-card-cancel-1">¡seleccionada!</div>
                    <div class="check-card-cancel">Habitaciones para que puedas viajar sin acompañante y eso no
                    suponga un problema.
                    </div>
                    <div class="check-card-cancel-precio">75€/noche
                    </div>
                </div>
            </li>
        </ul>
        <!-- fin habitacion 2-->


        <!-- habitacion 3 -->
        <ul class="check-card">
            <li class="check-card-item">
                <input type="checkbox" id="check03" name="check" value="3">
                <label for="check03" class="radio"></label>
                <div class="check-card-bg"></div>
                <div class="check-card-body">
                    <div class="check-card-toggle">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="check-card-body-in">
                        <h3 class="check-card-title">Habitación Estándar</h3>
                        <p class="check-card-description">¡Clícame para reservarme!</p>
                        <p class="precio__habitaciones">50€</p>
                    </div>
                    <div class="check-card-cancel-1">¡seleccionada!</div>
                    <div class="check-card-cancel">Habitaciones con cama de matrimonio y espacio de sobra para dos personas.
                    </div>
                    <div class="check-card-cancel-precio">75€/noche
                    </div>
                </div>
            </li>
        </ul>
        <!-- fin habitacion 3-->


        <div class="form__text">
            <a href="#">Política de privacidad y términos y condiciones</a>
        </div>

        <input class="btn" type="submit" value="Enviar">


        <!-- para que el formulario no nos mande a otra página ni nos ponga el captcha -->
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_next" value="http://127.0.0.1:5500/index-contacto.html">

    </div>

</form>

</main>

<?php include('footer.php'); ?>