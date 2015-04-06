/**
 * Created by Luka on 6.4.2015..
 */



function hoverFunkcija(x) {
    //alert(x);
    var slika = document.getElementById("slika");
    var url = "url('Resource/image/" + x + "')";
    slika.style.backgroundImage = url;
}


document.addEventListener("DOMContentLoaded", function(event) {
    //do work
    //alert("Hello");

    //var links = document.getElementsByClassName("izbor");

    //podstavljanje slike za prikaz jela na optimalnu visinu
    var containerSize = document.getElementById("jelaContainer").clientHeight;
    var vrijednost = containerSize / 5;
    document.getElementById("slika").style.marginTop = vrijednost + "px";


});

function ajax_post(naziv){
// Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "parseData.php";
    /*var fn = document.getElementById("first_name").value;*/
    /*var ln = document.getElementById("last_name").value;*/
    /*var vars = "firstname="+fn+"&lastname="+ln;*/
    var vars = "jelo=" + naziv;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200)
        {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = "<p>" +return_data+ "</p>";
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars);
    // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}