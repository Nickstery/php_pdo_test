<?php

//Import Smarty 3rd party lib
require_once 'libs/Smarty.class.php';
//Create smarty object
$smarty = new Smarty();

//Try to connect mysql
try{
    $pdo  = new PDO("mysql:host=localhost;port=8899; dbname=test", 'root', 'root');
}catch(PDOException  $e ){
    echo "Error: ".$e;
}

//there I will prepare mysql query
$query = $pdo->prepare("SELECT * FROM `test`");
//RUN mysql query
$query->execute();
//send all fetched data to smarty tempate
$smarty->assign('data', $query->fetchAll(PDO::FETCH_ASSOC));
//Show html from /templates/index.tpl
$smarty->display('index.tpl');



