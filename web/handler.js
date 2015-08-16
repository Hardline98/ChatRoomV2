$(document).ready(function() {
    $.ajax({
        url: "getServerTime.php",
        success: function(data) {
            $("#timeBox").html(data);
        }
    });

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

    setInterval(function() {
        $.ajax({
            url: "getServerTime.php",
            success: function(data) {
                $("#timeBox").html(data);
            }
        });
    }, 1000);

    $(".sendBtn").on("click", function() {
        send($("#msgField").val());
    })
});

function send(message) {
    $.ajax({
        url: "sendMessage.php",
        type: "POST",
        success: function(data) {
            if(data == "li") {
                $("#msgField").val("You are not logged in!");
            }
            else if(data == "de") {
                $("#msgField").val("There was a database error.");
            }
            else {
                $("#msgField").val("There was an unexpected error.");
            }
        }
    });
}
