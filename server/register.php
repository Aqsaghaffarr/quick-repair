<?php
date_default_timezone_set('UTC');
if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"])){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $online = False
    if ($online) {
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    } else {
        $bdd = new PDO('mysql:host=localhost;dbname=innovation_prototype_2;charset=utf8', 'root', '', $pdo_options);
    }
    try{
        $req = $bdd->prepare('INSERT INTO stats SET date = :date, name= :name, surname= :surname, location= :location, email= :email, ip = :ip');
        $req->execute(array(
            'date' => date(DATE_RFC2822),
            'name' => $_POST["name"],
            'surname' => $_POST["surname"],
            'location' => $_POST["location"],
            'email' => $_POST["email"],
            'ip' => $_SERVER['REMOTE_ADDR']
        ));
    }catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    header("Location: form2.php");
}
?>
