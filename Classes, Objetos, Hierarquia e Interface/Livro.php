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
