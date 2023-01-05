<?php
// Iniciamos la conexión a la Base de Datos
$con = mysqli_connect('localhost','root','','demo');

// Si hay error que nos arroje un mensaje                     
if ($con->connect_error) {
	die('Error en la Conexión a la Base de Datos : ('. $con->connect_errno .') '. $con->connect_error);
}

if (isset($datasection)) {

// Seleccionamos los registros
$results_es= $con->query("SELECT id, llave, valor FROM traduccion where id='$datasection' and idioma='es' or  id='global' and idioma='es'");
$results_en= $con->query("SELECT id, llave, valor FROM traduccion where id='$datasection'  and idioma='en' or id='global'  and idioma='en'");
$resultslang = $con->query("SELECT idioma, llave, valor FROM traduccion where id='$datasection' or id='global'");

// Recorremos los registros de la Base de Datos para mostrarlos
while($fila = mysqli_fetch_assoc($results_es)){
  $linkses[$fila['id']][$fila['llave']] =  $fila['valor'];
} 

while($fila = mysqli_fetch_assoc($results_en)){
    $linksen[$fila['id']][$fila['llave']] = $fila['valor'];
} 

while($fila = mysqli_fetch_assoc($resultslang)){
    $linkslang[$fila['idioma']][$fila['llave']] = $fila['valor'];
}

// Con solo json_encode imprimimos los registros, pero le agregamos 128 que es el valor numérico de la extensión JSON_PRETTY_PRINT para mostrar el array mas ordenado en pantalla
$mysql_json_es = json_encode($linkses, JSON_UNESCAPED_UNICODE);
$mysql_json_en = json_encode($linksen, JSON_UNESCAPED_UNICODE);
$mysql_json_lang = json_encode($linkslang, JSON_UNESCAPED_UNICODE);

// Creacion de los archivos JSONs
$doc = file_put_contents("../publico/js/es.json", $mysql_json_es); 
$doc = file_put_contents("../publico/js/en.json", $mysql_json_en); 
$doc = file_put_contents("../publico/js/lang.json", $mysql_json_lang); 

}else {
    echo "sin datos";
}
?>