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
        <h1 >
            Bonjour a toi CHER UTILISATEUR !
        </h1>    
        <div class='ChatCont'>
            <?php    session_start();
             if (isset($_SESSION['Pseudo'])){
                    echo '
                    <chatBox>
                        <div class="sentMessage" id="sentMessage" >'?> 
                        <script>
                            let xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("sentMessage").innerHTML = this.response;
                                    }
                                };
                                xmlhttp.open("GET", "getMsg.php",false);
                                xmlhttp.send();
                            
                            
                            
                            var timer;
                            function Refresh() {
                              timer = setInterval(function() {
                                let xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("sentMessage").innerHTML = this.response;
                                    }
                                };
                                xmlhttp.open("GET", "getMsg.php",false);
                                xmlhttp.send();
                                }, 2000);
                            }
                            Refresh()
                            
        
                        </script>
                        
                        <?php
                        echo '</div>
                        <form action="insertMsg.php" method="post" class="inputMessage">'.$_SESSION['Pseudo'].'  :
                            <input type="texte"  name="Msg" autofocus="autofocus" placeholder="Ecriver votre message ici"/>
                            <input type="submit" class="Send" VALUE="Send"/>
                        </form>
                    </chatBox>';
            }
            else{echo 'veuiller vous connecter';} 
            ?> 
        </div>
    </body>
</html>