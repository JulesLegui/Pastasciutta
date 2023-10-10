<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Pastaciutta</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
</head>
    
<body>
<!------------------------ NAVBAR ---------------------------->
    <header>
        <nav class="navbar navbar-expand-lg m-0 sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PASTASCIUTTA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#productos">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#especiales">ESPECIALES</a>
                        </li>
                    </ul>
                    <button class="button"><a href="#suscribite">SUSCRIBITE</a></button>
                    
                </div>
            </div>
        </nav>
    </header>


<!------------------------ SLIDER ---------------------------->
<section class="intro1 py-5 text-center container-fluid" id="slider">
    <div class="row d-flex justify-content-center">
        <div class="col-8 ">
            <h1 class="fw-regular h1 my-3 text-uppercase">Las verdaderas pastas italianas que no querrás dejar de saborear</h1>
            <p>Fabricamos las mejores pastas, con recetas tradicionales italianas, para que disfrutes de un sabor inolvidable. </p>
        </div>

            <div class="col-8 carousel">
                <div class="row align-items-center">
                    <div class=" order-last my-5">
                        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <?php 
                                    $img = array("img/slider-1.jpg", "img/slider-2.jpg", "img/slider-3.jpg");
                                    for ($i = 0; $i<count($img); $i++) {
                                    $estado = ($i == 0) ? ' active' : ''; ?>
                                    
                                    <div class="carousel-item<?php echo $estado; ?> ">
                                        <img src="<?php echo $img[$i] ?>" alt="*" width="100%" height="100%">
                                    </div>
                                <?php } ?>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
        
<!------------------------ NOSOTROS ---------------------------->
<section class="container py-5" id="nosotros">
    <div class="section-title">
        <h3 class="my-3">Sobre nosotros</h3>
        <h2>Un poco de nuestra historia</h2>
    </div>

    <div class="row align-items-left justify-content-between">
        <div class="col col-lg-5 col-md-12 ">
            <p class="presentacion my-3">Nuestro laboratorio es el lugar donde nace nuestra forma de arte. Siglos de tradición reinventados  y actualizados para ofrecer un producto noble con la más dedicada preparación. Es nuestro amor por el fruto de la tierra y por lo auténtico, basado en las más antiguas tradiciones culinarias italianas, lo que nos llevó a desarrollar un método de elaboración nunca visto.
                Un equipo profesional multidisciplinario y nuestra tecnología de última generación importada de Italia nos permitió elevar recetas artesanales hacia nuevos estándares futuristas y de vanguardia.
                Lo artesanal se unió con los más innovadores avances tencológicos para ofrecerte un producto único, que quedará grabado en tus papilas como esos maravillosos sabores que degustabas en la infancia.
            </p>
            <p class="pt-5 text-end">Recetas tradicionales, tecnología, innovación y creatividad, unidas para fabricar las mejores pastas. 
            </p>
        </div>
        <figure class="col-lg-6 col-md-12">
            <img src="img/food-photographer-x6oBAbzzXo4-unsplash.jpg" class="img-fluid" alt="*">
        </figure>
    </div>

    <div class="row d-flex justify-content-between pt-5">
        <?php
        $galeria = array('img/galeria-1.jpg', 'img/galeria-2.jpg', 'img/galeria-3.jpg', 'img/galeria-4.jpg', 'img/galeria-5.jpg');
        for ($i = 0; $i<count($galeria); $i++) { ?>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 ">
            <img src="<?php echo $galeria[$i];?>" class="w-100"/>
        </div>
        <?php } ?>
    </div>
</section>

