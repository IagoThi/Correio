<?php
class ClassCorreios{

	public $Retorno;
	//Pesquisa o PREÇO e PRAZO das encomendas
	public function pesquisaPrecoPrazo($cepOrigem,$cepDestino,$peso,$formato,$comprimento,$altura,$largura,$mao,$valorDeclarado,$avidoRecebimento,$codigo,$diametro){

		$Url="http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem={$cepOrigem}&sCepDestino={$cepDestino}&nVlPeso={$peso}&nCdFormato={$formato}&nVlComprimento={$comprimento}&nVlAltura={$altura}&nVlLargura={$largura}&sCdMaoPropria={$mao}&nVlValorDeclarado={$valorDeclarado}&sCdAvisoRecebimento={$avidoRecebimento}&nCdServico={$codigo}&nVlDiametro={$diametro}&StrRetorno=xml&nIndicaCalculo=3";

		$this->Retorno=simplexml_load_string(file_get_contents($Url));
		echo"Valor: R$".$this->Retorno->cServico->Valor;
		echo "<br>";
		echo"Prazo:".$this->Retorno->cServico->PrazoEntrega;
		echo " Dias";
	}
}

