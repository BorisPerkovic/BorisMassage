$(document).ready(function(){

/*=================
TERMINS SECTION
=================*/

//load termins
function onLoadtermins()
{
  $.post("../php/termins_on_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
    $("#termin-body").append("<tr><th scope='row'>"+answer[i].mesages_id+"</th><td>"+answer[i].name_lastname+"</td><td>"+answer[i].email+"</td><td>"+answer[i].phone+"</td><td>"+answer[i].comment+"</td><td>"+answer[i].date_time+"</td></tr>");
  });
}
onLoadtermins();


//Filters for termins
function filter_data()
{
  var action='fetch_data';
  var startDate=$("#startDate").val();
  var endDate=$("#endDate").val();
  var search=$("#search").val();
  $.ajax({
    url: '../php/_termins.php',
    method: 'POST',
    data:{action:action, startDate:startDate, endDate:endDate,search:search},
    success: function(response){
     $('#termin-body').html(response);
    }
  });
}


    //On click date and searchclass
    $(".selector").click(function(){
        filter_data();
    });

/*=================
PRICE SECTION
=================*/

//Simple massage section
function onLoadSimple()
{
  $.post("../php/simple_on_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
    $("#inputGroupSelect01").append("<option value='"+answer[i].simple_id+"'>"+answer[i].simple_name+"</option>");
  });
}
onLoadSimple();

//On click chose button in simple section, putting massage information in input fields
$("#simple-btn").click(function(){
  var simple_id=$('#inputGroupSelect01').val();
  if(simple_id!=0)
  {
      $.ajax({
          url:"../php/_simple.php?funkcija=select_simple",
          method:'POST',
          data: {simple_id:simple_id},
          success: function(response){
          var answer=JSON.parse(response);
          for (i in answer)
          $("#simple-type-name").text(answer[i].simple_name);
          $("#three-zero").val(answer[i].three_zero);
          $("#four-five").val(answer[i].four_five);
          $("#six-zero").val(answer[i].six_zero);
          $("#nine-zero").val(answer[i].nine_zero);
          $("#twelve-zero").val(answer[i].twelve_zero);
          }
      })
  }
  else
  {
      alert("Niste izabrali nijednu masažu");
  }
});

//UPDATE simple price
$("#simple-update").click(function(){
  var simple_id=$('#inputGroupSelect01').val();
  var three_zero=$("#three-zero").val();
  var four_five=$("#four-five").val();
  var six_zero=$("#six-zero").val();
  var nine_zero=$("#nine-zero").val();
  var twelve_zero=$("#twelve-zero").val();
  if(simple_id!="0" && three_zero!="" && four_five!="" && six_zero!="" && nine_zero!="" && twelve_zero!="")
  {
    if(!confirm("Da li ste sigurni da želite da izmenite cene masaža?"))
    {
        return false;
    }
    else
    {
      $.ajax({
        url: "../php/_simple.php?funkcija=update_simple",
        type: "POST",
        data: {simple_id:simple_id, three_zero:three_zero, four_five:four_five, six_zero:six_zero, nine_zero:nine_zero, twelve_zero:twelve_zero},
        success: function(data){
              $("#error_simple").empty();
              $("input").val("");
              $("#inputGroupSelect01").empty();
              $("#inputGroupSelect01").append("<option value='0'>--Izaberite vrstu masaže--</option>");
              onLoadSimple();
              $("#error_simple").text("Uspešno ste izmenili cenu masaže");
          }
      });
    }  
  }
  else
  {
    $("#error_simple").text("Niste popunili sva polja! Sva polja su obavezna!");
  }
});


//Pacage massage section
function onLoadPacage()
{
  $.post("../php/pacage_on_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
    $("#inputGroupSelect02").append("<option value='"+answer[i].pacage_id+"'>"+answer[i].pacage_name+"</option>");
  });
}
onLoadPacage();

