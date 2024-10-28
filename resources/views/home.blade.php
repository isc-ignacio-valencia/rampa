<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rampa</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
                <div class="rrss w-3/6 justify-between align-middle">
                    <a href=""><img class="inline-block mx-1" src="{{ asset('img/facebook.svg') }}" alt=""></a>
                    <a href=""><img class="inline-block mx-1" src="{{ asset('img/instagram.svg') }}" alt=""></a>
                    <a href=""><img class="inline-block mx-1" src="{{ asset('img/twitter.svg') }}" alt=""></a>
                    <a href=""><img class="inline-block mx-1" src="{{ asset('img/tiktok.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div id="banner" class="">
            <img class="" src="{{ asset('img/banner.jpg') }}" alt="">
    </div>
    <div id="wellcome" class="container mx-auto flex p-6">
        <div class="w-1/4 px-6 my-auto">
            <h1 class="uppercase text-4xl scale-y- mb-2 font-din-next">Bienvenido a</h1>
            <img class="max-w-40" src="{{ asset('img/logo.svg') }}" alt="">
        </div>
        <div class="w-3/4 px-6 text-sm">
            <p class="text-xs uppercase underline decoration-2 underline-offset-4 decoration-gray-400 py-2 font-din-next">Guadalajara, Jalisco, México</p>
            <p class="text-xs text-green py-2">DÉ A SUS INVITADOS UNA RAZÓN PARA ASOMBRARSE</p>
            <p class="text-xs py-2">Desde lujosas bodas ambientadas con caminos llenos de flores de los lugares históricos de Guadalajara y sus alrededores, hasta elaborados eventos corporativos que fomentan las conexiones de la compañía, RAMPA IIII tiene el don de transformar las celebraciones significativas en experiencias inolvidables.</p>
        </div>
    </div>
    <div id="services" class="bg-green-light p-6">
        <div class="mx-auto container p-3">
            <h1 class="text-5xl">NUESTROS SERVICIOS</h1>
            <p>Pequeños detalles que hacen la diferencia</p>
        </div>
        <div class="mx-auto container p-3 flex">
            {{-- Swiper --}}
            <div class="w-full relative flex items-center">
                <div class="w-3/5 mx-0 swiper default-carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/services-slide-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/services-slide-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/services-slide-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-8 lg:justify-start justify-center">
                        <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center !w-12 !h-12 transition-all !top-2/4 !-translate-y-8 !left-0 !text-gray-400 hover:!text-white" data-carousel-prev></button>
                        <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center !w-12 !h-12 transition-all !top-2/4 !-translate-y-8  !right-0 !text-gray-400 hover:!text-white" data-carousel-next></button>
                    </div>
                </div>
                <div class="w-2/5">
                    <div class="bg-white px-12 p-8">
                        <h1 class="py-1">Experiencias</h1>
                        <h1 class="py-1 text-green">Diseño de Eventos</h1>
                        <p class="py-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="py-1 text-center"><a href="">VER MÁS</a></p>
                    </div>
                    <div class="py-8 align-middle swiper-pagination relative"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="feast" class="p-6">
        <div class="mx-auto container p-3">
            <h1 class="text-5xl">BANQUETE</h1>
            <p>Decoración que resaltan los platillos que enamoran el alma</p>
        </div>
        <div class="mx-auto container p-3 flex">
        {{-- Swiper --}}
            <div class="w-full relative">
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper pb-1">
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/feast-slide-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/feast-slide-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/feast-slide-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('img/feast-slide-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-8 lg:justify-start justify-center">
                        <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center !w-12 !h-12 transition-all !-translate-y-8 !left-0 !text-gray-400 hover:!text-white" data-carousel-prev></button>
                        <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center !w-12 !h-12 transition-all !-translate-y-8  !right-0 !text-gray-400 hover:!text-white" data-carousel-next></button>
                    </div>
                    <p class="py-1 text-center"><a href="">VER MÁS</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="socialmedia" class="bg-green-light p-6">
        <div class="mx-auto container p-3">
            <h1 class="text-5xl">SOCIAL MEDIA</h1>
            <p>Donde los recuerdos quedan plasmados por siempre</p>
        </div>
        <div class="mx-auto container p-3 flex">
            {{-- Swiper --}}
                <div class="w-full relative">
                    <div class="swiper multiple-slide-carousel swiper-container relative">
                        <div class="swiper-wrapper pb-1">
                            <div class="swiper-slide">
                                <img class="insta-icon" src="{{ asset('img/instagram.svg') }}" alt="">
                                <div class="flex justify-center items-center">
                                    <a href="">
                                        <img src="{{ asset('img/socialmedia-slide-1.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img class="insta-icon" src="{{ asset('img/instagram.svg') }}" alt="">
                                <div class="flex justify-center items-center">
                                    <a href="">
                                    <img src="{{ asset('img/socialmedia-slide-2.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img class="insta-icon" src="{{ asset('img/instagram.svg') }}" alt="">
                                <div class="flex justify-center items-center">
                                    <a href="">
                                    <img src="{{ asset('img/socialmedia-slide-3.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img class="insta-icon" src="{{ asset('img/instagram.svg') }}" alt="">
                                <div class="flex justify-center items-center">
                                    <a href="">
                                    <img src="{{ asset('img/socialmedia-slide-4.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img class="insta-icon" src="{{ asset('img/instagram.svg') }}" alt="">
                                <div class="flex justify-center items-center">
                                    <a href="">
                                    <img src="{{ asset('img/socialmedia-slide-5.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-8 lg:justify-start justify-center">
                            <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center !w-12 !h-12 transition-all !-translate-y-8 !left-0 !text-gray-400 hover:!text-white" data-carousel-prev></button>
                            <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center !w-12 !h-12 transition-all !-translate-y-8  !right-0 !text-gray-400 hover:!text-white" data-carousel-next></button>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
    </div>
    <div id="contact" class="p-6">
        <div class="mx-auto container p-3">
            <h1 class="text-5xl">SOLICITAR INFORMACIÓN</h1>
            {{-- <h2 class="py-2">LUNES 28 DE OCTUBRE 2024</h2> --}}
        </div>
        <div class="mx-auto container p-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-white bg-red-600 text-center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @isset($successMessage)
                <span class="bg-green">{{$successMessage}}</span>
            @endisset
            <form id="contactForm" action="/#contact" method="POST">
                @csrf
                <div class=" w-full">
                    <div class="mt-8 w-full flex">
                        <div class=" p-3 w-2/3">
                            <div class="date-form">
                            <span class="text-green font-din-next font-black italic text-5xl">2024</span>
                            <h2 class="pb-6 mb-6">LUNES 28 DE OCTUBRE</h2>
                            </div>
                            <label class="flex p-3 mt-6 ">
                            <span class="ps-3 w-1/2 text-end">NOMBRE COMPLETO</span><span class="text-green pe-3">*</span>
                            <input
                                name="fullName"
                                type="text"
                                
                                class="w-1/2 mt-0 flex border-0 border-b-2 border-green-light py-0 focus:border-green focus:ring-0"
                                placeholder=""
                            />
                            </label>
                            <label class="flex p-3">
                            <span class="ps-3 w-1/2 text-end">CORREO ELECTRÓNICO</span><span class="text-green pe-3">*</span>
                            <input
                                name="email"
                                type="email"
                                
                                class="mt-0 flex w-1/2 border-0 border-b-2 border-green-light py-0 focus:border-green focus:ring-0"
                            />
                            </label>
                            <label class="flex p-3">
                                <span class="px-3 w-1/2 text-end">TIPO DE EVENTO</span>
                                <select
                                name="eventKind"
                                class="mt-0 flex w-1/2 border-0 border-b-2 border-green-light py-0 focus:border-green focus:ring-0"
                                >
                                <option>Boda</option>
                                <option>XV Años</option>
                                <option>Aniversario</option>
                                <option>Corporativo</option>
                                <option>Otro</option>
                                </select>
                            </label>
                            <label class="flex p-3">
                            <span class="px-3 w-1/2 text-end">FECHA DE EVENTO ESTIMADO</span>
                            <input
                                name="day"
                                type="text"
                                class="mt-0 flex w-1/2 border-0 border-b-2 border-green-light py-0 focus:border-green focus:ring-0"
                            />
                            </label>
                            <label class="flex p-3">
                                <span class="px-3 w-1/2 text-end text-green text-xs">*CAMPOS OBLIGATORIOS</span>
                                </label>
                        </div>
                        <div class=" w-1/3 p-3">
                            <label class="flex">
                            <textarea
                                name="message"
                                
                                class="mt-0 flex border-2 border-green-light rounded-md focus:border-green focus:ring-0"
                                rows="12"
                                placeholder="Mensaje"
                            ></textarea>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif --}}
                <div class="justify-center flex">
                    <input
                        type="submit"
                        value="ENVIAR"
                        class="justify-center bg-green py-4 rounded-full text-white text-2xl font-light w-1/3 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
