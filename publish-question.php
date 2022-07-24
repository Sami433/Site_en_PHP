<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link href="question.css" rel="stylesheet">

</head>




<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>


    <div id="wrapper">

<form id="paper" method="POST" action="">
<?php 
    if(isset($errorMsg)){ 
        echo '<p>'.$errorMsg.'</p>'; 
    }elseif(isset($successMsg)){ 
        echo '<p>'.$successMsg.'</p>'; 
    }
?>

    <div id="margin">Title: <input id="title" type="text" name="title"></div>
    <div id="margin">Title: <input id="title" type="text" name="description"></div>
    <br>
    <textarea placeholder="Enter something funny." id="text" name="content" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
    
    <input id="button" type="submit" value="Create" name="validate">
    
</form>

</div>
<script src="question.js"></script>


</body>
</html>