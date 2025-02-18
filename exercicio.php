<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Title</title>
</head>
<body>
<?php
//Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Obtém os valores enviados pelo formulário e remove espaços extras
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $complement = trim($_POST["complement"]);
    $number_residence = trim($_POST["number_residence"]);
    $city = trim($_POST["city"]);
    $state = trim($_POST["state"]);
    $zip = trim($_POST["zip"]);

    echo "<h2>Dados cadastrados:</h2>";
    echo "<p><strong>Nome: </strong> ".htmlspecialchars($name)."</p>";
    echo "<p><strong>E-mail: </strong> ".htmlspecialchars($email)."</p>";
    echo "<p><strong>Telefone: </strong> ".htmlspecialchars($phone)."</p>";
    echo "<p><strong>Cidade: </strong> ".htmlspecialchars($address)."</p>";
    echo "<p><strong>Complemento: </strong> ".htmlspecialchars($complement)."</p>";
    echo "<p><strong>Número da residência: </strong> ".htmlspecialchars($number_residence)."</p>";
    echo "<p><strong>Cidade: </strong> ".htmlspecialchars($city)."</p>";
    echo "<p><strong>Estado: </strong> ".htmlspecialchars($state)."</p>";
    echo "<p><strong>CEP: </strong> ".htmlspecialchars($zip)."</p>";
    //Exibe os dados cadastrados na tela.
} else {
    header("location: index.html");
    exit();
}
?>
</body>
<script src="exercicio.php"></script>
</html>