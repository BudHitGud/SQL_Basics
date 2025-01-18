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
$consulta ="SELECT ventas.IdVenta, clientes.Nombre, ventas.Cantidad, Productos.nombre FROM clientes INNER JOIN Ventas on clientes.IDCliente = Ventas.Ref_Cliente
                                                                                  INNER JOIN Productos on Ventas.Ref_producto = Productos.IdProducto  ";

//RESULT SET (CONEXION + CONSULTA = RESULT SET)
$resultadoConsulta = mysqli_query($dbconn, $consulta);

//echo $resultadoConsulta;


    
    echo"<table><tr><th>IDVenta</th><th>Nombre</th><th>Cantidad</th><th>Producto</th></tr>";
      
    while(($fila = mysqli_fetch_row($resultadoConsulta)) ==true) {
       
    echo "<tr><td>";    
    echo $fila[0] . "</td><td>";
    echo $fila[1] . "</td><td>";
    echo $fila[2] . "</td><td>";
    echo $fila[3] . "</td>";
    
    }
    echo"</tr></table>";





?>