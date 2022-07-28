<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
<?php include 'includes/head.php'; ?>

<head>

<link rel="stylesheet" type="text/css" href="./assets/login.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
<?php include 'includes/navbar.php'; ?>



<form class="container" method="POST">
<?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        <div class="container-wrapper">

            <h3 class="login-text"><i class="bi bi-person-circle ac-logo"></i>Connexion</h3>
        
           
                <div class="item"><input class="input" type="text" placeholder="Pseudo" name="pseudo"></div> 
                <div class="item"><input class="input" type="password" placeholder="Mot de passe" name="password"> </div>
                

                <div class="item submit"><button type="submit" name="validate">Se connecter</button></div>
            
<br>
          
         
          <!--   <div class="social-media">

                <a href="#"><div class="icons8-google social-mediaImg"></div></a> 
                <a href="#"><div class="icons8-facebook-circled social-mediaImg"></div></a> 
                <a href="#"><div class="icons8-twitter social-mediaImg"></div></a> 
  
            </div> -->
            <span class="ac">Vous n'avez pas de compte?<a href="signup.php"> S'inscrire</a></span>
        </div>

</form>







</body>
</html>