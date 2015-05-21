<?php
	//Inclui a classe gapi
	require_once('gapi.class.php');

	//Autentica��o com seu login e senha
	$gapi = new gapi('Seu e-mail', 'Sua senha');

	//ID do perfil do site
	$id = '12345678';

	//Busca os pageviews e visitas do m�s atual
	$inicio = date('Y-m-01'); //Atribui o 1� dia do m�s atual
	$fim = date('Y-m-t'); //Atribui o �ltimo dia do m�s atual

	$gapi->requestReportData($id, 'month', array('pageviews', 'visits'), null, null, $inicio, $fim, null, null);
	foreach ($gapi->getResults() as $dados) {
		echo 'Total de visitas do m�s atual �: ' . $dados->getVisits();
		echo '<br>';
		echo 'Total de pageviews do m�s atual �: ' . $dados->getPageviews();
	}
?>