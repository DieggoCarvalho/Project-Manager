/* CURRENT YEAR | https://jsfiddle.net/perTube/qxofs5j7/33/ */
const d = new Date(); //criar objeto data e atribuir a uma constante.
const year = document.getElementById('current-year'); // constante ano recebendo o span onde escreverá o ano atual.
year.innerHTML = d.getFullYear(); // escrevendo o ano completo na span.