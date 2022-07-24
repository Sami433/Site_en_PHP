<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" type="text/css" href="./assets/index.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
<style>

.card{

    border: 0.2rem solid;
  border-radius: 30px;
 
}



</style>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
    
    
    <form method="GET">
<div class="box">
  <div class="container-2">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" name="search" id="search" placeholder="Search..." />
  </div>
</div>

 
</form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <?= $question['description']; ?>
                    </div>
                    <div class="card-footer">
                        Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>

    </div>

</body>
</html>