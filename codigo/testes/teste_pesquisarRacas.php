<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$raca= 'pincher';

echo "<pre>";
print_r(pesquisarRacas($conexao, $raca));
echo "</pre>";
?>
