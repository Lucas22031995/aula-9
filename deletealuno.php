<?php
//include / include_once
//require / require_once

include ('conexao.php');


$sql = "delete from tblaluno where aluno= 'Louise'";


 
    //conexao -> query(comando sql);
$con->query($sql);
var_dump($con);