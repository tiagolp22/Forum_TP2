<?php
// Configurações de exibição de erros (para ambiente de desenvolvimento)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Carrega as configurações e funções básicas
require_once('config/config.php');
require_once('lib/core.php');

// Obtém o nome do controlador e da função da solicitação
$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];
$function = isset($_REQUEST['function']) ? safe($_REQUEST['function']) : $config['default_function'];

// Monta o caminho do arquivo do controlador
$controller_file = "controllers/" . ucfirst($controller) . "Controller.php";

// Verifica se o arquivo do controlador existe
if (!file_exists($controller_file)) {
    trigger_error('Invalid controller');
    echo '<br>invalid controller A';
    exit;
}

// Inclui o arquivo do controlador
require_once($controller_file);

// Monta o nome da função do controlador
$controller_function_name = $controller . '_controller_' . $function;

// Verifica se a função do controlador existe
if (!function_exists($controller_function_name)) {
    trigger_error('Invalid function: ' . $controller_function_name);
    echo '<br>invalid controller B';
    exit;
}

// Chama a função do controlador
call_user_func($controller_function_name, $_REQUEST);
