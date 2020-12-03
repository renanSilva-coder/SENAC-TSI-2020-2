<?php
/**
 * EM CLASSES E OO OS NOMES MUDAM 
 */
class Produto extends PDO #Extendo a classe produto incrementando nela a classe PDO junto c/ todas as possibilidades;Produto herda tudo da classe PDO 
{
	//Atributos ou propriedades da classe
	protected $nome;
	protected $descricao;
	protected $preco;


	//metodos
	public function __construct(string $nome, string $descricao, float $preco){
		
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->preco = $preco;
		
		#Conexao com o banco por PDO 
		// parent::__construct( é para Executar a construtora da classe Pai ou Mae que neste caso é a PDO, dentro vc chamar os dados
		parent::__construct(
		'sqlsrv:Server=localhost\\SQLEXPRESS;Database=php',
		'sa',
		'10032002jrsd');	

	}

	public function setNome(string $nome): bool
	{
		return $this->nome = $nome;
	}

	public function setDescricao(string $descricao): bool
	{
		return $this->descricao = $descricao;
	}	

	public function setPreco(float $preco): bool
	{
		return $this->preco = $preco;
	}	

	public function gravar(): bool{
		
		$stmt = $this->prepare('INSERT INTO produtos
									(nome, descricao, preco)
								VALUES
									(:nome, :descricao, :preco)');
		//uso o this-> pq as variaveis são privadas e so consigo usar dentro dessa classe. o this indica que é dessa classe./
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':preco', $this->preco);

		return $stmt->execute();

	}
}












//Não estou usando oq ta abaixo mas é ex.
// //Quando a contrutora espera receber parametro eu coloco ();
// $objProduto = new Produto('Prato','Um prato muito bonito de plástico',234.87,);

// echo '<pre>';
// var_dump($objProduto);









