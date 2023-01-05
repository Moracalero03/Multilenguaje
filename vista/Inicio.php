<?php
include_once('../includes/funcionesComunes.php');
$value="Inicio";
$datasection="formInicio";
$section = "Inicio.php";
include('../includes/cabecera.php');
?>
            <div id="body" >
                    <img src="<?=$raiz?>publico/img/saco2.jpeg" alt="Sacos">
                    <p class="lang"><?php echo $lang['formInicio']['texto']?></p>
                    </div>
            <?php
                include('../includes/seccion.php');
            ?>
<?php
    include('../includes/pie.php');
?>