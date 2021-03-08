<?php
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
if(isset($_POST['name_lastname']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['comment']))
{
    $name_lastname=$_POST['name_lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comment=$_POST['comment'];
    $date=date("Y-m-d");
    if($name_lastname!="" and  $email!="" and $phone!="" and $comment!="")
    {
      if(validanString($name_lastname) and validanString($email) and validanString($phone) and validanString($comment))
      {
        $sql="INSERT INTO termins (name_lastname, email, phone, comment, date) VALUES ('{$name_lastname}', '{$email}', '{$phone}', '{$comment}', '{$date}')";
        $db->query($sql);
        echo "Uspešno ste se zakazali termin. Zahvaljujemo Vam se na poverenju!";
        Log::upisiLog("../logs/termini.txt", "$name_lastname $email je uspešno zakazao termin");
      }
      else
      {
        echo "U jednom od polja za unos postoje nedozvoljeni karakteri";
        Log::upisiLog("../logs/greske.txt", "Nedozvoljeni karakteri pri zakazivanju termina- poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
      } 
    }
    else
        echo "Niste uneli sve podatke!!";
}
?>
