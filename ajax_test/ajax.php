<?php
  include "bdd.inc.php";


  $id = $_REQUEST['id'];
  $mdp = $_REQUEST['mdp'];

  $SQL = "SELECT * FROM utilisateur WHERE login_utilisateur = '$id' AND mdp_utilisateur = '$mdp'";
  $req = $conn->Query($SQL) or die("Erreur dans la requete de selection : ".$SQL);
  $req = $req->fetchAll(PDO::FETCH_OBJ);

  if(empty($req)){
    print 0;
  } else {
    $req = json_encode($req);
    file_put_contents('result.json', $req);
    print $req;
  }

?>
