<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>Aula 1 - Gerador de Tabuada</title>
 <style>
 body { font-family: sans-serif; margin-left: 20px; }
 h1 { color: #004499; }
 h2 { color: #333; }
 </style>
</head>
<body>
 <h1>Meu Gerador de Tabuadas 🧮</h1>
 <?php
 // 1. Inclui o arquivo que tem a nossa lógica
 // 'require_once' garante que o arquivo é obrigatório e só é carregado uma vez.
 require_once 'funcoes.php';
 // 2. Define qual número queremos calcular
 $numero_escolhido = 2;
 // 3. Exibe um título dinâmico
 echo "<h2>Tabuada do número: $numero_escolhido</h2>";
 // 4. Chama a função do outro arquivo e guarda o resultado
 $minha_tabuada = gerarTabuada($numero_escolhido);
 // 5. Exibe o resultado que a função retornou
 echo $minha_tabuada;
 // ----- BÔNUS: E se quisermos a tabuada do 9? -----
 echo "<h2>Tabuada do número: 4</h2>";
 echo gerarTabuada(4);
 ?>
</body>
</html>