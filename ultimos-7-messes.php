<?php

  ini_set("display_errors", 1);

  //Inclui a classe gapi
  require_once('gapi.class.php');
  require_once('messes.php');

  //Autenticação com seu login e senha
  $gapi = new gapi('email@gmail.com', '#####');

  // Quantidade de messes passados
  $months = 3;
  $data = array();
  // id do profile 
  $id = '1234123123';

    $count = 0;
    while ($months >= 0):

      $inicio = date('Y-m-01', strtotime("-$months month")); //Atribui o 1º dia do mês no laço
      $fim = date('Y-m-t', strtotime("-$months month"));  //Atribui o último dia do mês no laço
    
      // Armazena o nome do Mes
      $data['google']['months'][$count] = getMonth(date("m",strtotime("-$months month")));

      $gapi->requestReportData($id, 'month', array('pageviews', 'visits'), null, null, $inicio, $fim, null, null);

      foreach ($gapi->getResults() as $key => $dados) {

        $data['google']['visites'][$count] = $dados->getVisits(); // armazena as visitas
        $data['google']['views'][$count] =  $dados->getPageviews(); // armazena as visualizações
        $data['google']['inicio'][$count] =  $inicio; // armazena data da inicio do mes
        $data['google']['fim'][$count] =  $fim; // armazena data do fim do mes
      }
      // acrecenta  +1
      $count++;
      // decrementa -1
      $months--;
    endwhile;
  // echo '<pre>';
  // print_r($data);
?>