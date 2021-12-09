<?php


//Añadiendo el archivo conexion.php que obtiene la conexión
// leyendo los datos de conexión de un fichero .ini
include_once '../conexiones/conexion.php';


// Comprobar la conexión
if (!$conexion) {

die("Error en la conexión: " . mysqli_connect_error());

}


include_once 'DatosAlumnoDTO.php';


console.log($nombrePadre);

class AlumnosDao{
    //contructor vacío
  function __construct(){
 
 }
 
 }



//Inicio función insertar Alumno
function insertarAlumno($DatosAlumnoDTO){
    $conexion = conectar();

     $nombrePadre = $DatosAlumnoDTO->getNombreP();
     $apellidosPadre = $DatosAlumnoDTO->getApellidosP();
     $cp=$DatosAlumnoDTO->getCP();
     $ciudad=$DatosAlumnoDTO->getCiudad();
     $calle=$DatosAlumnoDTO->getCalle();


     // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("INSERT INTO alumno VALUES (NULL,?,?,?,?,?)");
    $stmt->bindParam(1,$nombrePadre);
    $stmt->bindParam(2,$apellidosPadre);
    $stmt->bindParam(3,$cp);
    $stmt->bindParam(4,$ciudad);
    $stmt->bindParam(5,$calle);

     if (!$stmt->execute()){
       print "¡¡No se ha insertado!!";
     }else{
        echo "<script languaje='JavaScript'>alert('¡¡Insercción realizada!!')</script>";
     }
        
     $conexion =null;
}



include_once 'DatosParteDTO.php';


class ParteDao{
    //contructor vacío
  function __construct(){
 
 }
 
 }


//Inicio función insertar Parte
function insertarParte($DatosParteDTO){
    $conexion = conectar();

     $nombreAlumno = $DatosParteDTO->getNombreAlumno();
     $motivo = $DatosParteDTO->getMotivo();
     $fechaQuedada=$DatosParteDTO->getFechaQuedada();
     $curso=$DatosParteDTO->getCurso();
     $horaCita=$DatosParteDTO->getHoraCita();



     // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("INSERT INTO parte VALUES (NULL,?,?,?,?,?)");
    $stmt->bindParam(1,$nombreAlumno);
    $stmt->bindParam(2,$motivo);
    $stmt->bindParam(3,$fechaQuedada);
    $stmt->bindParam(4,$curso);
    $stmt->bindParam(4,$horaCita);

     if (!$stmt->execute()){
       print "¡¡No se ha insertado!!";
     }else{
        echo "<script languaje='JavaScript'>alert('¡¡Insercción realizada!!')</script>";
     }
        
     $conexion =null;
} //Final función insertar



include_once 'DatosProfesoresDTO.php';

class AlumnosDao{
    //contructor vacío
  function __construct(){
 
 }
 
 }
 

//Inicio función insertar Profesor
function insertarProfesor($DatosProfesoresDTO){
    $conexion = conectar();

     $nombre = $DatosProfesoresDTO->getNombre();
     $apellidos = $DatosProfesoresDTO->getApellidos();
     $firmaProfesor=$DatosProfesoresDTO->getFirmaProfesor();
     $asignatura=$DatosProfesoresDTO->getAsignatura();


     // Ejecutamos la sentencia sql mediante prepareStatement
    $stmt = $conexion->prepare("INSERT INTO profesor VALUES (NULL,?,?,?,?)");
    $stmt->bindParam(1,$nombre);
    $stmt->bindParam(2,$apellidos);
    $stmt->bindParam(3,$firmaProfesor);
    $stmt->bindParam(4,$asignatura);

     if (!$stmt->execute()){
       print "¡¡No se ha insertado!!";
     }else{
        echo "<script languaje='JavaScript'>alert('¡¡Insercción realizada!!')</script>";
     }
        
     $conexion =null;
} //Final función insertar


?>