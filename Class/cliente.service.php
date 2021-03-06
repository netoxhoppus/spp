<?php

include_once 'cliente.model.php';
include_once 'conexao.php';

class ClienteService {
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::conectar();
    }

    public function inserirCliente(Cliente $cliente){
      $sql = 'INSERT INTO cliente (nome, cpf, rg, sexo, dataNascimento, tel, email, logradouro, bairro, cidade, estado, cep, dataCadastro, dataUltimaCompra)'
              .' VALUES (:nome, :cpf, :rg, :sexo, :dataNascimento, :tel, :email, :logradouro, :bairro, :cidade, :estado, :cep, NOW(), NOW())';

      $sttm = $this->conexao->prepare($sql);

      $sttm->bindValue(':nome',$cliente->__get('nome'));
      $sttm->bindValue(':cpf',$cliente->__get('cpf'));
      $sttm->bindValue(':rg',$cliente->__get('rg'));
      $sttm->bindValue(':sexo',$cliente->__get('sexo'));
      $sttm->bindValue(':dataNascimento',$cliente->__get('dataNascimento'));
    	$sttm->bindValue(':tel',$cliente->__get('tel'));
    	$sttm->bindValue(':email',$cliente->__get('email'));
    	$sttm->bindValue(':logradouro',$cliente->__get('logradouro'));
    	$sttm->bindValue(':bairro',$cliente->__get('bairro'));
    	$sttm->bindValue(':cidade',$cliente->__get('cidade'));
    	$sttm->bindValue(':estado',$cliente->__get('estado'));
    	$sttm->bindValue(':cep',$cliente->__get('cep'));

        try {
            return $sttm->execute();
            echo 'Cadastrado com sucesso!';
          } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            echo 'Erro ao cadastrar!';
          }
      }


    public function alterarCliente(Cliente $cliente){
      $sql = 'UPDATE cliente SET nome = :nome, cpf = :cpf, rg = :rg, sexo = :sexo, dataNascimento = :dataNascimento, tel = :tel, email = :email, logradouro = :logradouro, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, dataCadastro = NOW(), dataUltimaCompra = NOW() WHERE idcliente = :idcliente';

      $sttm = $this->conexao->prepare($sql);

      $sttm->bindValue(':nome',$cliente->__get('nome'));
      $sttm->bindValue(':cpf',$cliente->__get('cpf'));
      $sttm->bindValue(':rg', $cliente->__get('rg'));
      $sttm->bindValue(':sexo',$cliente->__get('sexo'));
      $sttm->bindValue(':dataNascimento',$cliente->__get('dataNascimento'));
      $sttm->bindValue(':tel',$cliente->__get('tel'));
      $sttm->bindValue(':email',$cliente->__get('email'));
      $sttm->bindValue(':logradouro',$cliente->__get('logradouro'));
      $sttm->bindValue(':bairro',$cliente->__get('bairro'));
      $sttm->bindValue(':cidade',$cliente->__get('cidade'));
      $sttm->bindValue(':estado',$cliente->__get('estado'));
      $sttm->bindValue(':cep',$cliente->__get('cep'));
      $sttm->bindValue(':idcliente',$cliente->__get('idcliente'));

        try {
            $sttm->execute();
            echo 'Alterado com sucesso!';
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
            echo 'Erro ao alterar!';
        }
    }
    public function getClienteByID($idcliente) {
      $sql = "SELECT * FROM cliente WHERE idcliente = :idcliente";

      $sttm = $this->conexao->prepare($sql);
      $sttm->bindValue(':idcliente', $idcliente);

        try {
            $sttm->execute();
          } catch (PDOException $exc) {
              echo $exc->getTraceAsString();
          }

      $resul = $sttm->fetchAll(PDO::FETCH_ASSOC);

      $cliente = new Cliente();
      $cliente->__set('codcliente', $resul[0]['idcliente']);
      $cliente->__set('nome', $resul[0]['nome']);
      $cliente->__set('cpf', $resul[0]['cpf']);
      $cliente->__set('rg', $resul[0]['rg']);
      $cliente->__set('sexo', $resul[0]['sexo']);
      $cliente->__set('dataNascimento', $resul[0]['dataNascimento']);
      $cliente->__set('tel', $resul[0]['tel']);
      $cliente->__set('email', $resul[0]['email']);
      $cliente->__set('logradouro', $resul[0]['logradouro']);
      $cliente->__set('bairro', $resul[0]['bairro']);
      $cliente->__set('cidade', $resul[0]['cidade']);
      $cliente->__set('estado', $resul[0]['estado']);
      $cliente->__set('cep', $resul[0]['cep']);
      $cliente->__set('dataCadastro', $resul[0]['dataCadastro']);
      $cliente->__set('dataUltimaCompra', $resul[0]['dataUltimaCompra']);

        return $cliente;
        }


    public function excluirCliente($idcliente) {
        $sql = 'DELETE FROM cliente WHERE idcliente = :idcliente';

        $sttm = $this->conexao->prepare($sql);

        $sttm->bindValue(':idcliente', $idcliente);

        try {
            $sttm->execute();
            echo"$idcliente";
            echo 'Excluído com sucesso!';
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
            echo 'Erro ao excluir!';
        }
    }

    public function populaTabela() {
      $sql = "SELECT * FROM cliente";

      $sttm = $this->conexao->prepare($sql);

      try {
          $sttm->execute();
        } catch (PDOException $exc) {
          echo $exc->getTraceAsString();
        }
        return $sttm->fetchAll(PDO::FETCH_ASSOC);
      }

}

// // // Para cadastrar novo cliente
/*$c = new Cliente("Ana Paula", "654.654.654-19", "123456 SSP/GO", "Feminino", "20/01/1996", "62 98789-9876", "anapaula@gmail.com", "Rua H", "Centro", "Rubiataba", "GO", "76.370-000");
echo "<pre>";
print_r($c);
echo "</pre>";
$cs = new ClienteService();
$cs->inserirCliente($c);
echo "<pre>";
print_r($cs);
echo "</pre>";*/
// // //

// // // Para alterar cliente
/*$c = new Cliente("Maria Luiza", "267.654.780-19", "789637524", "Feminino", "20/09/1987", "62 98789-9876", "anapaula@gmail.com", "Rua H", "Centro", "Rubiataba", "GO", "76.37-000");
$c->__set("idcliente", 5);
echo "<pre>";
print_r($c);
echo "</pre>";
$cs = new ClienteService();
$cs->alterarCliente($c);
echo "<pre>";
print_r($c);
echo "</pre>";*/
// // //

// // // Para excluir cliente
/*$c = new Cliente("Marcela", "267.654.780-19", "789637524", "Feminino", "20/09/1987", "62 98789-9876", "anapaula@gmail.com", "Rua H", "Centro", "Rubiataba", "GO", "76.37-000");
$c->__set("idcliente", "1");
echo "<pre>";
print_r($c);
echo "</pre>";
$cs = new ClienteService();
$cs->excluirCliente($c);
echo "<pre>";
print_r($c);
echo "</pre>";*/
// // //

/*$c = new Cliente();
$cs = new ClienteService();
$cs->getClienteByID(1);
echo "<pre>";
print_r($cs->getClienteByID(1));
echo "</pre>";*/

?>
