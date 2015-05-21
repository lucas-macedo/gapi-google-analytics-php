<?php
   //Inclui a classe gapi
   require_once('gapi/gapi.class.php');
 
   //Autenticação com seu login e senha
   $gapi = new gapi('email@gmail.com', '#####');
 
   //Pega os dados da conta e perfis dos sites existentes
   $gapi->requestAccountData();
 
   //Imprime os resultados encontrados
   foreach ($gapi->getResults() as $perfil) {
    echo $perfil . ' => ' . $perfil->getProfileId() . '<br />';
   }
?>