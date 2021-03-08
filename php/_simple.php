<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}
if(isset($_GET['funkcija']))
{
    $funkcija=$_GET['funkcija'];

    //Puting products in select option on load for simple massage
    if($funkcija=="select_simple")
    {  
        $simple_id=$_POST['simple_id'];
        $sql="SELECT * FROM simple WHERE simple_id='$simple_id'";
        $res=$db->query($sql);
        $all=mysqli_fetch_all($res, MYSQLI_ASSOC);
        echo JSON_encode($all,256);
    }

    //Update simple section
    if($funkcija=="update_simple"){
        $simple_id=$_POST['simple_id'];
        $three_zero=$_POST['three_zero'];
        $four_five=$_POST['four_five'];
        $six_zero=$_POST['six_zero'];
        $nine_zero=$_POST['nine_zero'];
        $twelve_zero=$_POST['twelve_zero'];
        if($simple_id!="" AND $three_zero!="" AND $four_five!="" AND $six_zero!="" AND $nine_zero!="" AND $twelve_zero!="")
        {   
            $sql="UPDATE simple SET three_zero='{$three_zero}', four_five='{$four_five}', six_zero='{$six_zero}', nine_zero='{$nine_zero}', twelve_zero='{$twelve_zero}' WHERE simple_id='$simple_id'";
            $res=$db->query($sql);
            if(mysqli_error($db))
            {
                echo "GRESKA!!!!<br>".mysqli_error($db);
            }
            else
            {
                echo "Uspesno izmenjene cene usluge";
                Log::upisiLog("../logs/obicne.txt", "Izmenjena cene masaže sa ID $simple_id");
            }
        }
        else
        {
            echo "Niste uneli sve podatke!!";
            exit;
        }
            
               
    }

    //Puting products in select option on load for pacage massage
    if($funkcija=="select_pacage")
    {  
        $pacage_id=$_POST['pacage_id'];
        $sql="SELECT * FROM pacage WHERE pacage_id='$pacage_id'";
        $res=$db->query($sql);
        $all=mysqli_fetch_all($res, MYSQLI_ASSOC);
        echo JSON_encode($all,256);
    }

    //Update pacage section
    if($funkcija=="update_pacage"){
        $pacage_id=$_POST['pacage_id'];
        $one_tretman=$_POST['one_tretman'];
        $five_tretman=$_POST['five_tretman'];
        $six_tretman=$_POST['six_tretman'];
        $ten_tretman=$_POST['ten_tretman'];
        if($pacage_id!="" AND $one_tretman!="" AND $five_tretman!="" AND $six_tretman!="" AND $ten_tretman!="")
        {   
            $sql="UPDATE pacage SET one_tretman='{$one_tretman}', five_tretman='{$five_tretman}', six_tretman='{$six_tretman}', ten_tretman='{$ten_tretman}' WHERE pacage_id='$pacage_id'";
            $res=$db->query($sql);
            if(mysqli_error($db))
            {
                echo "GRESKA!!!!<br>".mysqli_error($db);
            }
            else
            {
                echo "Uspesno izmenjene cene usluge";
                Log::upisiLog("../logs/paketi.txt", "Izmenjena cene masaže sa ID $pacage_id");
            }
        }
        else
        {
            echo "Niste uneli sve podatke!!";
            exit;
        }
            
               
    }

    //Puting products in select option on load for east massage
    if($funkcija=="select_east")
    {  
        $east_id=$_POST['east_id'];
        $sql="SELECT * FROM east WHERE east_id='$east_id'";
        $res=$db->query($sql);
        $all=mysqli_fetch_all($res, MYSQLI_ASSOC);
        echo JSON_encode($all,256);
    }

    //Update east section
    if($funkcija=="update_east"){
        $east_id=$_POST['east_id'];
        $tretman=$_POST['tretman'];
        if($east_id!="" AND $tretman!="")
        {   
            $sql="UPDATE east SET tretman='{$tretman}' WHERE east_id='$east_id'";
            $res=$db->query($sql);
            if(mysqli_error($db))
            {
                echo "GRESKA!!!!<br>".mysqli_error($db);
            }
            else
            {
                echo "Uspesno izmenjene cene usluge";
                Log::upisiLog("../logs/istokčnjačko.txt", "Izmenjena cene masaže sa ID $pacage_id");
            }
        }
        else
        {
            echo "Niste uneli sve podatke!!";
            exit;
        }
            
               
    }

    
}



?>