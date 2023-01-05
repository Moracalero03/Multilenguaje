<?php
require 'procesarSesion.php';  
require '../../vendor/autoload.php'; #Cargar todas las dependencias
use Valitron\Validator as V;
V::langDir( "../../vendor/vlucas/valitron/lang"); 
V::lang($_SESSION['lang']); 

$v = new \Valitron\Validator($_POST);
$v->rule("required", ["txtNombreCE", "txtCorreoCE", "txtNacionalidadCE", "txtNIdentidadCE", "txtTelefonoCE","txtDireccionCE","txtProductoCE","txtCantidadCE","txtPrecioUnitarioCE","txtTotalIvaCE"]);

$v->rule('regex', ['txtNombreCE','txtNacionalidadCE','txtProductoCE'], '/^[a-zA-ZñÑáéíóúäëïöü]+(\s*[a-zA-ZñÑáéíóúäëïöü]*)*[a-zA-ZñÑáéíóúäëïöü]+$/');

# Permite  tener caracteres especiales a la hora de escribir la direccion 
$v->rule('regex', 'txtDireccionCE', '/^([a-zA-ZñÑáéíóúäëïöü#0-9\s]*)+/');

#permite ingresar el nuero de identificacion 00000000-0
$v->rule('regex', 'txtNIdentidadCE', '/^[0-9]{8}-[0-9]{1}$/');

#permite ingresar el numero de telefono 0000-0000
$v->rule('regex', 'txtTelefonoCE', '/^[0-9]{4}-[0-9]{4}$/');

# El correo debe ser un correo
$v->rule("email", "txtCorreoCE");

# Permite valores con decimal
$v->rule("numeric", ["txtPrecioUnitarioCE","txtTotalIvaCE"]);

