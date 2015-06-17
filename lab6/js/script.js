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

    if(document.getElementById('proizvod_json')){
        console.log(data);
        br = 0;
        showItem(br);
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



function showItem(br){
    var contianer = document.getElementById('proizvod_json');

    while(contianer.firstChild){
        contianer.removeChild(contianer.firstChild);
    }

    var naziv = document.createElement("p");
    naziv.innerHTML = "Naziv: " + data[br][0];
    contianer.appendChild(naziv);

    var tip = document.createElement("p");
    tip.innerHTML = "Tip: " + data[br][9];
    contianer.appendChild(tip);

    var opis = document.createElement("p");
    opis.innerHTML = "Opis: " + data[br][2];
    contianer.appendChild(opis);

    var cijena = document.createElement("p");
    cijena.innerHTML = "Cijena: " + data[br][7] + "kn";
    contianer.appendChild(cijena);

}

function prosli(){
    if(br-1 >= 0){
        br--;
        showItem(br);
    }

}

function sljedeci(){
    if(br+1 < data.length){
        br++;
        showItem(br);
    }

}