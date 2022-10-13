<?php

$mysqli = new mysqli("localhost","root","","login");

if($mysqli->connect_errno){
    echo "Erro de conexão:".$mysqli->error;
    exit();
}


?>