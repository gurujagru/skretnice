<div>
    <form method="post">
        <label for="R">Unesite impedansu zvu&#269;nika R = </label>
        <input name="impedansu R" value="" id="R" type="text"
               onchange="Unos(this.form, this.name)" size="1" maxlength="5"/> &#911<br/>

        <label for="P">Unesite snagu zvu&#269;nika P = </label>
        <input name="snagu P" value="" id="P" type="text"
               onchange="Unos(this.form, this.name)" size="1" maxlength="5"/> W <br/>

        <input type="button" name="izracunaj" class="btn btn-success" value="Izra&#269;unaj" onclick="RacunDrugi(this.form)"> <br/>

        <label for="napon"> Napon kondenzatora <b>U = </b></label>
        <input type="text" id="napon" name="U" size="1" maxlength="5" readonly/> V <br/>

        <label for="d">Debljina &#382;ice kalema <b>d = </b></label>
        <input type="text" id="d" name="d" size="1" maxlength="5" readonly/> mm <br/>

        <input type="button" name="reset" class="btn btn-default" onclick="Reset(this.form)" value="Reset"> <br/>
    </form>
</div>