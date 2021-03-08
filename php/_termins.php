<?php
require_once("function.php");
require_once("classBase.php");
$db=new Baza();
$db->connect();
$date=date("Y-m-d");
$output="";
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}
?>
<?php
//FILTERS
if(isset($_POST['action']))
{
    $startDate=$_POST['startDate'];
    $endDate=$_POST['endDate'];  
    $query="SELECT * FROM termins WHERE date BETWEEN '$startDate' AND '$endDate' ";
    if(isset($_POST['search']))
    {
        $query.="AND email LIKE '%".$_POST['search']."%'";
    }
    $query.="ORDER BY  date ASC";
    $rez=$db->query($query);
    $output="";
    if($db->num_rows($rez)!=0)
    {
        while($row=$db->fetch_object($rez))
        {
            $output.="<tr>";
            $output.="<th>".$row->mesages_id."</th>";
            $output.="<td>".$row->name_lastname."</td>";
            $output.="<td>".$row->email."</td>";
            $output.="<td>".$row->phone."</td>";
            $output.="<td>".$row->comment."</td>";
            $output.="<td>".$row->date_time."</td>";
            $output.="</tr>";
        }
        $output.="<tr>";
        $output.="<td colspan='6' id='termin_result'>Broj prikazanih rezultata za period od <b>".$startDate."</b> do <b>".$endDate."</b> je: <b>".$db->num_rows($rez)."</b></td>";
        $output.="</tr>";
        
    }
    echo $output;
}
?>