</main>
<footer class="flex">
    <div class="w-2/5 container">
        <div class="bg-green-light pl-36 py-20">
            <a class="flecha font-light w-full flex py-2 " href=""><span class="my-auto text-xl">VER<br>MAPA DE SITIO</span> <img class="w-12 my-auto" src="{{ asset('img/flecha.png') }}" alt=""></a>
        </div>
        <div class="left-bottom flex px-20 py-6 justify-between align-middle">
            <a class="hover:bg-green p-2 rounded-full" href=""><img class="inline-block mx-1" src="{{ asset('img/facebook.svg') }}" alt=""></a>
            <a class="hover:bg-green p-2 rounded-full" href=""><img class="inline-block mx-1" src="{{ asset('img/instagram.svg') }}" alt=""></a>
            <a class="hover:bg-green p-2 rounded-full" href=""><img class="inline-block mx-1" src="{{ asset('img/twitter.svg') }}" alt=""></a>
            <a class="hover:bg-green p-2 rounded-full" href=""><img class="inline-block mx-1" src="{{ asset('img/tiktok.svg') }}" alt=""></a>
        </div>
    </div>
    <div class="w-3/5 bg-green-light ml-20 flex py-12 px-20 align-middle">
        <div class="w-1/2 align-middle">
            <div class="py-4">
                <img class="w-3/4" src="{{ asset('img/logo.svg') }}" alt="">
            </div>
            <div class="py-3 border-b border-solid border-1 border-green">
                <p>PASEO DEL PRADO 387,</p>
                <p>LOMAS DEL VALLE, 45129</p>
            </div>
            <div class="py-3 border-b border-solid border-1 border-green flex">
                <div class="border border-solid border-1 border-gray-500 rounded-full p-2">
                <img class="w-4 " src="{{ asset('img/telephone.svg') }}" alt="">
                </div>
                <span class="text-2xl">+52 33 364 83 636</span>
            </div>
            <div class="py-3">
                <a href="">WWW.RAMPA4@OMNILIFE.COM</a>
            </div>
        </div>
        <div class="right flex w-1/2 my-auto ">
            <a class="flecha text-xs font-light w-full flex py-2 pl-4" href=""><span class="my-auto">VER MAPA</span> <img class="w-12 my-auto" src="{{ asset('img/flecha.png') }}" alt=""></a>
        </div>

    </div>
