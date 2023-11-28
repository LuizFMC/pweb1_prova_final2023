<?php
 include './header.php';
 include '../db.class.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST['id'])){
    $db->update("dieta",$_POST);
    header("location: DietaList.php");

  } else if($_POST){
    $db->insert("dieta",$_POST);
    header("location: DietaList.php");
  }

  if(!empty($_GET['id'])){
    $dieta = $db->find("dieta", $_GET['id']);
    //var_dump($dieta);
  }
?>

    <h3>Formulário dieta</h3>

    <form action="DietaForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($dieta->id) ? $dieta->id :"" ?>">
        
        <label for="nome">Nome dieta</label><br>
        <input type="text" name="nome" value="<?php echo !empty($dieta->nome) ? $dieta->nome :"" ?>"><br>

        <label for="decricao">Descrição</label><br>
        <input type="text" name="decricao" value="<?php echo !empty($dieta->decricao) ? $dieta->decricao :"" ?>"><br>

        <label for="kcal">Valor calorico total(kcal)</label><br>
        <input type="text" name="kcal"  value="<?php echo !empty($dieta->kcal) ? $dieta->kcal :"" ?>"><br>

        <button type="submit"><?php echo !empty($_GET['id']) ? "Editar" : "Salvar" ?></button>
        <a href="DietaList.php"> Voltar </a>

    </form>
<?php include "./footer.php" ?>
