<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include('templates/head.html') ?>
    <title>Boletox</title>

  </head>

  <body class="grey darken-4">

    <?php include('templates/header.html') ?>

    <!-- Inicio del codigo -->
    <!--------------------------------------------------------------------------Carrusel ----------------------------------------------------->
    <section class="container" >
      <div id="carousel-notices" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carousel-notices" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-notices" data-slide-to="1"></li>
              <li data-target="#carousel-notices" data-slide-to="2"></li>
              <li data-target="#carousel-notices" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <div class="view">
                      <img class="d-block w-100" style="height: 500px;"  src="img/banner/Slide1.jpg"
                        alt="First slide">
                      <div class="mask rgba-black-light"></div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="view">
                      <img class="d-block w-100" style="height: 500px;" src="img/banner/Slide2.jpg"
                        alt="Second slide">
                      <div class="mask rgba-black-light"></div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="view">
                      <img class="d-block w-100" style="height: 500px;" src="img/banner/Slide3.png"
                        alt="Third slide">
                      <div class="mask rgba-black-light"></div>
                  </div>
                  
              </div>
              <div class="carousel-item">
                  <div class="view">
                      <img class="d-block w-100" style="height: 500px;" src="img/banner/Slide4.jpeg"
                        alt="Third slide">
                      <div class="mask rgba-black-light"></div>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-notices" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-notices" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
    </section>
    <!-----------------------------------------------------------------Carrusel multiple---------------------------------------------------------->
    <section class="container" >
        <h3>Películas</h3>
      <div id="multi-movies-slide" class="carousel slide carousel-multi-item m-4" data-ride="carousel">
      
        <div class="carousel-inner" role="listbox">
      
          <div class="carousel-item active">

            <div class="row">

                <div class="col-md-3">
                  <div class="card mb-2">
                    <img class="card-img-top"
                      src="img/covers/AvengersEndgame.jpg"
                      alt="Card image cap">
                  </div>
                </div>
          
                <div class="col-md-3">
                  <div class="card mb-2">
                    <img class="card-img-top"
                      src="img/covers/CementerioMaldito.jpg"
                      alt="Card image cap">
                  </div>
                </div>
          
                <div class="col-md-3">
                  <div class="card mb-2">
                    <img class="card-img-top"
                      src="img/covers/DetectivePikachu.jpg"
                      alt="Card image cap">
                  </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-2">
                      <img class="card-img-top"
                        src="img/covers/DolorYGloria.jpg" alt="Card image cap">
                    </div>
                </div>

            </div>
      
          </div>

          <div class="carousel-item">

            <div class="row">
        
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="img/covers/LaRebelion.jpg" alt="Card image cap">
                </div>
              </div>
        
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="img/covers/RocketMan.jpg" alt="Card image cap">
                </div>
              </div>
        
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="img/covers/UglyDolls.jpg" alt="Card image cap">
                </div>
              </div>

              <div class="col-md-3">
                  <div class="card mb-2">
                    <img class="card-img-top"
                      src="img/covers/MIBInternacional.jpg" alt="Card image cap">
                  </div>
                </div>
        
            </div>
          </div>

          <div class="carousel-item">

            <div class="row">

              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="img/covers/ToyStory4.jpg" alt="Card image cap">
                </div>
              </div>
        
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="img/covers/SpidermanLejosDeCasa.jpg" alt="Card image cap">
                </div>
              </div>
        
              <div class="col-md-3">
                <div class="card mb-2">
                  <img class="card-img-top"
                    src="img/covers/Anabelle3.jpg" alt="Card image cap">
                </div>
              </div>

              <div class="col-md-3">
                  <div class="card mb-2">
                    <img class="card-img-top"
                      src="img/covers/BrightburnHijoDeLaObscuridad.jpg" alt="Card image cap">
                  </div>
              </div>

            </div>
      
          </div>
        </div>
          <a class="carousel-control-prev" href="#multi-movies-slide" role="button" data-slide="prev">
              <span class="fas fa-chevron-circle-left fa-4x" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#multi-movies-slide" role="button" data-slide="next">
              <span class="fas fa-chevron-circle-right fa-4x " aria-hidden="true"></span>
          </a>
          <ol class="carousel-indicators position-static">
            <li data-target="#multi-movies-slide" data-slide-to="0" class="bg-light active "></li>
            <li data-target="#multi-movies-slide" class="bg-light" data-slide-to="1"></li>
            <li data-target="#multi-movies-slide" class="bg-light" data-slide-to="2"></li>
          </ol>
      </div>
    </section>
    <!-- Final del codigo -->

    <?php include('templates/footer.html') ?>
    <?php include('templates/.html') ?>
    
  </body>

</html>
