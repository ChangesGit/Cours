<?php require_once('./config/mysql.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($recipe as $recipes) {
        echo $recipe['title'];
        echo $recipe['recipe'];
        echo $recipe['author'];
    }
    ?>
</body>

</html>