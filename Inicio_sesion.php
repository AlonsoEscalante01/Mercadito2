<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="usuarios.css">
</head>
<body style="background-color: #fdfd96;">

<div class="Encabezado" style="background-color: #ab0d2f;">
    <a href="inicio.php"><img src="Logo.jpg" alt="Logo" width="90px" height="90px"
    style="border-radius: 50%; margin-left: 15px;"></a>       
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
        width: 80%;  /* Aumentado el ancho del carrusel */
        max-width: 1200px; /* Añadido un máximo de ancho */
        height: 500px; /* Altura ajustada */
        overflow: hidden;
    }

    .carousel-images {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%; /* Mantiene las imágenes al tamaño del contenedor */
    }

    .carousel-image {
        width: 100%;  /* Ajusta el ancho de las imágenes al contenedor */
        height: 100%; /* Asegura que las imágenes ocupen toda la altura */
        object-fit: cover; /* Cubre todo el espacio del carrusel, recortando si es necesario */
    }

    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 15px;
        cursor: pointer;
        font-size: 25px;  /* Aumentado el tamaño del botón */
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

    /* Aseguramos que los botones sociales tengan el mismo ancho */
    .social-buttons button {
        width: 100%;  /* Hacer que todos los botones tengan el mismo ancho */
        margin: 5px 0;  /* Espacio entre los botones */
        padding: 15px;  /* Aumentar el tamaño del botón para mejor clicabilidad */
        text-align: center;  /* Centrar el texto */
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
                <button class="social-button" id="google-button"><img src="https://rotulosmatesanz.com/wp-content/uploads/2017/09/2000px-Google_G_Logo.svg_.png" alt="Google"><br>Registrarse con Google</button>
                <button class="social-button" id="facebook-button"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook"><br>Registrarse con Facebook</button>
                <button class="social-button" id="instagram-button"><img src="https://1000marcas.net/wp-content/uploads/2019/11/Instagram-Logo-2016.png" alt="Instagram"><br>Registrarse con Instagram</button>
                <button class="social-button" id="hotmail-button"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Microsoft_Outlook_2013-2019_logo.svg/800px-Microsoft_Outlook_2013-2019_logo.svg.png" alt="Hotmail/Outlook"><br>Registrarse con Outlook</button>
            </div>

            <div class="login-form">
            <h1>Iniciar Sesión</h1>
            <form action="procesar_inicio_sesion.php" method="POST">
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                <input type="password" id="contrasena" name="password" placeholder="Contraseña" required>
		    <div class="redireccionar"><a href="#">¿Olvidaste la contraseña?</a></div>
                <div class="redireccionar"><a href="Registro.php">¿No tienes una cuenta?</a></div>
		    <button type="submit">Ingresar</button>
        </div>
    </div>

    </div>
</div>

</body>
</html>
