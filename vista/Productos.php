<?php
include_once('../includes/funcionesComunes.php');
$value="Productos";
$datasection="vistaProductos";
$section="Productos.php";
$col11="col-9 col-lg-12";
include('../includes/cabecera.php');
?>
<div class="col-lg-12">                   
        <div class="p-4">
<hr>

<div class="card border-light ">
    <center><div class="card-header"><?php echo $lang['vistaProductos']['tituloP']?></div></center>
  <div class="card-body">
    
    <p class=" lang card-text text-dark"><?php echo $lang['vistaProductos']['textP']?></p>
  </div> 
</div>

<div class="container">
    <div class="row p-3">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco2.jpeg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta1']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco11.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta2']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                  <img class="card-img-top" src="<?=$raiz?>publico/img/saco3.jpeg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta3']?></p>
                  </div>
                </div>
        </div>
    </div>

    <!--segunda fila de card-->

    
    <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco10.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta4']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco9.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta5']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                  <img class="card-img-top" src="<?=$raiz?>publico/img/saco5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta6']?></p>
                  </div>
                </div>
        </div>

    
    
</div>
<!--tercera fila de card-->

 <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco5.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta7']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta8']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                  <img class="card-img-top" src="<?=$raiz?>publico/img/saco7.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta9']?></p>
                  </div>
                </div>
        </div>
    </div>

<!--cuarta fila de card-->
    <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco8.png" height="200px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta10']?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco4.jpeg" height="200px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark"><?php echo $lang['vistaProductos']['tarjeta11']?></p>
              </div>
            </div>
        </div>
        
    </div>
</div>

</div>
</div>

<?php
    include('../includes/pie.php');
?>