<?php
//usando o require neste caso pq a classe Produto não está na mesma pasta que essa
chdir(__DIR__);//garantir que ele vai rodar neste diretorio pra fazer o include, então o require aqui vai sempre funcionar(não vai importar a classe de onde eu chamo ele)
require '../model/Produto.class.php';

//extendo produto para ProdutoController
class ProdutoController extends Produto
{

	private $precoMinimo = 100;


	//function __construct( se refere a outra function __construct( que está em Produto
	public function __construct(
		string $nome, string $descricao, float $preco){

		parent:: __construct($nome, $descricao, $preco);
	}

	public function maiorIgualPrecoMinimo(): bool{
		//usando o $this-> para achar as variaveis que eu quero dentro do codigo. att q aq n uso $ dps do -> 
		return $this->preco >= $this->precoMinimo;
	}

}