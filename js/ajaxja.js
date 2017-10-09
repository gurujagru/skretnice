/**
 * Created by PC on 04-Jul-17.
 */
function loadDoc(url,cFunction) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cFunction(xhttp);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}
function myFunction (xhttp) {
    document.getElementById("napon_debljina").innerHTML = xhttp.responseText;
}

$(document).ready(function(){
   $("#racun1").click(function(){
       $.ajax({
            url: "C_L.php",
           success: function(result){
               $("#induktivnost_kapacitet").html(result);
           }
       });
   });
});