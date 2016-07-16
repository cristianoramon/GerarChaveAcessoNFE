<? session_start(); ?>
<?


 //Chave de acesso
 require_once("cChavedeAcesso.php");



?>

<?php

 class cGeraPasseNf {

	/*
	 *
	 */

	function gerarChave ( ){


	  $chave = new cChavedeAcesso();

    /*
          A Chave de Acesso da Nota Fiscal eletr�nica n�o existe como a sequ�ncia acima descrita no
      leiaute da NF-e, devendo ser composta pelos seguintes campos que se encontram dispersos
      no leiaute da NF-e

      cUF - C�digo da UF do emitente do Documento Fiscal          -   Digitos 2
      AAMM - Ano e M�s de emiss�o da NF-e                         -   Digitos 4
      CNPJ - CNPJ do emitente                                     -   Digitos 14
      mod - Modelo do Documento Fiscal                            -   Digitos 2
      serie - S�rie do Documento Fiscal                           -   Digitos 3
      nNF - N�mero do Documento Fiscal                            -   Digitos 9
      cNF - C�digo Num�rico que comp�e a Chave de Acesso          -   Digitos 9
      cDV - D�gito Verificador da Chave de Acesso                 -   Digitos 1

    */

	 //Formato da  a chave UF + AAMM+CNPJ-EMITENTE+MODELO+SERIE+NNF+CONDNUM
	 $strChave =  "27".date("ym")."12277646000343"."55"."000"."123456789"."123456789";
	 //$strChave = "2708011227764600010855000000247418024741818";
	 $somPod   =  $chave->fStrPonderacao ($strChave,10,2);
	 $dv       =  $chave->fDigitoDV (11,$somPod);
  }

 }

?>
