<?php

include 'util.php';
$peso= $_POST['peso'];
$alt= $_POST['altura'];
$imc= imc($peso, $alt);
$classificacao= classificacao($imc);

echo " <table border=1>
       <tr>
         <th>IMC</th>
         <th>Classificacao</th>
       </tr>
       <tbody>
          <td>$imc</td>
          <td>$classificacao</td>
       <tbody>
       </table>"

?>