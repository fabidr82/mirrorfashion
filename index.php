<?php 
$cabecalho_title = "Bem Vindo a Mirror Fashion";
include("cabecalho.php"); ?>

	<div class="container destaque">

	<section class="busca">
		<h2>Busca</h2>

		<form action="http://www.google.com.br/search" id="form-busca">
			<input type="search" name="q" id="q">
			<input type="image" src="img/busca.png">
		</form>
	</section>

	<section class="menu-departamentos">
		<h2>Departamentos</h2>
		  
		 <nav>
		  <ul>    
		   <li>
		    <a href="#">Blusas e Camisas</a>
		   <ul>
		    <li><a href="#">Manga curta</a></i>
		    <li><a href="#">Manga comprida</a></i>
		    <li><a href="#">Camisa Social</a></i>
		    <li><a href="#">Camisa Casual</a></i>
		   </ul>
		  </li>
		    <li><a href="#">Calças</a></li>
		    <li><a href="#">Saias</a></li>
		    <li><a href="#">Vestidos</a></li>
		    <li><a href="#">Sapatos</a></li>
		    <li><a href="#">Bolsas e Carteiras</a></li>
		    <li><a href="#">Acessórios</a></li>
		   </ul>
		  </nav>
		 </section>
		 
		 <img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
		 <a href="#" class="pause"></a>
		</div>

	<!--começo de paineis com novidades -->

		<div class="container paineis">

		 <section class="painel novidades">
		  <h2>Novidades</h2>
		   <ol>
		    <?php $conexao = mysqli_connect("127.0.0.1", "root", "root", "WD43");
		    $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0,12");
		    while ($produto = mysqli_fetch_array($dados)):
		    ?>
		  			
	<li>
	 <a href="produto.php?id=<?= $produto['id'] ?>">
		<figure><img src="img/produtos/miniatura<?= $produto['id'] ?>.jpg" alt="<?= $produto['nome'] ?>">
		 <figcaption><?= $produto["nome"] ?> por <?= $produto['preco'] ?></figcaption>
		</figure>
	 </a>
	</li>
		 <?php endwhile; ?>

	 </ol>
		<button type="button">Mostra mais</button>   
		 </section>
		  
		 <section class="painel mais-vendidos">
		  <h2>Mais vendidos</h2>
		   <ol>
		    <?php $conexao = mysqli_connect("127.0.0.1", "root", "root", "WD43");
		    $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0,12");
		    while ($produto = mysqli_fetch_array($dados)):
		    ?>
		  			
	<li>
	 <a href="produto.php?id=<?= $produto['id'] ?>">
		<figure><img src="img/produtos/miniatura<?= $produto['id'] ?>.jpg" alt="<?= $produto['nome'] ?>">
		 <figcaption><?= $produto["nome"] ?> por <?= $produto['preco'] ?></figcaption>
		</figure>
	 </a>
	</li>
		 <?php endwhile; ?>
		   </ol>
			<button type="button">Mostra mais</button>
		 </section>
		</div>
		
		<script src="js/jquery.js"></script>
		<script src="js/home.js"></script>

		<?php include("rodape.php"); ?>
	</body>
</html>
