<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once('config/config.php');
require_once('lib/core.php');

$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];
$function = isset($_REQUEST['function']) ? safe($_REQUEST['function']) : $config['default_function'];


$controller_file = "controllers/" . ucfirst($controller) . "Controller.php";


if (!file_exists($controller_file)) {
    trigger_error('Invalid controller');
    echo '<br>invalid controller A';
    exit;
}


require_once($controller_file);

$controller_function_name = $controller . '_controller_' . $function;

if (!function_exists($controller_function_name)) {
    trigger_error('Invalid function: ' . $controller_function_name);
    echo '<br>invalid controller B';
    exit;
}

call_user_func($controller_function_name, $_REQUEST);
