<?php
require_once 'conexao.php';

class FuncionarioDAO {
    public function salvar(FuncionarioDTO $funcionarioDTO){
        try {
            $pdo = Conexao::getInstance(); 
            $sql = "INSERT INTO funcionario(nome,cpf,dtnasc,endereco,cep)
                    VALUES (?,?,?,?,?)";
                        
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $funcionarioDTO->getNome());
            $stmt->bindValue(2, $funcionarioDTO->getCpf());
            $stmt->bindValue(3, $funcionarioDTO->getDtnasc());
            $stmt->bindValue(4, $funcionarioDTO->getEndereco());
            $stmt->bindValue(5, $funcionarioDTO->getCep());
            return $stmt->execute();
                    
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } 
    }
    
    public function getAllFuncionario(){
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM funcionario";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            
            $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $funcionarios;     
    }  catch (PDOException $exc){
        echo $exc->getMessage();
    }
    }
    
    public function deleteFuncionarioById($idfuncionario){
        try{
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM funcionario WHERE idfuncionario = ? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idfuncionario);
            $stmt->execute();
        } catch(PDOException $exc){
            echo $exc->getMessage();
        }
    }
    
    public function getFuncionarioByNome($nome){
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM funcionario WHERE nome LIKE ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1,"%".$nome."%");
            $stmt->execute();
            
            $funcionario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $funcionario;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function getFuncionarioById($idfuncionario){
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM funcionario WHERE idfuncionario = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1,$idfuncionario);
            $stmt->execute();
            
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $funcionario;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function alterarFuncionario(FuncionarioDTO $funcionarioDTO){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE funcionario SET
                nome = ?,
                endereco = ?,
                cep = ?,
                cpf = ?,
                dtnasc = ?
                WHERE idfuncionario = ? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $funcionarioDTO->getNome());
            $stmt->bindValue(2, $funcionarioDTO->getEndereco());
            $stmt->bindValue(3, $funcionarioDTO->getCep());
            $stmt->bindValue(4, $funcionarioDTO->getCpf());
            $stmt->bindValue(5, $funcionarioDTO->getDtnasc());
            $stmt->bindValue(6, $funcionarioDTO->getIdfuncionario());
            
            
            return $stmt->execute();
            
           
            
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    
    

   
    
 }
