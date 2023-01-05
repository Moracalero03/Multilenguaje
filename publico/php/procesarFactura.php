<?php
require 'procesarSesion.php';
require '../../vendor/autoload.php'; #Cargar todas las dependencias
use Valitron\Validator as V;
V::langDir( "../../vendor/vlucas/valitron/lang");
V::lang($_SESSION['lang']);


$v = new \Valitron\Validator($_POST);
$v->rule("required", ["sMetodoPago", "txtNomTarjetaSP", "txtNumTarjetaSP", "txtAnio", "txtMes", "txtComprobanteSP" ]);

$v->rule('regex', ["sMetodoPago","txtNomTarjetaSP", "txtComprobanteSP" ], '/^[a-zA-ZñÑáéíóúäëïöü]+(\s*[a-zA-ZñÑáéíóúäëïöü]*)*[a-zA-ZñÑáéíóúäëïöü]+$/');

#permite ingresar el numero de tarjeta http://w3.unpocodetodo.info/utiles/regex-ejemplos.php?type=cc
$v->rule('regex', 'txtNumTarjetaSP', '/^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$/');

if ($_SESSION['lang'] == 'es') {
    $v->labels(array(
        'sMetodoPago' => 'El método de pago',
        'txtNomTarjetaSP' => 'El nombre de la tarjeta',
        'txtNumTarjetaSP' => 'El número de tarjeta',
        'txtAnio' => 'El año',
        'txtMes' => 'El mes',
        'txtComprobanteSP' => 'El comprobante'
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
            $tableFactura = '<table class="table table-info table-responsive" id="factura">
            <tr>
            <th class="lang" key="MetodoPago" data-section="formSolicitudPedidos" data-value="MetodoPago">Método de pago</th>
            <th class="lang" key="NomTarjeta" data-section="formSolicitudPedidos" data-value="NomTarjeta">Nombre de la tarjeta</th>
            <th class="lang" key="NumTarjeta" data-section="formSolicitudPedidos" data-value="NumTarjeta">Número de tarjeta</th>
            <th class="lang" key="FechaVence" data-section="formSolicitudPedidos" data-value="FechaVence">Fecha de vencimiento</th>
            <th class="lang" key="Comprobante" data-section="formSolicitudPedidos" data-value="Comprobante">Comprobante</th>
            </tr>';
    
            $tableFactura .= '<tr>
                <td>'.$_POST["sMetodoPago"].'</td>
                <td>'.$_POST["txtNomTarjetaSP"].'</td>
                <td>'.$_POST["txtNumTarjetaSP"].'</td> 
                <td>'.$_POST["txtAnio"]."/".$_POST["txtMes"].'</td>
                <td>'.$_POST["txtComprobanteSP"].'</td>
                
    
            </tr>';
    
            
            $tableFactura.= '</table>';
    
        }
        echo $tableFactura;
    
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
        'sMetodoPago' => 'The payment method',
        'txtNomTarjetaSP' => 'The name of the card',
        'txtNumTarjetaSP' => 'The card number',
        'txtAnio' => 'The year',
        'txtMes' => 'The month',
        'txtComprobanteSP' => 'The voucher'
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
            Toast.fire({ icon: 'success', title: 'Data sent successfully' })
            </script>"; 
            
            if (!empty($_POST)) {
                $tableFactura = '<table class="table table-info table-responsive" id="factura">
                <tr>
                <th class="lang" key="MetodoPago" data-section="formSolicitudPedidos" data-value="MetodoPago">Payment method</th>
                <th class="lang" key="NomTarjeta" data-section="formSolicitudPedidos" data-value="NomTarjeta">Card name</th>
                <th class="lang" key="NumTarjeta" data-section="formSolicitudPedidos" data-value="NumTarjeta">Card number</th>
                <th class="lang" key="FechaVence" data-section="formSolicitudPedidos" data-value="FechaVence">Expiration date</th>
                <th class="lang" key="Comprobante" data-section="formSolicitudPedidos" data-value="Comprobante">Voucher</th>
                </tr>';
        
                $tableFactura .= '<tr>
                    <td>'.$_POST["sMetodoPago"].'</td>
                    <td>'.$_POST["txtNomTarjetaSP"].'</td>
                    <td>'.$_POST["txtNumTarjetaSP"].'</td> 
                    <td>'.$_POST["txtAnio"]."/".$_POST["txtMes"].'</td>
                    <td>'.$_POST["txtComprobanteSP"].'</td>
                    
        
                </tr>';
                
                $tableFactura.= '</table>';
        
            }
            echo $tableFactura;
    
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
        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="colapsar">Corrections(Click)</button>
        </p>
        <div class="row">
        <div class="col">
        <div class="collapse multi-collapse" id="colapsar">';
        foreach ($errores as $conjuntoDeErrores) {
            foreach ($conjuntoDeErrores as $error) {
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