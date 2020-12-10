<?php
date_default_timezone_set('UTC');
if(isset($_GET["uid"]) && isset($_POST["device"]) && isset($_POST["brand"])){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $online = true;
    if ($online == true) {
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    } else {
        $bdd = new PDO('mysql:host=localhost;dbname=innovation_prototype_2;charset=utf8', 'root', '', $pdo_options);
    }
    try{
        $req = $bdd->prepare('INSERT INTO devices SET date = :date, name= :name, type= :type, user_id= :user_id');
        $req->execute(array(
            'date' => date(DATE_RFC2822),
            'name' => $_POST["brand"],
            'type' => $_POST["device"],
            'user_id' => $_GET["uid"]
        ));
    }catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    $user_id = $_GET['uid'];
    header("Location: ../index.php?uid=".$user_id."&success");
}else{
    if(isset($_GET["uid"])){
        header("Location: ../step2.php?uid=".$_GET['uid']."&fail");
    }else{
        header("Location: ../step2.php?fail");
    }
    
}
?>
