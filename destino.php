<?php
include 'util.php';
$C = $_POST['emprestado'];
$i= $_POST['juros'];
$t= $_POST['meses'];
$M= calcJuros($C,$i,$t);
echo "CAUCULO DE JUROS DE EMPRESTIMO<br>";
echo "Montande da divida = ".number_format($M,2,',','.')."<br>";
echo "Valor emprestado = $C<br>";
echo "Juros = $i<br>";
echo "Tempo em meses = $t";

?>