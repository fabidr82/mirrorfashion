<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Checkout Mirror Fashion</title>
</head>
<body>

  <h1>Ótima escolha!</h1>
  <p>Obrigado por comprar na Mirror Fashion!
    Preencha seus dados para efetivar a compra</p>

    <h2>Sua compra</h2>
    <dl>
      <dt>Cor:</dt>
      <dd><?php echo $_POST["cor"]; ?></dd>
      <dt>Tamanho:</dt>
      <dd><?php echo $_POST["tamanho"]; ?></dd>
      <dt>Produto:</dt>
      <dd><?php echo $_POST["nome"]; ?></dd>
    </dl>


</body>
</html> 
