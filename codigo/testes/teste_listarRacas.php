<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$raca= 'pincher';

echo "<pre>";
print_r(PesquisarRacas($conexao, $raca));
echo "</pre>";
?>
