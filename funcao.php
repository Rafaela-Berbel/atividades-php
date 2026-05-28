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
// se o registro for inserido normalmente...


    // -----------------------------------------------------------
    // funcao que recebe imagem
    // maio/2026
    // -----------------------------------------------------------

    function salvaUpload($paramConn, $paramFiles, $paramCampo)
    {   
     // ISSET verifica se a variavel existe !!  
     //var_dump($paramFiles); 
     if ( isset( $paramFiles[$paramCampo] ) ) {
            // obtem o id do curso inserido
            $novoId   = $paramConn->lastInsertId();
            // obtem a extensão do arquivo
            $ext = pathinfo($paramFiles[$paramCampo]['name'],
                   PATHINFO_EXTENSION);
            // cria o novo nome do arquivo
            // exemplo: /imagens/10.png
            $arquivoNovo = "imagens/$novoId.$ext";
            try {
               if (move_uploaded_file($paramFiles[$paramCampo]['tmp_name'], 
                   $arquivoNovo)) {
                   echo "<br>Arquivo $arquivoNovo criado com sucesso.\n";
               } 
            } catch (PDOException $e) { // se der erro ...
               echo "Erro, verifique o arquivo se a pasta imagens existe";
            }     
        }
    }

?>