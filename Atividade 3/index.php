<?php
// 1. SEMPRE inicie a sessão no topo de CADA página que usará sessões
session_start();
// 2. Verifica se o formulário de "adicionar" foi enviado
if (isset($_POST['produto_nome'])) {

 // 3. Pega o nome do produto
 $produto = $_POST['produto_nome'];
 // 4. Inicia o carrinho como um array vazio, se ele ainda não existir
 if (!isset($_SESSION['carrinho'])) {
 $_SESSION['carrinho'] = [];
 }
 // 5. Adiciona o produto ao array 'carrinho' dentro da sessão
 $_SESSION['carrinho'][] = $produto;
 echo "Produto '$produto' adicionado ao carrinho!";
}
// 6. (Bônus) Conta quantos itens já temos no carrinho
$total_itens = 0;
if (isset($_SESSION['carrinho'])) {
 $total_itens = count($_SESSION['carrinho']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>Aula 3 - Loja</title>
 <style> body { font-family: sans-serif; margin: 20px; } </style>
</head>
<body>
 <h1>Nossa Loja 🛒</h1>

 <h2><a href="carrinho.php">Ver Carrinho (<?php echo $total_itens; ?> itens)</a></h2>
 <h3>Produtos Disponíveis:</h3>
 <form method="POST">
 <input type="hidden" name="produto_nome" value="Notebook">
 <button type="submit">Adicionar Notebook (R$ 4000)</button>
 </form>
 <br>

 <form method="POST">
 <input type="hidden" name="produto_nome" value="Mouse">
 <button type="submit">Adicionar Mouse (R$ 150)</button>
 </form>
</body>
</html>
