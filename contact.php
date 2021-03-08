<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../pics/logo.png">
    <meta name="description" content="Kontakt i Lokacija">
    <meta name="keywords" content="masaža, masaza, kontakt, lokacija">
    <meta name="author" content="Boris Perković">
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
include("_navbar.php");

?>


<!--==================
 CONTACT HEAD SECTION
 ==================-->
 <section class="py-4">
     <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <h2 class="display-4">Kontakt</h2>
            </div>   
        </div>
     </div>
 </section>
 


<!--==========================
 INFORMATION AND FORM SECTION
 ==========================-->
<div class="container-fluid" id="form-section">

<div class="container">

    <div class="row">

        <!-- Contanct info section-->
        <div class="col-xl-6 col-lg-6 col-md-6">
            <h6>BorisMassage</h6>
            <h6>Stojimo Vam na raspolaganju</h6>
            <p class="mt-3">E-mail adresa: <b>borisperkovic89@yahoo.com</b></p>
            <p>Pozovite nas na broj telefona: <b>+381695382477</b><br>Takođe, putem telefona smo dostupni i na aplikacijama <b>Viber</b> i <b>Whatsapp</b></p>
            <p>Radno vreme od <b>9:00</b> do <b>21:00</b><br> Nedeljom od <b>11:00</b> do <b>18:00</b></p>
            <p><b>Napomena:</b> Zbog vanrednih okolnosti i pandemije,<br> moguće su korekcije radnog vremena, molimo Vas<br> da nam se javite za ažurnu informaciju.</p>
        </div>

        <!-- Contanct form section-->
        <div class="col-xl-6 col-lg-6 col-md-6">
            <h6>Pišite nam</h6>
            <p>Zakazivanje termina ili druge informacije koje Vas interesuju, molimo pošaljite nam poruku, odgovorićemo Vam u što kraćem roku.</p>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Ime i Prezime"><br>
                    <input type="email" class="form-control" id="email" placeholder="E-mail adresa"><br>
                    <input type="text" class="form-control" id="phone" placeholder="Broj telefona"><br>
                </div>
                <div class="form-group">
                    Poruka (Maksimalno 200 karaktera)
                    <textarea class="form-control" id="comment" rows="3"></textarea>
                </div>
            </form><br>
            <button class="btn" id="submit">Pošaljite poruku</button><br><br>
            <div id="answer"></div>
        </div>
    </div>

</div>

</div>
    


            

<!--================
 FOOTER SECTION
 ================-->
 <?php

//Including footer section
include("_footer.php");

?>

</body>
</html>