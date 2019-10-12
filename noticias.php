<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include('templates/head.html') ?>
    <title>Boletox - Noticias</title>

  </head>

  <body class="grey darken-4">

    <?php include('templates/header.html') ?>
    <br>

    <!-- Inicio del codigo -->

    <h2 class="text-light text-center font-weight-bold mb-4">Noticias</h2>
    <section class="container center">
        <article class="row my-4">

            <div class="col-md-5">
                <div class="view overlay rounded z-depth-2">
                    <img src="img/notices/Sala.jpg" alt="Sample image for first version of blog listing" class="img-fluid">
                    <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                    
              <a href="" class="purple-text">
                  <h6 class="font-weight-bold pb-1">
                  <i class="fas fa-newspaper"></i> Noticia </h6>
              </a>

              <h3 class="mb-4 font-weight-bold text-light">
                  <strong>Alquiler de sala</strong>
              </h3>

              <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum nesciunt nam doloribus nobis! Error repellat veritatis consequuntur rem fugit libero voluptas quo, alias numquam ratione corporis consequatur accusamus totam sunt.</p>
              
                         
            </div>
        </article>
        <hr>
        <article class="row my-4">

            <div class="col-md-5">
                <div class="view overlay rounded z-depth-2">
                    <img src="img/notices/Cine2.webp" alt="Sample image for first version of blog listing" class="img-fluid">
                    <a>
                    <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                    
                <a href="" class="purple-text">
                    <h6 class="font-weight-bold pb-1">
                    <i class="fas fa-newspaper"></i> Noticia </h6>
                </a>

                <h3 class="mb-4 font-weight-bold text-light">
                    <strong>Funciones Especiales</strong>
                </h3>

                <p class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum nesciunt nam doloribus nobis! Error repellat veritatis consequuntur rem fugit libero voluptas quo, alias numquam ratione corporis consequatur accusamus totam sunt.</p>
                
                            
            </div>
            
        </article>

    </section>

    <!-- Final del codigo -->

    <br>
    <?php include('templates/footer.html') ?>
    <?php include('templates/scripts.html') ?>

  </body>

</html>
