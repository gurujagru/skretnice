function Unos(form,name)
{
    if (isNaN(parseFloat(form[name].value)) || parseFloat(form[name].value) <= 0) {
        console.log(form[name].value);
        alert("Uneli ste neodgovarajucu vrednost ' " + form[name].value +" ' za " + name + "!'");
    }
}
function RacunPrvi(form) {
    if (isNaN(parseFloat(form.R.value)) || isNaN(parseFloat(form.Fk.value))) {
        alert("Morate uneti potrebne vrednosti u sva polja!");
    } else {
        form.l.value = roundNumber((form.R.value / (2 * 3.142 * 1000 * 0.500 * form.Fk.value)) * 1000, 2);
        form.c.value = roundNumber((1 / (form.Fk.value * form.R.value * 2 * 3.14 * 1000 * 2)) * 1000000, 2);
    }
}
function RacunDrugi(form)
{
    if (isNaN(parseFloat(form.R.value)) || isNaN(parseFloat(form.P.value))) {
        alert("Morate uneti potrebne vrednosti u sva polja!");
    } else {
        form.U.value = roundNumber(form.P.value / form.R.value, 2);
        var struja = roundNumber(Math.sqrt(form.P.value * form.R.value), 1);
        if (struja <= 4.3) {
            form.d.value = 1;
        } else if (struja > 4.3 && struja <= 6) {
            form.d.value = 1.2;
        } else if (struja > 6 && struja <= 7.5) {
            form.d.value = 1.4;
        } else if (struja > 7.5 && struja <= 8.6) {
            form.d.value = 1.6;
        } else if (struja > 8.6 && struja <= 9.7) {
            form.d.value = 1.8;
        } else if (struja > 9.7 && struja <= 10.6) {
            form.d.value = 2;
        } else if (struja > 10.6) {
            form.d.value = '\u221E';
        }
    }
}
function Reset(form)
{
    var niz = [];
    for (var i = 0;i<5;i++) {
        var ime = form.elements[i].name;
        form[ime].value = "";
        niz.push(form.elements[i]);
    }
    ime = form.elements[2].name;
    form[ime].value = 'Izra\u010Dunaj';
    console.log(niz);
}
function roundNumber(num, dec) {
    var result = Math.round(num  * Math.pow(10,dec) ) / Math.pow(10,dec);
    return result;
}