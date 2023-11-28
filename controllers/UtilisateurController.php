<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo 'Incluiu utilisateurControllers.php';

function utilisateur_controller_index(){
     require_once(MODEL_DIR.'/utilisateur.php');
     $data = utilisateur_model_list();
     render(VIEW_DIR.'/utilisateur/index.php', $data);
}

function utilisateur_controller_create(){
     render(VIEW_DIR.'/utilisateur/create.php');
}

function utilisateur_controller_insert($request){

     require_once(MODEL_DIR.'/utilisateur.php');
     utilisateur_model_insert($request);
}

function utilisateur_controller_view($request){
     require_once(MODEL_DIR.'/utilisateur.php');
     $utilisateur = utilisateur_model_view($request);
     
     $data = array_merge(array('utilisateur' => $utilisateur));

     render(VIEW_DIR.'/utilisateur/view.php', $data);
}

function utilisateur_controller_edit($request){
     require_once(MODEL_DIR.'/utilisateur.php');
     utilisateur_model_edit($request);
     header("Location: ?controller=utilisateur&function=index");
}

function utilisateur_controller_delete($request){
     require_once(MODEL_DIR.'/utilisateur.php');
     utilisateur_model_delete($request);
     header("Location: ?controller=utilisateur&function=index");
}

?>