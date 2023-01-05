<?php
include_once('../includes/funcionesComunes.php');
// VARIABLES GLOBALES
    //Variable para banner
    $value = "SolicitudPedidos";
    //Variable con la que se solicita las traducciones especificas de la pagina
    $datasection = "formSolicitudPedidos";
    //Variable para la ruta en el cambio de idioma
    $section = "SolicitudPedidos.php";

    $col8 = "col-12 col-sm-12 col-md-12 col-lg-12";
    $col4 = "col-12 col-sm-12 col-md-6 col-lg-6";
    $col6 = "col-sm-6 col-md-6 col-lg-6";
include('../includes/cabecera.php');
?>

<div class="col-lg-12">
    <form action="../publico/php/procesarProductos.php" method="POST" id="frmDinamico">
        <div class="p-4">
            <div class="<?= $col8 ?>" id="formEncabezado">
                <h3><?php echo $lang['formSolicitudPedidos']['DatosCliente']?></h3>
            </div>

            <div class="row">
                <div class="<?= $col4 ?>">
                    <p><?php echo $lang['formSolicitudPedidos']['NomCompleto']?></p>
                    <input class="form-control" type="text" name="txtNombreSP" id="txtNombreSP" placeholder="<?php echo $lang['formSolicitudPedidos']['PLNomCompletoSP']?>">
                </div>

                <div class="<?= $col4 ?>">
                    <p><?php echo $lang['formSolicitudPedidos']['correo']?></p>
                    <input class="form-control" type="email" name="txtCorreoSP" id="txtCorreoSP" placeholder="<?php echo $lang['formSolicitudPedidos']['PLcorreoSP']?>">
                </div>
            </div>

            <div class="row">
                <div class="<?= $col4 ?>">
                    <p><?php echo $lang['formSolicitudPedidos']['Nacionalidad']?></p>
                    <select class="form-control" name="sNacionalidad">
                        <option value="<?php echo $lang['formSolicitudPedidos']['Estadounidense']?>"><?php echo $lang['formSolicitudPedidos']['Estadounidense']?></option>
                    </select>
                </div>
                <div class="<?= $col4 ?>">
                    <p><?php echo $lang['formSolicitudPedidos']['NumIndentificacion']?></p>
                    <input class="form-control" type="text" name="txtIdentificacionSP" id="txtIdentificacionSP" placeholder="<?php echo $lang['formSolicitudPedidos']['PLNumIndentificacionSP']?>">
                </div>
            </div>

            <div class="row">
                <div class="<?= $col4 ?>">
                    <p><?php echo $lang['formSolicitudPedidos']['NumTelefono']?></p>
                    <input class="form-control" type="text" name="txtTelefonoSP" id="txtTelefonoSP" placeholder="<?php echo $lang['formSolicitudPedidos']['PLNumTelefonoSP']?>">
                </div>
                <div class="<?= $col4 ?>">
                    <p><?php echo $lang['formSolicitudPedidos']['Direccion']?></p>
                    <textarea class="form-control" name="txtDireccionSP" id="txtDireccionSP" cols="15" rows="1" placeholder="<?php echo $lang['formSolicitudPedidos']['PLDireccionSP']?>"></textarea>
                </div>
            </div>

        </div>

        <div class="p-4">
            <div class="<?= $col8 ?>" id="formEncabezado">
                <h3><?php echo $lang['formSolicitudPedidos']['Productos']?></h3>
            </div>

            <div class="row">
                <div class="<?= $col8 ?> d-flex justify-content-center p-4">
                    <button type="button" class="btn btn-secondary" id="btnAdd"><?php echo $lang['formSolicitudPedidos']['AgregarProducto']?></button>
                </div>
            </div>

            <div class="row">
                <div class="<?= $col8 ?>">

                    <table class="table table-info table-responsive-sm ">
                        <tr>
                            <th><?php echo $lang['formSolicitudPedidos']['NombreT']?></th>
                            <th><?php echo $lang['formSolicitudPedidos']['CantidadT']?></th>
                            <th><?php echo $lang['formSolicitudPedidos']['QuitarT']?></th>
                        </tr>
                        <tbody id="tblFilas">
                            <tr class="filas">
                                <td>
                                    <select class="form-control" name="sNombreProducto[]">
                                        <option value="<?php echo $lang['formSolicitudPedidos']['Sacos']?>"><?php echo $lang['formSolicitudPedidos']['Sacos']?></option>
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control" type="number" id="txtCantidadSP" name="txtCantidadSP[]" min="0">
                                </td>
                                <td>
                                    <button type="button" class="btn" id="btnEliminar"><img src="<?= $raiz ?>publico/img/eliminar.png" width="20rem" height="20rem" alt=""></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="<?= $col8 ?> d-flex p-4">
                <button type="submit" class="btn btn-warning ml-auto px-5" id="btnEnviar"><?php echo $lang['formSolicitudPedidos']['Enviar']?></button>   
                </div>
            </div>
    </form>

