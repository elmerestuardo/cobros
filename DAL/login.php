<?php
$servidor = "localhost";
$usuario = "root";
$clave = "root";
$bd = "prestamos";
$puerto = "33";

$conexion = new mysqli($servidor,$usuario,$clave,$bd,$puerto);
mysqli_set_charset($conexion, 'utf8');
if ($conexion->connect_error) {
    die("Error en la conexion: " . $conexion->connect_error);
}
//$sql ="SELECT * FROM login WHERE usuario ='" . $_POST['usuario'] . "' AND password = '" . $_POST['password'] . "'";
$sql = " SELECT * FROM clientes";
$orden = mysqli_query($conexion,$sql);
if(!$orden){
    echo "La consulta SQL contiene errores.".mysql_error();
    exit();
}else {
    while ($row = $orden->fetch_object()) {
        $resultado[]=$row;        
    }
}
$orden->close();
$conexion->close();
echo json_encode($resultado);
//if(count($resultado) > 0){
//    echo "hay datos"; 
//}else{
//    echo "no hay datos";
//}
?>

