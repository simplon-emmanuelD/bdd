<?php
$bdd = new PDO('mysql:host=localhost;dbname=Test;charset=utf8', 'root', 'ecodair');
$requete = $bdd->prepare ('INSERT INTO Formulaire(id,prenom,mail,question)VALUES(:id, :prenom,:mail,:question)');
$requete->execute(array(
'id' => '',
'prenom' => $_POST['prenom'],
'mail' => $_POST['mail'],
'question' => $_POST['question']
));

?>
