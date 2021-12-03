
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



//Inicio función insertar
function insertar($DatosParteDTO){
    $conexion = conectar();

     $nombreAlumno = $DatosParteDTO->getNombreAlumno();
     $motivo = $DatosParteDTO->getMotivo();
     $fechaQuedada=$DatosParteDTO->getFechaQuedada();
     $curso=$DatosParteDTO->getCurso();


     // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("INSERT INTO parte VALUES (NULL,?,?,?,?)");
    $stmt->bindParam(1,$nombreAlumno);
    $stmt->bindParam(2,$motivo);
    $stmt->bindParam(3,$fechaQuedada);
    $stmt->bindParam(4,$curso);

     if (!$stmt->execute()){
       print "¡¡No se ha insertado!!";
     }else{
        echo "<script languaje='JavaScript'>alert('¡¡Insercción realizada!!')</script>";
     }
        
     $conexion =null;
} //Final función insertar


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