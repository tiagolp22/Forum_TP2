<?php

// function renderforum () {
//      render()
// }
function forum_controller_login($request){
     render(VIEW_DIR.'/forum/login.php');
}

function forum_controller_index(){
     // echo ("Dans la fonction: forum_controller_index" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     $data = forum_model_list();
     render(VIEW_DIR.'/forum/index.php', $data);
}

function forum_controller_create(){
     // echo ("Dans la fonction: forum_controller_create" . "<br>");
     render(VIEW_DIR.'/forum/create.php');
}

function forum_controller_insert($request){
     // echo ("Dans la fonction: forum_controller_insert" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     forum_model_insert($request);
     header("?controller=forum&function=index");
}

function forum_controller_view($request){
     // echo ("Dans la fonction: forum_controller_view" . "<br>");
     require_once(MODEL_DIR.'/forum.php');
     $user = forum_model_view($request);
     
     $data = array_merge(array('user' => $user));

     render(VIEW_DIR.'/forum/view.php', $data);
}

function forum_controller_edit($request){
     require_once(MODEL_DIR.'/forum.php');
     forum_model_edit($request);
     header("?controller=forum&function=index");
}

function forum_controller_connect(){
     require_once(MODEL_DIR.'/forum.php');
     forum_model_login();
     render('/forum/index.php');
}

function forum_controller_delete($request){
     require_once(MODEL_DIR.'/forum.php');
     forum_model_delete($request);
     header("?controller=forum&function=index");
}



?>