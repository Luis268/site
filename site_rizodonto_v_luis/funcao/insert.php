<?php

    require "../classes/conexao.php";

    $unidade = $_POST['selectUnidade'];
    $horario = $_POST['selectHorario'];
    $nome = $_POST['inputName'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $data = $_POST['inputData'];


    try{

        $stmt = $conn->prepare('INSERT INTO agenda (unidade, horario, nome, telefone, email, datas) VALUES(:unidade, :horario, :nome, :telefone, :email, :datas)');
        $stmt->execute(array(
            ':unidade' => $unidade, 
            ':horario' => $horario, 
            ':nome' => $nome, 
            ':telefone' => $telefone, 
            ':email' => $email, 
            ':datas' => $data,
        ));

        echo $stmt->rowCount();
    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }

    header('Location: ../agenda');




?>