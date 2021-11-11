<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón</title>
    <link rel="stylesheet" href="build/css/all.min.css">
    <link rel="stylesheet" href="build/css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>

</head>

<body>

    <p class="head-contac">
        <span><i class="fas fa-phone"></i>+51 977638165 </span>
        <span><i class="fas fa-envelope-open-text"></i>rubiocanches@gmail.com </span>
    </p>
    <div class="head-contenedor-video">

        <div class="head-overlay">
            <h2 class="head-writer"><samp class="typed"></samp></h2>
        </div>
        <div class="">
            <video autoplay muted class="head-video" loop>
                <source src="./build/videos/header.mp4" type="video/mp4 ">
                <source src="./build/videos/header.webm" type="video/webm ">
            </video>
        </div>

    </div>
    <div class="contenedor-menu">
        <picture>
            <source srcset="./build/img/logo.webp" type="image/webp">
            <img class="logo-menu" loading="lazy" src="./build/img/logo.png" alt="logo luis angel rubio" title="">
        </picture>
        <nav class="menu">
            <a href="">Inicio</a>
            <a href="">Quien Soy</a>
            <a href="">Portafolio</a>
            <a href="">Experiencia</a>
            <a href="">Contacto</a>
        </nav>
    </div>
    <?php echo $contenido; ?>

    <footer class="footer">
    <h1>hola</h1>

    </footer>
    
    
    <script src="build/js/snowflakes.js"></script>
    <script src="build/js/lottieefec.js"></script>
    <script src="build/js/all.min.js"></script>
    <script src="build/js/typed.js"></script>
    <script src="build/js/app.js"></script>


</body>

</html>