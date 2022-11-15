
/* 
$(document).ready(function () {
    console.log("hello world")
}); */

/* $(document).ready(function () {
   $("#client-toggle-activation").click(function() {
       $("#client-toggle-activation").text("Actif");
   })
});
   */
 

$(document).ready(function () {
    let fold = $("#client-toggle-activation");
    fold.cliked = 1;
    fold.click(function () {

        $("#client-toggle-activation").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });

    let fold = $("#activate-client1");
    fold.cliked = 1;
    fold.click(function () {

        $("#activate-client1").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });

    let fold = $("#activate-client2");
    fold.cliked = 1;
    fold.click(function () {

        $("#activate-client2").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });

    let fold = $("#activate-client3");
    fold.cliked = 1;
    fold.click(function () {

        $("#activate-client3").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });

    let fold = $("#activate-client4");
    fold.cliked = 1;
    fold.click(function () {

        $("#activate-client4").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });

    let fold = $("#activate-client5");
    fold.cliked = 1;
    fold.click(function () {

        $("#activate-client5").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });


    let fold = $("#activate-client6");
    fold.cliked = 1;
    fold.click(function () {

        $("#activate-client6").text((fold.cliked++ % 2 == 0) ? "Non actif" : "Actif");
    });

});

    




/* Filtre clients non actifs
$('label:contains("Actif")').closest('.card').addClass('is-active');

});

   
    $("#non-active-button").click(function(){
        $(".is-active").hide();
        }); */