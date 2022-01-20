<?php
try{
    $bdd = new PDO('mysql:host=localhost:3307;dbname=forum;charset=utf8;', 'root', '');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
