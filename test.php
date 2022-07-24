<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>

    <link href="index.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>


   <form method="GET">
<div class="box">
  <div class="container-2">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" name="search" id="search" placeholder="Search..." />
  </div>
</div>

 
    
     

        

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="containerB">
                    
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                          
                            <br>
                            Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> <br>le <?= $question['date_publication']; ?>
                        </a>
                    </div>
                  
                <br>
                <?php
            }
        ?>
        

    </div>


    





</body>
</html>