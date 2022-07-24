<?php require('actions/users/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="./assets/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<?php include 'includes/head.php'; ?>
<body>
   
<?php include 'includes/navbar.php'; ?>


   
<form class="container" method="POST">
<?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        <div class="container-wrapper">

            <h3 class="login-text"><i class="bi bi-person-circle ac-logo"></i>Inscription</h3>
        
           
                <div class="item"><input class="input" type="text" placeholder="Pseudo" name="pseudo"></div> 
                <div class="item"><input class="input" type="text" placeholder="Nom" name="lastname"></div> 
                <div class="item"><input class="input" type="text" placeholder="Prénom" name="firstname"></div> 
                <div class="item"><input class="input" type="password" placeholder="Mot de passe" name="password"> </div>
                

                <div class="item submit"><button type="submit" name="validate">S'inscrire</button></div>
            
<br>
          
            <span class="ac">J'ai déjà un compte?<a href="login.php"> Se connecter</a></span>
        </div>

</form>





</body>
</html>