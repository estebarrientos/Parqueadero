<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARQUE-A-T</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<?php
date_default_timezone_set("America/Bogota");
$horaActual = date("H:i:s");

?>
    <main class="container">
        <div class="row">
            <div class="col">

                <header style="height: 70px">
                    <h1>Bienvenido al Estacionamiento Parque A T</h1>
                </header>
                <div style="height: 30px;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-lg p-3 mb-5 bg-white ">
                                <div class="card-header">Ingreso de Vehículos</div>
                                <div class="card-body">
                                    <form id="form1" action="insertar.php" method="post" class="needs-validation"
                                        novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="placa">Placa</label>
                                                <input name="placa" type="text" class="form-control" id="placa"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="marca">Marca</label>
                                                <input name="marca" type="text" class="form-control" id="marca"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="modelo">Modelo</label>
                                                <input name="modelo" type="text" class="form-control" id="modelo"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="color">Color</label>
                                                <input name="color" type="text" class="form-control" id="color"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="conductor">Nombre del Conductor</label>
                                                <input name="conductor" type="text" class="form-control" id="conductor"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="foto">Foto</label>
                                                <input name="foto" type="text" class="form-control" id="foto"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="contrato">Tipo de parqueo: Mensual o Por Hora</label>
                                                <input name="contrato" type="text" class="form-control" id="contrato"
                                                    placeholder="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="horaEntrada">Hora</label>
                                                <input name="horaEntrada" type="dateTime" class="form-control" id="horaEntrada"
                                                    placeholder="" value="<?= $horaActual?>" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                
                                            </div>
                                            
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="botonEnvio">Enviar</button>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <h3>CONSULTA DE AUTOS MENSUALES </h3>
                <form action="mensual.php" method="post">
                    
                    <input type="submit" value="enviar">
                </form>
            </div>
        </div>


    </main>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>