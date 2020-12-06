<?php

    if($_REQUEST['radiobutton']== "mensual"){
        header("location: mensual.php");
    }
    if($_REQUEST['radiobutton']== "porHora"){
        header("location: porHora.php");
    }
    
?>