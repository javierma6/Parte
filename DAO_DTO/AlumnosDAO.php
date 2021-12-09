
<?php


include_once 'DatosAlumnoDTO.php';

//Añadiendo el archivo conexion.php que obtiene la conexión
// leyendo los datos de conexión de un fichero .ini
include_once '../conexiones/conexion.php';


// Comprobar la conexión
if (!$conexion) {

die("Error en la conexión: " . mysqli_connect_error());

}

class AlumnosDao{
   //contructor vacío
 function __construct(){

}

}



 //Final función insertar


//Función mostrar
function mostrar(){
    $conexion = conectar();
  
    // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("SELECT * FROM alumno");
    $stmt->execute();

    echo '<table ><tr><td>ID</td><td>Nombre Padres</td><td>Apellidos Padres</td><td>Código Postal</td><td>Ciudad</td><td>Calle</td></tr>';
    foreach ($stmt as $row){
       echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombrePadre'].'</td><td>'.$row['apellidoPadre'].'</td><td>'.$row['cp'].'</td><td>'.$row['ciudad'].'</td><td>'.$row['calle'].'</td></tr>';
    }
    $conexion =null;
 }//Final de mostrar






// Cerramos la conexión
mysqli_close($conexion);


?>