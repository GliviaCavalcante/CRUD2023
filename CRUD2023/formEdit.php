<?php
$id = $_GET['id'];
include_once("conect.php");
include_once("Crud.php");
$obj = new Crud($conect);
$dados = $obj->readInfo($id);
//var_dump($dados);
?>

    <form action="update.php" method="post">
  <p>Nome:<input type="text" name="nome" value="<?=$dados->nome;?>"></p>
  <p>E-mail:<input type="email" name="email"  value="<?=$dados->email;?>"></p>
  <p>Idade:<input type="number" name="idade"  value="<?=$dados->idade;?>"></p>
  <input type="hidden" name="id" value="<?=$dados->id;?>">
    <p><button type="submit">ALTERAR</button></p>
    </form>
