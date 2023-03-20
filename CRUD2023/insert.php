<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

 include_once("conect.php");

 include_once("Crud.php");

 $obj = new Crud($conect);

 $obj->setDados($nome,$email,$idade);

 $obj->insertDados();
 