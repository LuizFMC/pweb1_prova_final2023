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
            $db->destroy("treino",$_GET['id']);
          
            header('location: TreinoList.php');
        }

        if(!empty($_POST)){
           // var_dump($_POST);
           // exit;
           $dados = $db->search("treino",$_POST);
        } else {
           $dados = $db->select("treino");
           
        }

    ?>

    <div>
        <h3>Listagem de treinos</h3>

        <form action="TreinoList.php" method="post">
            <select name="tipo">
                <option value="nome">Nome</option>
                <option value="idade">Idade</option>
                <option value="objetivo_peso">Objetivo de peso</option>
                <option value="exercicio">Exercícios do Treino (separe por vírgulas)</option>
            </select>
            <input type="text" name="valor" />
            <button type="submit">Buscar</button>
            <a href="TreinoForm.php"> Cadastrar </a>
        </form>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Objetivo de Peso</th>
      <th scope="col">Exercícios do Treino (separe por vírgulas)</th>
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
            echo "<td>$item->idade</td>";
            echo "<td>$item->objetivo_peso</td>";
            echo "<td>$item->exercicio</td>";
            echo "<td><a href='TreinoForm.php?id=$item->id'>Editar</a></td>";
            echo "<td><a onclick='return confirm(\"Deseja Excluir?\")'
                    href='TreinoList.php?id=$item->id'>Deletar</a>
                  </td>";
            echo "</tr>";   
        }
    ?>
  </tbody>
</table>

<?php include "./footer.php" ?>