//Arquivo base para a criação do projeto integrado semestral do curso de ADS. Nele são inseridos os códigos para a criação de cadastros,  movimentação e controle de estoque.
<?php 
    class Produto{                                                       //criação da classe Produto                                  
        private $nome;
        private $codigo;
        private $categoria;
        private $estoque;
        private $transacoes = [];  //array para armazenamento das transações


        public function __construct($nom, $cod, $cat, $est){            //método construtor para instanciar os objetos
            $this->nome = $nom;
            $this->codigo = $cod;
            $this->categoria = $cat;
            $this->estoque = $est;
        }

        public function status(){                                        //função status para consulta de estoque dos produtos cadastrados
                echo                 
                "<hr>Código: " . $this->getCodigo() .
                "<br>Nome: " . $this->getNome() .
                "<br>Categoria: " . $this->getCategoria() .
                "<br>Estoque: " . $this->getEstoque();
        }
        public function vender($quantidade = 1){                       //função vender na qual baixa o estoque e só é concretizada se a quantidade vendida for menor ou igual que o estoque.
                if($this->getEstoque() >= $quantidade){
                $this->setEstoque($this->getEstoque() - $quantidade);
                $this->registrarTransacao('venda', $quantidade);        //registro da trancação como 'venda' e a quantidade
                }else{
                        echo "Estoque Insuficiente!";
                }
        }
        public function comprar($quantidade = 1){                        //sobe o estoque e registra a transacção como 'compra e a qantidade
                $this->setEstoque($this->getEstoque() + $quantidade);
                $this->registrarTransacao('compra', $quantidade);
        }
        public function registrarTransacao($tipo, $quantidade){         //alimenta o array de registro da quantidade, tipo e data das movimentações
                $this->transacoes[] = [
                        'tipo' => $tipo,
                        'quantidade' => $quantidade,
                        'data' => date('d-m-Y H:i:s')                        
                ];
        }
        public function relatorio(){                                    //gera um relatório com as transações 
                echo "<h1>Relatório de Transações</h1>";
                foreach($this->transacoes as $movimentacao){
                        echo 
                        "<hr>Tipo: " . ucfirst($movimentacao['tipo']) .  //ucfirst(primeira letra da resposta miúscula)
                        "<br>Quantidade: " . $movimentacao['quantidade'] .
                        "<br>Data: " . $movimentacao['data'] ."<br>";
                }
        }

        public function getNome(){                                         //métodos Getters e Setters para programação dos atributos da classe
                return $this->nome;
        }
        public function setNome($nome){
                $this->nome = $nome;
                return $this;
        }
       
        public function getCodigo(){
                return $this->codigo;
        } 
        public function setCodigo($codigo){
                $this->codigo = $codigo;
                return $this;
        }

        public function getEstoque(){
                return $this->estoque;
        }
        public function setEstoque($estoque){
                $this->estoque = $estoque;
                return $this;
        }

        public function getCategoria(){
                return $this->categoria;
        }
        public function setCategoria($categoria){
                $this->categoria = $categoria;
                return $this;
        }
    }
?>
