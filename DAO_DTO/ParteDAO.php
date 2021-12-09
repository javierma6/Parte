
<?php


include_once 'DatosParteDTO.php';

//Añadiendo el archivo conexion.php que obtiene la conexión
// leyendo los datos de conexión de un fichero .ini
include_once '../conexiones/conexion.php';


// Comprobar la conexión
if (!$conexion) {

die("Error en la conexión: " . mysqli_connect_error());

}

class ParteDao{
   //contructor vacío
 function __construct(){

}

}






//Función mostrar
function mostrar(){
    $conexion = conectar();
  
    // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("SELECT * FROM parte");
    $stmt->execute();

    echo '<table ><tr><td>ID</td><td>Nombre alumno</td><td>Motivo</td><td>Fecha Quedada</td><td>Curso</td></tr>';
    foreach ($stmt as $row){
       echo '<tr><td>'.$row['id'].'</td><td>'.$row['nombreAlumno'].'</td><td>'.$row['motivo'].'</td><td>'.$row['fechaQuedada'].'</td><td>'.$row['curso'].'</td></tr>';
    }
    $conexion =null;
 }//Final de mostrar






// Cerramos la conexión
mysqli_close($conexion);


?>