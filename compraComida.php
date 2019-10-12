<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include('templates/head.html') ?>
    <title>Boletox</title>

  </head>

  <body class="grey darken-4">

    <?php include('templates/header.html') ?>
    <div class="container w-100">
        <h3 class="text-light text-center font-weight-bold my-4">Selecciona tu Combo</h3>

        <div class="row">

            <div class="col-2 mx-auto">
                <img src="img/snacks/Promocion1.jpg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            <div class="col-2 mx-auto">
                <img src="img/snacks/Promocion2.jpg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            <div class="col-2 mx-auto">
                <img src="img/snacks/Promocion3.png" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            <div class="col-2 mx-auto">
                <img src="img/snacks/Promocion4.jpeg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
        </div>
        

            

        <h3 class="text-light text-center font-weight-bold my-4">Comida Adicional</h3>
        <div class="row">

            <div class="col-2 mx-auto">
                <img src="img/snacks/food1.jpg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            <div class="col-2 mx-auto">
                <img src="img/snacks/Food2.jpg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            
        </div>
        
        
        
        <h3 class="text-light text-center font-weight-bold my-4">Bebida Adicional</h3>
        <div class="row">

            <div class="col-2 mx-auto">
                <img src="img/snacks/drink1.jpg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            <div class="col-2 mx-auto">
                <img src="img/snacks/drink2.jpg" class="img-thumbnail mx-auto"
                 style="width: 150px; height:150px;">
                <div class="input-group mb-3">
                    <div class="input-group-prepend my-4 px-4">
                        <i class="fas fa-minus text-danger m-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></i>
                        <input  name="quantity" type="number" min="0" value="0" class="form-control form-control-sm quantity"  >
                        <i class="fas fa-plus text-success m-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></i>
                    </div> 
                </div>
            </div>
            
        </div>
            <h3 class="text-light text-center font-weight-bold my-4 ">Selección de Compra</h3>
            <section class="mb-4">
                <table class="table table-sm w-50 mx-auto text-center mb-4">
                    <thead class="deep-orange white-text">
                        <tr>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio Bs/Asiento</th>
                            <th scope="col">Total de Bolívares</th>
                        </tr>
                    </thead>
                    <tbody class="deep-orange lighten-1">
                        <tr>
                            <th scope="row" id="descr">Cantidad de Asientos</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Combo 1</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Combo 2</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Combo 3</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Combo 4</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Comida Adicional 1</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Comida Adicional 2</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Bebida Adicional 1</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                        <tr>
                            <th scope="row" id="descr">Bebida Adicional 2</th>
                            <th scope="row" id="cant">0</th>
                            <td id="precio_por_unidad">50200</td>
                            <td id="precio_total">0</td>      
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mx-auto">
                    <a href="compraComida.php" class="btn btn-success btn-sm">Continuar</a>
                </div>
            </section>
        </div>

   
    <!-- Inicio del codigo -->
   
    <!-- Final del codigo -->

    <?php include('templates/footer.html') ?>
    <?php include('templates/scripts.html') ?>
    
  </body>

</html>
