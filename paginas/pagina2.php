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

  <br> <br>

  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <h5 class="card-title"> Regatas de Academia </h5>
        <p class="card-text">Nossas regatas de academia são perfeitas para quem busca conforto e estilo durante os
          treinos. Feitas com tecido de altíssima qualidade, elas proporcionam uma incrível sensação de leveza e
          suavidade sobre a sua pele. Com um design unico, moderno e ajuste perfeito, estas regatas são ideais para
          qualquer atividade física, desde musculação até ioga. Mantenha-se fresco, mostre seu shape secado para o
          pessoal e fique cheio de estilo enquanto você conquista seus objetivos no mundo fitness.</p>

      </div>
      <div class="col">
        <h5 class="card-title">Munhequeira de Academia</h5>
        <p class="card-text">As munhequeiras de academia são um acessório essencial para proteger seus pulsos durante os
          treinos intensos. Fabricadas com materiais duráveis e resistentes, nossas munhequeiras oferecem suporte extra,
          ajudando a prevenir lesões e garantindo que você possa manter seu desempenho em alta. Com um ajuste
          confortável e fácil de colocar, elas são ideais para levantamento de peso, exercícios com halteres e muito
          mais. Mantenha seus pulsos protegidos e concentre-se no que realmente importa: seus resultados.</p>

      </div>
      <div class="col">
        <h5 class="card-title">Calção de Academia</h5>
        <p class="card-text">Nossos calções de academia são projetados para proporcionar liberdade de movimento e
          conforto durante seus treinos mais intensos. Feitos com tecido de alta qualidade, eles são leves, respiráveis
          e secam rapidamente. Com um corte moderno e uma cintura elástica ajustável, esses calções se adaptam ao seu
          corpo, permitindo que você se mova com facilidade em qualquer atividade física. Desde corridas até
          treinamentos de resistência, você estará sempre no seu melhor com nossos calções de academia.</p>

      </div>
    </div>
  </div>
  <br><br><br>

  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <img style="margin-left: 70px;" src="../img/Munhequeira1.jpg"
          class="d-block w-50 h-50" alt="...">
      <br><br>
      <h5 class=" text-left">Munhequeira de pulso azul</h5>
      </div>
      <div class="col">
        <img style="margin-left: 70px;"
          src="../img/Munhequeira2.jpg"
          class="d-block w-50 h-50" alt="..." ">
      <h5 class=" text-left">Faixa strap com munhequeira </h5>
      </div>

      <div class="col">
        <img style="margin-left: 70px;"
          src="../img/Munhequeira3.jpg"
          class="d-block w-50 h-50" alt="..." ">
       <h5 class=" text-left">Faixa strap com munhequeira </h5>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        <img style="margin-left: 80px;" src="../img/Camisa1.jpg" class="d-block w-50"
          alt="..." ">
       <h5 class=" text-left">Regata cravada Black Skull </h5>
      </div>
      <div class="col">
        <img style="margin-left: 90px;" src="../img/Camisa2.jpg" class="d-block w-50"
          alt="..." ">
      <h5 class=" text-left">Regata Hardcore </h5>
      </div>
      <div class="col">
        <img style="margin-left: 85px;" src="../img/Camisa3.jpg" class="d-block w-50" alt="..." ">
    <br>
      <h5 class=" text-left">Regata Growth </h5>
      </div>
    </div>
  </div>
  <div class="container text-center">
    <div class="row align-items-start">
      
      <div class="col text-left">
        <img style="margin-left: 90px;"
          src="../img/calcao1.jpg"
          class="d-block w-50" alt="...">
       <h5 class="text-left">Bermuda Growth</h5>
    </div>  
    <div class=" col text-left">
        <img style="margin-left: 90px;"
          src="../img/calcao2.jpg"
          class="d-block w-50" alt="..." ">  <br>  <br>
      <h5 >Shorts academia Nike </h5>
    </div>
    <div class=" col text-left">
        <img style="margin-left: 90px;" src="../img/calcao3.jpg" class="d-block w-50"
          alt="...">
        <br>  <br>
        <h5 >Bermuda Black Skull </h5>
    </div>
  </div>
</div>

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