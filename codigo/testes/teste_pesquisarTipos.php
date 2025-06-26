<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$tipo= 'Cão';

echo "<pre>";
print_r(pesquisarTipos($conexao, $tipo));
echo "</pre>";
?>
