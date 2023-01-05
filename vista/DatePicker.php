<?php
include_once('../includes/funcionesComunes.php');
$value="Calidad";
$datasection="vistaCalidad";
$section= "DatePicker.php";
$col8="col-8 col-sm-12 col-md-12 col-lg-12";
include('../includes/cabecera.php');
?>
<div class="container-fluid mt-5">
    <div class="row mx-auto">
        <div class="col-lg-2s mt-5">
            <h5>Seleccione una fecha</h5>
            <form action="../publico/php/DatePickerProcesar.php" method="post">
                <div class="form-group">
                    <div class="input-group  date mb-3 datepicker">
                        <input type='text' class="form-control" name="inputDate">
                        <div class="input-group-append">
                            <span class="input-group-text bi bi-calendar2"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger mt-2" >Enviar</button>
            </form> 
        </div>
    </div>
</div> 

</body>
</html>
<?php
    include('../includes/pie.php');
?>