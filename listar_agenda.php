<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
        include("conexao.php");
        $sql = "select * from agenda";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>

<div class="conteiner"> 
        <div class="row">
            <div class="col-12  translate-middle bg-secondary text-light">
                <h1>Consultar Agenda</h1>
            </div>
        </div>
        <div class="row">
            <a class="btn btn-dark col-4" href="cadastro_agenda.html">cadastrar agenda</a>
            <a class="btn btn-dark col-4" href="listar_agenda.php">Listar agenda</a>
            <a class="btn btn-dark col-4" href="index.php">Home</a>
        </div>
    </div>
    <br>

    <table  align="center" border="1" width="1000px" bordercolor="black" bgcolor="white">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Data cadastro</th>
            <th></th>
            <th></th>
        <?php
        do
        {
            echo "<tr>";
                echo"<td>".$row['id_agenda']."</td>";
                if($row['img'] == "")
                    echo "<td></td>";
                else 
                echo"<td><img src='".$row['img']."' width='80' height='100' /></td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['apelido']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['cidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td>".$row['celular']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['dt_cadastro']."</td>";
                echo"<td><a href='alterar_agenda.php?id_agenda=".$row['id_agenda']."'>alterar</a></td>"; 
                echo"<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>deletar</a></td>"; 
            echo "</tr>";
        } while ($row = mysqli_fetch_array($result))
        ?>
        


    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


