<?php 
$host = "localhost";
$user = "root";
$pass = "aluno";
$database = "triagem";

$coon = new mysqli ($host,$user,$pass,$database);
if($conn -> connect_error){
http_response_code(500);
echo json_encode (["erro"=> "Falha na conexão"],
JSON_UNESCAPED_UNICODE);
exit();

}
?>