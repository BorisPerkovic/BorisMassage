$(window).on("load", function(){
    $(".preloader").fadeOut(1000); // set duration in brackets    
});

$(document).ready(function(){
    
    /* Contact form section
        -----------------------------------------------*/
    $("#submit").click(function(){
        var name_lastname=$("#name").val();
        var email=$("#email").val();
        var phone=$("#phone").val();
        var comment=$("#comment").val();
        if(name_lastname!="" && email!="" && phone!="" && comment!="")
        {
            if(comment.length<200)
            {
                $.ajax({
                    url:"../php/contact_form.php",
                    method:"POST",
                    data:{name_lastname:name_lastname, email:email, phone:phone, comment:comment},
                    success:function(response){
                        $("input").val("");
                        $("#comment").val("");
                        $("#answer").text(response);
                    }
                });
            }
            else
            {
                $("#answer").text("U polje za unos poruke ste uneli više od 200 karaktera!!");
            }
            
        }
        else
        {
            $("#answer").text("Niste popunili sva polja, sva polja su obavezna!!");
        }
    });

    /* Back top
        -----------------------------------------------*/
        $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
        $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
        })
    
});