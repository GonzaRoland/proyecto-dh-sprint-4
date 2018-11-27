@extends('layouts.app')

@section('content')
<section>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/img_carrousel_hm/carrusel1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-title">Ellos merecen lo mejor,<br>
                            por que son nuestros<br> “Fieles Amigos”</h5>
                        <p></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/img_carrousel_hm/carrusel2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-title">Tu tienda ideal para<br>
                            esas locas mascotas<br>super Mimosas</h5>
                        <p></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="img/img_carrousel_hm/carrusel3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-title">Todo para el cuidado<br>
                            de nuestros Amigos<br>“Los Peludos”</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

<!-- MAIN -->
<main>
    <!-- Logo y service------------------->
    <section>
            <div class="logocorpo">
                <img src="img/imagen_corporate/logospring.png" alt="Logo">
                    <div class="logoTexto">
                        <p>Dogo</p>
                    </div>
                    <div class="logoparrafo">
                        <p><b>PET SHOP</b></p>
                    </div>
            </div>
    </section>

    <!-- Botones Iconos------------------->
         <section class="categoriasIconos">

            <div class="center">
                <img src="img/imagen_corporate/animaShop.gif" alt="Shop">
                <p class="texto1">SHOP</p>
                <p class="texto2"></p>
                <button type="button" class="btn btn-outline-secondary">Ver Mas >></button>
            </div>

            <div class="center">
                <img src="img/imagen_corporate/perro_logo.gif" alt="News">
                <p class="texto1">ADOPTAR</p>
                <p class="texto2"></p>
                <button type="button" class="btn btn-outline-secondary">Ver Mas >></button>
            </div>

            <div class="center">
                <img src="img/imagen_corporate/gato_logo.gif" alt="Faqs">
                <p class="texto1">FAQS</p>
                <p class="texto2"></p>
                <button type="button" class="btn btn-outline-secondary">Ver Mas >></button>

            </div>
            <div class="center">
                <img src="img/imagen_corporate/ave_logo.gif" alt="Info">
                <p class="texto1">INFO PET</p>
                <p class="texto2"></p>
                <button type="button" class="btn btn-outline-secondary">Ver Mas >></button>

            </div>

        </section>
        <!-- Titulos--------------------------------->
        <section>
            <div class="logocorpoMedio">
                <div class="logoTextoMedio">
                    <p>Todo lo que tus mascotas necesitan</p>
                </div>
            </div>
        </section>


        <section class="tituloLinea">
            <div>
                <p>CATEGORIAS</p>

                <hr>
            </div>
        </section>
