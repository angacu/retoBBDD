<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conectando a base de datos</title>
  </head>
  <body>
    <h3>Prueba con BBDD: Conexion a World.</h3>
    <?php
      $mysqli = new mysqli("localhost", "root", "", "world");
        if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: " .
          $mysqli->connect_error;
        }
          echo "Conexion realizada correctamente<br>";

    // una vez comprobado que funciona nuestra conexion a la bbdd, hacemos la consulta
    // podemos hacer la consulta directamente desde el heidi
    // hacemos una consulta
        $resultado = $mysqli->query("SELECT * FROM country WHERE Continent='South America' ORDER BY SurfaceArea DESC");
    // cuantas filas nos devuelve
          echo "Los paises que estamos buscando ordenados por su tamaño son: ".$resultado->num_rows."<br>";
        while($fila=$resultado->fetch_assoc()){
          echo "El pais ".$fila['Name']."<br>";
        }
     ?>
  </body>
</html>
