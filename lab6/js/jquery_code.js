/**
 * Created by lmita_000 on 16.6.2015..
 */



$(document).ready(function(){

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


});