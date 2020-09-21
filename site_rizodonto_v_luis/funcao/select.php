<?php
    require "../classes/conexao.php";

    $_dia = $_POST['_dia'];

    // echo $_dia;
    // $_dia = "30/Setembro/2020";
    // $sql = "SELECT * FROM agenda";
$banco_agenda = $conn->query('SELECT * FROM agenda WHERE datas = ' . $conn->quote($_dia));

   
    $tabela = '
    <table class="table table-responsive">
        <tr>
            <th>Unidade</th>
            <th>Horário</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Data</th>
        </tr>
        
';
    while($row = $banco_agenda->fetch(PDO::FETCH_ASSOC)){
        
    $tabela .= "<tr>";
    $tabela .= "<td>{$row['unidade']}</td>";
    $tabela .= "<td>{$row['horario']}</td>";
    $tabela .= "<td>{$row['nome']}</td>";
    $tabela .= "<td>{$row['telefone']}</td>";
    $tabela .= "<td>{$row['email']}</td>";
    $tabela .= "<td>{$row['datas']}</td>";
       

    $tabela .= "</tr>";

    }

    $tabela .= '
        </table>
        ';

    echo $tabela;

?>