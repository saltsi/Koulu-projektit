var rahat = 500;
var slots = [0,0,0];

var images = [
    "omena.png",
    "päärynä.png",
    "kirsikka.png"];

function slot() {
    return Math.floor(Math.random() * 3);
}

function voitto(slot1, slot2, slot3) {
    if (slot1 == slot2 && slot2 == slot3) {
    rahat = rahat + 5;
    } else {
        rahat = rahat-1;
    }
    return rahat;
}


function pelaa() {

    var n1 = slot();
    var n2 = slot();
    var n3 = slot();
    if (rahat < 1) {
        return;
    }
      
    var s1 = document.getElementById("slot1");
    var s2 = document.getElementById("slot2");
    var s3 = document.getElementById("slot3");
    
    s1.src = "img/"+images[n1];
    s2.src = "img/"+images[n2];
    s3.src = "img/"+images[n3];

    document.getElementById("rahat").innerHTML = voitto(n1, n2, n3);

}

function lukitus() {
    
}