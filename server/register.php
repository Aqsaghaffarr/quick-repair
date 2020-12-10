<?php
date_default_timezone_set('UTC');
if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"])){
    if(($_POST["name"] != "") && ($_POST["surname"] != "") && ($_POST["email"] != "")){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $online = true;
    if($online == true){
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    }else{
        $bdd = new PDO('mysql:host=localhost;dbname=innovation_prototype_2;charset=utf8', 'root', '', $pdo_options);
    }
    if($_POST["location"] == ""){
        $location = 'None';
    }else{
        $location = $_POST["location"];
    }

    $a_date = date(DATE_RFC2822);
    try{
        $req = $bdd->prepare('INSERT INTO pre_inscription SET date = :date, name= :name, surname= :surname, location= :location, email= :email, ip = :ip, abonnement= :abonnement');
        $req->execute(array(
            'date' => $a_date,
            'name' => $_POST["name"],
            'surname' => $_POST["surname"],
            'location' => $location,
            'email' => $_POST["email"],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'abonnement' => 'None'
        ));
    }catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    # get user_id
    $answer = $bdd->prepare('SELECT id FROM pre_inscription WHERE name =:name AND date = :date');
    $answer->execute(array(
	    'name' => $_POST['name'],
        'date' => $a_date,
	));
    while($data = $answer->fetch()){
        $user_id = $data["id"];
    }$answer->closeCursor();
    header("Location: ../step2.php?uid=".$user_id);
    }else{
        header("Location: ../membershipform.php?fail");
    }
}else{
    header("Location: ../membershipform.php?fail");
}
?>
