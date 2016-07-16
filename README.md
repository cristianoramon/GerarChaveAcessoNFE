# GerarChaveAcessoNFE


         A Chave de Acesso da Nota Fiscal eletrônica não existe como a sequência acima descrita no

leiaute da NF-e, devendo ser composta pelos seguintes campos que se encontram dispersos

      no leiaute da NF-e



      cUF - Código da UF do emitente do Documento Fiscal          -   Digitos 2

      AAMM - Ano e Mês de emissão da NF-e                         -   Digitos 4

      CNPJ - CNPJ do emitente                                     -   Digitos 14

      mod - Modelo do Documento Fiscal                            -   Digitos 2

      serie - Série do Documento Fiscal                           -   Digitos 3

      nNF - Número do Documento Fiscal                            -   Digitos 9

      cNF - Código Numérico que compõe a Chave de Acesso          -   Digitos 9

      cDV - Dígito Verificador da Chave de Acesso                 -   Digitos 1


 Exemplo de uso :
         
         require_once("cChavedeAcesso.php");
        $chave = new cChavedeAcesso();
        $strChave =  "27".date("ym")."12277646000343"."55"."000"."123456789"."123456789";

	 //$strChave = "2708011227764600010855000000247418024741818";

	 $somPod   =  $chave->fStrPonderacao ($strChave,10,2);

	 $dv       =  $chave->fDigitoDV (11,$somPod);
