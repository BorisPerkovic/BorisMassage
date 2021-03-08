<?php
require_once("php/function.php");
require_once("php/classBase.php");
$db=new Baza();
$db->connect();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../pics/logo.png">
    <meta name="description" content="Cenovnik profesionalnih usluga masaža">
    <meta name="keywords" content="masaža, masaza, cenovnik">
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

    <title>Cenovnik</title>
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
 CENOVNIK HEAD SECTION
 ==================-->
 <section class="pt-5 pb-3">
     <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <h2 class="display-4">Cenovnik</h2>
            </div>   
        </div>
     </div>
 </section>


<!--==========================
 CENOVNIK TABLE SECTION
 ==========================-->
<div class="container-fluid">

<div class="container">

    <div class="table-responsive">

        <table class="table">
        <thead>
            <tr>
            <th scope="col">Vrsta(tip) masaže</th>
            <th scope="col">30 minuta</th>
            <th scope="col">45 minuta</th>
            <th scope="col">60 minuta</th>
            <th scope="col">90 minuta</th>
            <th scope="col">120 minuta</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query="SELECT * FROM simple";
                $rez=$db->query($query);
                
                while($row=$db->fetch_object($rez))
                {
                    echo "<tr>";
                    echo "<th>".$row->simple_name."</th>";
                    echo "<td>".$row->three_zero."</td>";
                    echo "<td>".$row->four_five."</td>";
                    echo "<td>".$row->six_zero."</td>";
                    echo "<td>".$row->nine_zero."</td>";
                    echo "<td>".$row->twelve_zero."</td>";
                    echo "</tr>";
                }
                

            ?>
        </tbody>
    </table>
        
    </div>

</div>

</div>

<section class="pt-5 pb-3">
     <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <h2 class="display-4">Paket masaže</h2>
            </div>   
        </div>
     </div>
 </section>

<div class="container-fluid table-margin">

<div class="container">

    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Vrsta(tip) masaže</th>
                <th scope="col">1 tretman</th>
                <th scope="col">5 tretmana</th>
                <th scope="col">6 tretmana</th>
                <th scope="col">10 tretmana</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * FROM pacage";
                    $res=$db->query($sql);
                    
                    while($red=$db->fetch_object($res))
                    {
                        echo "<tr>";
                        echo "<th>".$red->pacage_name."</th>";
                        echo "<td>".$red->one_tretman."</td>";
                        echo "<td>".$red->five_tretman."</td>";
                        echo "<td>".$red->six_tretman."</td>";
                        echo "<td>".$red->ten_tretman."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        
    </div>

</div>

</div>

<section class="pt-5 pb-3">
     <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <h2 class="display-4">Istočnjačke masaže</h2>
            </div>   
        </div>
     </div>
 </section>

<div class="container-fluid table-margin">

<div class="table-wrapper">

    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Vrsta(tip) masaže</th>
                <th scope="col">1 tretman</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $upit="SELECT * FROM east";
                    $result=$db->query($upit);
                    
                    while($rouw=$db->fetch_object($result))
                    {
                        echo "<tr>";
                        echo "<th>".$rouw->east_name."</th>";
                        echo "<td>".$rouw->tretman."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
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