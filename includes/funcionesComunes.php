<?php
    function parametro_plantilla($variable){
        if (isset($GLOBAL[$variable])) {
            echo $GLOBAL[$variable];
        }else {
            echo "Sin dato";
        }
    }
?>