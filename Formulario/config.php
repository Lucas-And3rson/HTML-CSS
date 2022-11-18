<?php
    $dbHost = 'Localhost'
    $dbUsername = 'root'
    $dbPassword = 'L@@bs0602HtMl'
    $dbName = 'formulario'

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName)

   if($conexao->connect_errno)
    {
        echo "Erro";
    } else {
        echo "Conecão OK!";
    }
   
?>