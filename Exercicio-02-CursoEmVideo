//Registro da lógica da criação de classes com hierarquia e uma interface
//Arquivo Livro.php
<?php 
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($ti,$au,$to,$pa,$ab,$le){
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPaginas = $to;
            $this->pagAtual = $pa;
            $this->aberto = $ab;
            $this->leitor = $le;
        }

        public function detalhes(){
            echo "<br><p><strong>Título: ". $this->getTitulo() . "</strong></p>";
            echo "<br><p>Autor: " . $this->getAutor() . "</p>";
            echo "<br><p>Total de Páginas: " . $this->getTotPaginas() . "</p>";
            echo "<br><p>Página atual: ".$this->getPagAtual() . "</p>";
            if($this->getAberto()){
                echo "<br><p>O livro está aberto.</p>";
            }else{
                echo "<br><p>O livro está fechado.</p>";
            }
            
            echo "<br><p>Leitor: " . $this->getLeitor() . "</p>"; 
        } 

        
        public function getTitulo()
        {
                return $this->titulo;
        }
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        public function getAutor()
        {
                return $this->autor;
        }
        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        public function getTotPaginas()
        {
                return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas)
        {
                $this->totPaginas = $totPaginas;

                return $this;
        }

        public function getPagAtual()
        {
                return $this->pagAtual;
        }
        public function setPagAtual($pagAtual)
        {
                $this->pagAtual = $pagAtual;

                return $this;
        }

        public function getAberto()
        {
                return $this->aberto;
        }
        public function setAberto($aberto)
        {
                $this->aberto = $aberto;

                return $this;
        }

        public function getLeitor()
        {
                return $this->leitor->getNome();
        }
        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;

                return $this;
        }

        public function abrir(){
            $this->setAberto(true);
        }
        public function fechar(){
            $this->setAberto(false);
        }
        public function folhear($p){
                if($p>$this->getTotPaginas()){
                       $this->pagAtual = 0;
                
            
                }elseif($this->getAberto() == false){
                        echo "<br><p>O livro está fechado, por favor abra-o para folhear.</p>";
                }else{
                        $this->setPagAtual($p);
                }
        }
        public function avancarPag(){
                
                if($this->getAberto()){
                        

                $novaPag = $this->getPagAtual() + 1;
                        if($novaPag <= $this->getTotPaginas()){
                                $this->setPagAtual($novaPag);
                        }else{
                                echo "<br><p>Você já está na última página.</p>";
                        }
                        
                        
                        
                }else{
                        echo "Livro fechado, não posso avançar página";
                }
        }
        public function voltarPag(){
                if($this->getAberto()){
                        

                $novaPag = $this->getPagAtual() - 1;
                        if($novaPag <= 0){
                                $this->setPagAtual(0);
                        }else{
                               $this->setPagAtual($novaPag);
                        }
                        
                        
                        
                }else{
                        echo "Livro fechado, não posso voltar pagina página";
                }}

        
    }
?>

//Arquivo Pessoa.php
<?php 
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($no, $id, $se){
            $this->nome = $no;
            $this->idade = $id;
            $this->sexo = $se;
        }

        public function fazerAniver(){
            $this->idade += 1;
        }

        
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }
        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        public function getSexo()
        {
                return $this->sexo;
        }
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }
    }
?>
//Arquivo Publicação.php (interface)
<?php 
    interface Publicacao{
        public function abrir();
        public function fechar();
        public function folhear($p);
        public function avancarPag();
        public function voltarPag();
    }
?>
//Arquivo Style.css (estilo para a página para melhor visualização)
body {
    
    background: linear-gradient(black, gray);
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    color: white;
}

pre, php {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    font-size: 1.2em;
    color: white;
}


php {
    display: block;
    white-space: pre-wrap;
    margin: 20px 0;
}

//Arquivo index.php (exemplo de aplicação de algumas instanciações :
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <pre>
        <?php 
        require_once 'Publicacao.php';
        require_once 'Pessoa.php';
        require_once 'Livro.php';
            $p = array();
            $p[1] = new Pessoa("Marco", 15, "M");
            
            //print_r($p[1]);

            $l = array();
            $l[0] = new Livro("Alice no Pais de Gales","Marcelo",135,0, false, $p[1]);
            //print_r($l[0]);            
            $l[0]->abrir();
            //$l[0]->fechar();            
            
            $l[0]->folhear(80);
            //$l[0]->avancarPag();
            //$l[0]->avancarPag();
            $l[0]->voltarPag();
            $l[0]->detalhes();
            
        ?>
    </pre>
</body>
</html>
