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
   
   <img src="img/destaque-home.png" alt="Promoção: Big City Night">
   <a href="#" class="pause"></a>
  </div>

<!--começo de paineis com novidades -->

  <div class="container paineis">

   <section class="painel novidades">
    <h2>Novidades</h2>
     <ol>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura1.png">
          <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura2.png">
          <figcaption>Camiseta Skull por R$ 100,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura3.png">
          <figcaption>Fuzz Cardigan por R$ 85,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura4.png">
          <figcaption>Jaco por R$ 150,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura5.png">
          <figcaption>Fit por R$ 129,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura6.png">
          <figcaption>Camiseta Descol por R$ 85,90</figcaption>
         </figure>
       </a>
      </li>
     </ol>
   </section>
    
   <section class="painel mais-vendidos">
    <h2>Mais vendidos</h2>
     <ol>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura7.png">
          <figcaption>Camisun por R$ 129,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura8.png">
          <figcaption>Camiseta Basica por R$ 100,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura9.png">
          <figcaption>Camiseta Grunge por R$ 85,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura10.png">
          <figcaption>Basics por R$ 150,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura14.png">
          <figcaption>Super Camisu por R$ 129,90</figcaption>
         </figure>
       </a>
      </li>
      <li>
       <a href="produto.html">
         <figure>
          <img src="img/produtos/miniatura15.png">
          <figcaption>Vestido Fru por R$ 85,90</figcaption>
         </figure>
       </a>
      </li>    
     </ol>
   </section>
  </div>

  <script src="js/home.js"></script>

  <?php include("rodape.php"); ?>
  </body>
</html>
