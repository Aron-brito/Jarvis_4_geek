function calcTotal(){
    var produto1 = document.getElementById("produto01").textContent;
    var produto2 = document.getElementById("produto02").textContent;
    var produto3 = document.getElementById("produto03").textContent;
    var produto4 = document.getElementById("produto04").textContent;
    var produto5 = document.getElementById("produto05").textContent;

    var qtd1 = document.getElementById("qtd1").value;
    var qtd2 = document.getElementById("qtd2").value;
    var qtd3 = document.getElementById("qtd3").value;
    var qtd4 = document.getElementById("qtd4").value;
    var qtd5 = document.getElementById("qtd5").value;

    var total;
    total = produto1*qtd1 + produto2*qtd2 + produto3*qtd3 + produto4*qtd4 + produto5*qtd5;
    document.getElementById("total").textContent = "$"+total;
    //alert(total)
    return total;
}
