var pisteet = 0;
var pelaaja1 = 0;
var images = [
"img/1.png",
"img/2.png",
"img/3.png",
"img/4.png",
"img/5.png",
"img/6.png" ];


function pelaa() {
    let dice = Math.floor(Math.random() * 10) + 1;
    document.getElementById("dice").innerHTML = dice;
    pisteet = dice;
    document.getElementById("pisteet").innerHTML = pisteet;
    var s1 = document.getElementById("noppa").innerHTML = pisteet
    }
