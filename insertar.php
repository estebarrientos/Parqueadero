<?php
include("BaseDatos.php");

if(isset($_POST["botonEnvio"])){
    
   
    $placa=$_POST["placa"];
    $marca=$_POST["marca"];
    $modelo=$_POST["modelo"];
    $color=$_POST["color"];
    $conductor =$_POST["conductor"];
    $foto=$_POST["foto"];
    $contrato=($_POST["contrato"]);
    $entrada = $_POST["horaEntrada"];
    $estado ="PENDIENTE";
    

 
    $transaccion=new BaseDatos();
    $consultaDisponible ="SELECT disponible FROM disponibilidad";
    $resultado = $transaccion->consultarDatos($consultaDisponible);
    $totalDisponible =$resultado[0]["disponible"];
   //echo ($totalDisponible);

   if($totalDisponible > 18){
    $nuevoDisponible = $totalDisponible -1;
    $transaccion2=new BaseDatos();
    $transaccion3= new BaseDatos();
    

   
    $consultaSQL1="INSERT INTO autos(placa,modelo,marca,color,nombre_conductor,contrato,foto) VALUES ('$placa','$modelo','$marca','$color','$conductor','$contrato','$foto')";
    $consultaSQL2= "INSERT INTO movimiento(hora_entrada,placaAuto,estado) VALUES ('$entrada','$placa','$estado')";
    $consultaSQL3="UPDATE disponibilidad SET disponible ='$nuevoDisponible' WHERE id_disponible= 1";

    
    if($transaccion2->agregarDatos($consultaSQL1)){
   $transaccion3->agregarDatos($consultaSQL2);
   $transaccion2->editarDatos($consultaSQL3);
   $variable=1;

    }else{
        $variable=0;
    }
    


   if($variable==1){
    header("location: index.php");
}else{
    header("location: noDisponible.php");
} 

   
}



}
?>