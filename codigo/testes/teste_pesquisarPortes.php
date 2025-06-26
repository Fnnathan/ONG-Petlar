<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$porte= 'Grande';

echo "<pre>";
print_r(pesquisarRacas($conexao, $porte));
echo "</pre>";
?>