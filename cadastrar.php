<?php
include "conexao.php";
$nome = $_POST  ["nome"];
$idade = $_POST  ["idade"];
$sexo = $_POST ["sexo"];
$data_nascimento = $_POST ["data_nascimento"];
$cpf = $_POST ["cpf"];
$telefone = $_POST ["telefone"];
$endereco = $_POST ["endereco"];
$sintomas = $_POST ["sintomas"];
$inicioDosSintomas = $_POST ["inicioDosSintomas"];
$doencasPreExistentes = $_POST ["doencasPreExistentes"];
$usoDeMedicamentos = $_POST ["usoDeMedicamentos"];
$alergias = $_POST ["alergias"];
$pressaoArterial= $_POST ["pressaoArterial"];
$temperatura= $_POST ["temperatura"];
$frequenciaCardiaca = $_POST ["frequenciaCardiaca"];
$saturacao= $_POST ["saturacao"];
$observacoes= $_POST ["observacoes"];

$sql = "INSERT INTO pacientes(nome,idade,sexo,data_nascimento,cpf,telefone,endereco,sintomas,inicioDosSintomas,doencasPreExistentes,usoDeMedicamentos,alergias,pressaoArterial,temperatura,frequenciaCardiaca,saturacao,obeservacoes)VALUES('$nome','$idade','$sexo','$data_nascimento','$cpf','$telefone','$endereco','$sintomas','$inicioDosSintomas','$doencasPreExistentes','$usoDeMedicamentos','$alergias','$pressaoArterial','$temperatura','$frequenciaCardiaca','$saturacao','$observacoes')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <div class="container">

        <?php

        if($conn ->query ($sql)=== TRUE){

            echo "<h2>Paciente Cadastrado com Sucesso</h2>";
            echo"<div class='paciente'></div>";
            echo "<b>Nome:</b> $nome <br>";
            echo "<b>Idade:</b> $idade <br>";
            echo "<b>Sexo:</b> $sexo <br>";
            echo "<b>Data de Nascimento:</b> $data_nascimento <br>";
            echo "<b>CPF:</b> $cpf <br>";
            echo "<b>Telefone:</b> $telefone <br>";
            echo "<b>Endereço:</b> $endereco <br>";
            echo "<b>Sintomas:</b> $sintomas <br>";
            echo "<b>Inicio dos Sintomas:</b> $inicioDosSintomas <br>";
            echo "<b>Doenças pre Existentes:</b> $doencasPreExistentes <br>";
            echo "<b>Uso de Medicamentos:</b> $usoDeMedicamentos <br>";
            echo "<b>Alergias:</b> $alergias <br>";
            echo "<b>Pressão Arterial:</b> $pressaoArterial <br>";
            echo "<b>Temperatura:</b> $temperatura <br>";
            echo "<b>Frequencia Cardiaca:</b> $frequenciaCardiaca <br>";
            echo "<b>Saturação:</b> $saturacao <br>";
            echo "<b>Observações:</b> $observacoes <br>";

            
        }else{
            echo ":<p> Erro ao Cadastrar Paciente".$conn->error . "</p>";
        }
        $conn->close();


        ?>
    </div>
</body>
</html>