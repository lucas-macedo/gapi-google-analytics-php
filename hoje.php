<?php
	//Inclui a classe gapi
  require_once('gapi/gapi.class.php');

	//Autentica��o com seu login e senha
	$gapi = new gapi('email@gmail.com', '#####');

	//ID do perfil do site
	$id = '12345678';

	
	//Busca os pageviews e visitas do dia
	$inicio = date('Y-m-d');
	$fim = date('Y-m-d');

	$gapi->requestReportData($id, 'day', array('pageviews', 'visits'), null, null, $inicio, $fim, null, null);
	foreach ($gapi->getResults() as $dados) {
		echo 'Total de visitas hoje �: ' . $dados->getVisits();
		echo '<br>';
		echo 'Total de pageviews hoje �: ' . $dados->getPageviews();
	}

?>