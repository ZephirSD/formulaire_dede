<?php 

include("C:/Users/Siegfried/Downloads/laragon/www/formulaire_dede/modules/connexiondb/connexiondb.php");

?>

<?php 

$pseudo = $_POST['pseudo'];
$score = $_POST['score'];

$sql = "INSERT INTO table_dede (`pseudo`, `score`) VALUES (:pseudo, :score)";
try{
    
  $stmt = $db->prepare($sql);
  $stmt->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
  $stmt->bindValue('score', $score, PDO::PARAM_STR);
  $stmt->execute();
  if($stmt == true){
    $msg = "Aucun résultat pour votre recherche";
  }


  if($stmt === false){
    die("Erreur");
  }
 
}
catch (PDOException $e){
 
}

?>

<?php

header('location:http://localhost/formulaire_dede/index.php');

?>