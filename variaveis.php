<?php 

	echo "<pre>";
	echo "EX¹ Variaveis<hr>";
	echo "</pre>";

	$texto = "PHP é fracamente tipado"; //String
	echo "<pre>";
	var_dump($texto);
	echo "</pre>";

	$n1 = 10; //Integer
	var_dump($n1);

	$teste = true; //Boolean
	var_dump($teste);

	$nome = null;
	var_dump($nome);

	$salario = 10.00; // Float
	var_dump($salario);


	echo $texto;





	echo "<pre>";
	echo "EX² Condições<hr>";
	echo "</pre>";





	$soma = 10+12;

	if ($soma > 20) {

		echo "O valor é maior que 20";

	}	else {

		echo "O valor é menor que 20";
	
 	}



	echo "<pre>";
	echo "EX³ Condições<hr>";
	echo "</pre>";



	while ($soma > 20) {

		echo "A soma é maior que 20";
		$soma--;
	}


	echo "<pre>";
	echo "EX4 FOR<hr>";
	echo "</pre>";


	$v = "Hello World";

	for ($i = 0 ; $i < strlen($v) ; $i++ ) {

		echo $v . "<br>";
	}



	echo "<pre>";
	echo "EX5<hr>";
	echo "</pre>";

	$nome = "Matheus";

	echo "Prezado Sr $nome<br>";

	echo 'Prezado Sr $nome<br>';

	echo "Prezado Sr {$nome}<br>";


	echo "<pre>";
	echo "EX6<hr>";
	echo "</pre>";

	define("meu_nome" , "Matheus Vieira" , true); 


	echo meu_nome;

	echo MEU_NOME;


 ?>