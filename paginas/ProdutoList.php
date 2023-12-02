<?php
 include './header2.php';
 include '../db.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $db = new DB();
        $db->conn();

        if(!empty($_GET['id'])){
            $db->destroy("produto",$_GET['id']);
          
            header('location: ProdutoList.php');
        }

        if(!empty($_POST)){
           // var_dump($_POST);
           // exit;
           $dados = $db->search("produto",$_POST);
        } else {
           $dados = $db->select("produto");
           
        }

    ?>

    <div>
        <h3>Listagem de produtos</h3>

        <form action="ProdutoList.php" method="post">
            <select name="tipo">
                <option value="nome">Nome</option>
                <option value="codigo">Codigo</option>
                <option value="quantidade">Quantidade</option>
            </select>
            <input type="text" name="valor" />
            <button type="submit">Buscar</button>
            <a href="ProdutoForm.php"> Cadastrar </a>
        </form>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Codigo</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Ação</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $item){
            echo "<tr>";
            echo "<th scope='row'>$item->id</th>";
            echo "<td>$item->nome</td>";
            echo "<td>$item->codigo</td>";
            echo "<td>$item->quantidade</td>";
            echo "<td><a href='ProdutoForm.php?id=$item->id'>Editar</a></td>";
            echo "<td><a onclick='return confirm(\"Deseja Excluir?\")'
                    href='ProdutoList.php?id=$item->id'>Deletar</a>
                  </td>";
            echo "</tr>";   
        }
    ?>
  </tbody>
</table>

<?php include "./footer.php" ?>