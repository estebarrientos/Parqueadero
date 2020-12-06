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
        echo("se agrego el registro con éxito");
    }else{
        echo("Error agregando el registro");
    }
    
}

public function consultarDatos($consultaSQL){

   
    $conexionBD=$this->conectarBD();

    
    $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

   
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

   
    $resultado=$consultaBuscarDatos->execute();

  
    return($consultaBuscarDatos->fetchAll());
}

}



?>