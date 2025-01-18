<html>
<head>

<link rel="stylesheet" href="formatos.css">


</head>


<body>



<?php 

print "<h1>Bienvenido a la pagina PHP </h1><br>";
print "Vamos a trabajar las conexiones a bases de datos y consultas SQL! <br>";
print "Aqui se muestra el esquema relacional de la base de datos propuesta<br>";
?>

<img src="imagenes/transacciones.jpg" alt="EsquemaER_Transacciones" style="width:1200px;height:600px;"></img>

<?php 

print "<h2> Paso a tablas</h2>";

//CREAR UNA VARIABLE Y CARGARLE EL CONTENIDO DEL TXT PARA IMPRIMIRLO EN PANTALLA
         $archivo = 'scriptsbaseDatos.txt';
        // Leer el contenido
        $contenido = file_get_contents($archivo);
        // Imprimir el contenido
        echo "<p>$contenido</p>";
        
  print "<h2>Queda por hacer: CRUD basico</h2>";
  print "<p>Aunque ya se muestran resultados predefinidos</p>";
  print "<p>Por ejemplo aqui el resultado de hacer</p>";
  
  print "<p>SELECT ventas.IdVenta, clientes.Nombre, ventas.Cantidad, Productos.nombre </br>
            FROM clientes INNER JOIN Ventas on clientes.IDCliente = Ventas.Ref_Cliente </br>
            INNER JOIN Productos on Ventas.Ref_producto = Productos.IdProducto </p>";
  
 print "(Bueno tambien se formatea la salida a celdas de tabla con rotulos)";
 
  include "conexionbdjoin.php";
  
  
  
  
?>

<p>En resumen se tiene una base da datos formada por 5 tablas relacionadas</p>
<p>Clientes, Ventas, Productos, Compras y Proveedores </p>
<p>Ya podemos hacer consultas en la base de datos, como por ejemplo:</p>
<p>¿Quien ha pedido zumo?<p>
<p>¿Cuanto zumo se ha pedido<p>
<p>¿De donde viene y a donde va el zumo?</p>
<p>¿se vende mas zumo que cerveza?</p>
<p>¿Cuando se vende mas zumo?</p>


<p>Zumo de naranjaaaa</p>



</body>

</html>