<!------------------------ PRODUCTOS ---------------------------->
<section class="container py-5" id="productos">
    <div class="productos">
        <div class="section-title pb-5">
            <h3 class="my-3">Productos</h3>
            <h2>Nuestros clásicos:</h2>
        </div>
    </div>

    <div class="row menu-container">
        <?php
            $listaDeProductos[] = ['menu-img' => 'img/menu-1.jpg', 'menu-nombre' => 'Spaghetti', 'menu-descripcion' => 'La más tradicional y conocida de las pastas italianas. Alargada y redondeada, esta pasta seca se puede combinar de infinitas formas aunque el acompañamiento más tradicional es la salsa con tomate sea filetto o bolognesa.'];
            $listaDeProductos[] = ['menu-img' => 'img/menu-2.jpg', 'menu-nombre' => 'Cappelletti', 'menu-descripcion' => 'Con forma de sombrero, se elaboran a partir de cuadrados o círculos plegados por los extremos y con rellenos variados. Es una pasta perfecta para comer en caldos y sopas, como plato único o principal.'];
            $listaDeProductos[] = ['menu-img' => 'img/menu-3.jpg', 'menu-nombre' => 'Lasagne', 'menu-descripcion' => 'Es la pasta más conocida en forma de hoja o lámina entre las que se intercalan diferentes ingredientes (desde verduras a pescados y carnes). En su elaboración, es imprescindible añadir bechamel y queso rallado para que quede bien gratinada en el horno.'];
            $listaDeProductos[] = ['menu-img' => 'img/menu-4.jpg', 'menu-nombre' => 'Cannelonni', 'menu-descripcion' => 'Son láminas de pasta que se enrollan formando cilindros cuyos extremos no están sellados. Se rellenan con carne y queso o espinacas. Se cubren con salsa y se gratinan en el horno.'];        
            $listaDeProductos[] = ['menu-img' => 'img/menu-5.jpg', 'menu-nombre' => 'Gnocchi', 'menu-descripcion' => 'Se trata de una pasta elaborada con harina, papa y queso, aunque según algunas recetas también se pueden hacer con pan rallado. Combina con gran variedad de salsas.'];        
            $listaDeProductos[] = ['menu-img' => 'img/menu-6.jpg', 'menu-nombre' => 'Agnolotti', 'menu-descripcion' => 'Pasta con forma de media luna, con bordes cuadrados y rellena de carne estofada o asada. Combina perfectamente con albahaca y queso ricota.'];        
            $listaDeProductos[] = ['menu-img' => 'img/menu-7.jpg', 'menu-nombre' => 'Ravioli', 'menu-descripcion' => 'Es la pasta rellena más popular. Con forma de paquete cuadrado, tiene dos láminas selladas con agua y huevo. El relleno de los ravioli puede ser de carne, queso, marisco o verdura, principalmente de espinaca. Combina con todo tipo de salsas.'];        
            $listaDeProductos[] = ['menu-img' => 'img/menu-8.jpg', 'menu-nombre' => 'Tortellini', 'menu-descripcion' => 'Tienen forma de anillos gruesos, en general rellenos de carne aunque también se puede incluir queso, espinacas y otros ingredientes. Se comen con salsas, cremas o caldo de carne.'];        

            foreach($listaDeProductos as $indice => $plato) { ?>
                <div class="col-lg-6 menu-item ">
                    <img src="<?php echo $plato['menu-img']; ?>" class="menu-img" alt="<?php echo $plato['menu-nombre'];?>">
                    <h3 class="menu-nombre" id="test"><?php echo $plato['menu-nombre'];?></h3>
                    <p class="menu-descripcion"><?php echo $plato['menu-descripcion'];?></p>
                </div>
        <?php } ?>
    </div>
</section>

