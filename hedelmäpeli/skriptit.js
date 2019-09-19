var rahat = 50;
var slots = [0,0,0];
var locks = [0,0,0];

var saa_lukita = false;
var images = [
"omena.png",
"melooni.png",
"päärynä.png",
"kirsikka.png",];


function updateUi(){
    document.getElementById("rahat").innerHTML = rahat;

    
    if (locks[0] == 0) {
       document.getElementById("lukko1").src = "img/lukitus1.png";                                                                                                           
    } else {
        document.getElementById("lukko1").src = "img/lukitus2.png";      
    }
    if (locks[1] == 0) {
        document.getElementById("lukko2").src = "img/lukitus1.png";                                                                                                           
    } else {
        document.getElementById("lukko2").src = "img/lukitus2.png";
    }               
    if (locks[2] == 0) {
        document.getElementById("lukko3").src = "img/lukitus1.png";                                                                                                           
    } else {
        document.getElementById("lukko3").src = "img/lukitus2.png";
    }
}


function slot() {
    return Math.floor(Math.random() * images.length);
}

function voitto(slot1, slot2, slot3){
    if (slot1 == slot2 && slot2 == slot3) {
        if       (slot1 == 0) {
            rahat = rahat + 10;
        } else if(slot1 == 1) {
            rahat = rahat + 10;
        } else if(slot1 == 2) {
            rahat = rahat + 10;
        } else if (slot1 == 3) {
            rahat = rahat + 50;
        }
    
    }

    updateUi();
}


function pelaa() {

    rahat = rahat-1;
{   if (locks[0] == 0)
    slots[0] = slot(); false
}

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

function lukitse(j) {

    if (locks[j] == 1) {
        locks[j] = 0;
    } else {
        locks[j] = 1;
    }

    updateUi();
}


function vaihdaKuva(elem, lukko) {
    console.log(elem);
    if (lukko == 0)   { 
        document.getElementById(elem.id).src = "./img/lukitus1.png";
    }
    else {
        document.getElementById(elem.id).src = "./img/lukitus2.png";
    }

}
    
function update() {

    document.getElementById("panos").innerHTML = panos;
    document.getElementById("rahat").innerHTML = rahat;

    // Lukitusken tarkistus
    let l1 = document.getElementById("lukko1");
    let l2 = document.getElementById("lukko2");
    let l3 = document.getElementById("lukko3");
    
    vaihdaKuva(l1,lukko1);
    vaihdaKuva(l2,lukko2);
    vaihdaKuva(l3,lukko3);

    if (saa_lukita == false){
        document.getElementById("lukko1").disabled = true;
    } else {
        document.getElementById("lukko1").disabled = false;
    }

    if (saa_lukita == false){
        document.getElementById("lukko2").disabled = true;
    } else {
        document.getElementById("lukko2").disabled = false;
    }

    if (saa_lukita == false){
        document.getElementById("lukko3").disabled = true;
    } else {
        document.getElementById("lukko3").disabled = false;
    }


} 
