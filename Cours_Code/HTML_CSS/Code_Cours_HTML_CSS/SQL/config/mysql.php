<?php $mysqlClient = new PDO ('mysql:host=localhost;dbname=partage_de_recette;charset=utf8', 'root', '',
[PDO::ATTR_ERRRMODE => PDO::ERRMODE_EXCEPTION],); 

$sqlQuery = 'SELECT * FROM recipes';

$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

?>