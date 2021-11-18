<?php

include("./Connection.php");
include("./model/ModelPessoa.php");

$conn = new Connection();
$modelPessoa = new ModelPessoa($conn->returnConnection());

$dados = $modelPessoa->findAll(\PDO::);


echo '<pre>';
var_dump($conn->returnConnection());
echo '</pre>'

// echo '<pre>';
// var_dump($conn->returnConnection());
// echo '</pre>'

?>