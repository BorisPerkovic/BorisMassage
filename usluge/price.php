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
            
<!--================
 NAV-BAR BOTTOM SECTION
 ================-->
 <div class="container-fluid" id="price-bottom-nav">

 
 <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Obične masaže</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Paket masaže</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Istočnjacke masaže</a>
    </li>
</ul>

</div>
<div class="tab-content" id="myTabContent">

  <!-- Simple massage section -->
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="col-xl-6 col-lg-6 col-md-6 input-group central">
        <select class="custom-select" id="inputGroupSelect01">
            <option value="0">--Izaberite vrstu masaže--</option>
            
        </select>
        <button id="simple-btn" class='btn btn-outline-success' style="margin-left: 20px;">Izaberite masažu</button>
      </div><br><br>
      <table class="table table-borderless">
        <thead>
          <tr>
          <th scope="col">Vrsta(tip) masaže</th>
            <th>30 minuta</th>
            <th>45 minuta</th>
            <th>60 minuta</th>
            <th>90 minuta</th>
            <th>120 minuta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" id="simple-type-name"></th>
            <td><input type="text" class="min-width" id="three-zero"></td>
            <td><input type="text" class="min-width" id="four-five"></td>
            <td><input type="text" class="min-width" id="six-zero"></td>
            <td><input type="text" class="min-width" id="nine-zero"></td>
            <td><input type="text" class="min-width" id="twelve-zero"></td>
          </tr>
        </tbody>
      </table><br>
      <button id="simple-update" class='btn btn-outline-success'>Sačuvaj izmene</button><br><br>
      <div id="error_simple"></div>
  </div>

  <!-- Pacage massage section -->
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="col-xl-6 col-lg-6 col-md-6 input-group central">
        <select class="custom-select" id="inputGroupSelect02">
            <option value="0">--Izaberite vrstu masaže--</option>
            
        </select>
        <button id="pacage-btn" class='btn btn-outline-success' style="margin-left: 20px;">Izaberite masažu</button>
      </div><br><br>
      <table class="table table-borderless">
        <thead>
          <tr>
          <th scope="col">Vrsta(tip) masaže</th>
            <th>1 tretman</th>
            <th>5 tretmana</th>
            <th>6 tretmana</th>
            <th>10 tretmana</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" id="pacage-type-name"></th>
            <td><input type="text" class="min-width" id="one-tretman"></td>
            <td><input type="text" class="min-width" id="five-tretman"></td>
            <td><input type="text" class="min-width" id="six-tretman"></td>
            <td><input type="text" class="min-width" id="ten-tretman"></td>
          </tr>
        </tbody>
      </table><br>
      <button id="pacage-update" class='btn btn-outline-success'>Sačuvaj izmene</button><br><br>
      <div id="error_pacage"></div>
  </div>

  <!-- East massage section -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="col-xl-6 col-lg-6 col-md-6 input-group central">
        <select class="custom-select" id="inputGroupSelect03">
            <option value="0">--Izaberite vrstu masaže--</option>
            
        </select>
        <button id="east-btn" class='btn btn-outline-success' style="margin-left: 20px;">Izaberite masažu</button>
      </div><br><br>
      <table class="table table-responsive table-borderless">
        <thead>
          <tr>
          <th scope="col">Vrsta(tip) masaže</th>
            <th>1 tretman</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" id="east-type-name"></th>
            <td><input type="text" class="min-width" id="tretman"></td>
          </tr>
        </tbody>
      </table><br>
      <button id="east-update" class='btn btn-outline-success'>Sačuvaj izmene</button><br><br>
      <div id="error_east"></div>
  </div>
</div>




</body>
</html>