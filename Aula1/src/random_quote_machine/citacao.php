<?php
/**
 * Todas as cores utilizadas o repositorio https://github.com/mrmrs/colors
 * */

/**
 * @return array retorna um array associativo
 * */
function getDatasource(){
	$citacoes = [
			['texto' => 'A pluralidade é a condição da ação humana pelo fato de sermos todos os mesmos, isto é, humanos,
			sem que ninguém seja exatamente igual a qualquer pessoa que tenha existido, exista ou venha a existir',
					'autor' => 'Hannah Arendt', 'cor' => '#0074D9'],
			['texto' => 'Every dogma has its day',
					'autor' => 'Anthony Burgess', 'cor' => '#FFDC00'],
			['texto' => 'Do not cry because it is over, smile because it happened.',
			'autor' => 'Dr. Seuss', 'cor' => '#AAAAAA']
	];
	
	return $citacoes;
}

/**
 * Funcao responsavel por abstrair o acesso ao datasource de citações
 * Basicamente, não importa onde elas estão salvas, podendo ser em 
 * um banco de dados, um arquivo online, etc.
 * 
 * @param int $identificador numero representado o indice da citação
 * a ser retornada
 * 
 * @return array retorna um array associativo contendo uma citação, em sistemas
 * mais complexos seria um array de objetos x, mas neste caso é apenas
 * um array de strings
 * */
function getCitacao($identificador) {
	$citacoes = getDatasource();
	return $citacoes[$identificador];
}

echo json_encode (getCitacao(rand(0, count(getDatasource()) - 1)));