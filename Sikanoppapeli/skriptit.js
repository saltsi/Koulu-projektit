var c=document.getElementById("nopanpaikka");
var pelaaja1 = 0;
var pisteet=0;
var pistetaulukko = [0,0];
var vuoro = 0;
var kokopisteet = 0;
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
    pisteet += dice;
    document.getElementById("pisteet").innerHTML = pisteet;
    document.getElementById("noppa").src = "img/"+images[dice - 1];
    }

    function vaihdavuoro() {
        console.log('vaihdavuoro');
        if (vuoro === 0) {
          pistetaulukko[0] += pisteet;
          vuoro = 1;
        } else {
          pistetaulukko[1] += pisteet;
          vuoro = 0;
        }
        pisteet = 0;
        refresh();
      }