<!--Categorias Shop----------------------------------->

        <section class="categoriasProductos">
            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/categorias/alimen.png" alt="Alimento">
                        <div class="card-body">
                            <h5 class="card-title">Alimentos</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-dark">Ver Mas >></a>
                        </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/categorias/indumen.png" alt="Indumentaria">
                        <div class="card-body">
                            <h5 class="card-title">Indumentaria</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-dark">Ver Mas >></a>
                        </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/categorias/salud.png" alt="Salud">
                    <div class="card-body">
                        <h5 class="card-title">Cuidados</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-dark">Ver Mas >></a></div>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/categorias/toy-gato.png" alt="Toy">
                    <div class="card-body">
                        <h5 class="card-title">Juguetes</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-dark">Ver Mas >></a>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/categorias/deco-pet.png" alt="Deco">
                        <div class="card-body">
                        <h5 class="card-title">Deco-Pet</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-dark">Ver Mas >></a>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card"><!--style="width: 18rem;"-->
                    <img class="card-img-top" src="img/categorias/tech-pet.png" alt="Tech">
                    <div class="card-body">
                        <h5 class="card-title">Tech</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-dark">Ver Mas >></a></div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Titulos productos destacados del mes------------------->

        <section class="tituloLinea">
            <div>
                <p>PRODUCTOS DESTACADOS</p>
                <hr>
            </div>
        </section>

    <!--Productos destacados del mes---------------------------->

        <section class="productosDestacados">
            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/chalecoRed.png" alt="Card image cap">
                    <div class="card-body">
                        <h5>Chaleco</h5>
                        <p class="card-text">Pluma<br>20% Off</p>
                        <a href="#" class="btn btn-secondary">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/soga.png" alt="Card image cap">
                        <div class="card-body">
                            <h5>Mordisco</h5>
                            <p> De Soga<br>10% Off</p>
                            <a href="#" class="btn btn-secondary">Comprar</a>
                        </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/corregato.png" alt="Card image cap">
                        <div class="card-body">
                            <h5>Arnes</h5>
                            <p> De Soga<br>10% Off</p>
                            <a href="#" class="btn btn-secondary">Comprar</a>
                        </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/cuchaperro.png" alt="Card image cap">
                        <div class="card-body">
                            <h5>Mordisco</h5>
                            <p> De Soga<br>10% Off</p>
                            <a href="#" class="btn btn-secondary">Comprar</a>
                        </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/alimento1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5>Purina</h5>
                        <p>x 12/u<br>15% Off</p>
                        <a href="#" class="btn btn-secondary">Comprar</a></div>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/tech.png" alt="Card image cap">
                    <div class="card-body">
                        <h5>App. Pet</h5>
                        <p>Pet Data<br>20% Off</p>
                        <a href="#" class="btn btn-secondary">Comprar</a></div>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/wiscas.png" alt="Card image cap">
                    <div class="card-body">
                        <h5>Whiskas</h5>
                        <p>X 320 gr.<br>15% Off</p>
                        <a href="#" class="btn btn-secondary">Comprar</a></div>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="card">
                    <img class="card-img-top" src="img/productos/collar-rosa.png" alt="Card image cap">
                    <div class="card-body">
                        <h5>Collar</h5>
                        <p>De Cuero<br>20% Off</p>
                        <a id="faqs" href="#" class="btn btn-secondary">Comprar</a></div>
                    </div>
                </div>

            </div>

        </section>


    <!--Faqs---------------------------------------------------------------->
        <section  class="tituloLinea">
            <div>
                <p>FAQS</p>
                <hr>
            </div>
        </section>

        <section class="faqs">
            <div class="fq">
                <div class="fecha">
                    <img class="card-img" src="img/faqs/vacunacion.jpg">
                    <h6>09<br>Ago</h6>
                </div>
                <div class="card-faqs">
                    <h5>Plan de Vacunacion.</h5>

                    <p>Cuando vacunar a mis mascotas?<br>
                    Debes iniciar un plan de vacunación a los 25 días de su nacimiento, con la vacuna para el Parvovirus,
                    y revacunar a los 15 días; sin embargo lo mas indicado es visitar al Médico
                    Veterinario, quien te dará el programa de vacunación completo para tu mascota, tratese de gatos o perros,
                    ya que ambos deven tener al dia todas las vacunas.</p>
                </div>
            </div>

            <div class="fq">
                <div class="fecha">
                    <img class="card-img" src="img/faqs/bano.jpg">
                    <h6>24<br>Sep</h6>
                </div>
                <div class="card-faqs">
                    <h5>Higiene en perros y gatos.</h5>
                    <p>Puedo bañar a mi cachorro?<br>
                    Sí, puedes bañarlo, pero calefacciona antes el baño si es invierno.
                    Utiliza un champú especial para cachorros y sécalo
                    muy bien evitando las corrientes de aire. En el caso de los Gatos mismo procedimiento.
                    La higiene animal es muy importante tambien, pero en cualquiera de los  casos,
                    consulta a tu medico Veterinario</p>
                </div>
            </div>

            <div class="fq">
                <div class="fecha">
                    <img class="card-img" src="img/faqs/veterinaria.jpg">
                    <h6>09<br>Oct</h6>
                </div>
                <div class="card-faqs">
                    <h5>Controles periodicos.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque convallis nulla sed turpis pharetra pretium nec eu sem.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque convallis nulla sed turpis pharetra pretium nec eu sem.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque convallis nulla sed turpis pharetra pretium nec eu sem.</p>
                </div>
            </div>

            <div class="fq">
                <div class="fecha">
                    <img class="card-img" src="img/faqs/alimentacion.jpg">
                    <h6>16<br>Nov</h6>
                </div>
                <div class="card-faqs">
                    <h5>Alimentacion.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque convallis nulla sed turpis pharetra pretium nec eu sem.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque convallis nulla sed turpis pharetra pretium nec eu sem.
                        Lorem ipsum dolor sit amet, <a id="adoptar"></a>consectetur adipiscing elit.
                        Quisque convallis nulla sed turpis pharetra pretium nec eu sem.</p>
                </div>
            </div>
        </section>


        <!-- Adoptar ---------------------------------------------------->

     <section class="tituloLinea">
            <div>
                <p>ADOPTAR</p>
                <hr>
            </div>
    </section>

    <section>
            <div class="logocorpoMedio">
                    <div class="logoTextoMedioAdoptar">
                        <p>Adoptar una mascota es una hermosa decisión.</p>
                    </div>

            </div>
    </section>

    <section class="adoptar">
        <ul>
            <li><img src="img/adoptar/1.jpeg"></li>
            <li><img src="img/adoptar/2.jpeg"></li>
            <li class="sobre"></li>
            <li><img src="img/adoptar/4.jpeg"></li>
            <li><img src="img/adoptar/5.jpeg"></li>
            <li><img src="img/adoptar/6.jpeg"></li>
            <li class="sobre"></li>
            <li><img src="img/adoptar/8.jpg"></li>
            <li><img src="img/adoptar/9.jpg"></li>
            <li class="sobre"></li>
            <li><img src="img/adoptar/11.jpeg"></li>
            <li><img src="img/adoptar/12.jpeg"></li>
            <li><img src="img/adoptar/13.jpeg"></li>
            <li><img src="img/adoptar/14.jpeg"></li>
            <li><img src="img/adoptar/15.jpeg"></li>
            <li><img src="img/adoptar/16.jpeg"></li>
            <li><img src="img/adoptar/17.jpeg"></li>
            <li class="sobre"></li>
        </ul>

    </section>

