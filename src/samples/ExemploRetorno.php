<?php
/*
* CnabPHP - Gera��o de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2013 Ciatec.net
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this
* software and associated documentation files (the "Software"), to deal in the Software
* without restriction, including without limitation the rights to use, copy, modify,
* merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
* permit persons to whom the Software is furnished to do so, subject to the following
* conditions:
*
* The above copyright notice and this permission notice shall be included in all copies
* or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
* INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
* PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
* HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
* SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
namespace CnabPHP\samples;
use \CnabPHP\Retorno;
include("../../autoloader.php");
$fileContent = file_get_contents("retorno_cnab240_caixa.ret");

$arquivo = new Retorno($fileContent);

var_dump($arquivo->hearder);
//$lote  = $arquivo->addLote(array('tipo_servico'=> 1)); // tipo_servico  = 1 para cobran�a registrada, 2 para sem registro

/*$lote->inserirDetalhe(array(
	'codigo_ocorrencia' => 1, //1 = Entrada de t�tulo, para outras op�oes ver nota explicativa C004 manual Cnab_SIGCB na pasta docs
	'nosso_numero'      => 1, // numero sequencial de boleto
	'seu_numero'        => 1,// se nao informado usarei o nosso numero 
	'especie_titulo'    => "DM", // informar dm e sera convertido para codigo em qualquer laytou conferir em especie.php
	'valor'             => 100.00, // Valor do boleto como float valido em php
	'emissao_boleto'        => 2, // tipo de emissao do boleto informar 2 para emissao pelo beneficiario e 1 para emissao pelo banco
	'protestar'        => 2, // 1 = Protestar com (Prazo) dias, 2 = Devolver ap�s (Prazo) dias
	'nome_pagador'      => "JOS� da SILVA ALVES", // O Pagador � o cliente, preste aten��o nos campos abaixo
	'tipo_inscricao'    => 1, //campo fixo, escreva '1' se for pessoa fisica, 2 se for pessoa juridica
	'numero_inscricao'  => '123.122.123-56',//cpf ou ncpj do pagador
	'endereco_pagador'  => 'Rua dos developers,123 sl 103',
	'bairro_pagador'     => 'Bairro da insonia',
	'cep_pagador'        => '12345-123', // com h�fem
	'cidade_pagador'     => 'Londrina',
	'uf_pagador'         => 'PR',
	'data_vencimento'    => '2016-04-09', // informar a data neste formato
	'data_emissao'       => '2016-04-09', // informar a data neste formato
	'vlr_juros'          => 0.15, // Valor do juros de 1 dia'
	'data_desconto'      => '2016-04-09', // informar a data neste formato
	'vlr_desconto'       => '0', // Valor do desconto
	'prazo'              => 5, // prazo de dias para o cliente pagar ap�s o vencimento
	'mensagem'           => 'JUROS de R$0,15 ao dia'.PHP_EOL."N�o receber apos 30 dias",
	'email_pagador'         => 'rogerio@ciatec.net', // data da multa
	'data_multa'         => '2016-04-09', // informar a data neste formato, // data da multa
	'valor_multa'        => 30.00, // valor da multa
));        */
//echo $arquivo->getText();
?>
