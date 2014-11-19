<?php
echo $_POST['tipo_oficio'];

$i=0;
//sizeof permite saber el número de elementos
while ($i<= sizeof($_POST)) 
{
echo $_POST[$i],"";
$i++;
}
exit;
?>