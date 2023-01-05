<?php
include_once('../includes/funcionesComunes.php');
$value="ConsultaExistencia";
$datasection="formConsultaExistencia";
$col11="col-11 col-lg-12";
$col10="col-7 col-lg-7"; 
$section = "ConsultaExistencia.php";

include('../includes/cabecera.php');

?>
            
            <div class="<?=$col11?> p-4 mx-auto" >    
            <table id="example" class="table table-light table-striped table-bordered dt-responsive wrap" cellspacing="0" style="width:100%">
        <thead>
            <tr>
                <th ><?php echo $lang['formConsultaExistencia']['numeroFactura']?></th>
                <th ><?php echo $lang['formConsultaExistencia']['cliente']?></th>
                <th ><?php echo $lang['formConsultaExistencia']['comprobante']?></th>
                <th ><?php echo $lang['formConsultaExistencia']['impuesto']?></th>
                <th ><?php echo $lang['formConsultaExistencia']['total']?></th>
                <th ><?php echo $lang['formConsultaExistencia']['estado']?></th>
                <th  data-priority="1"><?php echo $lang['formConsultaExistencia']['acciones']?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010-02-12</td>
                <td>$109,850</td>
                <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen " data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square"><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009-02-14</td>
                <td>$452,500</td>
               <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen " data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square" ><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008-12-11</td>
                <td>$136,200</td>
                <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen " data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square" ><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008-09-26</td>
                <td>$645,750</td>
                 <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen "  data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square" ><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011-02-03</td>
                <td>$234,500</td>
                 <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen "   data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square"><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle " ><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011-05-03</td>
                <td>$163,500</td>
                <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen "  data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square"><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009-08-19</td>
                <td>$139,575</td>
               <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen "  data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square"><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013-08-11</td>
                <td>$98,540</td>
               <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen " data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square"><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle " ><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009-07-07</td>
                <td>$87,500</td>
               <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen "  data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square" ><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle "><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012-04-09</td>
                <td>$138,575</td>
               <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen " data-toggle="modal" data-target="#modal1" ><?php echo $lang['formConsultaExistencia']['detalles']?></button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square" ><?php echo $lang['formConsultaExistencia']['reporte']?></button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle " ><?php echo $lang['formConsultaExistencia']['anular']?></button>
                </td>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

        </tbody>
        
        </tfoot>
    </table>
</div>
</div>




<div class="modal" tabindex="-1" role="dialog" id="modal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title "><?php echo $lang['formConsultaExistencia']['consultaExistencia']?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="../publico/php/procesarConsultaExistencia.php"  method="POST" id="formConsultaExistencia">
    <div class="modal-body">
        
    <div class="row">

    <div class="col-md-12  form-group mt-1 mb-1">
    <h5 class="modal-title text-center text-dark" ><?php echo $lang['formConsultaExistencia']['detallesCliente']?></h5>
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class=" " ><?php echo $lang['formConsultaExistencia']['nombre']?></label>
        <input type="text" class="form-control" name="txtNombreCE" id="txtNombreCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLNombreCE']?>"  data-validetta="required">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label ><?php echo $lang['formConsultaExistencia']['correo']?></label>
        <input type="email" class="form-control" name="txtCorreoCE" id="txtCorreoCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLCorreoCE']?>"  data-validetta="required">
        
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label ><?php echo $lang['formConsultaExistencia']['nacionalidad']?></label>
        <input type="text" class="form-control" name="txtNacionalidadCE" id="txtNacionalidadCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLNacionalidadCE']?>"  data-validetta="required">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['nIdentdad']?></label>
        <input type="text" class="form-control" name="txtNIdentidadCE" id="txtNIdentidadCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLNIdentidadCE']?>"  data-validetta="required">
        
    </div>                        

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['telefono']?></label>
        <input type="text" class="form-control" name="txtTelefonoCE" id="txtTelefonoCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLTelefonoCE']?>"  data-validetta="required">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['direccion']?></label>
        <input type="text" class="form-control" name="txtDireccionCE" id="txtDireccionCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLDireccionCE']?>"  data-validetta="required">
        
    </div>

    <div class="col-md-12  form-group mt-1 mb-1">
    <h5 class="modal-title text-center text-dark "><?php echo $lang['formConsultaExistencia']['detalleProducto']?></h5>
    </div>


    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['producto']?></label>
        <input type="text" class="form-control" name="txtProductoCE" id="txtProductoCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLProductoCE']?>"  data-validetta="required">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['cantidad']?></label>
        <input type="text" class="form-control" name="txtCantidadCE" id="txtCantidadCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLCantidadCE']?>" data-validetta="required">
        
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['precioUnitario']?></label>
        <input type="text" class="form-control" name="txtPrecioUnitarioCE" id="txtPrecioUnitarioCE" placeholder="<?php echo $lang['formConsultaExistencia']['PLPrecioUnitarioCE']?>"  data-validetta="required,precioUnitario">
        
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['totalIva']?></label>
        <input type="text" class="form-control" name="txtTotalIvaCE" id="txtTotalIvaCE" placeholder="<?php echo $lang['formConsultaExistencia']['placeholderTotalIva']?>"  data-validetta="required">
        
    </div>

    <div class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['metodoPago']?></label><br>
        <select name="metodoPagoCE" class="form-control">
        <option  value="<?php echo $lang['formConsultaExistencia']['efectivo']?>"><?php echo $lang['formConsultaExistencia']['efectivo']?></option>
        <option  value="<?php echo $lang['formConsultaExistencia']['tarjeta']?>"><?php echo $lang['formConsultaExistencia']['tarjeta']?></option>
    </select>
    </div>

    <div class="col-lg-6 col-md-12 mt-1 mb-1">
        <label><?php echo $lang['formConsultaExistencia']['estado']?></label><br>
        <select name="estado" class="form-control" >
        <option  value="<?php echo $lang['formConsultaExistencia']['activo']?>"><?php echo $lang['formConsultaExistencia']['activo']?></option>
        <option  value="<?php echo $lang['formConsultaExistencia']['noActivo']?>"><?php echo $lang['formConsultaExistencia']['noActivo']?></option>
        </select>
    </div>
    
</div>

</div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary " ><?php echo $lang['formConsultaExistencia']['enviar']?></button>
    <button type="button" class="btn btn-secondary " data-dismiss="modal" ><?php echo $lang['formConsultaExistencia']['cerrar']?></button>
        
    </div>
    </form> 



</div>
</div>
</div>


<div class="col-auto" style="background-color: #004D71;">
    <div class="row">
        <div class="col-md-12">
        <div class="<?=$col11?>" id="prueba">
        </div>                
    </div>
</div>
</div>



<?php
    include('../includes/pie.php');
?>


