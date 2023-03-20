 <?php
$conect = new PDO("mysql:dbname=aula; host=localhost","root",""); 
 
// $bank = "aula";
// $host = "localhost";
// $user_bd = "root"; 
// $pass_bd = "";
// $charset = "utf8";

// $config = "mysql:dbname=$bank;";
// $config .= "host=$host;";
// $config .= "charset=$charset";

// try{
//     $conect = new PDO($config,$user_bd,$pass_bd); 
//     $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
// } catch(PDOException $e) {
//     echo "Erro de conexão com BD: ".utf8_encode($e->getMessage());
// } 
