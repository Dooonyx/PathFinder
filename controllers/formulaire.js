$(document).ready(function(){
    console.log("Le code JavaScript est en cours de chargment !");

    $("#prenom").css({"background-color":"#ff6961"});

    $("#prenom, #email, #nom, #departement").on("change",function(){
        //$("#prenom").css({"background-color":"#98FB98"});
        var prn = $("#prenom").val(); 
        var mail = $("#email").val();
        var nom = $("#nom").val().toUpperCase();
        console.log(nom);

        if (prn.length > 1) {
            $("#prenom").css({"background-color":"#98FB98"});
        } else {
            $("#prenom").css({"background-color":"#ff6961"});
        }
        if (mail.length > 1) {
            $("#email").css({"background-color":"#98FB98"});
        } else {
            $("#email").css({"background-color":"#ff6961"});
        }
    });

})