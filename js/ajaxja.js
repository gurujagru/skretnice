/**
 * Created by PC on 04-Jul-17.
 */

$(document).ready(function(){
    $("#racun1").click(function(){
        if($(".pokazi-se").length){
            $("#induktivnost_kapacitet").empty();
        } else {
            $.ajax({
                url: "C_L.php",
                success: function (result) {
                    $("#induktivnost_kapacitet").html(result);
                }
            });
        }
    });
});

function loadDoc(url,cFunction) {
    var element =  document.getElementById("pokazi-se");
    if (typeof(element) != 'undefined' && element != null)
    {
        var prikaz = document.getElementById('napon_debljina');
        while (prikaz.firstChild) {
            prikaz.removeChild(prikaz.firstChild);
        }
    }
    else {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                cFunction(xhttp);
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    }

}
function myFunction (xhttp) {
    document.getElementById("napon_debljina").innerHTML = xhttp.responseText;
}