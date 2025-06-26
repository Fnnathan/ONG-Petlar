<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idade=  3;

echo "<pre>";
print_r(pesquisarIdade($conexao, $idade));
echo "</pre>";
?>