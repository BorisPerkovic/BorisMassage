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
    <script src="termini_cenovnik.js"></script>

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Kontakt</title>
</head>
<body id="termins_price">

<!--================
 NAV-BAR TOP SECTION
 ================-->
 <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="top-navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="price.php">Cenovnik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="termins.php">Termini</a>
      </li>
    </ul>
  </div>
</nav>
   
<!--====================
 NAV-BAR BOTTOM SECTION
 ====================-->
<div class="container-fluid" id="bottom-navbar">
  <div class="row">

    <div class="col-xl-3 col-lg-3 col-md-3">
      <p>Početni datum: <input type="date" id="startDate" value="<?php echo date("Y-m-d");?>"></p>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-3">
      <p>Krajni datum: <input type="date" id="endDate" value="<?php echo date("Y-m-d");?>"></p>
    </div>

    <div class="col-xl-2 col-lg-2 col-md-2">
      <button class="btn btn-outline-success selector" type="submit">Sačuvaj datume</button>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" id="search" placeholder="Unesite E-mail adresu" aria-label="Search">
      <a href="#" class="btn btn-outline-success selector">Pretraga</a>
    </form>
    </div>

  </div>
</div>

<!--=================
  MAIN SECTION
===================-->
<div class="container-fluid">

  <div class="row">

    <!--  table   -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <table class="table table-hover text-left" id="termin-table">
        <thead>
          <tr>
            <th scope="col">Broj Masaze</th>
            <th scope="col">Ime i Prezime</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefon</th>
            <th scope="col">Poruka</th>
            <th scope="col">Datum zahteva</th>
          </tr>
        </thead>
        <tbody id="termin-body">

        </tbody>
      </table>
    </div>


</body>
</html>