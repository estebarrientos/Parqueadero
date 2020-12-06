<?php
include("BaseDatos.php");

if(isset($_POST["botonEnvio"])){
    
   
    $placa=$_POST["placa"];
    $marca=$_POST["marca"];
    $modelo=$_POST["modelo"];
    $color=$_POST["color"];
    $conductor =$_POST["conductor"];
    $foto=$_POST["foto"];
    $contrato=$_POST["contrato"];
    $entrada = $_POST["horaEntrada"];
    

 
    $transaccion=new BaseDatos();

   
    $consultaSQL="INSERT INTO autos(placa,modelo,marca,color,nombre_conductor,contrato,foto) VALUES ('$placa','$modelo','$marca','$color','$conductor','$contrato','$foto')";
    $consultaSQL2= "INSERT INTO movimiento(hora_entrada,placaAuto) VALUES ('$entrada','$placa')";

    $transaccion->agregarDatos($consultaSQL);
    $transaccion->agregarDatos($consultaSQL2);

    if($transaccion){
        header("location: index.php");
    }
    

   




}
?>