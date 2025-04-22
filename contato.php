<?php
// Informações de conexão com o banco de dados
$servername = "localhost"; // Geralmente é localhost
$username = "root"; // Usuário padrão do MySQL no XAMPP/WAMP
$password = "400456Tha!"; // Senha padrão do MySQL no XAMPP/WAMP é vazia
$dbname = "macaron_site"; // Nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Coletar dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Preparar e executar a query SQL para inserir os dados
$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $mensagem);

if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
    // Você pode redirecionar o usuário para uma página de confirmação aqui:
    // header("Location: contato_sucesso.html");
} else {
    echo "Erro ao enviar a mensagem: " . $stmt->error;
}

// Fechar a conexão e a declaração
$stmt->close();
$conn->close();
?>