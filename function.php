<?php


function verification_inscription($email){
   //on va verifier si l'user existe dans la base de donnée si oui on revois un false pour dire qu il n a pas été inscris
   $sql = mysql_query("SELECT * FROM User WHERE ".$email." = '".$_POST['email']."'") or die(mysql_error()); 
 
   if(mysql_num_rows ($sql == 0)
    {
        return false;
    }
  
    return false;
}

function add_user($lastname,$firstname,$email,$password,$birthday)
{
 
  
  $sql = $dbh->prepare("insert into Users values ('',:email,:password")) ;
  $sql->bindParam(':email', $email,PDO::PARAM_STR);
  $sql->bindParam(':password', $password,PDO::PARAM_STR);
  $sql->execute();
  
   
}

?>
