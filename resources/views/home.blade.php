<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header class="bg-green-light">
    <div class="container mx-auto py-4">
        <div class="content flex">
            <div class="logo flex w-1/6"> 
                <a href="">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="menu flex w-3/6 px-4">
                <nav class="flex">
                    <ul class="flex uppercase">
                        <li class="px-2"><a href="">Inicio</a></li>
                        <li class="px-2"><a href="">Nosotros</a></li>
                        <li class="px-2"><a href="">Servicios</a></li>
                        <li class="px-2"><a href="">Galería</a></li>
                        <li class="px-2"><a href="">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right flex justify-center w-2/6">
                <div class="language w-1/6">
                    <a class="bg-white p-2" href="">En</a>
                </div>
                <div class="temperature w-2/6">30°</div>
                <div class="rrss w-3/6">fb in</div>
            </div>
        </div>
    </div>
</header>
<main>
    <div id="banner" class="">
            <img class="" src="{{ asset('img/banner.jpg') }}" alt="">
    </div>
    <div id="wellcome" class="container mx-auto flex">
        <div class="w-1/4">
            <h1>Bienvenido a</h1>
            <img src="{{ asset('img/logo.svg') }}" alt="">
        </div>
        <div class="w-3/4">
            <p>Guadalajara, Jalisco, México</p>
            <p>DÉ A SUS INVITADOS UNA RAZÓN PARA ASOMBRARSE</p>
            <p>Desde lujosas bodas ambientadas con caminos llenos de flores de los lugares históricos de Guadalajara y sus alrededores, hasta elaborados eventos corporativos que fomentan las conexiones de la compañía, RAMPA IIII tiene el don de transformar las celebraciones significativas en experiencias inolvidables.</p>
        </div>
    </div>
    <div id="services" class="container mx-auto bg-green-light">
        <div>
            <h1>Nuestros Servicios</h1>
            <p>Pequeños detalles que hacen la diferencia</p>
        </div>
        <div></div>
    </div>
    <div id="feast" class="feast"></div>
    <div id="socialmedia" class=""></div>
    <div id="contact" class=""></div>
</main>
<footer>

</footer>
</body>
</html>