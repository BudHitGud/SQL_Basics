<?php 
//CREDENCIALES
$db_host ="localhost";
$db_nombre="transacciones";
$db_usuario="root";
$db_pass="";

//CONEXION
$dbconn = mysqli_connect($db_host,$db_usuario,$db_pass, $db_nombre);
//ESTO POR SI ACASO PETA
if(mysqli_connect_errno()){
    
    echo "fallo conxion BDD";
    exit();
}


//CONECTADOS
mysqli_set_charset($dbconn,"utf8");

//COMPROBAR EXISTENCIA DE BASE DE DATOS
mysqli_select_db($dbconn, $db_nombre) or die ("No encuentra la base de datos");

//CREAR CONSULTA (LA ORACION)
$consulta ="SELECT * FROM clientes";

//RESULT SET (CONEXION + CONSULTA = RESULT SET)
$resultadoConsulta = mysqli_query($dbconn, $consulta);

//echo $resultadoConsulta;

while(($fila = mysqli_fetch_row($resultadoConsulta)) ==true) {
        
    echo "<p>$fila[0] . $fila[1] . $fila[2] . $fila[3]</p>";
    }





?>