/**
 * Created by lmita_000 on 16.6.2015..
 */

var brojac;

$(document).ready(function(){
    brojac = 0;
    $('#filter2').keyup(function(){

        var row = $('#popis_jq').find("tr");
        row.each(function(index){
            var deca = $( this).children();
            if((deca[0].innerHTML.indexOf($('#filter2').val()) == -1) && (deca[1].innerHTML.indexOf($('#filter2').val()) == -1)){
                this.style.display = "none";
            }else{
                this.style.display = "inline";
            }

        });
    });

    init_ajaxJQ();

//cijela stranica
/*    $('#submit').click(function(){
        $.ajax({

            url: "ajax_part.php",
            data: {upit: $('#filterJQ').val()},
            type: "GET",
            dataType: "json",

            // Code to run if the request succeeds;
            // the response is passed to the function
            success: function(json){
                var tablica = $("#popisJQ");
                console.log(tablica);

                while(tablica[0].firstChild){
                    tablica[0].removeChild(tablica[0].firstChild);
                }


                for(var i = 0; i < json.length; i++){
                    var table_row = $(document.createElement('tr'));
                    table_row.append("<td>" + json[i]['NazivProizvoda'] + "</td>");
                    table_row.append("<td>" + json[i]['OpisProizvoda'] + "</td>");
                    table_row.append("<td>" + json[i]['TipoviDelicija'] + "</td>");
                    table_row.append("<td>" + json[i]['Cijena'] + "kn</td>");

                    tablica.append(table_row);
                }
                console.log(json);
            },
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
            error: function(){
                alert("Woops, error");
            },
            // Code to run regardless of success or failure
            complete: function(xhr, status){
                alert("The request is complete");
            }
        });
    });*/
//paging
    $('#submit').click(function(){
        init_ajaxJQ();
    });


    //ajax za pocetno nabavljanje
    function init_ajaxJQ(){
        $.ajax({
            url: "ajax_partJQ.php",
            data: {upit: $('#filterJQ').val(), brojilo: 0},
            type: "GET",
            dataType: "json",

            // Code to run if the request succeeds;
            // the response is passed to the function
            success: function(json){
                var tablica = $("#popisJQ");


                 while(tablica[0].firstChild){
                 tablica[0].removeChild(tablica[0].firstChild);
                 }

                 for(var i = 0; i < json.length-1; i++){
                 var table_row = $(document.createElement('tr'));
                 table_row.append("<td>" + json[i]['NazivProizvoda'] + "</td>");
                 table_row.append("<td>" + json[i]['OpisProizvoda'] + "</td>");
                 table_row.append("<td>" + json[i]['TipoviDelicija'] + "</td>");
                 table_row.append("<td>" + json[i]['Cijena'] + "kn</td>");

                 tablica.append(table_row);
                 }

                var broj_itema = json[json.length-1];
                if(broj_itema > 11){
                    var broj_lista = broj_itema / 10;
                    if(broj_lista %10 != 0){
                        broj_lista = Math.ceil(broj_lista);
                    }

                    var uListPaging = $(document.createElement('ul'));
                    uListPaging.attr("id", "uListPaging");
                    for(var i = 1; i < broj_lista + 1; i++){
                        var content = "<li><button type='button' class='listItem'>" + i + "</button></li>";
                        uListPaging.append(content);
                    }

                    $("article").append(uListPaging);
                    $(".listItem").click(function(){
                        console.log(this.innerHTML);
                        //ajaxJQ(this.innerHTML);  drugu funkciju napravit
                        paging_ajax(this.innerHTML-1);
                    });
                }
                console.log(json);

            },
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
            error: function(){
                alert("Woops, error");
            },
            // Code to run regardless of success or failure
            complete: function(xhr, status){
                alert("The request is complete");
            }
        });
    }

    //ajax za izmjenu stranica
    function paging_ajax(start_pos){
        $.ajax({
            url: "ajax_partJQ.php",
            data: {upit: $('#filterJQ').val(), brojilo: start_pos},
            type: "GET",
            dataType: "json",

            success: function(json){
                var tablica = $("#popisJQ");

                while(tablica[0].firstChild){
                    tablica[0].removeChild(tablica[0].firstChild);
                }

                for(var i = 0; i < json.length-1; i++){
                    var table_row = $(document.createElement('tr'));
                    table_row.append("<td>" + json[i]['NazivProizvoda'] + "</td>");
                    table_row.append("<td>" + json[i]['OpisProizvoda'] + "</td>");
                    table_row.append("<td>" + json[i]['TipoviDelicija'] + "</td>");
                    table_row.append("<td>" + json[i]['Cijena'] + "kn</td>");

                    tablica.append(table_row);
                }
            },
            // Code to run if the request fails; the raw request and
            // status codes are passed to the function
            error: function(){
                alert("Woops, error");
            },
            // Code to run regardless of success or failure
            complete: function(xhr, status){
                alert("The request is complete");
            }
        });
    }


});
