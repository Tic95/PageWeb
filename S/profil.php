<?php 
session_start();
if(!isset($_SESSION['Pseudo'])){header('Location:Connection.php'); exit();}
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
        <h2 >
            <img class="profileimg" src="img/kisspng-real-estate-profile-picture-icon-5b4c113630d846.1237228215317117982001.png"> 
            <div class="UserInfo">
                 
                <div class="Pseudo">User : <?php if (isset($_SESSION['Pseudo'])){echo $_SESSION['Pseudo'];} ?></div>
                <div class="email">Email : xxx@yyy.com</div>
            </div>
        </h2>
        <form class="Deco" action="profil.php" method="post">
            <button class="button" type="submit" name="Deco"value="1">Deconnection !</button>
        </form>
        <?php 
        if(isset($_POST['Deco'])){
        if($_POST['Deco'] == "1"){
            
            session_destroy();
            header('Location:Connection.php');
            } }?>
    
    
    </body>
</html>