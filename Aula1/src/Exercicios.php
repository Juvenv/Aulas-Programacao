<?php

/**
 * Funcão que imprime a tabuada de um número recebido como parametro
 * 
 * @param int $numero
 * 
 * @return void a funcao se encarrega de imprimir a saida
 * */
function tabuada(int $numero = 0){
	for ($i = 0; $i < 10; $i++){
		echo $numero . ' X ' . $i . ' = ' . ($numero * $i) . PHP_EOL;
	}
}

/**
 * Função responsavel por calcular o valor da multa, com base na velocidade
 * do veiculo e da velocidade maxima permitida em uma via
 * 
 * @param float $velocida_carro
 * @param float $velocidade_rua
 * 
 * @return void
 * */
function multa(float $velocida_carro, float $velocidade_rua){
	$acima = $velocida_carro - $velocidade_rua;
	
	if($acima <= 10){
		echo 'Multa de R$ 50' . PHP_EOL;
	}else if($acima >= 11 && $acima <= 31){
		echo 'Multa de R$ 100' . PHP_EOL;
	}else{
		echo 'Multa de R$ 300' . PHP_EOL;
	}
}

function tamanho(){
	$chico = 1.50;
	$juca = 1.10;
	$anos = 0;
	
	while($juca < $chico){
		$chico += 0.02;
		$juca += 0.03;
		$anos++;
	}
	
	echo 'Serão necessarios ' . $anos . 
	' para que juca seja maior que chico' . PHP_EOL;
}

function animais(string $palavra1, string $palavra2, string $palavra3){
	$arrayAnimais = ['vertebrado' => ['ave' => ['carnivoro' => 'Águia'
			, 'onivoro' => 'Pomba']
			, 'mamifero']
			, 'invertebrado'];
	
	echo $arrayAnimais[$palavra1][$palavra2][$palavra3] . PHP_EOL;
}