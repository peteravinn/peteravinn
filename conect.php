<?php
//PAGINA DE CADASTRO ALUNO 


$servername = "localhost";
$username = "root";
$password = "";
$dbname	= "atividade";

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname=charset=utf8", $username, $password,);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO dados (Aluno, Disciplina, Nota_1, Nota_2)
  VALUES ('Andre', 'Web', 10, 10)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Usuário cadastrado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>
