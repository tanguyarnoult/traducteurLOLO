var java = document.getElementById("javaText");
var lolo = document.getElementById("loloText");
var reset = document.getElementById("reset")

reset.addEventListener("click", vider());

function vider(){
    alert(test);
    java.innerHTML = "";
    lolo.innerHTML = "";

    return 1;
}