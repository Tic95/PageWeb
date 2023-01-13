<?php       
header('Location:index.php');
session_start();
if(isset($_SESSION['Pseudo'])){
         include('mysql.php');
        if($_POST['Msg'] == NULL){
        echo "le message ne peut pas etre NULL";        // verifie si l'une des valeur est null si oui exit 
        exit();
        }
      $i =0;
      while ((!empty($_POST['Msg'][$i]) && $i < 19)){
        if($_POST['Msg'][$i] == '\''){ echo "petit coquin tu essaie de faire quoi la ? c:";exit();}
        if($_POST['Msg'][$i] == '<' || $_POST['Msg'][$i] == '>' || $_POST['Msg'][$i] == '\\'){echo "les espaces ne sont pas autoriser "; exit();} // verifie tout les character pour voir si il y a un espace ou un '
        $i = $i +1;
      }

      $mysql->query('INSERT INTO tablemess VALUES (NULL,"'.($_SESSION['Pseudo']).'","'.$_POST['Msg'].'")');
      $mysql->close();
    }

   
    exit();
?>

