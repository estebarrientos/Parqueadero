<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


    <?php
    
 
        include("BaseDatos.php");

        $transaccion=new BaseDatos();
        
        
        $consultaSQL="SELECT placa,marca, modelo, color, nombre_conductor,foto FROM autos  where contrato ='MENSUAL'";

        
        $autos=$transaccion->consultarDatos($consultaSQL);

      

    ?>

    <div class="container">
    <h1>Control Autos con Suscripción mensual Vigente</h1>

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($autos as $auto): ?>

                <div class="col mb-4">

                    <div class="card h-100">
                        <img src="<?php echo($auto["foto"])?>" class="card-img-top" alt="fotoscard">
                        <div class="card-body">
                            <h5 class="card-title">Placa<?= ": ".$auto["placa"] ?></h5>
                            <p class="card-text">Marca<?= ": ".$auto["marca"] ?></p>
                            <p class="card-text">Modelo<?= ": ".$auto["modelo"] ?></p>
                            <p class="card-text">Color<?= ": ".$auto["color"] ?></p>
                            <p class="card-text">Nombre de Conductor<?= " ".$auto["nombre_conductor"] ?></p>
                            
                           
                        </div>
                    </div>

                    

                </div>
                
            <?php endforeach ?>

        </div>
    
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>