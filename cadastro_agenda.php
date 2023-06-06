
<?php
include("conexao.php");

$nome_foto = "";
if (file_exists($_FILES['foto']['tmp_name']))
{
    $pasta_destino = 'fotos/';
    $extensao = strtolower(substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino.date("Ymd-His"). $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
}

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$dt_cadastro = date("Y/m/d");


 $sql = "SELECT email from agenda where email = '$email'";
 $result = mysqli_query($con, $sql);
 $row = mysqli_num_rows($result);

 if ($row > 0)
 {
    echo "ERRO: E-mail ";
 }
else
{
    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, img) 
    values ('".$nome."','".$apelido."','".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."'
    , '".$dt_cadastro."', '".$nome_foto."')";
    $result = mysqli_query($con, $sql);
if ($result)
    {
    echo "<h1>Dados cadastrados com sucesso!<br></h1>";

    echo "Nome: $nome <br>";
    echo "Apelido: $apelido <br>";
    echo "endereço: $endereco <br>";
    echo "Bairro: $bairro <br>";
    echo "Estado: $cidade <br>";
    echo "Telefone: $telefone <br>";
    echo "Celular: $celular <br>";
    echo "E-mail: $email <br>";
    echo "Data: $dt_cadastro <br>";
   
    }
else
{
    echo "Erro ao tentar cadastrar!<br>";
}
}

?>
<a href="index.php">voltar</a>
