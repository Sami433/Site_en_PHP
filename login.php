<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<head>

<link href="login.css" rel="stylesheet">
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/295/295128.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
    



<form class="container" method="POST">
<?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        <div class="container-wrapper">

            <h3 class="login-text"><i class="bi bi-person-circle ac-logo"></i>Connexion</h3>
        
           
                <div class="item"><input class="input" type="text" placeholder="Pseudo" name="pseudo"></div> 
                <div class="item"><input class="input" type="password" placeholder="Password" name="password"> </div>
                

                <div class="item submit"><button type="submit" name="validate">Submit</button></div>
            
<br>
            <h2><span>OR</span></h2>
         
            <div class="social-media">

                <a href="#"><div class="icons8-google social-mediaImg"></div></a> 
                <a href="#"><div class="icons8-facebook-circled social-mediaImg"></div></a> 
                <a href="#"><div class="icons8-twitter social-mediaImg"></div></a> 
  
            </div>
            <span class="ac">Vous n'avez pas de compte?<a href="signup.php"> S'inscrire</a></span>
        </div>

</form>







</body>
</html>