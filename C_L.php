<div>
    <form method="post">
        Unesite impedansu zvu&#269;nika <b>R = </b><input id="R" name="impedansu R" type="text"  onfocus="select()"
          onchange="Unos(this.form,this.name)" value="" size="1" maxlength="4" /> &#911<br/>
        <p>Unesite vrednost preklopne frekvencije <b>Fk = </b><input id="Fk" name="frekvenciju Fk" type="text"  onfocus="select()"
            onchange="Unos(this.form,this.name)" value="" size="2" maxlength="5" /> kHz</p>

        <input type="button" name="izracunaj" value="Izra&#269;unaj" onclick="Racunaj(this.form)" />

        <p>Induktivitet kalema <b>L = </b><input name="l" type="text" size="4" maxlength="5" readonly /> mH </p>
        <p>Kapacitet kondenzatora <b>C = </b><input name="c" type="text" size="4" maxlength="5" readonly /> &#956F</p>
        <input type="button" name="reset" value="Reset" onclick="Reset(this.form)"  />
    </form>
</div>

