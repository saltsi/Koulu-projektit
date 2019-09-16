var rahat = 50;
var slots = [0,0,0];
var images = [
"omena.png",
"melooni.png",
"päärynä.png",
"kirsikka.png",];


function updateUi(){
    document.getElementById("rahat").innerHTML = rahat;
}


function slot() {
    return Math.floor(Math.random() * images.length);
}

function voitto(slot1, slot2, slot3){
    if (slot1 == slot2 && slot2 == slot3) {
        if (slot1 == 0) {
            rahat = rahat + 15;
        } else if(slot1 == 1) {
            rahat = rahat + 15;
        } else if(slot1 == 2) {
            rahat = rahat + 15;
        } else if (slot1 == 3) {
            rahat = rahat + 100;
        }
    
    }

    updateUi();
}


function pelaa() {

    rahat = rahat-1;

    slots[0] = slot();
    slots[1] = slot();
    slots[2] = slot();

    if (rahat < 1) {
        return;
    }

    var s1 = document.getElementById("slot1");
    var s2 = document.getElementById("slot2");
    var s3 = document.getElementById("slot3");
    
    s1.src = "img/"+images[slots[0]];
    s2.src = "img/"+images[slots[1]];
    s3.src = "img/"+images[slots[2]];

    voitto(slots[0],slots[1], slots[2])
    

    updateUi();
    
}

function lukitus(j) {

    if (j.id == "lukko1") {
        if (lukko1 == 0) {
            lukko1 = 1;
        } else {
            lukko1 = 0;
        }
        console.log(lukko1);
        vaihdaKuva(j);
    }

    if (j.id == "lukko2") {
        console.log(j.id)
        if (lukko2 == 0) {
            lukko2 = 1;
        } else {
            lukko2 = 0;
        }
        console.log(lukko2);
        vaihdaKuva(j);
    }

    if (j.id == "lukko3") {
        console.log(j.id)
        if (lukko3 == 0) {
            lukko3 = 1;
        } else {
            lukko3 = 0;
        }
        console.log(lukko3);
        vaihdaKuva(j);
    }

    function vaihdaKuva(elem) {
        console.log(elem);
        if (elem.dataset.lock == 'false')   { 
            document.getElementById(elem.id).src = "./img/lukitus1.png";
            elem.dataset.lock = "true";
        }
        else {
            document.getElementById(elem.id).src = "./img/lukitus2.png"
            elem.dataset.lock = "false"; 
        }
    }
}
