<?php
	//Inclui a classe gapi
	require_once('gapi.class.php');

	//Autenticação com seu login e senha
	$gapi = new gapi('email@gmail.com', '#####');


	//ID do perfil do site
	$id = '12345678';

	//Busca os pageviews e visitas do mês passado
	$inicio = date('Y-m-01', strtotime('-1 month')); //Atribui o 1º dia do mês passado
	$fim = date('Y-m-t', strtotime('-1 month')); //Atribui o último dia do mês passado

	$gapi->requestReportData($id, 'month', array('pageviews', 'visits'), null, null, $inicio, $fim, null, null);
	foreach ($gapi->getResults() as $dados) {
		echo 'Total de visitas do mês passado é: ' . $dados->getVisits();
		echo '<br>';
		echo 'Total de pageviews do mês passado é: ' . $dados->getPageviews();
	}
?>