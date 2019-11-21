<?php

$landen = readline("hoeveel problemen heb je");

if (is_numeric($landen)) {
	echo " ";
}else exit("je zuigt"); 

$arraytest = array();

for ($i=0; $i < $landen ; $i++) { 
	$land = readline("noem een land" . PHP_EOL);
    $stad = readline("noem zijn hoofdstad" . PHP_EOL);
    $arraytest = array_merge($arraytest, array(
    	$land => $stad,
    ));
}
foreach ($arraytest as $land => $stad) {
		echo($land . ' ' . $stad . PHP_EOL);
}


  ?>