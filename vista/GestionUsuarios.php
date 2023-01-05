<?php
include_once('../includes/funcionesComunes.php');
$value="GestionUsuarios";
$datasection="formGestionUsuario";
$section="GestionUsuarios.php";
$col11="col-9 col-lg-12";
include('../includes/cabecera.php');
?>
            <div class="<?=$col11?> p-4 mx-auto" >
            <div class="col-6 col-md-12  d-flex ml-auto p-4 flex-row-reverse">
                <button type="button" class="btnGuardarUsuario  bi bi-check-lg "data-toggle="modal" data-target="#modal2"><?php echo $lang['formGestionUsuario']['guardar']?></button>
            </div>

    <table id="example" class="table table-light table-striped table-bordered dt-responsive wrap" style="width:100%">
        <thead>
            <tr>
                
                <th><?php echo $lang['formGestionUsuario']['id']?></th>
                <th><?php echo $lang['formGestionUsuario']['nombre']?></th>
                <th><?php echo $lang['formGestionUsuario']['apellido']?></th>
                <th><?php echo $lang['formGestionUsuario']['numeroidentificacion']?></th>
                <th><?php echo $lang['formGestionUsuario']['correo']?></th>
                <th><?php echo $lang['formGestionUsuario']['nacionalidad']?></th>
                <th><?php echo $lang['formGestionUsuario']['direccion']?></th>
                <th><?php echo $lang['formGestionUsuario']['telefono']?></th>
                <th data-priority="1"><?php echo $lang['formGestionUsuario']['accionModificar']?>r</th>
                <th data-priority="1"><?php echo $lang['formGestionUsuario']['accionDeshabilitar']?></th>

            </tr>
        </thead>
        <tbody>
        <tr>
                <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen " id="btnModificarU" data-toggle="modal" data-target="#modal2"><?php echo $lang['formGestionUsuario']['modificar']?></button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle " ><?php echo $lang['formGestionUsuario']['deshabilitar']?></button></td>
            </tr>
            <tr>
            <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen " id="btnModificarU" data-toggle="modal" data-target="#modal2"><?php echo $lang['formGestionUsuario']['modificar']?></button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle " ><?php echo $lang['formGestionUsuario']['deshabilitar']?></button></td>
            </tr>
            <tr>
            <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen " id="btnModificarU" data-toggle="modal" data-target="#modal2"><?php echo $lang['formGestionUsuario']['modificar']?></button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle " ><?php echo $lang['formGestionUsuario']['deshabilitar']?></button></td>
            </tr>
            <tr>
            <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen " id="btnModificarU" data-toggle="modal" data-target="#modal2"><?php echo $lang['formGestionUsuario']['modificar']?></button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle " ><?php echo $lang['formGestionUsuario']['deshabilitar']?></button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </tbody>
    </table>
    </div>
</div>


<!--Ventana modal -->

<div class="modal" tabindex="-1" role="dialog" id="modal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title"><?php echo $lang['formGestionUsuario']['gestionUsuario']?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="../publico/php/procesarGestionUsuario.php"  method="POST" id="formGestionUsuario">


    <div class="modal-body">    
    <div class="row">

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label ><?php echo $lang['formGestionUsuario']['id']?></label><br>
        <input type="text" class="form-control" name="txtid" id="txtid" placeholder="<?php echo $lang['formGestionUsuario']['placeholderId']?>"  data-validetta="required">
       
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['nombre']?></label>
        <input type="text" class="form-control" name="txtNombreU" id="txtNombreU" placeholder="<?php echo $lang['formGestionUsuario']['PLNomCompletoU']?>" data-validetta="required">
        
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['apellido']?></label>
        <input type="text" class="form-control" name="txtApellidoU" id="txtApellidoU" placeholder="<?php echo $lang['formGestionUsuario']['PLApellidoU']?>"  data-validetta="required">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['numeroIdentificacion']?></label>
        <input type="text" class="form-control" name="txtNumeroIdentificacionU" id="txtNumeroIdentificacionU" placeholder="<?php echo $lang['formGestionUsuario']['PLNumIndentificacionU']?>"  data-validetta="required">
        
    </div>                        

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['correo']?></label>
        <input type="text" class="form-control" name="txtCorreoU" id="txtCorreoU" placeholder="<?php echo $lang['formGestionUsuario']['PLcorreoU']?>" >
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['nacionalidad']?></label>
        <input type="text" class="form-control" name="txtNacionalidadU" id="txtNacionalidadU" placeholder="<?php echo $lang['formGestionUsuario']['PLNacionalidadU']?>"  data-validetta="required">
        
    </div>

    

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['direccion']?></label>
        <input type="text" class="form-control" name="txtDireccionU" id="txtDireccionU" placeholder="<?php echo $lang['formGestionUsuario']['PLDireccionU']?>"  data-validetta="required">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formGestionUsuario']['telefono']?></label>
        <input type="text" class="form-control" name="txtTelefonoU" id="txtTelefonoU" placeholder="<?php echo $lang['formGestionUsuario']['PLNumTelefonoU']?>"  data-validetta="required">
        
    </div>

    
    
</div>

</div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary "><?php echo $lang['formGestionUsuario']['enviar']?></button>
    <!-- <button type="submit" class="btn btn-primary"  key="enviar" data-section="formGestionUsuario"onclick="stopDefAction(event,'form#formGestionUsuario')"  data-value="enviar">Enviar</button> -->
    <button type="button" class="btn btn-secondary " data-dismiss="modal"><?php echo $lang['formGestionUsuario']['cerrar']?></button>
        
    </div>
    </form> 



</div>
</div>
</div>

<div class="col-auto" style="background-color: #004D71;">
    <div class="row">
        <div class="col-md-12">
        <div class="<?=$col11?> mb-3" id="prueba2">
        </div>                
        </div>
    </div>
</div>



<?php
    include('../includes/pie.php');
?>