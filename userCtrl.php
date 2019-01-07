<?php
/*SI lastname n est pas vide on verifi le champ avec la regex et si c est ok on cr
une variable $lastname qui sera appelée dans le htmlentities
SINON on cré une variable d erreur Yaf_Route_Regex
SI lastname est vide on crée une variable d erreur de champs vide*/
if (!empty($_POST['lastname'])){
  if(preg_match('/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ\'-]+$/', $_POST['lastname'])){
    $lastname = htmlspecialchars( $_POST['lastname']);
  }else{
    $lastname = 'veuillez entrer un prenom valide';
  }
}else{
  $lastname = 'veuillez entrer votre prénom';
}
if (!empty($_POST['firstname'])){
  if(preg_match('/^[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ\'-]+$/', $_POST['firstname'])){
    $firstname = htmlspecialchars( $_POST['firstname']);
  }else{
    $firstname = 'veuillez entrer un nom valide';
  }
}else{
  $firstname = 'veuillez entrer votre nom';
} ?>
