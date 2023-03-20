<?php
    include_once("conect.php");
    include_once("Crud.php");
   
     $obj = new Crud($conect);
     $nome = $_POST['nome'];
     $dado = $obj->readinfoAll($nome);
     //var_dump($dado);
    
 
    //  $dado = $obj->getAll();
    // // var_dump($dado);

   //echo "Nome:".$dado->nome."<br>Idade:".$dado->idade."<br>Email:".$dado->email."<br>DataAtual:".$dado->data_now;

 echo "<table border='1'>";
   echo "<tr><th> Nome </th><th> Idade </th><th> Email </th><th> Data </th></tr>";

    echo "<tr> <td>".$dado['nome']."</td>
    <td>".$dado['idade']."</td>
    <td>".$dado['email']."</td>
    <td>".$dado['data_now']."</td></tr>";

  echo "</table>";
  ?> 