<?php

class FuncionarioDTO {
   private $idfuncionario;
   private $nome;
   private $cep;
   private $endereco;
   private $dtnasc;
   private $cpf;
   
   public function getIdfuncionario() {
       return $this->idfuncionario;
   }

   public function setIdfuncionario($idfuncionario) {
       $this->idfuncionario = $idfuncionario;
   }

   
         
 
   public function getNome() {
       return $this->nome;
   }

   public function getCep() {
       return $this->cep;
   }

   public function getEndereco() {
       return $this->endereco;
   }

   public function getDtnasc() {
       return $this->dtnasc;
   }

   public function getCpf() {
       return $this->cpf;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function setCep($cep) {
       $this->cep = $cep;
   }

   public function setEndereco($endereco) {
       $this->endereco = $endereco;
   }

   public function setDtnasc($dtnasc) {
       $this->dtnasc = $dtnasc;
   }

   public function setCpf($cpf) {
       $this->cpf = $cpf;
   }
}
?>