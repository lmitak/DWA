/**
 * Created by Luka on 2.4.2015..
 */
var data;

document.addEventListener("DOMContentLoaded", function(event) {
    //do work
    var displayed = true;
    var tableHeaders = document.getElementsByTagName("th");


    //izvrti funkciju i daje onclicked
    for(var i = 0; i < tableHeaders.length; i++){
        togglaj(tableHeaders[i]);
    }

});

function myFunction() {
    var filter = document.getElementById("filter");
    //alert("You pressed a " + filter.value + " key inside the input field");
    var rows = document.getElementsByTagName("tr");
    for(var i=0; i<rows.length; i++){
        var naziv = rows[i].childNodes.item(1);
        var opis = rows[i].childNodes.item(4);
        //alert(naziv.innerHTML);
        //alert(opis.innerHTML);
        if(((naziv.innerHTML.indexOf(filter.value) == -1) && (opis.innerHTML.indexOf(filter.value) == -1)))
        {
            //alert("Oovo neću prikazati " + naziv.innerHTML + " " + opis.innerHTML + ", jer ne sadrže " + filter.value);
            rows[i].style.display="none";
        }else
        {
            //alert("Value: " + filter.value + " se ne nalazi unutar " + naziv.innerHTML + " niti" + opis.innerHTML);
            rows[i].style.display="inline";
        }

    }


}

var togglano = false;

function togglaj(th){

    th.onclick = function(){
      var roditelj = th.parentNode.parentNode.parentNode;
        var id = roditelj.getAttribute('id');
        var tablica = document.getElementById(id);
        var djeca = tablica.getElementsByTagName("td");
        for(var i = 0; i < djeca.length; i++){
            if(!togglano){
                djeca[i].style.visibility = "hidden";
                djeca[i].style.opacity = "0";
            }else{
                djeca[i].style.visibility = "visible";
                djeca[i].style.opacity = "1";
            }
        }
        if(!togglano)
            togglano = true;
        else
            togglano = false;
    };
}

function gasi(gumb){
    gumb.parentNode.style.display = "none";
}



function obavi5zadatak(data, i) {
    var proizvod = document.getElementById("proizvod");

    var tablica = document.createElement("table");
    proizvod.appendChild(tablica);
    //naziv
    var redakNaziv = document.createElement("tr");
    tablica.appendChild(redakNaziv);

    var titleNaziv = document.createElement("td");
    titleNaziv.innerHTML = "Naziv: ";
    redakNaziv.appendChild(titleNaziv);
    var valueNaziv = document.createElement("td");
    valueNaziv.innerHTML = data[i]['NazivProizvoda'];
    redakNaziv.appendChild(valueNaziv);
    //opis
    var redakOpis = document.createElement("tr");
    tablica.appendChild(redakOpis);

    var titleOpis = document.createElement("td");
    titleOpis.innerHTML = "Opis: ";
    redakOpis.appendChild(titleOpis);
    var valueOpis = document.createElement("td");
    valueOpis.innerHTML = data[i]['OpisProizvoda'];
    redakOpis.appendChild(valueOpis);
    //tip
    var redakTip = document.createElement("tr");
    tablica.appendChild(redakTip);

    var titleTip = document.createElement("td");
    titleTip.innerHTML = "Tip: ";
    redakTip.appendChild(titleTip);
    var valueTip = document.createElement("td");
    valueTip.innerHTML = data[i]['TipoviDelicija'];
    redakTip.appendChild(valueTip);
    //cijena
    var redakCijena = document.createElement("tr");
    tablica.appendChild(redakCijena);

    var titleCijena = document.createElement("td");
    titleCijena.innerHTML = "Cijena: ";
    redakCijena.appendChild(titleCijena);
    var valueCijena = document.createElement("td");
    valueCijena.innerHTML = data[i]['Cijena'] + " kn";
    redakCijena.appendChild(valueCijena);

    var buttonDalje = document.createElement("button");
    buttonDalje.innerHTML = "NAPRIJED";
    buttonDalje.setAttribute("onclick", "povecaj()");
    buttonDalje.setAttribute("type", "button");
    buttonDalje.setAttribute("id", "btnNext");

    buttonDalje.onclick = function(){
        i++;
    };
    proizvod.appendChild(buttonDalje);

    var buttonPrije = document.createElement("button");
    buttonPrije.setAttribute("onclick", i--);
    buttonPrije.innerHTML = "NATRAG";
    proizvod.appendChild(buttonPrije);
}

function povecaj(){
    alert("ole");
    //i++;
    //obavi5zadatak(data, i);
}