//On click chose button in pacage section, putting massage information in input fields
$("#pacage-btn").click(function(){
  var pacage_id=$('#inputGroupSelect02').val();
  if(pacage_id!=0)
  {
      $.ajax({
          url:"../php/_simple.php?funkcija=select_pacage",
          method:'POST',
          data: {pacage_id:pacage_id},
          success: function(response){
          var answer=JSON.parse(response);
          for (i in answer)
          $("#pacage-type-name").text(answer[i].pacage_name);
          $("#one-tretman").val(answer[i].one_tretman);
          $("#five-tretman").val(answer[i].five_tretman);
          $("#six-tretman").val(answer[i].six_tretman);
          $("#ten-tretman").val(answer[i].ten_tretman);
          }
      })
  }
  else
  {
      alert("Niste izabrali nijednu masažu");
  }
});

//UPDATE pacage price
$("#pacage-update").click(function(){
  var pacage_id=$('#inputGroupSelect02').val();
  var one_tretman=$("#one-tretman").val();
  var five_tretman=$("#five-tretman").val();
  var six_tretman=$("#six-tretman").val();
  var ten_tretman=$("#ten-tretman").val();
  if(pacage_id!="0" && one_tretman!="" && five_tretman!="" && six_tretman!="" && ten_tretman!="")
  {
    if(!confirm("Da li ste sigurni da želite da izmenite cene masaža?"))
    {
        return false;
    }
    else
    {
      $.ajax({
        url: "../php/_simple.php?funkcija=update_pacage",
        type: "POST",
        data: {pacage_id:pacage_id, one_tretman:one_tretman, five_tretman:five_tretman, six_tretman:six_tretman, ten_tretman:ten_tretman,},
        success: function(data){
              $("#error_pacage").empty();
              $("input").val("");
              $("#inputGroupSelect02").empty();
              $("#inputGroupSelect02").append("<option value='0'>--Izaberite vrstu masaže--</option>");
              onLoadPacage();
              $("#error_pacage").text("Uspešno ste izmenili cenu masaže");
          }
      });
    }  
  }
  else
  {
    $("#error_pacage").text("Niste popunili sva polja! Sva polja su obavezna!");
  }
});

//East massage section
function onLoadEast()
{
  $.post("../php/east_on_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
    $("#inputGroupSelect03").append("<option value='"+answer[i].east_id+"'>"+answer[i].east_name+"</option>");
  });
}
onLoadEast();

//On click chose button in east section, putting massage information in input fields
$("#east-btn").click(function(){
  var east_id=$('#inputGroupSelect03').val();
  if(east_id!=0)
  {
      $.ajax({
          url:"../php/_simple.php?funkcija=select_east",
          method:'POST',
          data: {east_id:east_id},
          success: function(response){
          var answer=JSON.parse(response);
          for (i in answer)
          $("#east-type-name").text(answer[i].east_name);
          $("#tretman").val(answer[i].tretman);
          }
      })
  }
  else
  {
      alert("Niste izabrali nijednu masažu");
  }
});

//UPDATE east price
$("#east-update").click(function(){
  var east_id=$('#inputGroupSelect03').val();
  var tretman=$("#tretman").val();
  if(east_id!="0" && tretman!="")
  {
    if(!confirm("Da li ste sigurni da želite da izmenite cene masaža?"))
    {
        return false;
    }
    else
    {
      $.ajax({
        url: "../php/_simple.php?funkcija=update_east",
        type: "POST",
        data: {east_id:east_id, tretman:tretman},
        success: function(data){
              $("#error_east").empty();
              $("input").val("");
              $("#inputGroupSelect03").empty();
              $("#inputGroupSelect03").append("<option value='0'>--Izaberite vrstu masaže--</option>");
              onLoadEast();
              $("#error_east").text("Uspešno ste izmenili cenu masaže");
          }
      });
    }  
  }
  else
  {
    $("#error_east").text("Niste popunili sva polja! Sva polja su obavezna!");
  }
});



    //Making active link background depends on active URL in navbar-JAVASCRIPT
  const currentLocation=location.href;
  const menuItem=document.getElementsByClassName('nav-link');
  const menuLenth=menuItem.length;
  for(let i = 0; i<menuLenth;i++)
  {
    if(menuItem[i].href===currentLocation)
    {
      menuItem[i].className="nav-link active";
    }
    else{
      menuItem[i].className="nav-link";
    }
  }
    
    
    
});