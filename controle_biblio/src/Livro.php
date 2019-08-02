<?php
require_once getcwd()."\db\MySQL.class.php";

class Livro{
    private $id;
    private $capa;
    private $titulo;
    private $autor;
    private $genero;

    public function __construct($id = null, $capa = null, $titulo = null, $autor = null, $genero = null){
        $this->id = $id;
        $this->capa = $capa;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
    }
    
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "insert 
                into livro (capa, titulo, autor, genero) 
                values
                ('".$this->capa."','".$this->titulo."','".$this->autor."',".$this->genero.")";
        $conexao->executa($sql);
    }

    public static function listaTodos(){
        $conexao = new MySQL();
		$sql = "SELECT * FROM livro";
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $livros = array();
            foreach($resultados as $resultado){
                $livro = new Livro();
                $livro->id = $resultado['id'];
                $livro->capa = $resultado['capa'];
                $livro->titulo = $resultado['titulo'];
                $livro->autor = $resultado['autor'];
                $livro->genero = $resultado['genero'];
                $livros[] = $livro;
            }
            return $livros;
        }else{
            return false;
        }
    }

    public function listaUm(){
        $conexao = new MySQL();
		$sql = "SELECT * FROM livro where id =".$this->id ;
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $this->capa = $resultados[0]['capa'];
            $this->titulo = $resultados[0]['titulo'];
            $this->autor = $resultados[0]['autor'];
            $this->genero = $resultados[0]['genero'];
        }
    }

    /*public static function listaPorDisciplina($idDisciplina){
        $conexao = new MySQL();
		$sql = "SELECT * FROM avaliacoes WHERE disciplina  = ".$idDisciplina;
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $avaliacoes = array();
            foreach($resultados as $resultado){
                $avaliacao = new Avaliacao();
                $avaliacao->id = $resultado['id'];
                $avaliacao->data = $resultado['data'];
                $avaliacao->disciplina = $resultado['disciplina'];
                $avaliacao->conteudo = $resultado['conteudo'];
                $avaliacao->tipo = $resultado['tipo'];
                $avaliacao->peso = $resultado['peso'];
                $avaliacoes[] = $avaliacao;
            }
            return $avaliacoes;
        }else{
            return false;
        }
    }*/

    public static function excluir($id){
        $conexao = new MySQL();
        $sql = "DELETE FROM livro where id =".$id;
        $conexao->executa($sql);
    }

    public function editar(){
        $conexao = new MySQL();
        $sql = "UPDATE livro SET capa = '".$this->capa."',titulo ='".$this->titulo."',autor='".$this->autor."',genero = '".$this->genero."' where id =".$this->id;
        $conexao->executa($sql);
    }
}