</div>


<div class="p-4">
    <div class="row">
        <div class="<?= $col8 ?>" id="datos">

        </div>
    </div> 

    <!-- Button trigger modal -->
    <div class="row">
        <div class="<?= $col8 ?> d-flex d-flex justify-content-center p-4">
            <button class="btn btn-info px-5" data-toggle="modal" data-target="#ventanaModular"><?php echo $lang['formSolicitudPedidos']['Facturar']?></button>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ventanaModular" tabindex="-1" role="dialog" aria-labelledby="ventanaModularLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="ventanaModularLabel"><?php echo $lang['formSolicitudPedidos']['InfoTarjeta']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="bg-light rounded">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../publico/php/procesarFactura.php" method="post" id="formFacturar">
                    <div class="row">
                        <div class="<?= $col6 ?>">
                            <p><?php echo $lang['formSolicitudPedidos']['MetodoPago']?></p>
                            <select class="form-control" name="sMetodoPago">
                                <option value="<?php echo $lang['formSolicitudPedidos']['TarjetaCredito']?>"><?php echo $lang['formSolicitudPedidos']['TarjetaCredito']?></option>
                                <option value="<?php echo $lang['formSolicitudPedidos']['TarjetaDebito']?>"><?php echo $lang['formSolicitudPedidos']['TarjetaDebito']?></option>
                            </select>
                        </div>
                        <div class="<?= $col6 ?>">
                            <p><?php echo $lang['formSolicitudPedidos']['NomTarjeta']?></p>
                            <input class="form-control" type="text" name="txtNomTarjetaSP" id="txtNomTarjetaSP" placeholder="<?php echo $lang['formSolicitudPedidos']['PLNomTarjetaSP']?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="<?= $col6 ?>">
                            <p><?php echo $lang['formSolicitudPedidos']['NumTarjeta']?></p>
                            <input class="form-control" type="text" name="txtNumTarjetaSP" id="txtNumTarjetaSP" placeholder="<?php echo $lang['formSolicitudPedidos']['PLNumTarjetaSP']?>">
                        </div>
                        <div class="<?= $col6 ?>">
                            <p><?php echo $lang['formSolicitudPedidos']['FechaVence']?></p>
                            <center>  <input type="text" name="txtFechaVenceSP" id="yearpicker"></center>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="<?= $col6 ?>">
                            <p><?php echo $lang['formSolicitudPedidos']['Comprobante']?></p>
                            <input class="form-control" type="text" name="txtComprobanteSP" value="<?php echo $lang['formSolicitudPedidos']['PLComprobanteSP']?>" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-6 col-sm-6 col-md-6 col-lg-6 d-flex justify-content-center p-4">
                        <button class="btn btn-info px-5" type="submit"><?php echo $lang['formSolicitudPedidos']['Enviar']?></button>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex d-flex justify-content-center p-4">
                            <button class="btn btn-secondary px-5" type="button" data-dismiss="modal"><?php echo $lang['formSolicitudPedidos']['Cancelar']?></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>


    </div>
</div>
<style type="text/css">
    select.monthpick {
        margin-right: 3px;
        border: 2px solid blue;
        border-radius: 5px;

        height: 38px;
        width: 100px;

    }

    select.yearpick {
        margin-left: 3px;
        border: 2px solid blue;
        border-radius: 5px;
        height: 38px;
        width: 100px;

    }
</style>

<?php
include('../includes/pie.php');
?>