<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SystemPos</title>
    <link rel="stylesheet" href="CSS/desktop.css">
    <link rel="stylesheet" href="CSS/tablet.css">
    <link rel="stylesheet" href="CSS/mobile.css">
    <link rel="stylesheet" href="CSS/laptop.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e9c2883c48.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="IMG/logo.jpeg">
</head>
<body>
    <div class="loader">
        <img src="IMG/loader.gif" alt="">
    </div>
    <header>
        <nav class="nav-tag">
            <div class="nav-logo">
                <img class="logo" src="IMG/logo.jpeg" alt="Logo"></li>
            </div>
            <div class="container-list">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Nosotros">Nosotros <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Mision</a></li>
                            <li><a href="#">Vision</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="php/iniciarSesion.php">Iniciar <span></span> Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="hamburger">
               <span class="bar"></span> 
               <span class="bar"></span> 
               <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section class="section-principal">
            <section class="welcome-home" data-aos="zoom-in" data-aos-duration="2000">
                <section class="description-home">
                    <div class="container-description">
                        <h1>¡Somos SystemPos! </h1>
                        <p>Nuestra función es conectarte a ti, con el empleo de tus sueños, con ese trabajo que tanto estas buscando, ampliar la posibilidad de que tu hoja de vida sea vista por las empresas de la ciudad.<br/>¿Que estas esperando? </p>
                    </div>
                    <div class="container-button">
                    <button>
                        <a href="#Nosotros">Ver más</a>
                    </button>
                    </div>
                    
                </section>
                <section class="image-home">
                    <figcaption class="banner_img">
                        <img src="IMG/undraw_programming_re_kg9v.svg" alt="">
                    </figcaption>
                </section>
            </section>
            <section class="system-areas" data-aos="zoom-in-up">
                <div class="description-about">
                    <h4>Areas de la programacion</h4>
                    <p>¿Te encuentras en alguna de estas areas?</p>
                    <p>Si es asi, ¿que esperas para registrarte y empezar a postularte?</p>
                </div>
                <div class="slider">
                    <div class="slide active">
                        <img src="IMG/undraw_security_re_a2rk.svg" alt="">
                        <div class="info">
                            <h5>Seguridad Informatica</h5>
                            <p>
                                Resultado de imagen para breve definicion de seguridad informatica
                                La seguridad informática —también llamada ciberseguridad—se refiere a la protección de la información y, especialmente, al procesamiento que se hace de la misma, con el objetivo de evitar la manipulación de datos y procesos por personas no autorizadas.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="IMG/desarrollomovil.svg" alt="">
                        <div class="info">
                            <h5>Desarrolo Movil</h5>
                            <p>El desarrollo de aplicaciones móviles es el conjunto de procesos y procedimientos involucrados en la escritura de software para dispositivos informáticos pequeños e inalámbricos, como teléfonos inteligentes y otros dispositivos portátiles.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="IMG/desarrolloweb.svg""> 
                       <div class=" info">
                        <h5>Desarrollo Web</h5>
                        <p>Por desarrollo web entendemos todas las disciplinas involucradas en la creación de sitios web, o aplicaciones que se ejecutan en la web y a las que se accede mediante el navegador.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="IMG/machinelearning.svg" alt="">
                    <div class="info">
                        <h5>Machine Learning</h5>
                        <p>El Machine Learning es una disciplina del campo de la Inteligencia Artificial que, a través de algoritmos, dota a los ordenadores de la capacidad de identificar patrones en datos masivos y elaborar predicciones (análisis predictivo).</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="IMG/sistemasoperativos.svg" alt="">
                    <div class="info">
                        <h5>Desarrollador de Sistemas Operativos</h5>
                        <p>Un sistema operativo es un conjunto de programas que permite manejar la memoria, disco, medios de almacenamiento de información y los diferentes periféricos o recursos de nuestra computadora, como son el teclado, el mouse, la impresora, la placa de red, entre otros.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="IMG/undraw_gaming_re_cma2.svg" alt="">
                    <div class="info">
                        <h5>Desarrollador de VideoJuegos</h5>
                        <p>Un desarrollador de videojuegos se encarga de realizar las actividades de programación necesarias para la conceptualización, prototipado y prueba de un videojuego. Para lograrlo utiliza motores, librerías, recursos y lenguajes de programación específicos en diferentes plataformas.</p>
                    </div>
                </div>
                <div class="navigation">
                    <i class="fas fa-chevron-circle-left prev-btn"></i>
                    <i class="fas fa-chevron-circle-right next-btn"></i>
                </div>
                <div class="navigation-visibility">
                    <div class="slide-icon active"></div>
                    <div class="slide-icon"></div>
                    <div class="slide-icon"></div>
                    <div class="slide-icon"></div>
                    <div class="slide-icon"></div>
                    <div class="slide-icon"></div>
                </div>
                </div>

            </section>
            <section id="Nosotros" class="services" data-aos="slide-up" data-aos-duration="2000">
                <div class="services-poster">
                    <h3>Nuestros Servicios</h3>
                    <p>Innovando y siempre mejorando para ti</p>
                </div>
                <div class="services-container">
                    <div class="list-services" data-aos="slide-up" data-aos-duration="3000">
                        <img src="IMG/img1.svg" alt="">
                        <h4>Creativos y asombrosos</h4>
                        <p>Personas ingeniosas a diario dando ideas creativas para mejorar nuestro servicio.</p>
                    </div>
                    <div class="list-services" data-aos="slide-up" data-aos-duration="3000">
                        <img src="IMG/img2.svg" alt="">
                        <h4>A la vanguardia con la tecnologia</h4>
                        <p>Estamos constantemente actualizandonos para brindarte las mejores soluciones con las herramientas tecnologicas de la actualidad.</p>
                    </div>
                    <div class="list-services" data-aos="slide-up" data-aos-duration="3000">
                        <img src="IMG/img3.svg" alt="">
                        <h4>Calidad y Servicio</h4>
                        <p>Sabemos lo que necesitas y estamos dispuestos a ayudarte y darte las mejores soluciones posibles. </p>
                    </div>
                </div>
            </section>
            <section class="team-developer" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="team-title">Conoce a nuestro Grupo de desarrolladores</h2>
                <p class="team-description">Personas inteligentes, ingeniosas y con gran empeño en sus distintas labores.</p>
                <p class="team-description">Gracias a su trabajo este proyecto es posible</p>
                <section class="card">
                    <div class="card-people" data-aos="fade-left" data-aos-duration="2000">
                        <figcaption class="image-container">
                            <img src="IMG/dev1.jpg" alt="Imagen correspondiente al desarrollador">
                        </figcaption>
                        <div class="card-description">
                            <h3>Nicole Miranda</h3>
                            <p>Diseñadora web UI/UX</p>
                        </div>
                    </div>
                    <div class="card-people" data-aos="fade-left" data-aos-duration="2000">
                        <figcaption class="image-container">
                            <img src="IMG/dev2.jpg" alt="Imagen correspondiente al desarrollador">
                        </figcaption>
                        <div class="card-description">
                            <h3>Sebastian Ojeda</h3>
                            <p>Backend developer</p>
                        </div>
                    </div>
                    <div class="card-people" data-aos="fade-right" data-aos-duration="2000">
                        <figcaption class="image-container">
                            <img src="IMG/dev3.jpg" alt="Imagen correspondiente al desarrollador">
                        </figcaption>
                        <div class="card-description">
                            <h3>Carlos Henriquez</h3>
                            <p>Scrum Master</p>

                        </div>
                    </div>
                    <div class="card-people" data-aos="fade-right" data-aos-duration="2000">
                        <figcaption class="image-container">
                            <img src="IMG/dev4.jpg" alt="Imagen correspondiente al desarrollador">
                        </figcaption>
                        <div class="card-description">
                            <h3>Yulieth Cardona</h3>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </section>
            </section>
            <section class="testimonials">
                <section class="testimonials-description">
                    <p class="little-phrase">Testimonios</p>
                    <h4>Como SystemPos ha cambiado la vida de estas personas</h4>
                    <p>Nos obsesionamos por el exito de nuestros usuarios. Su testimonio es fuente de inspiracion para toda nuestra comunidad.</p>
                </section>
                <section class="hero">
                    <h4>Más recientes</h4>
                    <div class="review-box">
                        <div id="slide">
                            <div class="card-2">
                                <div class="profile">
                                    <img src="IMG/pic1.jpg" alt="">
                                    <div>
                                    <h5>Sofia Wong</h5>
                                    <p>Diseñador Web</p>
                                    </div>                                    
                                </div>
                                <p>"Celebro SystemPos, las nuevas formas de conseguir empleo, desde que aplique recibi ofertas de empresas interesadas en mis servicios, despues de varios procesos ya estoy trabajando para una empresa local, gracias SystemPos, estoy muy feliz"</p>
                            </div>
                            <div class="card-2">
                                <div class="profile">
                                    <img src="IMG/pic2.jpg" alt="">
                                    <div>
                                    <h5>Francisco Romero</h5>
                                    <p>Fullstack Developer JavaScript</p>
                                    </div>                                    
                                </div>
                                <p>"Llevaba mas de 2 años sin encontrar empleo, gracias a haber postulado en SystemPos empece a laborar en el puesto que tanto deseaba".</p>
                            </div>
                            <div class="card-2">
                                <div class="profile">
                                    <img src="IMG/pic3.jpg" alt="">
                                    <div>
                                    <h5>Scarlet Morales</h5>
                                    <p>Backend developer</p>
                                    </div>                                    
                                </div>
                                <p>"Sali de la universidad y pensé que iba a pasar mucho tiempo para que pudiese encontrar un empleo, un amigo me platico sobre esta plataforma web y de veras funciono, ingrese mis datos y postule y hoy en dia estoy trabajando con una empresa extranjera con sucursal en Cartagena".</p>
                            </div>
                            <div class="card-2">
                                <div class="profile">
                                    <img src="IMG/pic4.jpg" alt="">
                                    <div>
                                    <h5>Rodrigo Mata</h5>
                                    <p>Diseñador Web</p>
                                    </div>                                    
                                </div>
                                <p>"Tengo mas de 5 años de experiencia en el mundo de la tecnologia pero muchas veces mis skills no eran suficientes para encontrar un trabajo, gracias a SystemPos pude mostrarle al mundo de lo que soy capaz y aportar mi experiencia a las empresas". </p>
                            </div>
                        </div>
                        <div class="sidebar">
                            <img src="IMG/up-arrow.png" alt="" id="upArrow">
                            <img src="IMG//down-arrow.png" alt="" id="downArrow">
                        </div>
                    </div>
                </section>

            </section>
        </section>

    </main>
    <footer id="Contacto" data-aos="flip-right">
        <section class="container-footer">
            <section class="container-information">
                <section class="part-two" data-aos="zoom-in-up">
                    <h6>Sobre Nosotros</h6>
                    <p>Empresas esperando encontrar personas como tu que estas leyendo esto, no pierdas la oportunidad que te brinda esta gran comunidad.</p>
                    <p>Inscribete ya y no tardaras en ver los resultados.Todo queda en tus manos</p>
                </section>
                <section class="part-three" data-aos="zoom-in-up">
                    <h6>Redes Sociales</h6>
                    <div class="social-media">
                        <div>
                            <i class="fa-brands fa-instagram"></i><br>
                            <i class="fa-brands fa-facebook-f"></i> <br>
                            <i class="fa-brands fa-github"></i><br>
                        </div>
                        <div class="follow-me">
                            <p>Siguenos en Insagram</p>
                            <p>Siguenos en Facebook</p>
                            <p>Siguenos en Github</p>
                        </div>
                    </div>
                </section>
                <section class="part-four" data-aos="zoom-in-up">
                    <h6>Informacion de Contacto</h6>
                    <div class="contact-media">
                        <div class="contact-icon">
                            <i class="fa-solid fa-house"></i><br>
                            <i class="fa-solid fa-mobile-screen"></i><br>
                            <i class="fa-regular fa-envelope"></i><br>
                        </div>
                        <div class="contact-description" data-aos="zoom-in-up">
                            <p>Cartagena de Indias, Provincia de Cartagena, Bolívar</p>
                            <p>+57 304 339 9289</p>
                            <p>morales.a.h.98@gmail.com</p>
                        </div>
                    </div>
                </section>
            </section>
            <section class="container-straight">
                <p> ®2022 Todos los Derechos Reservados <strong>SystemPos</strong> </p>
            </section>
        </section>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script src="JS/testimonial.js"></script>
    <script src="JS/loader.js"></script>
    <script src="JS/silder.js"></script>
    <script src="JS/menu.js"></script>


</body>

</html>