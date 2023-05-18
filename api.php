<?php
/**
 * 
 */
 header("Content-type: text/html; charset=utf-8",true);

 $conteudo = $_REQUEST['pagina'];

 $result = file_get_contents($conteudo);
 //$url = "https://www.melhorcambio.com/dolar-hoje";
 echo $result;