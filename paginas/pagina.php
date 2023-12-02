<?php
session_start();

// Verificar se o usuário não está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: ./LoginForm.php");
    exit();
}
 include '../db.class.php';
 include './header2.php';
//include "./paginas/cabecalho.inc.php";
//include "./paginas/menu.inc.php";
//include "./paginas/conteudo.inc.php";
?>

  <section class="container mt-5">
	 <div class="row">
      <div class="col-sm-6 col-sm-offset-1">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/WheyB.png" class="d-block w-50" alt="..." >
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/WheyC.png" class="d-block w-50" alt="..." ">
      
    </div>
    <div class="carousel-item">
      <img src="../img/WheyD.png" class="d-block w-50 h-100"  alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
      <aside class="col-sm-4">
		
			 <p>
            O Whey Protein, ou proteína do soro do leite, é um suplemento alimentar amplamente conhecido e utilizado por atletas, entusiastas da academia e pessoas que buscam melhorar sua saúde e forma física. É derivado do soro do leite, que é um subproduto da produção de queijo. Este suplemento ganhou popularidade devido aos seus inúmeros benefícios para a saúde e a capacidade de auxiliar no desenvolvimento muscular.</p>                        <p>  Embora o Whey Protein ofereça muitos benefícios para a saúde e seja uma ferramenta valiosa para atletas e entusiastas do fitness, é importante lembrar que ele não deve substituir uma dieta equilibrada e variada. O acompanhamento de um profissional de saúde ou nutricionista é recomendado para determinar a melhor estratégia de suplementação de proteína com base nas necessidades individuais.
            </p>
          
       
  
      </aside>
   </div>
  </section>
      
  <section class="container mt-5">
	 <div class="row">
      <div class="col-sm-6 col-sm-offset-1">
            <div id="carouselExampleDark2" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/CreatinaA.png" class="d-block w-50" alt="..." >
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/CreatinaB.png" class="d-block w-50" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="../img/CreatinaC.png" class="d-block w-50 h-100"  alt="...">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
      <aside class="col-sm-4">
			
			 <p>
            A creatina é um dos suplementos mais estudados e amplamente utilizados no mundo do esporte e da aptidão física. Ela é naturalmente produzida pelo corpo humano a partir dos aminoácidos arginina, glicina e metionina, principalmente no fígado, rins e pâncreas. Além disso, a creatina também é encontrada em pequenas quantidades em alimentos de origem animal, como carne e peixe.</p>
          <p>  A principal função da creatina é fornecer energia rápida para os músculos durante atividades de alta intensidade e curta duração, como levantamento de peso, sprints e esportes explosivos. Ela faz isso convertendo-se em fosfocreatina, que ajuda a regenerar o ATP (adenosina trifosfato), a principal fonte de energia celular. Isso significa que a creatina auxilia no aumento da capacidade de realizar repetições em exercícios de alta intensidade, o que pode levar a ganhos significativos de força e massa muscular.
            </p>
  
    
      </aside>
   </div>
  </section>

  <aside class="sidebar col-sm-1 d-block" style="width: 200px;">
  <div class="side-t ic-l decor col-bg-1 p-2"><span class="fa fa-dumbbell"></span>&nbsp;Gym Rats</div>
  <nav class="side-r col-bg-1 align-items-start">
    <a href="paginas/RegistrarForm.php">
      <i class="fas fa-angle-right"></i> Registrar <i class="fas fa-star"></i>
    </a>
    <a href="paginas/LoginForm.php">
      <i class="fas fa-angle-right"></i> Login <i class="fas fa-star"></i>
    </a>
    <a href="paginas/TreinoList.php">
      <i class="fas fa-angle-right"></i> Treino <i class="fas fa-star"></i>
    </a>
    <a href="paginas/ProdutoList.php">
      <i class="fas fa-angle-right"></i> Produto <i class="fas fa-star"></i>
    </a>
    <a href="paginas/DietaList.php">
      <i class="fas fa-angle-right"></i> Dieta <i class="fas fa-star"></i>
    </a>
  </nav>
</aside>
   </div>
  </section>    
      
 

        </main>

        <?php
        include "./footer.php";
        ?>