<!-- Info y Contacto ---------------------------------------------------->

    <section class="contacto">

            <div class="contacto1">
                <div class="card1">
                    <!--<img src="img/productos/wiscas.png">-->
                    <div class="card-contacto">
                        <p class="textoContacto">SEGUÍ EN</p>
                        <p class="textoContacto1">CONTACTO</p>
                        <p class="textoContacto4">GRACIAS POR VISITARNOS</p>
                    </div>
                </div>
            </div>


            <div class="conteiner-flex">
                <form class="form form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <div class="reg-formx">
                        <fieldset>

                            <div class="form-group">
                                <label class="control-label col-md-0" for="nombre"></label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre ">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-0" for="email"></label>
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" value="" placeholder="Corre Electrónico ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-0" for="nombre"></label>
                                <div class="col-md-12">
                                    <textarea class="form-control" type="text" name="mensaje" rows="10" placeholder="Mensaje"></textarea>
                                </div>
                            </div>

                            <div class="form-grou">
                                <div class="conteiner-flex col-md-12">
                                    <button class="btn form-btn" type="submit">ENVIAR</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
            <div class="contacto1">

                <div class="card1">
                    <!--<img src="img/productos/wiscas.png">-->
                    <div class="card-contacto1">
                        <p class="textoContacto3">NUESTRA DIRECCION</p>
                        <ul>
                            <li>Av. Santa Fe 4455</li>
                            <li>CABA</li>
                            <li>Tel: 11 567 8899</li>
                            <li>Email: info@dogo.com.ar</li>
                        </ul>
                            <p class="textoContacto3">NUESTROS HORARIOS</p>
                        <ul>
                            <li>Lunes- Sábado</li>
                            <li>7:00 AM - 10:00 PM</li>
                        </ul>
                    </div>
                </div>

            </div>
    </section>
    </main>


    {{-- <!----------- Footer ------------>
    <section>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3">
                <div class="logocorpoFooter">
                    <img src="img/imagen_corporate/logospring.png">
                        <div class="logoTextoFooter">
                            <p>Dogo</p>
                        </div>
                        <div class="logoparrafoFooter">
                            <p><b>PET SHOP</b></p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 footer-nav">
            	<div class="col-md-5">
                    <ul class="pages">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-3 footer-social">
            	<h4>SEGUINOS</h4>
            	<ul>
                	<li><img src="img/social-fb.svg" alt="Facebook"><a href="#"> Facebook</a></li>
                	<li><img src="img/twitter-01.svg" alt="Twitter"><a href="#"> Twitter</a></li>
                	<li><img src="img/social-ig.svg" alt="Instagram"><a href="#"> Instagram</a></li>
                	<li><img src="img/social-email.svg" alt="Email"><a href="#"> Mail</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns">
                <h4>Newsletter</h4>
                <h3>SIGN UP NOW</h3>
                <p>Subscribite ingresando tu email a nuestra tienda On Line y recibí todas las novedades, ofertas y beneficios disponibles</p>
                    <div class="input-group">
                      <input type="text" class="form-controll" placeholder="email@mail.com">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Enviar</button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
    <section class="socalo">
        <p>Designed & Powered by <a href="#">Go.Na.He</a> - © 2018 Spring Full Stack - Digital House - All rights reserved</p>
    </section>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
{{-- </body>
</html> --}}
@endsection
