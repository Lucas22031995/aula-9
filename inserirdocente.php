<?php
//include / include_once
//require / require_once

include ('conexao.php');

$docente = "Juliana";
$especialidade = "Comportamento humano";
$salhora= 150;
$disponibilidade = "noite";

$sql = "insert into tbldocente (docente,especialidade,salhora,disponibilidade)
        values('$docente', '$especialidade','$salhora','$disponibilidade')";


 
    //conexao -> query(comando sql);
$con->query($sql);
var_dump($con);