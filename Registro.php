<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" type="text/css" href="usuarios.css">
</head>
<body style="background-color: #fdfd96;">
<div class="Encabezado" style="background-color: #ab0d2f;">
    <a href="inicio.php"><img src="Logo.jpg" alt="Logo" width="90px" height="90px" style="border-radius: 50%; margin-left: 15px; margin-top: 0px"></a>       
</div>

<div class="cuerpo muestras">
    <div class="carousel">
        <div class="carousel-images">
            <img src="https://www.mexicoenmicocina.com/wp-content/uploads/2015/02/Capirotada1_thumb-1.jpg" alt="Platillo 1" class="carousel-image">
            <img src="https://i0.wp.com/sarasellos.com/wp-content/uploads/2024/04/tiramisu3.jpg?fit=1024%2C768&ssl=1" alt="Platillo 2" class="carousel-image">
            <img src="https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/17eefccc0612317aa9f2ce1fbaae56cc/Derivates/3740e0c14b97c50890905a1961b9eb542959cc06.jpg" alt="Platillo 3" class="carousel-image">
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</div>

<style>
    .cuerpo {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .carousel {
        position: relative;
        width: 80%;
        max-width: 1200px;
        height: 500px;
        overflow: hidden;
    }

    .carousel-images {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%;
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 12px;
        cursor: pointer;
        font-size: 25px;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .social-buttons button {
        width: 100%;
        margin: 5px 0;
        padding: 12px;
        text-align: center;
    }
</style>

<script>
    let currentSlide = 0;

    function moveSlide(step) {
        const images = document.querySelectorAll('.carousel-image');
        const totalSlides = images.length;

        currentSlide = (currentSlide + step + totalSlides) % totalSlides;

        const carousel = document.querySelector('.carousel-images');
        carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
</script>

<div class="cuerpo opciones" style="background-color: #fdfd96;">
    <div class="button-container">
        <div class="container">
            <div class="social-buttons">
            <button class="social-button" id="google-button" onclick="signInWithGoogle()">
                <img src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png" alt="Google">
                <br>Registrarse con Google
            </button>
                <button class="social-button" id="facebook-button"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook"><br>Registrarse con Facebook</button>
                <button class="social-button" id="instagram-button"><img src="https://1000marcas.net/wp-content/uploads/2019/11/Instagram-Logo-2016.png" alt="Instagram"><br>Registrarse con Instagram</button>
                <button class="social-button" id="hotmail-button"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Microsoft_Outlook_2013-2019_logo.svg/800px-Microsoft_Outlook_2013-2019_logo.svg.png" alt="Hotmail/Outlook"><br>Registrarse con Outlook</button>
            </div>

            <div class="registration-form" style="width:400px; height:55%;"> 
                <h1>Registrar Usuario</h1>
                <form method="post">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required>
                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" name="password" required>
                    <label for="nombres">Nombres:</label>
                    <input type="text" id="nombres" name="nombres" required>
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required>
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                    <input type="submit" name="registrar" value="Registrar">
                    <div class="redireccionar"><a href="Inicio_sesion.php">¿Ya tienes una cuenta?</a></div>
                </form>
                <?php
                    include("Registrar.php")
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
