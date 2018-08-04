<div  class="pokazi-se">
    <form method="post">
        <label for="R"> Unesite impedansu zvu&#269;nika R = </label>
        <input id="R" name="impedansu R" type="text"  onfocus="select()"
          onchange="Unos(this.form,this.name)" value="" size="1" maxlength="5"/> &#911<br/>

        <label for="Fk">Unesite vrednost preklopne frekvencije Fk = </label>
        <input id="Fk" name="frekvenciju Fk" type="text"  onfocus="select()"
            onchange="Unos(this.form,this.name)" value="" size="1" maxlength="5"/> kHz<br/>

        <input type="button" name="izracunaj" class="btn btn-success" value="Izra&#269;unaj" onclick="RacunPrvi(this.form)"/><br/>

        <label for="l">Induktivitet kalema <b>L = </b></label>
        <input id="l" name="l" type="text" size="1" maxlength="5" readonly /> mH <br/>

        <label for="c">Kapacitet kondenzatora <b>C = </b></label>
        <input id="c" name="c" type="text" size="1" maxlength="5" readonly /> &#956F <br/>

        <input type="button" name="reset" value="Reset" class="btn btn-default" onclick="Reset(this.form)"/> <br/>
    </form>
</div>
