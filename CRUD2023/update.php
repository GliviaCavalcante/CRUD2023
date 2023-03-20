<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$id = $_POST['id'];

include_once("conect.php");
include_once("Crud.php");

 $obj = new Crud($conect);

 $obj->update($id,$nome,$email,$idade);