<?php
class USER{
  public $pseudo;
  public $pass;

  function set_pseudo($input){
    if($input == NULL){
      echo "le mot de pass et nom d'utilisateur ne peut pas etre NULL";        // verifie si l'une des valeur est null si oui exit 
      exit();
    }
    $i =0;
    while ((!empty($input[$i]) && $i < 19)){
      if($input[$i] == '\''){ echo "petit coquin tu essaie de faire quoi la ? c:";exit();}
      if($input[$i] == ' ' || $input[$i] == '<' || $input[$i] == '>' || $input[$i] == '\\'  || $input[$i] == '/'){echo "les character speciaux ne sont pas autoriser "; exit();} // verifie tout les character pour voir si il y a un espace ou un '
      $i = $i +1;
    }
    $this->pseudo = $input;
  }  
  
  function Check_pseudo(){
    global $mysql;
   $result = $mysql->query("SELECT login FROM table1");       // recupere la table des pseudo pour verifier si le pseudo indiquer existe deja si oui  met le flag a 1
   if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $tmp = $row["login"];
          if (strtoupper($row["login"]) == strtoupper($this->pseudo)){
            $this->pseudo = $tmp;
            
            return 1;
          }
        }
        return 0;
  } 
    
  }
  function set_pass($input){
    if($input == NULL){
      echo "le mot de pass et nom d'utilisateur ne peut pas etre NULL";        // verifie si l'une des valeur est null si oui exit 
      exit();
    }
    $i =0;
    while ((!empty($input[$i]) && $i < 19)){
      if($input[$i] == '\''){ echo "petit coquin tu essaie de faire quoi la ? c:";exit();}
      if($input[$i] == ' '){echo "les espaces ne sont pas autoriser "; exit();} // verifie tout les character pour voir si il y a un espace ou un '
      $i = $i +1;
    }
     $this->pass = $input;
  }

  function CheckPass(){
    global $mysql;
    $checkPass = $mysql->query("SELECT pass FROM table1 WHERE login = '$this->pseudo'");
    if ($checkPass->num_rows > 0) {
      while($PassRow = $checkPass->fetch_assoc()){
        if ($PassRow["pass"] == $this->pass){
          return 1;    //si le mmot de passe  correspond
        }
      }
     return 0; 
    }
  }

}
?>