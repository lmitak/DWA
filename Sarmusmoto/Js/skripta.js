/**
 * Created by Luka on 6.4.2015..
 */

document.addEventListener("DOMContentLoaded", function(event) {
    //do work
    ustanoviSliku();
    postaviVisinuSlike();
    postaviOznakuTrenutnogTeksta();

});


//postavlja početne vrijednosti za prikaz jela, te poziva AJAX funkciju
function detaljnije(id, lang){
    document.getElementById("jelaContainer").style.opacity = "0";
    document.getElementById("jelaContainer").style.visibility = "hidden";
    document.getElementById("slika").style.visibility = "hidden";
    document.getElementById("slika").style.opacity = "0";

    setTimeout(ajax_post(id, lang), 500);
}

//vrši upit prema .php dokumentu koji ga obrađuje, te vraća rezultat koji se odmah obrađuje
function ajax_post(id, lang){
// Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "parseData.php";

    var vars = "jelo="+id+"&lang="+lang;;

    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200)
        {
            //provjeravamo da li je došlo do greške
            if(hr.responseText.indexOf("|") == -1){
                var newDivElement = document.createElement("div");
                newDivElement.setAttribute("id", "jelaContainer2");
                newDivElement.setAttribute("class", "column column-6");
                newDivElement.style.opacity = "0";
                newDivElement.style.visibility = "hidden";

                var opis = document.createElement("p");
                opis.innerHTML = hr.responseText;
                newDivElement.appendChild(opis);
                setTimeout(function () {
                    var article = document.getElementsByClassName("jela");
                    var rows = article[0].childNodes[1];
                    rows.appendChild(newDivElement);

                    document.getElementById("jelaContainer").style.display = "none";
                    newDivElement.style.opacity = "1";
                    newDivElement.style.visibility = "visible";
                }, 500);

            }else {
                //činimo promjenu
                //razdvajamo podatke
                var dataArray = hr.responseText.split("|");
                //stvaramo container
                var newDivElement = document.createElement("div");
                var newImageDiv = document.createElement("div");
                //sređujemo mu svojstva
                newDivElement.setAttribute("id", "jelaContainer2");
                newDivElement.setAttribute("class", "column column-6");
                newDivElement.style.opacity = "0";
                newDivElement.style.visibility = "hidden";
                newImageDiv.setAttribute("id", "slika2");
                newImageDiv.setAttribute("class", "column column-6");
                newImageDiv.style.opacity = "0";
                newImageDiv.style.visibility = "hidden";

                //dodajemo podatke
                //ovo je back button
                var button = document.createElement("button");
                button.setAttribute("type", "button");
                button.setAttribute("id", "btn");
                button.setAttribute("onclick", "backFuction()")
                button.innerHTML = "&lt Natrag";
                newDivElement.appendChild(button);

                var naslov = document.createElement("h2");
                naslov.innerHTML = dataArray[0];
                newDivElement.appendChild(naslov);

                var kratkiOpis = document.createElement("h3");
                kratkiOpis.innerHTML = dataArray[1];
                newDivElement.appendChild(kratkiOpis);

                var opis = document.createElement("p");
                opis.innerHTML = dataArray[2];
                newDivElement.appendChild(opis);

                if((dataArray[3] != null) && (dataArray[3] != "") && (dataArray[3] != " ") && (dataArray[3] != 0)){
                    var sastojci = document.createElement("p");
                    if(lang == "ENG"){
                        sastojci.innerHTML = "Ingredients: " + dataArray[3];
                    }else
                        sastojci.innerHTML = "Sastojci: " + dataArray[3];
                    newDivElement.appendChild(sastojci);
                }

                var kalorije = document.createElement("p");
                kalorije.innerHTML = "Kcal: " + dataArray[4];
                newDivElement.appendChild(kalorije);

                var cijena = document.createElement("p");
                if(lang == "ENG"){
                    cijena.innerHTML = "Price: " + dataArray[5] + "kn";
                }else
                    cijena.innerHTML = "Cijena: " + dataArray[5] + "kn";
                newDivElement.appendChild(cijena);

                //postavljanje dijece na row sa delayem;
                setTimeout(function () {
                    var article = document.getElementsByClassName("jela");
                    var rows = article[0].childNodes[1];
                    rows.appendChild(newDivElement);
                    rows.appendChild(newImageDiv);
                    promjeniSliku(dataArray[6], "slika2");
                    postaviVisinuSlike();

                    document.getElementById("jelaContainer").style.display = "none";
                    document.getElementById("slika").style.display = "none";
                    newDivElement.style.opacity = "1";
                    newDivElement.style.visibility = "visible";
                    newImageDiv.style.opacity = "1";
                    newImageDiv.style.visibility = "visible";

                }, 500);
            }
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars);
    // Actually execute the request
}



//funkcija briše appendedChild i vraća prikaz izbornika
function backFuction(){
    dijeteContainer = document.getElementById("jelaContainer2");
    dijeteSlika = document.getElementById("slika2");
    dijeteContainer.style.opacity = "0";
    dijeteSlika.style.opacity = "0";
    dijeteContainer.style.visibility = "hidden";
    dijeteSlika.style.visibility = "hidden";

    setTimeout(function(){
        dijeteContainer.parentNode.removeChild(dijeteContainer);
        dijeteSlika.parentNode.removeChild(dijeteSlika);

        document.getElementById("slika").style.display = "inline";
        document.getElementById("jelaContainer").style.display = "inline";
        ustanoviSliku();
        setTimeout(function() {
            document.getElementById("jelaContainer").style.opacity = "1";
            document.getElementById("jelaContainer").style.visibility = "visible";
            document.getElementById("slika").style.visibility = "visible";
            document.getElementById("slika").style.opacity = "1";
        }, 500);


    }, 1);

}

//podstavljanje slike za prikaz jela na optimalnu visinu
function postaviVisinuSlike(){

    var containerSize = document.getElementById("jelaContainer").clientHeight;
    var vrijednost = containerSize / 5;
    document.getElementById("slika").style.marginTop = vrijednost + "px";
}

function promjeniSliku(imageName, idName) {
    //alert(x);
    var slika = document.getElementById(idName);
    var url = "url('Resource/image/" + imageName + "')";
    slika.style.backgroundImage = url;
}

//gleda koja bi na stranici default slika trebala biti prikazana kod hrane, ovisno o kategoriji jela
function ustanoviSliku(){
    var cont = document.getElementById("jelaContainer");
    var slika = cont.childNodes[3].childNodes[1].childNodes[1].getAttribute("image");
    promjeniSliku(slika, "slika");
}

//prikazuje koji jezik je trenutno aktivan
function postaviOznakuTrenutnogTeksta(){
    if(document.getElementById("jezik").value == "ENG"){
        document.getElementById("eng").style.textDecoration = "underline";
    }else
        document.getElementById("hrv").style.textDecoration = "underline";
}