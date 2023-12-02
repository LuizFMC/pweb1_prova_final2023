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

    <div class="container text-center"> <!-- Adicione a classe text-center -->
      <h1>Dicas Para Entrar no Lifestyle Fitness</h1>

      <div class="row">
          <div class="col-sm-12">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Bem-vindo à Gym Rats Academia: Sua Jornada Para um Estilo de Vida Saudável!
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                 Na Gym Rats Academia, acreditamos que a saúde é o bem mais precioso e que a chave para uma vida plena e feliz reside em manter um estilo de vida ativo e saudável. Como uma empresa dedicada a promover a saúde e o bem-estar, estamos comprometidos em ajudar você a atingir seus objetivos de condicionamento físico e nutrição.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Sobre a Gym Rats Academia
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                 Fundada com a missão de inspirar e transformar vidas, a Gym Rats Academia é mais do que apenas um local para exercícios. Somos uma comunidade apaixonada e comprometida em apoiar você em sua jornada de fitness e saúde. Nossas instalações de última geração oferecem uma variedade de equipamentos e programas de treinamento, adequados para todos os níveis de condicionamento físico. Além disso, contamos com profissionais altamente qualificados e experientes, prontos para orientar e motivar você em sua jornada.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
               Produtos e Suplementos
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
               Na Gym Rats Academia, entendemos que a nutrição desempenha um papel fundamental em alcançar seus objetivos de fitness. É por isso que oferecemos uma seleção cuidadosamente escolhida de suplementos de alta qualidade, projetados para melhorar seu desempenho, recuperação e saúde geral. Nossos produtos incluem proteínas em pó, vitaminas e minerais essenciais, bem como orientação personalizada sobre como integrar suplementos em sua dieta de forma segura e eficaz.
                  </div>
                </div>
              </div>
            </div>
       
          </div>
      </div>
  </div>
 


      

 
     <div class="container text-center"> <!-- Adicione a classe text-center -->
        <h1>Dicas Para Entrar no Lifestyle Fitness</h1>

        <div class="row">
            <div class="col-sm-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
                    <div class="col p-4 d-flex flex-column position-static">
                        <h5 class="mb-0">Defina Metas Realistas</h5>
                        <p class="card-text mb-auto">Começar uma jornada de fitness é emocionante, mas é importante estabelecer metas realistas e alcançáveis. Seja específico sobre o que deseja alcançar e divida suas metas em pequenos passos. Isso tornará mais fácil medir seu progresso e manter a motivação.</p>
                     
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative mx-auto"> <!-- Adicione a classe mx-auto para centralizar -->
                    <div class="col p-4 d-flex flex-column position-static">
                        <h5 class="mb-0">Mantenha a Consistência</h5>
                        <p class="card-text mb-auto">O segredo para o sucesso no estilo de vida fitness é a consistência. Faça do exercício e da alimentação saudável uma parte regular de sua rotina diária. Lembre-se de que cada pequeno esforço contribui para o seu bem-estar geral. A persistência é a chave dmo sucesso</p>
                        
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

        </main>

      
<?php
include "./footer.php";
?>