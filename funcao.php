<?php

function conecta($pStringConexao=""){
    if($pStringConexao==""){
    $pStringConexao= "pgsql:host=localhost;port=5432; dbname=bd_sql_parte1; user=postgres; password=postgres";
}
    try{
        $varConn = new PDO($pStringConexao);
    }catch(PDOExpection$e){
        echo "Não conectado!<br>".
        $e->getMenssage();

        exit;
    }

    return $varConn;
 }


?>