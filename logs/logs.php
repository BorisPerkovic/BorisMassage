<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../jscript/config.js"></script>

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/icons/all.min.css" rel="stylesheet">

    <title>Kontakt</title>
</head>
<body>

<!--================
 NAV-BAR SECTION
 ================-->
<?php

//Including navbar section
include("../_navbar.php");

?>


<!--==================
 CONTACT HEAD SECTION
 ==================-->
<div class="container-fluid" id="contact-head-text">
    <h4 class="text-center">Logovi</h4>
</div>


<div class="container">

  <div class="row">

    <div class="col-log-6" style="padding: 20px;">
        <form action="logs.php" method="post" >
            <select name="logovi" id="logovi">
                <option value="0">--Izaberite log fajl--</option>
                <option value="greske.txt">Greske</option>
                <option value="termini.txt">Termini</option>
                <option value="obicne.txt">Obicne</option>
                <option value="paketi.txt">Paketi</option>
                <option value="istokčnjačko.txt">Istočnjačko</option>
            </select><br><br>
            <button class="btn btn-success">Prikaži</button>
        </form>
            <br><br>
        <?php
            if(isset($_POST['logovi']) and $_POST['logovi']!="0")
            {
                $imeFajla=$_POST['logovi'];
                echo $imeFajla."<br>";
                if(file_exists($imeFajla))
                {
                    $prikaz=file_get_contents($imeFajla);
                    $prikaz=str_replace("\r\n", "<br>", $prikaz);
                    echo $prikaz;
                }
                else echo "Ne postoji datoteka koju ste izabrali";
            }
            else echo "Niste izabrali log fajl!!";
        ?>
    </div>

    

  </div>

</div>
    


            

<!--================
 FOOTER SECTION
 ================-->
 <?php

//Including footer section
include("../_footer.php");

?>

</body>
</html>