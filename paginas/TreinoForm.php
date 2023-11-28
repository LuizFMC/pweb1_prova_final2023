<?php
 include './header.php';
 include '../db.class.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST['id'])){
    $db->update("treino",$_POST);
    header("location: TreinoList.php");

  } else if($_POST){
    $db->insert("treino",$_POST);
    header("location: TreinoList.php");
  }

  if(!empty($_GET['id'])){
    $treino = $db->find("treino", $_GET['id']);
    //var_dump($treino);
  }
?>

    <h3>Formulário Treino</h3>

    <form action="TreinoForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($treino->id) ? $treino->id :"" ?>">
        
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" value="<?php echo !empty($treino->nome) ? $treino->nome :"" ?>"><br>

        <label for="idade">Idade</label><br>
        <input type="text" name="idade" value="<?php echo !empty($treino->idade) ? $treino->idade :"" ?>"><br>

        <label >Objetivo de Peso</label><br>
        <input class="form-check-input" type="radio" name="objetivo_peso" id="perder_peso" value="perder_peso" <?php echo ($treino->objetivo_peso == 'perder_peso') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="perder_peso">Perder Peso</label>
        <input class="form-check-input" type="radio" name="objetivo_peso" id="ganhar_peso" value="ganhar_peso" <?php echo ($treino->objetivo_peso == 'ganhar_peso') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="ganhar_peso">Ganhar Peso</label>

      <label for="exercicios">Exercícios do Treino (separe por vírgulas)</label>
      <input type="text" name="exercicio" value="<?php echo !empty($treino->idade) ? $treino->idade :"" ?>"><br>


        <button type="submit"><?php echo !empty($_GET['id']) ? "Editar" : "Salvar" ?></button>
        <a href="TreinoList.php"> Voltar </a>

    </form>
<?php include "./footer.php" ?>
