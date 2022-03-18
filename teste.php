<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <h1>Testando</h1>
  <!--
<form action="teste.php" method="POST">
  Numero
  <input type="number" name="num">
  <fieldset><legend>operação</legend>
  <input type="radio" name="oper" id="dobro" value="1">
  <label for="dobro">Dobro</label>
  <input type="radio" name="oper" id="cubo" value="2">
  <label for="cubo">Cubo</label>
  <input type="radio" name="oper" id="raiz" value="3">
  <label for="raiz">raiz quadrada</label>
</fieldset>
  <input type="submit" value="calcular">
</form>
-->
    <?php


    /*como somar numeros
$n1 = 14;
$n2 = 24;
$n3 = $n1 + $n2;
echo 'Resultado: '. $n3;
*/

/* estrutura de repetiçao/condicionais
$a = 3;
$b = 11;

if ($a > $b){
  echo 'a é maior que b';
}elseif ($a < $b){
  echo 'a é menor que b';
}
  */

/* estrutura de repetição/condicionais com nota de alunos divido por 4
$nota1 = 9;
$nota2 = 8;
$nota3 = 4;
$resultado = ($nota1 + $nota2 + $nota3) /4;
 if ($resultado >= 5){
   echo 'Steven foi aprovado: '. $resultado;
 }elseif ($resultado < 5){
   echo 'Steven foi reprovado: '. $resultado;
 }
*/

    /* A estrutura de controle de fluxo
$i = 1;
while ($i <= 10){
  echo $i ++;
}
   */
/*
  do{
    echo 'contador é: ';
    $i++;
  } while ( $i <= 10);
  */

  /* lista de variaveis com array
  $info = array('cafe', 'marrom', 'cafeina');
  list($bebida, $cor, $substancia) = $info;
  echo "Minha Bebida é: $bebida tem cor $cor com substancia de $substancia";
  */

  /* definindo constante
define("primeiro", "hello world");
echo primeiro;
echo '<br>';

const segundo = 'hello world';
echo segundo;
*/


/* if/else simplificado
$nota1 = 9;
$nota2 = 8;
$nota3 = 3;
$resultado = $nota1 + $nota2 + $nota3;
$notafinal = $resultado /4;
echo $resultado <= 5 ? 'Aprovado: ' .$notafinal : 'Reprovado: ' .$notafinal;
*/

/* estreutura de repetição similar ao if/else
switch ($cor) {
  case "vermelho":
    echo "Cor vermelha";
    break;

    case "verde":
      echo 'Cor verde';
      break;

      case "preto":
        echo "Cor preto";
        break;

        default: 
        echo "não existe cor";
      }
      */ 

      /* estreutura de repetição similar ao if/else
      switch ($i) {
        case 0:
            echo "i é igual a 0";
            break;
        case 1:
            echo "i é igual a 1";
            break;
        case 2:
            echo "i é igual a 2";
            break;
        default:
           echo "i não é igual a 0, 1 ou 2";
    }
    */

/* for é equivalnte ao while / do while
for ($contador = 0; $contador <=10; $contador++){
echo "Resultado: $contador <br>" ;
}
*/

/* teste do server
require_once 'DBconec.php';
if (isset($_POST['enviar']));
$erros = array ();
$login = mysqli_escape_string($connect, $_POST["login"]);
$senha = mysqli_escape_string($connect, $_POST["senha"]);
if(empty($login) or empty($senha));
  $erros[] = "<li> preencha tudo </li>";
*/

/* retorna o menor numero e maior numero
$lista = array (0, 150, 30, 20, -8, -200, -6.7);
echo (min($lista))."<br>";
echo (max($lista));
*/

/* gera numeros aleatorios
echo (rand(1, 100));
*/


/* A switchinstrução é usada para executar diferentes ações com base em diferentes condições
$cor = 'preto';
switch ($cor) {
case 'red':
echo 'sua cor é vermelho';
break;
case 'blue':
echo 'sua cor é azul';
break;
case 'green':
echo 'sua cor é verde';
break;
default:
echo 'sua cor não existe';
}
*/

/* como usar super globals
$n1 = 23;
$n2 = 40;
function calcular(){
  $GLOBALS['n3'] = $GLOBALS['n1'] *  $GLOBALS['n2'];
}
calcular();
echo "Resultado da divisão: $n3";
*/

/*
$a = 2;
$b = 4;

function soma(){
$GLOBALS ['s'] = $GLOBALS['a'] + $GLOBALS['b'];

}
 soma();
 echo $s;
*/
 ?>
</body>
</html>