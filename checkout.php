<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Checkout Mirror Fashion</title>
  <link rel="stylesheet" href="css/bootstrap.css">
   <style>
   .form-control:invalid {
     border: 1px solid #c00;
		}
		.navbar {
			margin: 0;
		}
   </style>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
 <div class="navbar-header">
	<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">menu
	</button>
  <a class="navbar-brand" href="index.php">Mirror Fashion</a>
 </div>
 <ul class="nav navbar-nav collapse navbar-collapse">
  <li><a href="sobre.php">Sobre</a></li> 
  <li><a href="#">Ajuda</a></li>
  <li><a href="#">Perguntas frequentes</a></li>
  <li><a href="#">Entre em contato</a></li>
 </ul>
</nav>

  <div class="jumbotron">
   <div class="container">
    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion!
    Preencha seus dados para efetivar a compra</p>	
   </div>
  </div>
	
  <div class="container">
   <div class="row">
    <div class="col-sm-4">
     <div class="panel panel-default">
      <div class="panel-heading">
       <h2 class="panel-title">Sua compra</h2>
      </div>
       <div class="panel-body">
        <img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
   				
    <dl>
      <dt>Cor:</dt>
      <dd><?php echo $_POST["cor"]; ?></dd>
      <dt>Tamanho:</dt>
      <dd><?php echo $_POST["tamanho"]; ?></dd>
      <dt>Produto:</dt>
      <dd><?php echo $_POST["nome"]; ?></dd>
    </dl>
     </div>
    </div>
  </div>
  
  <form class="col-sm-8">
   <fieldset class="col-md-6">
    <legend>Dados pessoais</legend>
    
    <div class="form-group">
     <label for="nome">Nome Completo</label>
     <input type="text" class="form-control" id="nome" name="nome" autofocus required>
    </div>

    <div class="form-group">
     <label for="email">Email</label>
     <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
    </div>

    <div class="form-group">
     <label for="cpf">CPF</label>
     <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
    </div>

    <div class="checkbox">
     <label>
      <input type="checkbox" value="sim" name="spam" checked>
      Quero receber spam da Mirror Fashion
     </label>
    </div>
   </fieldset>
   
   <fieldset class="col-md-6">
    <legend>Cartão de crédito</legend>
    
    <div class="form-group">
      <label for="numero-cartao">Número - CVV</label>
      <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
    </div>
    <div class="form-group">
     <label for="bandeira-cartao">Bandeira</labe>
     <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
      <option value="master">Mastercard</option>
      <option value="visa">VISA</option>
      <option value="amex">American Express</option>
     </select>
    </div>

    <div class="form-group">
     <label for="validade-cartao">Validade</label>
     <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
     </div>
    </fieldset>

   <button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-thumbs-up"></span>
       Confirmar Pedido
   </button>
 </form>
 </div>
</div>

  <script src="js/validacao.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>

 </body>
</html> 
