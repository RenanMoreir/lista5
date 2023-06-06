<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];


    echo "<h1> Alteração de dados </h1>";
    $sql = "DELETE FROM agenda
        WHERE id_agenda = $id_agenda";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "dados deletados com sucesso!<br>";
    else 
        echo "Erro ao deletar dados: ".$msqli_erro($con)."!";
?>
<a href="listar_agenda.php">voltar</a>