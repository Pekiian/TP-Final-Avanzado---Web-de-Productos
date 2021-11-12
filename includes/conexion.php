<?php 
$db = mysqli_connect('localhost', 'root', 'BatmanCoder9853', 'tp_final_avanzado_bbdd_4to');

if(!$db){ //En caso de que $db esté vacía
    echo "Error en la conexión";
    exit; //'exit' va a frenar la ejecución del resto del archivo
} else{
    return $db;
}