</footer>
</body>

<script type="text/javascript">
    $('#contactForm').submit(function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            console.log('si entra');
            
            grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {action: 'subscribe_newsletter'}).then(function(token) {
                $('#contactForm').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                $('#contactForm').unbind('submit').submit();
            });;
        });
    });
</script>
<script>
    var swiper = new Swiper("#services .default-carousel", {
    loop: true,
    pagination: {
    el: "#services .swiper-pagination",
    clickable: true,
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
    });
</script>
<script>
    var swiper = new Swiper("#feast .multiple-slide-carousel", {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 20,
      navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
      },
      breakpoints: {
       1920: {
           slidesPerView: 3,
           spaceBetween: 30
       },
       1028: {
           slidesPerView: 3,
           spaceBetween: 30
       },
       990: {
           slidesPerView: 2,
           spaceBetween: 0
       }
     }
    });
   </script>
   <script>
    var swiper = new Swiper("#socialmedia .multiple-slide-carousel", {
      loop: true,
      pagination: {
      el: "#socialmedia .swiper-pagination",
      clickable: true,
      },
      slidesPerView: 3,
      spaceBetween: 20,
      navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
      },
      breakpoints: {
       1920: {
           slidesPerView: 4,
           spaceBetween: 30
       },
       1028: {
           slidesPerView: 4,
           spaceBetween: 30
       },
       990: {
           slidesPerView: 3,
           spaceBetween: 0
       }
     }
    });
   </script>
</html>