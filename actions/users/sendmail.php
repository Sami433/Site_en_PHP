<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['mail'])){

        $user_mail = nl2br(htmlspecialchars($_POST['mail']));
       

        $insertMail = $bdd->prepare('INSERT INTO mail(id_email, pseudo_auteur, email)VALUES(?,?,?)');
        $insertMail->execute(array ($_SESSION['id'], $_SESSION['pseudo'], $user_mail));



        if($insertMail==true)
        {
            echo "<script>alert('Votre mail a été envoyé avec succès!')</script>";
        }else{
            echo "<script>alert('Une erreur s'est produite!!')</script>";
        
        }
    }
}


