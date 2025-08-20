<?php
// Configurações de banco de dados
$server = "localhost";
$user = "root";
$password = "root";
$database = "db_escola";

// Utilizando a função mysqli para realizar a conexão com o banco de dados

$conecta = new mysqli($server, $user, $password, $database);

// Verificando a conexão 

if ($conecta == true) {
    echo "Conexão realizada com sucesso!";
}

// Recebendo dados do form
$acao = $_POST['acao'];

// Criando uma tabela no banco de dados

if ($acao == "criar") {
    $sql = "CREATE TABLE tb_escola(
        id_aluno int auto_increment primary key,
        nm_aluno varchar(45),
        idade int
    )";

    $conecta ->query($sql);

    $insert = "INSERT INTO tb_escola VALUE (NULL, 'Jose Carlos', 35);";
    $conecta->query($insert);

}

if ($acao == "buscar") {
    $sql = "SELECT * FROM tb_escola;";
    $conecta->query($sql);
}
// Update no banco de dados
if ($acao == "atualizar") {
    $sql = "UPDATE FROM tb_escola SET nm_aluno = 'Joelma' WHERE id_aluno = '1';";
}

if ($acao == "deletar") {
    $sql = "DELETE FROM tb_escola WHERE id_aluno = 1;";
}
?>