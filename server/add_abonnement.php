<?php
date_default_timezone_set('UTC');
if(isset($_GET["uid"]) && isset($_GET["c"])){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $online = true;
    if ($online == true) {
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    } else {
        $bdd = new PDO('mysql:host=localhost;dbname=innovation_prototype_2;charset=utf8', 'root', '', $pdo_options);
    }
    try{
        $req = $bdd->prepare('UPDATE pre_inscription SET abonnement = :abonnement WHERE id = :id');
        $req->execute(array(
            'abonnement' => $_GET["c"],
            'id' => $_GET["uid"]
        ));
    }catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    header("Location: ../index.php?uid=".$user_id."&success");
}else{
    header("Location: ../step3.php?uid=".$_GET['uid']."&fail");
}
?>
