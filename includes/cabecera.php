<?php 
$raiz ="../";
require_once('../publico/php/db.php'); //creacion de archivos json 
require_once('../publico/php/configuracion.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']?>" dir="ltr"  class="translate lang" id="<?php echo $_SESSION['lang']?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $lang['global'][$value]?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$raiz?>publico/css/estilos.css">
    <link rel="stylesheet" href="<?=$raiz?>publico/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- ValidationEngine -->
    <link rel="stylesheet" href="<?=$raiz?>publico/js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../publico/js/jQuery-Validation-Engine-master/js/jquery.validationEngine.min.js"></script> 
    <script src="<?=$raiz?>publico/js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-<?php echo $_SESSION['lang']?>.js" referrerpolicy="no-referrer"></script>
    <script src="../publico/js/alertas.js"></script> 

    <!-- PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf-autotable"></script>

    <!-- MonthPicker -->
    <script src="<?=$raiz?>publico/js/monthpicker-master/jquery.monthpicker.min.js" type="text/javascript"></script>  

    <!--Input file-->
    <link href="../publico/js/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../publico/js/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
    <script src="../publico/js/bootstrap-fileinput-master/js/locales/idioma.js" type="text/javascript"></script>

    <!-- DatePicker -->
    <link rel="stylesheet" href="../publico/js/bootstrap-datepicker-master/css/bootstrap-datepicker.css">
    <script src="../publico/js/bootstrap-datepicker-master/js/bootstrap-datepicker.js"></script>
    <script src="../publico/js/bootstrap-datepicker-master/js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
    <script src="../publico/js/bootstrap-datepicker-master/js/locales/bootstrap-datepicker.en-CA.js" charset="UTF-8"></script>
    <!-- <script>window.reload()</script> -->
</head>
<body>
    <?php
        include('../includes/barraMenu.php');
    ?>
            <div class="col-lg-12" id="banner">
                <h1><?php echo $lang['global'][$value]?></h1>
            </div>
            <div class="container-fluid ">


