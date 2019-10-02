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
    let dice = Math.floor(Math.random() * 6) + 1;
    document.getElementById("noppa").innerHTML = dice;
    pisteet += 4;
    document.getElementById("pisteet").innerHTML = pisteet;
    // document.getElementById("noppa").src =
    }
