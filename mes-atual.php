<?php
	//Inclui a classe gapi
	require_once('gapi.class.php');

	//Autenticação com seu login e senha
	$gapi = new gapi('Seu e-mail', 'Sua senha');

	//ID do perfil do site
	$id = '12345678';

	//Busca os pageviews e visitas do mês atual
	$inicio = date('Y-m-01'); //Atribui o 1º dia do mês atual
	$fim = date('Y-m-t'); //Atribui o último dia do mês atual

	$gapi->requestReportData($id, 'month', array('pageviews', 'visits'), null, null, $inicio, $fim, null, null);
	foreach ($gapi->getResults() as $dados) {
		echo 'Total de visitas do mês atual é: ' . $dados->getVisits();
		echo '<br>';
		echo 'Total de pageviews do mês atual é: ' . $dados->getPageviews();
	}
?>