<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Somos@1969';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao ->connect_errno)
    {

        echo "Erro";
    }

    else
    {
        echo " Conexao ok";
    }


?>