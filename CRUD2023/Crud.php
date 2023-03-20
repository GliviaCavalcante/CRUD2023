<?php

class Crud{
    private $connect;

    private $nome;
    private $email;
    private $idade;

    function __construct($conect){
     $this->connect = $conect;
     }

     public function setDados($nome,$email,$idade){
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
     }

     public function insertDados(){
     $sql = $this->connect->prepare("INSERT INTO clientes(nome,email,idade,data_now)VALUES(?,?,?,now())");
     
     $sql->bindParam(1,$this->nome); 
     $sql->bindParam(2,$this->email); 
     $sql->bindParam(3,$this->idade); 
     
   
     if($sql->execute()){
        echo "<center>OK!</center>";
        echo "<center><br><a href='index.html'>VOLTAR</a></center>";

     }else{
        echo "<center>ERRO!</center>";
        echo "<center><br><a href='index.html'>VOLTAR</a></center>";

     }
     }

     public function readInfo($id = null){
      if(isset($id)){
      $sql = $this->connect->prepare("SELECT * FROM clientes WHERE id=?");

      $sql->bindValue(1,$id);
      $sql->execute();
      $result = $sql->fetch(PDO::FETCH_OBJ);
      return $result;
    }else{
      $this->getAll();
    }
     } 
     public function getAll(){
   $sql = $this->connect->query("SELECT * FROM clientes");
   $res = $sql->fetchAll();
   return $res;
}
   public function readinfoAll($nome = null){
      if(isset($nome)){
         $sql = $this->connect->prepare("SELECT * FROM clientes WHERE nome LIKE ?");
   
         $sql->bindValue(1,"%$nome%");
         $sql->execute();
         $result = $sql->fetch(PDO::FETCH_ASSOC);
         return $result;
       }else{
         $this->getAll();
       } 
   }
   public function update($id,$nome,$email,$idade){
      $sql = $this->connect->prepare("UPDATE clientes SET nome=?, email=?, idade=? WHERE id=?");
      $sql->bindParam(1,$nome, PDO::PARAM_STR); 
      $sql->bindParam(2,$email, PDO::PARAM_STR); 
      $sql->bindParam(3,$idade, PDO::PARAM_STR); 
      $sql->bindParam(4,$id, PDO::PARAM_STR); 

      if($sql->execute()){
         echo "REGISTRO ATUALIZADO COM SUCESSO! <br> <a href ='readAll.php'>Voltar</a>";
      }else{
         echo "ERRO! <br> <a href = 'readAll.php'> Voltar </a>";
      }
   }
   public function delete($id){
      $sql = $this->connect->prepare("DELETE FROM clientes WHERE id=?");
      $sql->bindParam(1,$id, PDO::PARAM_STR); 
      if($sql->execute()){
         echo "REGISTRO APAGADO COM SUCESSO! <br> <a href ='Delete.php'>Voltar</a>";
      }else{
         echo "ERRO! <br> <a href = 'Delete.php'> Voltar </a>";
      }
   }
}