if ($_SESSION['lang'] == "es") {
  $v->labels(array(
    'txtNombreCE' => 'Nombre',
    'txtCorreoCE' => 'Correo',
    'txtNacionalidadCE' => 'Nacionalidad',
    'txtNIdentidadCE' => 'Numero de identificacion',
    'txtTelefonoCE' => 'Telefono',
    'txtDireccionCE' => 'Direccion',
    'txtProductoCE' => 'Producto',
    'txtCantidadCE' => 'Cantidad',
    'txtPrecioUnitarioCE' => 'Precio Unitario',
    'txtTotalIvaCE' => 'Total con IVA'
));

if ($v->validate()) {

    echo "<script>
            var Toast = Swal.mixin({ toast: true, position: 'top-end', 
              showConfirmButton: false, 
              timer: 3000, 
              timerProgressBar: 
              true, 
              didOpen: (toast) => { 
                toast.addEventListener('mouseenter', Swal.stopTimer) 
                toast.addEventListener('mouseleave', Swal.resumeTimer) } 
              }) 
                Toast.fire({ icon: 'success', title: 'Datos enviados correctamente' })
                </script>";


    if (!empty($_POST)) {

        $tableExistencia = '<table class="table table-info table-responsive">
        <tr>
        <th class="lang" key="nombre" data-section="formConsultaExistencia" data-value="nombre">Nombre</th>
        <th class="lang" key="correo" data-section="formConsultaExistencia" data-value="correo">Correo</th>
        <th class="lang" key="nacionalidad" data-section="formConsultaExistencia" data-value="nacionalidad">Nacionalidad</th>
        <th class="lang" key="nIdentidad" data-section="formConsultaExistencia" data-value="nIdentdad">Numero de Identidad</th>
        <th class="lang" key="telefono" data-section="formConsultaExistencia" data-value="telefono">Telefono</th>
        <th class="lang" key="direccion" data-section="formConsultaExistencia" data-value="direccion">Direccion</th>
        <th class="lang" key="producto" data-section="formConsultaExistencia" data-value="producto">Producto</th>
        <th class="lang" key="cantidad" data-section="formConsultaExistencia" data-value="cantidad">Cantidad</th>
        <th class="lang" key="precioUnitario" data-section="formConsultaExistencia" data-value="precioUnitario">Precio Unitario</th>
        <th class="lang" key="totalIva" data-section="formConsultaExistencia" data-value="totalIva">Total con IVA</th>
        <th class="lang" key="metodoPago" data-section="formConsultaExistencia" data-value="metodoPago">Metodo de Pago</th>
        <th class="lang" key="estado" data-section="formConsultaExistencia" data-value="estado">Estado</th>
        </tr>';

        $tableExistencia .= '<tr>
            
            <td>'.$_POST["txtNombreCE"].'</td>
            <td>'.$_POST["txtCorreoCE"].'</td>
            <td>'.$_POST["txtNacionalidadCE"].'</td>
            <td>'.$_POST["txtNIdentidadCE"].'</td>
            <td>'.$_POST["txtTelefonoCE"].'</td>
            <td>'.$_POST["txtDireccionCE"].'</td>
            <td>'.$_POST["txtProductoCE"].'</td>
            <td>'.$_POST["txtCantidadCE"].'</td>
            <td>'.$_POST["txtPrecioUnitarioCE"].'</td>
            <td>'.$_POST["txtTotalIvaCE"].'</td>
            <td>'.$_POST["metodoPagoCE"].'</td>
            <td>'.$_POST["estado"].'</td>
        </tr>';
        
        $tableExistencia.= '</table>';

    }
    echo $tableExistencia;

    } else {
    echo "<script>
  var Toast = Swal.mixin({ toast: true, position: 'top-end', 
    showConfirmButton: false, 
    timer: 3000, 
    timerProgressBar: 
    true, 
    didOpen: (toast) => { 
      toast.addEventListener('mouseenter', Swal.stopTimer) 
      toast.addEventListener('mouseleave', Swal.resumeTimer) } 
    }) 
      Toast.fire({ icon: 'error', title: 'Tiene errores en el formulario' })
      </script>";
      
     $errores = $v->errors();
  $lista = '<p>
    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="colapsar">Correcciones(Dar click)</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="colapsar">';
    foreach ($errores as $conjuntoDeErrores) {
        foreach ($conjuntoDeErrores as $error) {
           // echo $error . "<br>";
        $lista .= '<div class="card card-body">' .
  $error .'     
      </div>';
        }
         $lista.= 
'</div>
  </div>
  </div>';
    }
       
        echo $lista;
    
    
    }
}else{
  $v->labels(array(
    'txtNombreCE' => 'Name',
    'txtCorreoCE' => 'Email',
    'txtNacionalidadCE' => 'Nationality',
    'txtNIdentidadCE' => 'Identification number',
    'txtTelefonoCE' => 'Telephone',
    'txtDireccionCE' => 'Address',
    'txtProductoCE' => 'Product',
    'txtCantidadCE' => 'Quantity',
    'txtPrecioUnitarioCE' => 'Unit Price',
    'txtTotalIvaCE' => 'Total with VAT'
));

if ($v->validate()) {

    echo "<script>
            var Toast = Swal.mixin({ toast: true, position: 'top-end', 
              showConfirmButton: false, 
              timer: 3000, 
              timerProgressBar: 
              true, 
              didOpen: (toast) => { 
                toast.addEventListener('mouseenter', Swal.stopTimer) 
                toast.addEventListener('mouseleave', Swal.resumeTimer) } 
              }) 
                Toast.fire({ icon: 'success', title: 'Data sent correctly' })
                </script>";

    if (!empty($_POST)) {

        $tableExistencia = '<table class="table table-info table-responsive">
        <tr>
        <th class="lang" key="nombre" data-section="formConsultaExistencia" data-value="nombre">Name</th>
        <th class="lang" key="correo" data-section="formConsultaExistencia" data-value="correo">Email</th>
        <th class="lang" key="nacionalidad" data-section="formConsultaExistencia" data-value="nacionalidad">Nationality</th>
        <th class="lang" key="nIdentidad" data-section="formConsultaExistencia" data-value="nIdentdad">Identity Number</th>
        <th class="lang" key="telefono" data-section="formConsultaExistencia" data-value="telefono">Phone</th>
        <th class="lang" key="direccion" data-section="formConsultaExistencia" data-value="direccion">Address</th>
        <th class="lang" key="producto" data-section="formConsultaExistencia" data-value="producto">Product</th>
        <th class="lang" key="cantidad" data-section="formConsultaExistencia" data-value="cantidad">Quantity</th>
        <th class="lang" key="precioUnitario" data-section="formConsultaExistencia" data-value="precioUnitario">Unit Price</th>
        <th class="lang" key="totalIva" data-section="formConsultaExistencia" data-value="totalIva">Total with IVA</th>
        <th class="lang" key="metodoPago" data-section="formConsultaExistencia" data-value="metodoPago">Payment method</th>
        <th class="lang" key="estado" data-section="formConsultaExistencia" data-value="estado">Status</th>
        </tr>';

        $tableExistencia .= '<tr>
            
            <td>'.$_POST["txtNombreCE"].'</td>
            <td>'.$_POST["txtCorreoCE"].'</td>
            <td>'.$_POST["txtNacionalidadCE"].'</td>
            <td>'.$_POST["txtNIdentidadCE"].'</td>
            <td>'.$_POST["txtTelefonoCE"].'</td>
            <td>'.$_POST["txtDireccionCE"].'</td>
            <td>'.$_POST["txtProductoCE"].'</td>
            <td>'.$_POST["txtCantidadCE"].'</td>
            <td>'.$_POST["txtPrecioUnitarioCE"].'</td>
            <td>'.$_POST["txtTotalIvaCE"].'</td>
            <td>'.$_POST["metodoPagoCE"].'</td>
            <td>'.$_POST["estado"].'</td>
        </tr>';
        
        $tableExistencia.= '</table>';

    }
    echo $tableExistencia;

    } else {
    echo "<script>
  var Toast = Swal.mixin({ toast: true, position: 'top-end', 
    showConfirmButton: false, 
    timer: 3000, 
    timerProgressBar: 
    true, 
    didOpen: (toast) => { 
      toast.addEventListener('mouseenter', Swal.stopTimer) 
      toast.addEventListener('mouseleave', Swal.resumeTimer) } 
    }) 
      Toast.fire({ icon: 'error', title: 'You have errors in the form' })
      </script>";
      
     $errores = $v->errors();
  $lista = '<p>
    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="colapsar">Corrections(Click here)</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="colapsar">';
    foreach ($errores as $conjuntoDeErrores) {
        foreach ($conjuntoDeErrores as $error) {
           // echo $error . "<br>";
        $lista .= '<div class="card card-body">' .
  $error .'     
      </div>';
        }
         $lista.= 
'</div>
  </div>
  </div>';
    }
        echo $lista;
}
}


?>