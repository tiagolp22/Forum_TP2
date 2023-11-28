<?php
function utilisateur_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM utilisateur ORDER BY nom";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function utilisateur_model_insert($request){
    require(CONNEX_DIR);
    
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value); 
    }

    $salt = "H@%h14";

    $saltPassword =$mot_de_passe.$salt;

    $password = password_hash($saltPassword, PASSWORD_BCRYPT, ['cost'=> 10]);

    $sql = "INSERT INTO utilisateur (nom, date_de_naissance, email, mot_de_passe, login) VALUES ('$nom', '$date_de_naissance', '$email', '$password', '$login')";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        die('Erro na inserção: ' . mysqli_error($con));
    }else{
        header("Location: ?controller=forum&function=login");
    }

    mysqli_close($con);
}

function utilisateur_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con, $value);
    }
    $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = '$id_utilisateur'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function utilisateur_model_edit($request){
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $sql="UPDATE utilisateur SET nom='$nom', date_de_naissance='$date_de_naissance', email='$email' WHERE id_utilisateur = '$id_utilisateur'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
}

function utilisateur_model_delete($request){
    require(CONNEX_DIR);
    $id_utilisateur = mysqli_real_escape_string($con, $_POST['id_utilisateur']);
    $sql = "DELETE FROM utilisateur WHERE id_utilisateur = '$id_utilisateur'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
}
?>
