<?php
/**
 * Exemplo de como enviar um simples push para o serviço OneSignal
 * 
 * @author Fabio Souza
 * @email fabiofns@gmail.com)
 */
require_once('src/OneSignal.php');
require_once('src/Notification.php');
require_once('src/Device.php');
require_once('src/CURL.php');

use CWG\OneSignal\OneSignal;

$appID = '<YOUR APP ID>';
$authorizationRestApiKey = '<YOUR API KEY>';
$deviceID = '<DEVICE ID>';

$api = new OneSignal($appID, $authorizationRestApiKey);

$retorno = $api->notification->setBody('Apenas um teste de mensagem PUSH')->setTitle('Titulo de Teste')->addDevice($deviceID)->send();

print_r($retorno);