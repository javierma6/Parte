
<?php


include_once 'DatosProfesoresDTO.php';

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






//Función mostrar
function mostrar(){
    $conexion = conectar();
  
    // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("SELECT * FROM profesor");
    $stmt->execute();

    echo '<table ><tr><td>ID</td><td>Nombre Profesor</td><td>Apellidos Profesor</td><td>Firma profesor</td><td>Asignatura</td></tr>';
    foreach ($stmt as $row){
       echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombre'].'</td><td>'.$row['apellidos'].'</td><td>'.$row['firmaProfesor'].'</td><td>'.$row['asignatura'].'</td></tr>';
    }
    $conexion =null;
 }//Final de mostrar






// Cerramos la conexión
mysqli_close($conexion);


?>