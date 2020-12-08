<?php 

class BaseDatos{


public $usuarioBD="root";
public $passwordBD="";


public function __construct(){}


public function conectarBD(){

    
    $infoBD="mysql:host=localhost;dbname=parqueadero";

    try{

        
        $conexionBD=new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
        return($conexionBD);

    }catch(PDOException $error){
        
        echo($error->getMessage());
    }

}

public function agregarDatos($consultaSQL){

   
    $conexionBD=$this->conectarBD();
    
   
    $consultaInsertarDatos=$conexionBD->prepare($consultaSQL);

    
    $resultado=$consultaInsertarDatos->execute();

    
    if($resultado){
        $respuesta=1;
        echo("se agrego el registro con éxito");
    }else{
        $respuesta=0;
        echo("Error agregando el registro");
    }
    return $respuesta;
    
}

public function consultarDatos($consultaSQL){

   
    $conexionBD=$this->conectarBD();

    
    $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

   
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

   
    $resultado=$consultaBuscarDatos->execute();

  
    return($consultaBuscarDatos->fetchAll());
}

public function editarDatos($consultaSQL){

    //1. Establecer una conexión con la BD
    $conexionBD=$this->conectarBD();
   
    //2. Peparar la consulta
    $consultaEditarDatos=$conexionBD->prepare($consultaSQL);

    //3. Ejecutar la consulta
    $resultado=$consultaEditarDatos->execute();

    //4. Verificar el resultado
    if($resultado){
        echo("se editó el registro con éxito");
    }else{
        echo("Error editando el registro");
    }



}

}



?>