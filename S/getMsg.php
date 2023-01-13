<?php  
session_start();
if (isset($_SESSION['Pseudo'])){
    include('mysql.php');
    $result = $mysql->query('SELECT `Pseudo`,`Message` FROM `tablemess` ORDER BY ID DESC LIMIT 21');
    while($row = $result->fetch_assoc()){
        echo '<p2 >'.$row['Pseudo'].':'.$row['Message'].'</p2>';
    }
}
?>