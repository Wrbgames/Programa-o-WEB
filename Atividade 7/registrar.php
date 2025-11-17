<?php
// registrar.php
require_nce 'coenxao.php';
$mensagem="";

// 1. Verifica se o formulario foi enviado
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // 2. Criar o HASH da senha
    // Nunca salve a senha pura!
    $hash_senha = password_hash($senha, PASSWORD_DEFAULT);

    // 3. Salva no banco de dados
    try {
        $sql = "INSERT INTO usuarios(nome_completo, email, senha_hash) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $hash_senha]);

        $mensagem = "Usuário registrado com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erroao registrar:" . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head><title>Registrar</title></head>
<body>
    <h1>Registre-se</h1>
    <?php if ($mensagem) echo "<p>$mensagem</p>"; ?>
    <form methrod="POST">
        <label>Nome:</label>
        <input type ="text" name ="name" required> <br></br>
        <label>Email:</label>
        <input type ="email" name ="email" required> <br></br>
        <label>Senha:</label>
        <input type ="password" name ="senha" required> <br></br>
        <button type="submit">Entrar</button>
 </form>
 <br>
 <a href="registrar.php">Não tem conta? Registre-se</a>    
</body>
</html>