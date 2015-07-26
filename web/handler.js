$(document).ready(function() {
    $("#signUp").on("click", function() {
        $("#overlay").fadeIn("fast");
        $("#overlay").css("display", "inherit");
        $("#box").fadeIn("slow");
        $("#box").css("display", "block");
    });

    $("#overlay").on("click", function() {
        $("#overlay").css("display", "none");
        $("#box").css("display", "none");
    });
});
