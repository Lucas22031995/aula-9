<?php
//include / include_once
//require / require_once

include ('conexao.php');

$curso = "Administracao";
$docente = "Alessandro";
$valor= 990.98;

$sql = "insert into tblcursos (curso,docente,valor)
        values('$curso', '$docente','$valor') ";


 
    //conexao -> query(comando sql);
$con->query($sql);
var_dump($con);