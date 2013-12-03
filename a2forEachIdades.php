<?php

/*
$idades = array( "Luiz" =>33,
				"Bruno" =>33,
				"Ivo"=>34,
				"Xuxa"=>666);

$somaIdades=0;

foreach ($idades as $nome=>$idade){
echo "A idade de {$nome} eh: {$idade} e nasceu em ".(2013-$idade)."</br>";
$somaIdades=$somaIdades+$idade;
}

echo "A soma das idades eh {$somaIdades}";

*/

$nome = "Joe de Alencar";

for ($i=0; $i<strlen($nome); $i++) {
echo "No indice <b>{$i}</b> tem a letra <b> {$nome[$i]}</b><br/>";

}