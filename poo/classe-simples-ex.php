<?php

/**
 * EM CLASSES E OO OS NOMES MUDAM 
 * EXEMPLO DE UTILIZAÇÃO DE OBJTs
 */
class Produtos
{
	//Atributos ou propriedades da classe
	private $nome;
	private $descricao;
	private $preco;

	//metodos
	public function setNome(string $nome):bool
	{	
		//$this->nome é a msm coisa que $this.nome
		$this->nome = $nome;
		return true;
	}

	public function getNome():string
	{	
		//chama o nome senão chama Não definido
		return $this->nome ?? 'Não definido';
	}
}
		// new trasforma a classe em objeto smartphone 
$smartphone = new Produto;
$smartphone->setNome('Xiaomi Mi 10T');

$shampoo = new Produto;
$shampoo->setNome('JohnsonsBaby');

echo '<pre>';
echo "\n\nNome do produto".$smartphone->getNome();
echo "\n\nNome do produto".$shampoo->getNome();
echo "</pre>";
