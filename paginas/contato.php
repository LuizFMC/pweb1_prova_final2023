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

<!-- end header inner -->
<!-- end header -->
<div class="back_re">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Entre em contato conosco!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="request" class="main_form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus" placeholder="Nome" type="type" name="Nome">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Email " type="type" name="Email ">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Número de telefone" type="type" name="Número de telefone">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Mensagem" type="type" Message="Name">Mensagem</textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="100%" height="386" frameborder="0" style="border:0;"></iframe>
                </div>
            </div>
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
<?php
include "./footer.php";
?>