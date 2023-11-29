<?php
function forum_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT *, nom FROM forum INNER JOIN utilisateur ON (id_utilisateur_forum = id_utilisateur) ORDER BY titre";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function forum_model_insert(){
    require(CONNEX_DIR);
    require_once('lib/checkSession.php');
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "INSERT INTO forum (titre, texte, date, id_utilisateur_forum) VALUES ('$titre', '$texte', '$date', '$id_utilisateur_forum')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function forum_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con, $value);
    }
    $sql = "SELECT * FROM forum WHERE id_forum = '$id_forum'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function forum_model_edit($request){
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql = "UPDATE forum SET titre='$titre', texte='$texte', date= '$date' WHERE id_forum = '$id_forum'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
}



function forum_model_delete($request){
    require(CONNEX_DIR);
    $id_forum = mysqli_real_escape_string($con, $request['id_forum']);
    $sql = "DELETE FROM forum WHERE id_forum = '$id_forum'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
}

function forum_model_login() {
    session_start();
    require(CONNEX_DIR);

    foreach($_POST as $key=>$value){
        $$key = mysqli_real_escape_string($con, $value);
    }

    $sql = "SELECT * FROM utilisateur WHERE email = '$email'";

    $result = mysqli_query($con, $sql);

    $count = mysqli_num_rows($result);
    if($count == 1){

    $info_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $salt = "H@%h14";
    $saltPassword = $mot_de_passe.$salt;

        if(password_verify($saltPassword, $info_user['mot_de_passe'])){
    
            session_regenerate_id();
            $_SESSION['id'] = $info_user['id_utilisateur'];
            $_SESSION['nom'] = $info_user['nom'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
        
            header('location:?controller=forum&function=renderforum');

        }else{
            header('location:forum/login.php?msg=2');
        }

    }else{
        header('location:forum/login.php?msg=1');
    }



    }
?>
