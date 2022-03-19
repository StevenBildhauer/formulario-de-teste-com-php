<?php
session_status();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="formulario.php" method="POST">
        
        Nome: <input type="text" type="text" name="nome">
        <br>
        idade: <input type="number" type="number" name="idade">
         <br>
         <input type="submit">
    </form>

<?php
session_status();

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)){
  $_SESSION['erro'] =  'preencha todos os campos';
  return;
}

if (strlen($nome <= 15)){
  echo 'Minino 15 caracteres';
  return;
}

if (!filter_var($idade, FILTER_VALIDATE_INT)){
return;
}

if ($idade >= 0 && $idade <= 6){
echo "<h1>Fora da categoria</h1>";
}

elseif ($idade >= 6 && $idade <= 12){
    echo "<h1>Categoria: infantil <br> Nome: $nome <br> Idade: $idade anos</h1>";;
}

elseif ($idade >= 13 && $idade <= 17){
     echo "<h1>Categoria: Adolescente <br> Nome: $nome <br> Idade: $idade anos</h1>";
}

elseif ($idade >= 18 && $idade <= 24){
    echo "<h1>Categoria: Jovem adulto <br> Nome: $nome <br> Idade: $idade anos</h1>";
}
elseif ($idade >= 25 && $idade <= 40){
    echo "<h1>Categoria: Adulto <br> Nome: $nome <br> Idade: $idade anos</h1>";
}
elseif ($idade >= 40 && $idade <= 55){
    echo "<h1>Categoria: Meia idade <br> Nome: $nome <br> Idade: $idade anos</h1>";
}

else{
    echo "<h1>Categoria: Idoso <br> Nome: $nome <br> Idade: $idade anos</h1>";
}

?>
</body>
</html>


