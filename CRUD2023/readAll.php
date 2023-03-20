<?php
 include_once("conect.php");
 include_once("Crud.php");
 $obj = new Crud($conect);

  $obj->readInfo();

  $dados = $obj->getAll();
  //var_dump($dados);

  echo "<table border='1'>";
  echo "<tr><th> id </th><th> Nome </th><th> Idade </th><th> Email </th><th> Data </th><th>Editar</th></tr>";
 foreach($dados as $info){
   echo "<tr>
   <td>".$info['id']."</td>
   <td>".$info['nome']."</td>
   <td>".$info['idade']."</td>
   <td>".$info['email']."</td>
   <td>".$info['data_now']."</td><td><a href=formEdit.php?id=".$info['id'].">Editar</a></td></tr>";
 }
 echo "</table>";

?>
