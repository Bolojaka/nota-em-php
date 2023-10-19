<?php
//variável ambiente do php que armazena as variaveis do metodo GET
$nota1= $_GET['nota1'];
$nota2= $_GET['nota2'];

echo "Nota1= $nota1 e Nota2 = $nota2";
$media = ($nota1 + $nota2) / 2 ;

echo "<h1 style='color:blue'>Sua media = $media</h2>";

if ($media > 7 ) {
  echo "<h2> Aprovado</h2>";
}else {
   echo "<h2> Recuperacao</h2>";
}
echo "<br> <a href='index.php'> Voltar </a>"

?>
