<?php
session_start();
if(isset($_SESSION['Pseudo'])){ header('Location:profil.php');; exit();}
?>

<html>
<head>
    <link href="styles/main2.css" rel="stylesheet">
    <title>Inscription</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
<header class="topnav">
    <div class="logo">EFREI</div>
    <div class="menu">
        <a class="button2" href="index.php">Acceuil</a>
        <a class="button2" href="Connection.php">Connection</a>
        <a class="button2" href="profil.php">Profil</a>
    </div>
</header>
    <body  >
        </br>
    </br>
        <h1>
        Je te prie de bien vouloir entrer ton nom et ton mot de passe.
       </h1>    
    <div class="formulaire">
      
    <div class="container">
            <form class="form"color="Blue" action="Connection.php" method="post">
                
                <label>Login :</label><input class="login" type="text" name="login" placeholder="Pseudo"/>
                </br>
                <label>Password :</label> <input type="password" name="pass" placeholder="***********"/> 
                <br>
                <button type="submit" value="TEXT">Connect</button>
                </br>
                <div  class="Inscription">tu n'a pas de compte ??<a href="Inscription.php">Inscrit toi !</a></div>
                <p><?php


if(isset($_POST["login"]) && isset($_POST["pass"])){
include('mysql.php');

include 'UserClass.php';
$USERLOG = new USER();

 //recupere le pseudo et mot de passe
$USERLOG->set_pseudo($_POST["login"]);
$USERLOG->set_pass($_POST["pass"]);


if ( ($USERLOG->Check_pseudo()) == 1){
    if($USERLOG->CheckPass() == 1){// si le return est egale a 1 c'est a dire que le prenom a ete trouver check si le mot de pass correspond
      echo "Bienvnue a toi tu es connecter";
      session_destroy();
      include 'dashboard.php';
      $mysql->close()  ;
      header('Location:index.php');
    }
    else{
      echo "Mot de Pass Incorrect";       //sinon indiquer mauvais mot de passe 
      $mysql->close();
    }
} 
else{ 
  //$mysql->query("INSERT INTO table1 VALUES(NULL,'$USERLOG->pseudo','$USERLOG->pass')");         // si l'utilisateur c'est pas trouver dans la bdd cree le nouvelle utilisateur
  echo "Ce Pseudo n'existe Pas";
  $mysql->close(); // termine la connection avec la BDD
}
}
?></p>
              </form>
       
        </div>
    </div>
    
    </body>
</html>