<!------------------------ ESPECIALES ---------------------------->
<section class="container py-5 specials" id="especiales">
    <div class="section-title pb-5">
        <h3 class="my-3">Especiales</h3>
        <h2>Para los paladares más exigentes:</h2>
    </div>

        <?php 
            $listaDeEspeciales[] = ['Titulo' => 'SPAGHETTI CON CEBOLLA CARAMELIZADA', 'Subtitulo' => 'Un plato para lucirse en una noche especial.', 'Descripcion' => 'Requiere un poco de tiempo para caramelizar la cebolla pero sin dudas ofrece un sabor diferente a una pasta clásica. Una receta para realizar con pocos pero magníficos ingredientes que aportarán un toque único e inesperado.', 'Imagen' => 'img/especial-1.jpg', 'Tab' => 'tab-1'];
            $listaDeEspeciales[] = ['Titulo' => 'GNOCCHI CON PEPERONATA', 'Subtitulo' => 'Un plato vegano con una salsa única.', 'Descripcion' => 'La salsa peperonata es una salsa típica italiana que aquí se ha versionado para dar un extra de sabor a un plato vegano a través de los pimientos confitados, la cebolla morada y el ajo. Una salsa muy sabrosa que transforma todo lo que toca', 'Imagen' => 'img/especial-2.jpg', 'Tab' => 'tab-2'];
            $listaDeEspeciales[] = ['Titulo' => 'TORTELLONI CON CUATRO QUESOS', 'Subtitulo' => 'Un relleno pensado para adictos al queso.', 'Descripcion' => 'Una mezcla de ricotta, parmesano, cheddar y mozzarella que convierte a esta pasta en una experiencia de sabor y es la responsable de que sea un plato pensado para adictos al queso. Por si fuera poco, servida con una salsa con aún más queso que multiplica las sensaciones.', 'Imagen' => 'img/especial-3.jpeg', 'Tab' => 'tab-3'];
            $listaDeEspeciales[] = ['Titulo' => 'LASAGNE DI MARE', 'Subtitulo' => 'Sencillo pero laborioso, ideal para celebrar', 'Descripcion' => 'Con el sabor intenso que agregan los frutos de mar, este plato combina pulpo, calamares, gambas, caldo de mariscos y bechamel delicadamente preparados en varios pasos para lograr un final de película.', 'Imagen' => 'img/especial-4.jpg', 'Tab' => 'tab-4'];
            $listaDeEspeciales[] = ['Titulo' => 'CAPELLETTI CON CREMA DE COLIFLOR', 'Subtitulo' => 'Un plato vegetariano que amarán hasta los que odian las coles.', 'Descripcion' => 'La cremosa salsa disimula el sabor más fuerte de esta gran verdura llena de virtudes y convence hasta los más incrédulos. El plato se completa con con unas migas crujientes sencillísimas de preparar, que sin duda realzan la receta con un delicioso contraste de texturas.', 'Imagen' => 'img/especial-5.jpg', 'Tab' => 'tab-5'];
        ?>
    <div class="row ">
        <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
            <?php foreach($listaDeEspeciales as $indice => $especiales) { ?>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#<?php echo $especiales['Tab'] ?>">
                        <?php echo $especiales['Titulo']?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
            <?php foreach($listaDeEspeciales as $indice => $especiales) {        
                $activo = ($indice === 0) ? 'show active' : ''; ?>
                <div class="tab-pane <?php echo $activo; ?>" id="<?php echo $especiales['Tab']?>">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3><?php echo $especiales['Titulo']?></h3>
                            <p class="fst-italic"><?php echo $especiales['Subtitulo']?></p>
                            <p><?php echo $especiales['Descripcion']?></p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="<?php echo $especiales['Imagen']?>" alt="Foto de <?php echo $especiales['Titulo']?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</section>

<!------------------------ FORMULARIO ---------------------------->
<section class="container py-5" id="suscribite">
    <div class="section-title pb-5">
        <h3 class="my-3">Newsletter</h3>
        <h2>Conocé nuestras recetas</h2>
    </div>

    <form action="procesar.php" method="post" class="php-email-form">
        <div class="row d-flex">
            <!--Columna 1-->
            <div class="col-lg-6 px-5">
                <p class="pb-3">Suscribite a nuestros newsletters personalizados y recibirás recetas, tips, e información actualizada para preparar, combinar y saborear nuestras exquisitas pastas. </p>
                        
                <div id="mensaje-error">
                    <?php if (isset($_GET['error'])) { ?>
                        <p>Ocurrió un error. Asegurate de cargar todos los datos: <br>
                            <?php echo $_GET['error'];?> </p>
                    <?php } ?>
                </div>

                <?php
                    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : $nombre = "";
                    $email = isset($_GET['email']) ? $_GET['email'] : $email = "";
                    $comentario = isset($_GET['comentario']) ? $_GET['comentario'] : $comentario = "";                          
                ?>

                <div class="form-group my-3">
                    <input type="checkbox" name="recetarios[]"  id="recetario_1" value="Recetario de pastas para vegetarianos">
                    <label for="recetario_1">Recetario de pastas para vegetarianos</label>
                </div>
                <div class="form-group  my-3"> 
                    <input type="checkbox" name="recetarios[]"  id="recetario_3" value="Recetario de pastas para veganos">
                    <label for="recetario_3">Recetario de pastas para veganos</label>
                </div>
                <div class="form-group  my-3">
                    <input type="checkbox" name="recetarios[]"  id="recetario_2" value="Recetario de pastas sin TACC">
                    <label for="recetario_2">Recetario de pastas sin TACC</label>
                </div>
                <div class="form-group  my-3"> 
                    <input type="checkbox" name="recetarios[]"  id="recetario_4" value="Guía de maridajes">
                        <label for="recetario_3">Guía de maridajes</label>
                </div>
            </div>

            <!--Columna 2-->        
            <div class="col-lg-6  px-5">
                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan Perez" value="<?php echo $nombre;?>">
                </div>
                <div class="form-group my-4">
                    <label for="nombre">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="nombre@mail.com" value="<?php echo $email;?>">
                </div>
                <div class=" form-group my-4">
                    <label for="comentario" >¿Qué otro recetario te gustaría que te ofreciéramos? (opcional)</label>    
                    <textarea class="form-control" id="comentario" name="comentario" rows="5" placeholder="Ej: Me encantaría un recetario de salsas..."><?php echo htmlspecialchars($comentario);?></textarea>
                </div>
                <div class="form-group">
                    <button id="enviar-form" class="btn btn-primary mt-3">ENVIAR</button>
                </div>
            </div>
        </div>                
    </form>    
</section>
        
        
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="#" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">PASTASCIUTTA</a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
    </footer>
</div> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"> </script>

</body>
</html>