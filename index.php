<!DOCTYPE html>
<html lang="sh" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/C_L_U_D.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/ajaxja.js"></script>
    <title>
        Skretnice
    </title>
</head>
<body>
<div class="row">
    <div class="col-1">
        <header>
            <h1>Prora&#269;un skretnice drugog reda tipa LR (<i>Linkvic-Rajli</i>)</h1>
        </header>
        <div class="row">
            <div class="col-3">
                <button id="racun1" type="button" >Izra&#269;unaj induktivnost kalema <br>
                    i kapacitivnost kondenzatora</a></button>
            </div>
            <div class="col-4">
                <img id="#prikaz" src="/images/skretnjaca.png" alt="Skretnjaca bato">
            </div>
            <div class="col-5">
                <button type="button" onclick="loadDoc('U_d.php', myFunction)">Izra&#269;unaj napon kondenzatora<br>
                    i debljinu &#382;ice kalema</a></button>
                <a href="#napon_debljina" onclick="loadDoc()"></a>
            </div>
        </div><br/><br/>
        <div class="row">
            <div class="col-6" id="induktivnost_kapacitet">
            </div>
            <div class="col-7" id="napon_debljina">
        </div>
        </div>
        <footer>Design By <i>GURUJAGRU</i><br/>
            &#9993; <a href="https://gmail.com">gurujagru@gmail.com</a>
        </footer>
    </div>
</div>
</body>
</html>