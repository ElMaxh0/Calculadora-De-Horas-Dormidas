
<?php
//Confirmação de dados  

echo "O Seu Nome é: " . $_GET["campo2"] ;

echo "Voce Nassceu Em : " . $_GET["campo1"];

$nomedelicioso= $_GET["campo2"] ;

echo "Sua Idade é:";

//Obtenção de dados 

$dataNascimento = $_GET["campo1"];

$date = new DateTime($dataNascimento );

$interval = $date->diff( new DateTime( date('D-m-y') ) );

echo $interval->format( '%Y anos' );



//Atribuição de resultados a valores computacionais 

$Resultado = $interval->format( '%Y' );

$basecalc02= $interval->format( '%D' );

$basecalc03= $interval->format( '%M' );

echo $Resultado;



//Slides

include ('load.php');



// Calculos Base 01

$b=2;

$ddias = $basecalc02;

$calculo01 = $basecalc03 *30;

$calculo02 = $Resultado*365;

$Totaldedias= $calculo02 + $calculo01 + $ddias ;

//Calculos Secundarios

$semanasvividas =$Totaldedias / 7 ;

$mesesvividos = $Totaldedias / 30 ;

$horasvividas = $Totaldedias * 24 ;

//Metros Cubicos de Sangue 

$sangbmb = $horasvividas * 60 * 1.5 ;

//Calculo Mililitros ar

$respiração=$horasvividas *60 * 60 * 12.5 ;

$oxigenio =$respiração /100 * 21;

//Outros 

$Celulas = $horasvividas/24 *16 * 60 * 345 ;

$celldormindo=$horasvividas/24 *8 *60 *305;

$totalcelulas= $celldormindo +$Celulas;

$Calorias = $horasvividas* 24 * 60 * 2000*3 ;

//Calculos DORMIDOS 

$horasdormidas =$Totaldedias *8 ;

$DiasDormidos =$horasdormidas /24 ;

$MesesDormidos=$DiasDormidos /30 ;

$AnusDormidos =$MesesDormidos /12 ;





//Exibir dados 

echo "<h3> Ola .$nomedelicioso. voce ja viveu.$Totaldedias.  dias correspondente a .$semanasvividas. semanas e .$mesesvividos. meses.Baseado em estatisticas neste tempo glorioso voce ja dormiu aproximadamente .$horasdormidas. horas equivalente respectivamente a .$DiasDormidos. dias que voce passou dormindo cujo equivalente a .$MesesDormidos. meses,  ou seja voce ja passou .$AnusDormidos. anos em seus sonos de beleza pura durante o mesmo seu corpo ja produzio aproximadamente .$celldormindo.  trilhoes de celulas , fora destes momentos tao confortantes seu corpo ja produzio aproximadamente .$Celulas.trilhoes de celulas totalizando .$totalcelulas. trilhoes de celulas , Que ja consumiram .$respiração.mililitros de ar , sendo destes .$oxigenio. mililitros de oxigenio correspondendo ao consumo de .$Calorias. Kilo Kalorias</h3>";





//Consideraçoes em calculos 

echo "<p> AVISO :SÃO VALORES APROXIMADOS </font></p>";



echo '

<p>Considerando anus de 365 dias e meses de 30 dias, e horas de dias completos &nbsp;</p>';



//Referencias 

echo '

<p>&nbsp;Fontes das informa&ccedil;oes utilizadas nestes calculos</p>

<p>&nbsp;<a href="https://enfermagempiaui.com.br/verificacao-da-respiracao-humana/">https://enfermagempiaui.com.br/verificacao-da-respiracao-humana/</a></p>

<p><a href="https://www.google.com/search?q=velocidade+da+corrente+sanguinea&amp;oq=velocidade+da+corrente+sanguinea&amp;aqs=chrome.0.0j69i57.5767j0j9&amp;sourceid=chrome&amp;ie=UTF-8">https://www.google.com/search?q=velocidade+da+corrente+sanguinea&amp;oq=velocidade+da+corrente+sanguinea&amp;aqs=chrome.0.0j69i57.5767j0j9&amp;sourceid=chrome&amp;ie=UTF-8</a></p>

<p><a href="https://super.abril.com.br/ciencia/sobra-oxigenio-no-ar-que-expiramos/">https://super.abril.com.br/ciencia/sobra-oxigenio-no-ar-que-expiramos/</a></p>

<p><a class="waffle-rich-text-link" href="https://brasilescola.uol.com.br/saude/calorias.htm#:~:text=O%20valor%20de%20calorias%20a,quantidade%20necess%C3%A1ria%20para%20funcionar%20bem">https://brasilescola.uol.com.br/saude/calorias.htm#:~:text=O%20valor%20de%20calorias%20a,quantidade%20necess%C3%A1ria%20para%20funcionar%20bem</a><a class="waffle-rich-text-link" href="https://brasilescola.uol.com.br/saude/calorias.htm#:~:text=O%20valor%20de%20calorias%20a,quantidade%20necess%C3%A1ria%20para%20funcionar%20bem">.</a></p>

<p>&nbsp;</p>';

