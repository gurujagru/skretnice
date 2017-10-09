<div class="desno" id="obrisipolja">
    <form method="post">
        <label for="R">Unesite impedansu zvu&#269;nika <b>R = </b></label>
        <input name="impedansu R" value="" id="R" type="text" onchange="Unos(this.form, this.name)"  size="1" maxlength="4"/>&#911<br/>

        <p><label for="P">Unesite snagu zvu&#269;nika <b>P = </b></label>
        <input name="snagu P" value="" id="P" type="text" onchange="Unos(this.form, this.name)" size="2" maxlength="5"/> W</p>

        <p><input type="button" name="izracunaj" value="Izra&#269;unaj" onclick="Racunaj(this.form)"></p>

        <p><label for="napon"> Napon kondenzatora <b>U = </b></label>
        <input type="text" id="napon" name="U" readonly/> V</p>

        <p><label for="d">Debljina &#382;ice kalema <b>d = </b></label>
        <input type="text" id="d" name="d" readonly/> mm</p>

        <p><input type="button" name="reset" onclick="Reset(this.form)" value="Reset"></p>
    </form>
</div>