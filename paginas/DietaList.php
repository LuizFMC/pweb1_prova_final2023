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
            $db->destroy("dieta",$_GET['id']);
          
            header('location: DietaList.php');
        }

        if(!empty($_POST)){
           // var_dump($_POST);
           // exit;
           $dados = $db->search("dieta",$_POST);
        } else {
           $dados = $db->select("dieta");
           
        }

    ?>

    <div>
        <h3>Listagem de dietas</h3>

        <form action="DietaList.php" method="post">
            <select name="tipo">
                <option value="nome">Nome aluno</option>
                <option value="decricao">Descrição</option>
                <option value="kcal">Valor calórico total(kcal)</option>
            </select>
            <input type="text" name="valor" />
            <button type="submit">Buscar</button>
            <a href="DietaForm.php"> Cadastrar </a>
        </form>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome aluno</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor calórico total(kcal)</th>
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
            echo "<td>$item->decricao</td>";
            echo "<td>$item->kcal</td>";
            echo "<td><a href='DietaForm.php?id=$item->id'>Editar</a></td>";
            echo "<td><a onclick='return confirm(\"Deseja Excluir?\")'
                    href='DietaList.php?id=$item->id'>Deletar</a>
                  </td>";
            echo "</tr>";   
        }
    ?>
  </tbody>
</table>

<?php include "./footer.php" ?>