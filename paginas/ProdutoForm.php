<?php
 include './header.php';
 include '../db.class.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if(!empty($_POST['id'])){
    $db->update("produto",$_POST);
    header("location: ProdutoList.php");

  } else if($_POST){
    $db->insert("produto",$_POST);
    header("location: ProdutoList.php");
  }

  if(!empty($_GET['id'])){
    $produto = $db->find("produto", $_GET['id']);
    //var_dump($produto);
  }
?>

    <h3>Formulário Produto</h3>

    <form action="ProdutoForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($produto->id) ? $produto->id :"" ?>">
        
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" value="<?php echo !empty($produto->nome) ? $produto->nome :"" ?>"><br>

        <label for="codigo">Codigo</label><br>
        <input type="text" name="codigo" value="<?php echo !empty($produto->codigo) ? $produto->codigo :"" ?>"><br>

        <label for="quantidade">Quantidade</label><br>
        <input type="text" name="quantidade"  value="<?php echo !empty($produto->quantidade) ? $produto->quantidade :"" ?>"><br>

        <button type="submit"><?php echo !empty($_GET['id']) ? "Editar" : "Salvar" ?></button>
        <a href="ProdutoList.php"> Voltar </a>

    </form>
<?php include "./footer.php" ?>
