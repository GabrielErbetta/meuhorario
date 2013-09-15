<?php
require_once('util.php');

cabecalho("Escolha seu curso", false);

/* expressao regular (VIM):
%s/\(\d\d\d\) \(.*\)/<a href="mostramaterias.php?curso=\1">\2<\/a><br\/>/g
*/
?>

<table align="top" cellpadding="10" valign="top">
<h1>Sobre este site</h1>
<p>
Este site fornece aos alunos da UFBA (Universidade Federal da Bahia)
novos recursos para o planejamento da matr&iacute;cula.<br/>
Aqui, voc&ecirc; escolhe as mat&eacute;rias, imp&otilde;e
restri&ccedil;&otilde;es e, no final, s&atilde;o mostradas
v&aacute;rias op&ccedil;&otilde;es de hor&aacute;rio.
</p>



<h1>Escolha seu curso</h1>

<tr>
<td class="impar">
	<h2>&Aacute;rea I</h2>
	<a href="mostramaterias.php?curso=101">ARQUITETURA</a><br/>
	<a href="mostramaterias.php?curso=102">ENGENHARIA CIVIL</a><br/>
	<a href="mostramaterias.php?curso=103">ENGENHARIA DE MINAS</a><br/>
	<a href="mostramaterias.php?curso=104">ENGENHARIA EL&Eacute;TRICA</a><br/>
	<a href="mostramaterias.php?curso=105">ENGENHARIA MEC&Acirc;NICA</a><br/>
	<a href="mostramaterias.php?curso=106">ENGENHARIA QU&Iacute;MICA</a><br/>
	<a href="mostramaterias.php?curso=107">ENGENHARIA SANIT&Aacute;RIA</a><br/>
	<a href="mostramaterias.php?curso=108">F&Iacute;SICA</a><br/>
	<a href="mostramaterias.php?curso=109">GEOGRAFIA</a><br/>
	<a href="mostramaterias.php?curso=110">GEOLOGIA</a><br/>
	<a href="mostramaterias.php?curso=111">MATEM&Aacute;TICA</a><br/>
	<a href="mostramaterias.php?curso=112">CI&Ecirc;NCIA DA COMPUTA&Ccedil;&Atilde;O</a><br/>
	<a href="mostramaterias.php?curso=113">QU&Iacute;MICA</a><br/>
	<a href="mostramaterias.php?curso=116">ESTAT&Iacute;STICA</a><br/>
	<a href="mostramaterias.php?curso=118">GEOF&Iacute;SICA</a><br/>
	<a href="mostramaterias.php?curso=181">F&Iacute;SICA NOTURNO</a><br/>
</td>
<td class="par">
	<h2>&Aacute;rea II</h2>
	<a href="mostramaterias.php?curso=201">AGRONOMIA</a><br/>
	<a href="mostramaterias.php?curso=202">CI&Ecirc;NCIAS BIOL&Oacute;GICAS</a><br/>
	<a href="mostramaterias.php?curso=203">ENFERMAGEM</a><br/>
	<a href="mostramaterias.php?curso=204">FARM&Aacute;CIA</a><br/>
	<a href="mostramaterias.php?curso=205">MEDICINA</a><br/>
	<a href="mostramaterias.php?curso=206">MEDICINA VETERIN&Aacute;RIA</a><br/>
	<a href="mostramaterias.php?curso=207">NUTRI&Ccedil;&Atilde;O</a><br/>
	<a href="mostramaterias.php?curso=208">ODONTOLOGIA</a><br/>
	<a href="mostramaterias.php?curso=209">CI&Ecirc;NCIAS NATURAIS</a><br/>
	<a href="mostramaterias.php?curso=210">FONOAUDIOLOGIA</a><br/>
</td>
</tr>
<tr>
<td class="par">
	<h2>&Aacute;rea III</h2>
	<a href="mostramaterias.php?curso=303">BIBLIOTECONOMIA E DOCUMENTA&Ccedil;&Atilde;O</a><br/>
	<a href="mostramaterias.php?curso=304">CI&Ecirc;NCIAS CONT&Aacute;BEIS</a><br/>
	<a href="mostramaterias.php?curso=305">CI&Ecirc;NCIAS ECON&Ocirc;MICAS</a><br/>
	<a href="mostramaterias.php?curso=306">CI&Ecirc;NCIAS SOCIAIS</a><br/>
	<a href="mostramaterias.php?curso=307">COMUNICA&Ccedil;&Atilde;O</a><br/>
	<a href="mostramaterias.php?curso=308">DIREITO </a><br/>
	<a href="mostramaterias.php?curso=309">FILOSOFIA</a><br/>
	<a href="mostramaterias.php?curso=310">HISTORIA</a><br/>
	<a href="mostramaterias.php?curso=311">MUSEOLOGIA</a><br/>
	<a href="mostramaterias.php?curso=312">PEDAGOGIA</a><br/>
	<a href="mostramaterias.php?curso=313">PSICOLOGIA</a><br/>
	<a href="mostramaterias.php?curso=314">SECRETARIADO</a><br/>
	<a href="mostramaterias.php?curso=315">EDUCA&Ccedil;&Atilde;O F&Iacute;SICA</a><br/>
	<a href="mostramaterias.php?curso=301">BACHARELADO EM ADMINISTRA&Ccedil;&Atilde;O</a><br/>
	<a href="mostramaterias.php?curso=317">ARQUIVOLOGIA</a><br/>
</td>
<td class="impar">
	<h2>&Aacute;rea IV</h2>
	<a href="mostramaterias.php?curso=401">LETRAS VERN&Aacute;CULAS</a><br/>
	<p></p>
	
	<h2>&Aacute;rea V</h2>
	<a href="mostramaterias.php?curso=501">ARTES PL&Aacute;STICAS</a><br/>
	<a href="mostramaterias.php?curso=502">COMPOSI&Ccedil;&Atilde;O E REG&Ecirc;NCIA</a><br/>
	<a href="mostramaterias.php?curso=503">LICENCIATURA EM DAN&Ccedil;A</a><br/>
	<a href="mostramaterias.php?curso=505">LICENCIATURA EM DESENHO E PL&Aacute;STICA</a><br/>
	<a href="mostramaterias.php?curso=506">BACH ARTES C&Ecirc;NICAS - DIRE&Ccedil;&Atilde;O TEATRAL</a><br/>
	<a href="mostramaterias.php?curso=507">LICENCIATURA EM MUSICA</a><br/>
	<a href="mostramaterias.php?curso=508">CANTO</a><br/>
	<a href="mostramaterias.php?curso=509">INSTRUMENTO</a><br/>
	<a href="mostramaterias.php?curso=512">DESENHO INDUSTRIAL</a><br/>
	<a href="mostramaterias.php?curso=513">DECORA&Ccedil;&Atilde;O</a><br/>
</td>
</tr>
</table>

<p>
(Guia de matr&iacute;cula atualizado no dia 15 de setembro de 2013)<br/>
</p>

<?php

rodape();

?>
