<?php
	//Inclui a classe gapi
	require_once('gapi.class.php');

	//Autentica��o com seu login e senha
	$gapi = new gapi('email@gmail.com', '#####');


	//ID do perfil do site
	$id = '12345678';

	//Busca os pageviews e visitas do m�s passado
	$inicio = date('Y-m-01', strtotime('-1 month')); //Atribui o 1� dia do m�s passado
	$fim = date('Y-m-t', strtotime('-1 month')); //Atribui o �ltimo dia do m�s passado

	$gapi->requestReportData($id, 'month', array('pageviews', 'visits'), null, null, $inicio, $fim, null, null);
	foreach ($gapi->getResults() as $dados) {
		echo 'Total de visitas do m�s passado �: ' . $dados->getVisits();
		echo '<br>';
		echo 'Total de pageviews do m�s passado �: ' . $dados->getPageviews();
	}
?>