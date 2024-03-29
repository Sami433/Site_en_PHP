<?php 
    session_start(); 
    require('actions/users/showOneUsersProfileAction.php');   
    require('actions/users/sendmail.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" type="text/css" href="./assets/style.css">
<link rel="stylesheet" type="text/css" href="./assets/footer.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($getHisQuestions)){

                ?>
                <div class="card">
                    <div class="card-body">
                        <h4>@<?= $user_pseudo; ?></h4>
                        <hr>
                        <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
                    </div>
                </div>
                <br>
                <?php
                while($question = $getHisQuestions->fetch()){ 
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <?= $question['titre']; ?>
                        </div>
                        <div class="card-body">
                            <?= $question['description']; ?>
                        </div>
                        <div class="card-footer">
                            Par <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                        </div>
                    </div>
                    <br>
                    <?php
                }

            }
        ?>  
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>