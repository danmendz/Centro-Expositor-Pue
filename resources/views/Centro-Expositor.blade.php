<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Centro Expositor</title>
        <!-- Styles -->
        <link href="{{asset('estilos.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="{{ asset('js/clima.js') }}"></script>
        <script src="{{ asset('js/maps.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

            <section id="inicio"></section>
            <section id="hero" class="d-flex align-items-center">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="wrapper1">
                      <div class="typing-demo">
                        <h1>Centro Expositor.</h1>
                      </div>
                    </div>
                    <h2>
                      ¡Ven y disfruta de la Puebla!
                    </h2>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="images/logoCentro-bg.png" class="img-fluid animated" alt="">
                  </div>
                </div>
                <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                  <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                      <i class="bi bi-info-circle"></i>
                      <h3><a href="#sobre">Sobre nosotros</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                      <i class="bi bi-telephone"></i>
                      <h3><a href="#contacto">Contáctenos</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                      <i class="bi bi-houses"></i>
                      <h3><a href="#salones">Salones</a></h3>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                      <i class="bi bi-calendar4-week"></i>
                      <h3><a href="#eventos">Cartelera</a></h3>
                    </div>
                  </div>
                  <!-- <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                      <i class="bi bi-journal-text"></i>
                      <h3><a href="login/sesion.php">Reservar</a></h3>
                    </div>
                  </div> -->
                </div>
              </div>
            </section>
          
            <section>
              <div style="height: 50px; width: 100%;background-color: white;">
              </div>
            </section>

            <header style="background-color: black; " class="fixed-top" id="menu-principal">
            <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contáctenos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#salones">Salones</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#eventos">Cartelera</a>
                        </li>
                    </ul>
                </div>
                @if (Route::has('login'))
                        @auth
                            @if(auth()->user()->role === 1)
                                <a href="{{ route('admin.index') }}" class="get-started-btn">Mi panel</a>
                            @elseif(auth()->user()->role === 2)
                                <a href="{{ route('cliente.index') }}" class="get-started-btn">Mi panel</a>
                            @elseif(auth()->user()->role === 3)
                                <a href="{{ route('usuario.index') }}" class="get-started-btn">Mi panel</a>
                            @else
                                <a href="{{ route('page-index') }}" class="get-started-btn">Mi panel</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="get-started-btn">
                                Iniciar sesión
                            </a>
                            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="get-started-btn">
                                    Registrar
                                </a>
                            @endif                    
                        @endauth
                @endif
            </nav>
            </header>
          
            <section id="services" class="services section-bg">
              <div class="container" data-aos="fade-up">
                <div class="section-title1">
                  <h2></h2>
                  <p>
                    Somos un equipo de profesionales enfocados en el turismo de reuniones y espectáculos. Contamos con la mejor infraestructura y servicios para hacer de tu evento la mejor experiencia.
                  </p>
                </div>
              </div>
            </section>
          
            
            <section>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/Centro-Expositor-P.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/centroe.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/Centro-Expositor.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </button>
              </div>
            </section>
          
            <section>
              <div style="height: 100px; width: 100%;background-color: white;">
              </div>
            </section>
          
            
            <section id="sobre">
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>Sobre</h2>
                  <p>Nosotros</p>
                </div>
              </div>
            </section>
            <section id="about" class="about">
              <div class="container" data-aos="fade-up">
          
                <div class="row">
                  <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="images/event.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Visión.</h3>
                    <p>
                      “Ser un Organismo modelo a nivel nacional, líder en la
                      generación y atracción de eventos del segmento de turismo de
                      reuniones, que genera cambios positivos en la comunidad
                      mediante una cultura de responsabilidad social y desarrollo
                      sustentable.”
                    </p>
                    <h3>Misión.</h3>
                    <p>
                      “Somos un equipo de profesionales enfocados en el turismo
                      de reuniones y en la conservación, administración y
                      comercialización de áreas verdes que contribuyen al desarrollo
                      sustentable del Estado de Puebla, mejorando la calidad de
                      vida de la Sociedad Poblana.”
                    </p>
                  </div>
                </div>
          
              </div>
            </section>
          
            <section>
              <div style="height: 50px; width: 100%;background-color: white;">
              </div>
            </section>
          
            
            <section id="features" class="features">
              <div class="container" data-aos="fade-up">
          
                <div class="row">
                  <div class="image col-lg-6" style='background-image: url("images/valores.jpg");' data-aos="fade-right"></div>
                  <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <h3 style="font-weight: 700;
                    font-size: 28px;">
                    Valores.
                    </h3>
                    <div class="icon-box mt-5 mt-lg-0">
                      <i class="bi bi-check"></i>
                      <h4>Responsabilidad</h4>
                      <p>
                        Buscamos cumplir con los objetivos establecidos en tiempo y forma sin perder la calidad que nos distingue.
                      </p>
                    </div>
                    <div class="icon-box mt-5">
                      <i class="bi bi-check"></i>
                      <h4>Transparencia</h4>
                      <p>
                        Buscamos ser claros sin ocultar información importante que perjudique la confianza de nuestros clientes.
                      </p>
                    </div>
                    <div class="icon-box mt-5">
                      <i class="bi bi-check"></i>
                      <h4>Dedicación</h4>
                      <p>
                        Atención y esfuerzo para ofrecer la mejor calidad y experiencia al cliente.
                      </p>
                    </div>
                    <div class="icon-box mt-5">
                      <i class="bi bi-check"></i>
                      <h4>Trabajo en equipo</h4>
                      <p>
                        Sumamos el esfuerzo del trabajo individual para poder aprovechar los talentos y habilidades de cada integrante de nuestra organización en la elaboración de una meta colectiva.
                      </p>
                    </div>
                  </div>
                </div>
          
              </div>
            </section>
          
            <section>
              <div style="height: 100px; width: 100%;background-color: white;">
              </div>
            </section>
          
            
            <section  id="salones">
              <div class="container" data-aos="fade-up">
                <div class="section-title">
                  <h2>Salones</h2>
                  <p>Nuestros salones</p>
                </div>
              </div>
            </section>
          
            <section>
            <div class="wrapper">
          
            <div class="card1">
              <div class="poster"><img src="images/salon1.jpg" alt="Location Unknown"></div>
              <div class="details">
                <h1>Salón Puebla 1</h1>
                <h2>Capacidad: 14,000 personas</h2>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span>4.5/5</span>
                </div>
                <div class="tags">
                  <span class="tag">100 m</span>
                  <span class="tag">100 m</span>
                  <span class="tag">10,000 m2</span>
                </div>
                <p class="desc">
                  Altura libre de 15 m.<br>
                  El piso soporta 1 ton/m2.<br>
                  Carga de 3o toneladas por trabe.<br>
                  Lobby 1,280 m2.<br>
                  Servicio de agua potable, drenaje, y aire acondicionado.
                </p>
              </div>
            </div>
            <div class="card1">
              <div class="poster"><img src="images/salon2.jpg" alt="Location Unknown"></div>
              <div class="details">
                <h1>Salón Puebla 2</h1>
                <h2>Capacidad: 20,000 personas</h2>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <span>4/5</span>
                </div>
                <div class="tags">
                  <span class="tag">100 m</span>
                  <span class="tag">250 m</span>
                  <span class="tag">15,000 m2</span>
                </div>
                <p class="desc">
                  Altura libre de 15 m.<br>
                  El piso soporta 5 ton/m2.<br>
                  Carga de 3o toneladas por trabe.<br>
                  435 cajas de servicio de piso.<br>
                  Servicio de agua potable, drenaje, y aire acondicionado.
                </p>
              </div>
            </div>
          
            <div class="card1">
              <div class="poster"><img src="images/salon3.jpg" alt="Location Unknown"></div>
              <div class="details">
                <h1>Salón Puebla 3</h1>
                <h2>Capacidad: 6,500 personas</h2>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <span>4/5</span>
                </div>
                <div class="tags">
                  <span class="tag">100 m</span>
                  <span class="tag">50 m</span>
                  <span class="tag">5,000 m2</span>
                </div>
                <p class="desc">
                  Altura libre de 15 m.<br>
                  El piso soporta 5 ton/m2.<br>
                  Carga de 3o toneladas por trabe.<br>
                  Andenes de carga y descarga.<br>
                  Servicio de agua potable, drenaje, y aire acondicionado.
                </p>
              </div>
            </div>
          
            <div class="card1">
              <div class="poster"><img src="images/salonfuertedeguadalupe.jpg" alt="Location Unknown"></div>
              <div class="details">
                <h1>Salón Fuerte de Guadalupe</h1>
                <h2>Capacidad: 2,500 personas</h2>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span>4.5/5</span>
                </div>
                <div class="tags">
                  <span class="tag">55 m</span>
                  <span class="tag">43 m</span>
                  <span class="tag">2,365 m2</span>
                </div>
                <p class="desc">
                  7 metros de altura.<br>
                  Cocina equipada para 3,500 comensales.<br>
                  Aire aoondicionado.<br>
                  Piso alfombrado.<br>
                  Área de registro.<br>
                  Sanitarios hombres y mujeres.<br>
                  Lobby 504 m2
                </p>
              </div>
            </div>
          
            <div class="card1">
              <div class="poster"><img src="images/salonanalco.jpg" alt="Location Unknown"></div>
              <div class="details">
                <h1>Salón Analco</h1>
                <h2>Capacidad: 1,500 personas</h2>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <span>4/5</span>
                </div>
                <div class="tags">
                  <span class="tag">40.61 m</span>
                  <span class="tag">31.05 m</span>
                  <span class="tag">1,260.94 m2</span>
                </div>
                <p class="desc">
                  Altura libre de 6.7 m.<br>
                  Libre de columnas.<br>
                  2 puertas de acceso.<br>
                  3 accesos de servicio.<br>
                  Iluminacion directa e indirecta.<br>
                  26 registros eléctricos.<br>
                  Instalaciones eléctricas ocultas.<br>
                  Montacargas.<br>
                  Soporte de 700 kg de carga estática por modulo de piso falso.
                </p>
              </div>
            </div>
          
            <div class="card1">
              <div class="poster"><img src="images/salonfuertedeloreto.jpg" alt="Location Unknown"></div>
              <div class="details">
                <h1>Salón Fuerte de Loreto</h1>
                <h2>Capacidad: 3,100 personas</h2>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span>4.5/5</span>
                </div>
                <div class="tags">
                  <span class="tag">65 m</span>
                  <span class="tag">43 m</span>
                  <span class="tag">2,795 m2</span>
                </div>
                <p class="desc">
                  7 metros de altura.<br>
                  Cocina equipada para 3,500 comensales.<br>
                  Aire aoondicionado.<br>
                  Piso alfombrado.<br>
                  Área de registro.<br>
                  Sanitarios hombres y mujeres.<br>
                  Lobby 420 m2
                </p>
              </div>
            </div>
          
          </div>
          </section>
          
            <section>
              <div style="height: 100px; width: 100%;background-color: white;">
              </div>
            </section>
          
            
              <section id="eventos" class="services">
                <div class="container" data-aos="fade-up">
          
                  <div class="section-title">
                    <h2>Eventos</h2>
                    <p>Cartelera</p>
                  </div>
          
                </div>
              </section>
          
              <script>
              var images = [
                  "images/fiestas/balloons.jpg",
                  "images/fiestas/concert.jpg",
                  "images/fiestas/cuetes.jpg",
                  "images/fiestas/party.jpg"
              ];
          
              function getRandomNumber(index, max) {
                  var seed = index + 1;
                  return (seed * 137 + 101) % max;
              }
          
              function showRandomImage() {
                  var imgElements = document.querySelectorAll(".randomImage");
          
                  imgElements.forEach(function(imgElement, index) {
                      var randomIndex = getRandomNumber(index, images.length);
                      var randomImageSrc = images[randomIndex];
                      imgElement.src = randomImageSrc;
                  });
              }
          
              showRandomImage();
            </script>
          
             <section>
              <div style="height: 100px; width: 100%;background-color: white;">
              </div>
             </section>
          
            
            <section id="contacto" class="contact">
              <div class="container" data-aos="fade-up">
          
                <div class="section-title">
                  <h2>Contacto</h2>
                  <p>Contáctenos</p>
                </div>
          
                <div class="row mt-5">
          
                  <div class="col-lg-4">
                    <div class="info">
                      <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Dirección:</h4>
                        <p>Boulevard Héroes del 5 de Mayo #402
                        Paseo de San Francisco, Colonia Centro Histórico
                        C.P. 72000, Puebla, Pue. México.</p>
                      </div>
          
                      <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>ventas@expo-puebla.com</p>
                      </div>
          
                      <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telefono:</h4>
                        <p>+52 (222) 122 11 00 Ext. 1002</p>
                      </div>
          
                    </div>
          
                  </div>
          
                  <div class="col-lg-8 mt-5 mt-lg-0">
                    <div id="map" style="height: 300px; width: 100%;"></div>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdBS00JY-BYj2OyaUkxH1pDjDGY_qGmCY&callback=initMap&v=weekly" defer>
                    </script>
                  </div>
          
                </div>
          
              </div>
            </section>
          
            <section>
              <div style="height: 100px; width: 100%;background-color: white;">
              </div>
            </section>
          
            <style type="text/css">
            .contenedor-inferior-derecha {
              position: fixed;
              bottom: 2vh;
              right: 2vh;
              background-color: #232427;
              color: #fff;
              padding: 2vh;
              border-radius: 5px;
              box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
              width: 20vw;
              height: 18vh;
              max-width: 300px;
              min-width: 100px;
              font-size: 2vmin;
              opacity: 0.7;
              display: table-column;
            }
          </style>
          
            <div class="contenedor-inferior-derecha" id="resultado">
            </div>
            
            <footer id="footer">
              <div class="footer-top">
                <div class="container">
                  <div class="row">
          
                    <div class="col-lg-3 col-md-6">
                      <div class="footer-info">
                        <h3>CEP<span>.</span></h3>
                        <p>
                          Zona de los Fuertes<br>
                          Cívica 5 de Mayo<br>
                          Puebla, México<br><br>
                          <strong>CP:</strong> 72260 <br>
                          <strong>Teléfono:</strong> +1 5589 55488 55<br>
                          <strong>Correo:</strong> ventas@expo-puebla.com<br>
                        </p>
                        <div class="social-links mt-3">
          
                          <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/CentroExpositorPuebla?mibextid=ZbWKwL" role="button"><i class="bi bi-facebook"></i></a>
          
                          <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="https://twitter.com/CExpositorPue?t=cUaKnJwq4ZT2KK_pj4qSpg&s=09" role="button" ><i class="bi bi-twitter"></i></a>
          
                          <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="https://instagram.com/cexpositorpue?igshid=NTc4MTIwNjQ2YQ==" role="button" ><i class="bi bi-instagram"></i></a>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-lg-2 col-md-6 footer-links">
                      <h4>Enlaces útiles</h4>
                      <ul>
                        <li><i class="bi bi-chevron-right"></i><a href="#">Política de privacidad</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="#">Protección de datos personales</a></li>
                      </ul>
                    </div>
          
                    <div class="col-lg-3 col-md-6">
                        <img src="{{ asset('images/logoCentro-bg.png') }}" class="rounded mx-auto d-block">
                    </div>
          
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                      <h4>Unete a nosotros.</h4>
                      <p>
                      Suscribete para poder reservar el evento de tus sueños.
                      </p>
                    </div>
          
                  </div>
                </div>
              </div>
          
              <div class="container">
                <div class="copyright">
                  &copy; Copyright <strong><span style="color: #FFC451;">RoyalByte</span></strong>. Todos los derechos reservados.
                </div>
              </div>
          
            </footer>
    </body>
</html>