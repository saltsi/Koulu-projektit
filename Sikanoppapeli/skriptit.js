var c=document.getElementById("nopanpaikka");
var pelaaja1 = 0;
var pisteet=0;
var pistetaulukko = [0,0];
var vuoro = 0;
var kokopisteet = 0;
var images = [
"1.png",
"2.png",
"3.png",
"4.png",
"5.png",
"6.png"];

function pelaa() {
    let dice = Math.floor(Math.random() * 6) + 1;
    let dice2 = Math.floor(Math.random() * 6) + 1;
    document.getElementById("noppa").innerHTML = dice;
    pisteet += dice;
    document.getElementById("pisteet").innerHTML = pisteet;
    document.getElementById("noppa").src = "img/"+images[dice - 1];
    document.getElementById("nopat").src = "img/"+images[dice2 - 1];
    
    if (dice == 1 ){
      pisteet = 0;
      vaihdavuoro();
      }
    }

    function vaihdavuoro() {
        pistetaulukko[vuoro] += pisteet;
      
        if (pistetaulukko[vuoro] >= 100){
          pelaajat();
          alert("VOITTO");
          document.getElementById("pelaa").disabled = true;
          document.getElementById("vaihda").disabled = true;   
          return;
      }
      
      vuoro = vuoro + 1;
      
      if (vuoro > pistetaulukko.length - 1) {
        vuoro = 0;
      }
      pisteet = 0;
      
      pelaajat();
    }


      var diceDOM = document.querySelector('.dice');

      function pelaajat(){
        document.getElementById("pelaaja1").innerHTML = pistetaulukko[0];
        document.getElementById("pelaaja2").innerHTML = pistetaulukko[1];
    
        if(vuoro == 0){
          document.getElementById("pelaaja").innerHTML = "Pelaaja-1"
        }else if(vuoro == 1){
          document.getElementById("pelaaja").innerHTML = "Pelaaja-2"
        }
      
    }