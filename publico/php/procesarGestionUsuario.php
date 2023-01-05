<?php
require 'procesarSesion.php';  
require '../../vendor/autoload.php'; #Cargar todas las dependencias
use Valitron\Validator as V;
V::langDir( "../../vendor/vlucas/valitron/lang"); 
V::lang($_SESSION['lang']); 

$v = new \Valitron\Validator($_POST);
$v->rule("required", ["txtid", "txtNombreU", "txtApellidoU", "txtNumeroIdentificacionU", "txtCorreoU","txtNacionalidadU","txtDireccionU","txtTelefonoU"]);

#permite solo  poner en entero 
$v->rule('integer', 'txtid');

$v->rule('regex', ['txtNombreU','txtApellidoU','txtNacionalidadU'], '/^[a-zA-ZñÑáéíóúäëïöü]+(\s*[a-zA-ZñÑáéíóúäëïöü]*)*[a-zA-ZñÑáéíóúäëïöü]+$/');

# Permite  tener caracteres especiales a la hora de escribir la direccion 
$v->rule('regex', 'txtDireccionU', '/^([a-zA-ZñÑáéíóúäëïöü#0-9\s]*)+/');

#permite ingresar el nuero de identificacion 00000000-0
$v->rule('regex', 'txtNumeroIdentificacionU', '/^[0-9]{8}-[0-9]{1}$/');

#permite ingresar el numero de telefono 0000-0000
$v->rule('regex', 'txtTelefonoU', '/^[0-9]{4}-[0-9]{4}$/');

# El correo debe ser un correo
$v->rule("email", "txtCorreoU");

if ($_SESSION['lang'] == "es") {
  $v->labels(array(
    'txtid' => 'ID',
    'txtNombreU' => 'Nombre',
    'txtApellidoU' => 'Apellido',
    'txtNumeroIdentificacionU' => 'Numero de Identidad',
    'txtCorreoU' => 'El campo',
    'txtNacionalidadU' => 'Nacionalidad',
    'txtDireccionU' => 'Direccion',
    'txtTelefonoU' => 'Telefono'
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
        $tableUsuario = '<table class="table table-info table-responsive-sm">
        <tr>
            <th class="lang" key="nombre" data-section="formGestionUsuario" data-value="nombre">Nombre</th>
            <th class="lang" key="apellido" data-section="formGestionUsuario" data-value="apellido">Apellido</th>
            <th class="lang" key="numeroIdentificacion" data-section="formGestionUsuario" data-value="numeroIdentificacion">Numero de identificacion</th>
            <th class="lang" key="correo" data-section="formGestionUsuario" data-value="correo">Correo</th>
            <th class="lang" key="nacionalidad" data-section="formGestionUsuario" data-value="nacionalidad">Nacionalidad</th>
            <th class="lang" key="direccion" data-section="formGestionUsuario" data-value="direccion">Dirección</th>
            <th class="lang" key="telefono" data-section="formGestionUsuario" data-value="telefono">Telefono</th>
        </tr>';

        $tableUsuario .= '<tr>
            <td>'.$_POST["txtNombreU"].'</td>
            <td>'.$_POST["txtApellidoU"].'</td>
            <td>'.$_POST["txtNumeroIdentificacionU"].'</td>
            <td>'.$_POST["txtCorreoU"].'</td>
            <td>'.$_POST["txtNacionalidadU"].'</td>
            <td>'.$_POST["txtDireccionU"].'</td>
            <td>'.$_POST["txtTelefonoU"].'</td>
        </tr>';
   $tableUsuario.= '</table>';

    }
    echo $tableUsuario;
     
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
}else {
  $v->labels(array(
    'txtid' => 'ID',
    'txtNombreU' => 'FirstName',
    'txtApellidoU' => 'LastName',
    'txtNumeroIdentificacionU' => 'Identity Number',
    'txtCorreoU' => 'Email',
    'txtNacionalidadU' => 'Nationality',
    'txtDireccionU' => 'Address',
    'txtTelefonoU' => 'Telephone'
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
        $tableUsuario = '<table class="table table-info table-responsive-sm">
        <tr>
            <th class="lang" key="nombre" data-section="formGestionUsuario" data-value="nombre">Name</th>
            <th class="lang" key="apellido" data-section="formGestionUsuario" data-value="apellido">Last name</th>
            <th class="lang" key="numeroIdentificacion" data-section="formGestionUsuario" data-value="numeroIdentificacion">Identity Number</th>
            <th class="lang" key="correo" data-section="formGestionUsuario" data-value="correo">Email</th>
            <th class="lang" key="nacionalidad" data-section="formGestionUsuario" data-value="nacionalidad">Nationality</th>
            <th class="lang" key="direccion" data-section="formGestionUsuario" data-value="direccion">Address</th>
            <th class="lang" key="telefono" data-section="formGestionUsuario" data-value="telefono">Phone</th>
        </tr>';

        $tableUsuario .= '<tr>
            <td>'.$_POST["txtNombreU"].'</td>
            <td>'.$_POST["txtApellidoU"].'</td>
            <td>'.$_POST["txtNumeroIdentificacionU"].'</td>
            <td>'.$_POST["txtCorreoU"].'</td>
            <td>'.$_POST["txtNacionalidadU"].'</td>
            <td>'.$_POST["txtDireccionU"].'</td>
            <td>'.$_POST["txtTelefonoU"].'</td>
        </tr>';
   $tableUsuario.= '</table>';

    }
    echo $tableUsuario;



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

