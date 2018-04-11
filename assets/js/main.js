function loadPlayer() {
/* document.getElementById("main-content").innerHTML='<object type="type/html" data="/settings/Black_Bayou/1a_Intro.html" ></object>';*/
/*    $(document).ready(function(){
        $("button").click(function(){
            $("#main-content").load("/settings/Black_Bayou/1a_Intro.html");
        });
    });*/
}

$("#loadPlayer-button").on("click", function(){
    $("#main-content").load("/settings/Black_Bayou/1a_Intro.html");
});
$("#loadPlayer-li").on("click", function(){
    $("#main-content").load("/settings/Black_Bayou/1a_Intro.html");
});
$("#loadCharacters").on("click", function(){
    document.getElementById("main-content").innerHTML='';
});
$("#loadCharacters-button").on("click", function(){
    document.getElementById("main-content").innerHTML='';
});