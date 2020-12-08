<?php
date_default_timezone_set('UTC');
if(isset($_POST["what"])){
    $what = $_POST['what'];
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    if (True){
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    }
    try{
        $req = $bdd->prepare('INSERT INTO stats SET date = :date, what= :what, ip = :ip');
        $req->execute(array(
            'date' => date(DATE_RFC2822),
            'what' => $what,
            'ip' => $_SERVER['REMOTE_ADDR']
        ));
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}
?>
