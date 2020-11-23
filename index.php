<?php 
// SWITCH -> MAIS ACONSELHADO QUE MUITOS IF'S
// $tipo = "video";
// switch ($tipo) {
//     case 'video':
//     echo "video";
//         break;
//     case "foto":
//         echo "mostrar foto";
//     break;
//     case "texto";
//     echo"mostrar texto";
// break;
// }

// WHILE 
// $numero = 0;
// while ($numero < 10) {
//     echo $numero;
//     $numero++;
// }
// echo $numero;

// FOR

// for ($i=0; $i < 10 ; $i++) { 
//     echo $i;
// }

// FOREACH -> TRABALHAR COM ARRAYS

// $ingredientes =[
//     "açucar",
//     "fermento em pó",
//     "farinha",
//     "leite"
// ];

// foreach ($ingredientes as $chave => $ingrediente) {
//     echo "item: ".$chave. $ingrediente."<br>";
// }

// FUNÇÃO DEFINIÇÃO NORMAL

// function somar( $n1 , $n2 ){
//     $total = $n1 + $n2;
//     return $total;
// }

// $soma = somar(5,10);
// echo $soma;

// FUNÇÃO COM TYPE E VALOR PADRÃO

// function somar( int $n1, int $n2, int $n3 = 0){ // DEFINE VALOR PADRAO, CASO NAO SEJA DEFINIDO, SERÁ ESSE VALOR E NAO DA ERRO, E DEFINE O TIPO QUE PODE SER RECEBIDO 
//     $total = $n1 + $n2 + $n3;
//     return $total;
// }

// $x = somar(1,3);
// $y = somar(5,3,2);
// $w = somar($x, $y);
// echo $w;

// PASSAR PARAMETROS COMO REFERENCIA E COMO VALOR

// function somar($n1,$n2){
//     $total = $n1 + $n2;
//     return $total;
// }

// $x = 3;
// $y = 2;
// $soma = somar($x,$y); //PARAMETRO POR VALOR
// echo $soma;

// PASSAR PARAMETRO POR REFERENCIA -> PASSA A PRÓPRIA VARIÁVEL COMO PARAMETRO E O QUE RETORNA DA FUNÇÃO, APARECE AGORA FORA

// function somar($n1,$n2, &$total){ // RECEBE COMO REFERENCIA // AGORA HÁ ALTERAÇÕES FORA DA FUNÇÃO // UM EXEMPLO DISSO É A FUNCAO SORT()
//     $total = $n1 + $n2;
//     return $total;
// }

// $x = 3;
// $y = 2;
// $soma = 1;
// somar($x,$y, $soma); 
// echo $soma;


// FUNÇÕES ANONIMAS -> DUAS FORMAS: PASSAR ARMAZENANDO EM UMA VARIÁVEL, OU COMO PARAMETRO PRA UMA OUTRA FUNÇÃO

// $dizimo = function( int $valor){
//     return $valor * 0.1;
// };

// echo $dizimo(90); // CHAMA A FUNÇÃO COLOCANDO A VARIAVEL E O VALOR DENTRO

// $funcao = $dizimo;// POSSO PASSAR A FUNÇÃO PRA QUALQUER OUTRO LUGAR

// ARROW FUNCTION -> 7.4 PRA FRENTE


// $dizimo = fn($valor) =>  $valor * 0.1;  // SÓ PODE TER UM COMANDO SENDO EXECUTADO DENTRO DELA
// echo $dizimo(200);


// FUNÇÕES RECURSIVAS -> FUNÇÃO QUE EXECUTA ELA MESMA

// function dividir($numero){
//     $metade = $numero / 2;
//     echo $metade ."<br>";

//     if(round($metade) > 0){ // ROUND ARREDONDA O NUMERO
//             dividir($metade);
//     }
// }

// dividir(100);


// FUNÇÕES NATIVAS DE MATEMÁTICA

// VALOR ABSOLUTO
// $numero = -8.4;
// echo abs($numero);

// PI
// echo pi();

// ARREDONDAMENTO
// $numero = 2.7;
// ARREDONDAR PRA BAIXO
// echo floor($numero);
//ARREDONDAR PRA CIMA
// echo ceil($numero);
//ARREDONDAR PRO MAIS PRÓXIMO
// echo round($numero, 2); // CASAS DECIMAIS PARA O ARREDONDAMENTO

// NUMERO ALEATÓRIO

// $aleatorio = rand(2,9) // Valor minimo, valor maximo;
 
// MAIOR NÚMERO DA LISTA
// $lista = [1,3,9,5];
// echo max($lista);
// MENOR NÚMERO DA LISTA
// echo min($lista);


// FUNÇÕES NATIVAS DE STRING
// "LIMPAR/ CORRIGIR" STRING
// $nome = "        lucas  faria  ";
// $nomeLimpo = trim($nome);

// CONTAR QUANTOS CARACTERES TEM A STRING

// echo strlen($nomeSujo);
// echo strlen($nomeLimpo);

// DEIXAR TUDO MAIUSCULO OU MINUSCULO

// echo strtolower($nome);
// echo strtoupper($nome);

// SUBSTITUIR ALGO NA STRING

// $nomeAlterado = str_replace("Faria", "Miranda", $nome); // O QUE É PRA MUDAR, O QUE VAI SER COLOCADO, A PRÓPRIA STRING
// echo $nomeAlterado;


//PEGAR UMA PARTE DA STRING

// $nomeCompleto = "Lucas Faria";
// $nome = substr($nomeCompleto,0,5);// A STRING,  ONDE COMEÇA A PEGAR (SE FOR NEGATIVO, COMEÇA DE TRÁS PRA FRENTE),  QUANTIDADE QUE QUERO PEGAR //


// PROCURA DETERMINADA COISA EM UMA STRING E RETORNA A POSIÇÃO

// $nomeCompleto = "Lucas Faria";
// $posicao = strpos($nomeCompleto,"z");
// if ($posicao > -1){ // SE NÃO TIVER, A POSIÇÃO É -1
//     echo "Achou";
// }else {
//     echo "Não achou";
// }
// echo $posicao; // A STRING, O QUE EU PROCURO


// TRANSFORMAR SÓ A PRIMEIRA LETRA EM MAIUSCULA
// $nome = "lucas faria";
// echo ucfirst($nome);
//TODAS AS PRIMEIRAS LETRAS A CADA PALAVRA
// echo ucwords($nome);


// TRANSFORMAR STRING EM ARRAY -> CADA PALAVRA VIRA UM ITEM DE ARRAY

// $nomeCompleto = "Lucas Faria Miranda";
// $nomes = explode(" ",$nomeCompleto); // O QUE EU VOU USAR PRA SER O DIVISOR DE CADA ITEM ,  A PRÓPRIA STRING USADA
// print_r($nomes); // VIRA UM ARRAY

// FORMATAR NÚMEROS
// $numero = 12381.12;
// echo "R$: ". number_format($numero, 2, ",", "."); // O PRPRIO NUMERO, NUMERO DE DECIMAIS, O SIMBOLO CORRESPONDENTE A CASA DE DECIMAIS(OPCIONAL) , O SIMBOLO CORRESPONDENTE A CASA DOS MILHARES (OPCIONAL)


// FUNÇÕES NATIVAS DE ARRAY

// $lista = ["Nome 1", "nome 2", "nome 3", "nome 4"];

//QUANTIDADE DE ITENS NO ARRAY
// echo count($lista);

// COMPARAR E MOSTRAR O QUE TEM EM UM ARRAY E NAO TEM EM OUTRO

// $lista = ["Lucas", 'Pedro', "Paulo", "José"];
// $aprovados = ["Lucas", "Pedro", "José"];

// $reprovados = array_diff($lista, $aprovados); // A PRIMEIRA LISTA, A QUAL EU QUERO COMPARAR

// FILTRAR ARRAY 
// $numeros = [10,21,15,91,18];

// $filtrados = array_filter($numeros, function($item){ // O PRÓPRIO ARRAY, A FUNÇÃO QUE VAI EXECUTAR    ---/ ---  VAI VERIFICAR ITEM POR ITEM E  DEVE RETORNAR TRUE OU FALSE
//     if ($item < 30){
//         return true;
//     }else {
//         return false;
//     }
// });
// print_r($filtrados);// GERA UM ARRAY NOVO FILTRADO

// LOCALIZA E EXECUTA ALGUMA COISA NO ARRAY

// $dobrados = array_map(function($item){ // A FUNÇÃO A SER EXECUTADA ,  O ARRAY QUE EU QUERO  // VAI RODAR A FUNÇÃO EM CADA ITEM
//      return $item * 2;
// }, $numeros);

// print_r($dobrados); // NOVO ARRAY


// REMOVER O ULTIMO ITEM DO ARRAY
// array_pop($numeros);//RECEBE PARAMETRO POR REFERENCIA E NAO PRECISA SER ARMAZENADO EM VARIAVEL
// print_r($numeros);
// REMOVE O PRIMEIRO ITEM DO ARRAY
// array_shift($numeros);
// print_r($numeros);

// BUSCAR ALGO EM UM ARRAY E VER SE TEM

// if(in_array(91,$numeros)){ // O QUE EU PROCURO,  O ARRAY ONDE VOU BUSCAR  // GERALMENTE USADO DENTRO DE UM IF
    // echo "Existe"; // vai no array e verifica se existe
// } else {
//     echo "Não existe";
// }

// BUSCA ALGO NO ARRAY, VERIFICA SE TEM E RETORNA EM QUAL POSIÇÃO DO ARRAY O ITEM ESTÁ

// $posicao = array_search(91, $numeros);  // O QUE EU QUERO , O ARRAY QUE VOU BUSCAR
// echo $posicao;

// ORDENAR OS ITENS DO ARRAY
//ORDEM CRESCENTE
// sort($numeros);
// print_r($numeros);
//ORDEM DESCRESCENTE
// rsort($numeros);
// print_r($numeros);
// ORDENAR O ARRAY MANTENDO O NUMERO DA CHAVE DE CADA ITEM NO ARRAY
// asort($numeros);
// arsort($numeros);
// print_r($numeros);


// TRANSFORMAR O ARRAY EM STRING

// $nome = ["Lucas", "Faria", "Miranda"];
// $nome = implode(" ",$nome); // O QUE VAI JUNTAR OS ITENS ( A "COLA") PARA TRANFORMAR EM STRING , O ARRAY USADO



// FUNÇÕES NATIVAS DE DATA E HORA
// TEMPO EM ms desde a data 0
// echo time();
// MAIS USADA
// echo date("d/m/Y H:i:s"); // FORMATO QUE VOCE QUER UTILIZAR ---/---  PODE SEPARAR DO JEITO QUE QUISER

// PADRAO INTERNACIONAL DE DATA (SEMPRE SERÁ SALVA DESSA FORMA) (GERALMENTE EM SISTEMAS / BANCO DE DADOS )
// echo date("Y-m-d")

// FORMATAR DATA

// $data = "2020-03-07";
// $time = strtotime($data);
// echo date("d/m/Y", $time); // O SEGUNDO PARAMETRO DEFINE A QUANTIDADE DE TIME QUE EU QUERO

//MODO SIMPLIFICADO
// $data = "2020-03-07";
// echo date("d/m/Y", strtotime($data));



// REQUISIÇÕES HTTP

// GET -> ENVIA E APARECE O ENVIADO NA URL
// POST -> ENVIA INTERNAMENTE,  NÃO APARECE NA URL, INDICADO QUANTO TEM SENHAS,ETC
// ACTION NO FORM -> INDICA O LOCAL PARA ONDE DEVO MANDAR O FORMULARIO (QUANDO NAO DEFINIDO, ENVIA PRO PRÓPRIO ARQUIVO)




















































































// session_start(); // TODAS AS PAGINAS QUE PRECISAREM TER UMA SESSÃO PRECISAM TER ISSO

// if (isset($_COOKIE["nome"])) { // VERIFICA SE ESTÁ SETADA ESSA VARIÁVEL
//     $nome = $_COOKIE["nome"];
//     echo "<h2>".$nome."</h3>";
// }

// if($_SESSION["aviso"]) {
//     echo $_SESSION["aviso"];
//     $_SESSION["aviso"] = ""; // ZERAR PARA APARECER APENAS UMA VEZ E NAO APARECER TODA HORA
// };





// LER ARQUIVOS EXTERNOS PHP

// $texto = file_get_contents("texto.txt"); // PEGA O ARQUIVO
// $texto =explode("\n",$texto);
// echo "linhas".count($texto);


// COMO ESCREVER EM ARQUIVOS EXTERNOS

// $texto = "Lucas Faria";

// file_put_contents("nome.txt",$texto);// NOME DO ARQUIVO ,  CONTEUDO     SE O ARQUIVO NAO EXISTIR, ELE CRIA, SE NÃO EXISTIR, ELE SUBSTITUI
// echo "Arquivo criado com sucesso";

// $texto = file_get_contents("texto.txt");
// $texto .= "\nLucas Faria"; // .= ADICIONA MAIS ALGUMA COISA PARA A VARIÁVEL AO INVÉS DE SUBSTITUIR O ANTIGO VALOR
// file_put_contents("texto.txt",$texto); // ESCREVE NO ARQUIVO ANTERIOR  // VARIAVEL ONDE TA O ARQUIVO
?>
<!-- <form>
<input type="text" name="nome">
<input type="submit" value="enviar">
</form> -->



<?php

// $nome = filter_input(INPUT_GET,"nome");
// if ($nome){
// $lista = file_get_contents("nome.txt");
// $lista .= "<li>".$nome."</li>";
// file_put_contents("nome.txt",$lista,);

// header("Location: index.php");
// echo $lista;
// exit;
// }else{
// }


// $lista = file_get_contents("nome.txt");
// echo $lista;






?>
<!-- <form>
<input type="text" name="nome">
<input type="submit" value="Cadastrar">
</form> -->

<?php

// $nome = filter_input(INPUT_GET,"nome");

// if (!empty($nome)) {
//     $lista = file_get_contents("sort.txt");
//     $lista .= $nome;
//     $lista .=",";
//     file_put_contents("sort.txt",$lista);
//     header("Location: index.php");
//     exit;
// }else {
// };
// $lista = file_get_contents("sort.txt");
// echo $lista;
?>


<!-- <form action="../projetoSorteio/sorteio.php">
<input type="submit" value="Sortear">
</form> -->








<?php



// DELETAR AQUIVO PELO PHP

// unlink("lista.txt");
// echo "Arquivo excluido com sucesso";


// MOVER ARQUIVOS E RENOMEAR

//RENOMEAR

// rename("teste.txt", "teste2.txt"); // CAMINHO ATÉ O ARQUIVO , O NOVO NOME  -> PARA MOVER EU USO O NOME,  E O LUGAR PRA ONDE VAI

//COPIAR

// copy("teste2.txt", "teste.txt"); // ARQUIVO QUE QUERO COPIAR , A CÓPIA QUE VOU FAZER



// FAZER UPLOAD DE ARQUIVOS




// ORIENTAÇÃO A OBJETOS 


// DEFININDO CLASSES E OBJETOS

// CLASSE -> DEFINE AS PROPRIEDADES DO OBJETO E PLANEJA

// class Post {  // classe nao se executa
//     public int $likes = 0;
//     public  array$comments = []; //  PUBLIC --- >   CONSIGO ACESSAR DE FORA
//     public  string $author; 
//      public function __contruct()
//     public function aumentarLike(){
//         $this->likes++;          //  THIS REFERENCIA O PRÓPRIO ITEM QUE EU ACESSAR
//     } 
                       
// }

// OBJETO 
// Usa new pra criar

// $post1 = new Post();
// $post1->aumentarLike();
// $post1->aumentarLike();

// $post2 = new Post();
// $post2->likes = 10;

// echo $post1->likes;


// METODOS E PROPRIEDADES

// PROPRIEDADES
// Caracteristicas que uma classe vai ter e que por consequencia o objeto quando criado tbm terá

// PUBLIC, PROTECTED, PRIVATE  -> PROTECTED E PRIVATE NÃO DÃO ACESSO AO EXTERIOR


// MÉTODOS  -> COISAS QUE SERÃO EXECUTADAS
// listado na classe acima


// TYPED PROPERTIES - >  7.4
// Proteger as propriedades das suas classes pra receber só um tipo de informação
// COLOCAR UM int, string (se colocar um numero e estiver como string, o php entende), array,  ou algo do tipo dps do public


// METODO CONTRUTOR
// A CLASSE PODE VIM COM ALGUNS METODOS PRÉ - DEFINIDOS ENTRE ELES:

//CONSTRUTOR
// É UM METODO QUE EXECUTA TODO VEZ QUE VOCÊ CRIA UM OBJETO NOVO
// PODE SER USADO PRA DEFINIR AS PROPRIEDADES INICIAIS DO OBJETO

// class Post {
//     public int $likes = 0;
//     public array $comments = [];
//     private string $author;

//     public function __construct($qtLikes){
//         $this->likes = $qtLikes;
//     }

//     public function aumentarLike(){
//         echo "abc";
//         $this->likes++;
//     }

//     public function setAuthor($n){
//         $this->author = $n;
//     }

//     public function getAuthor(){
//         return $this->author;
//     }

// }

// $post1 = new Post(25); // POSSO PASSAR PARAMETROS AQUI E RECEBER NO CONSTRUCT

// $post1->author = "Lucas"; // JEITO ERRADO
// $post1->setAuthor("Lucas");

// echo $post1->likes;
// echo $post1->author;  // ERRADO
// echo $post1->getAuthor();



// ENCAPSULAMENTO
// PROTEGER AS PROPRIEDADES DE ACESSOS EXTERNOS OU MODIFICAÇÕES
// SEMPRE CRIAR UM METODO SET E UM METODO GET PRA CADA PROPRIEDADE
// COLOCAR A FUNÇÃO PRINCIPAL COMO PRIVATE -> COMO O AUTHOR NO EXEMPLO



// class User{
//     private $name;

//     public function getName(){
//         return $this->name;
//     }

//     public function setName($Name){
//         $this->name = filter_var($Name, FILTER_SANITIZE_STRIPPED);
//     }


// }

// $Name = "Lucas12-12md12-----%";
// var_dump($Name);


// class Livro {
//     private $preco;

//     function setPreco($preco){
//         $this->preco = $preco;
//     }

//     function getName(){
//         return "O PREÇO É {$this->preco}";
//     }
// }

// $produto = new Livro;
// $produto->setPreco(49.90);
// echo $produto->getName();




//     function __construct($preco, $nome)
//     {
//          $this->preco = $preco;
//          $this->nome =  $nome;
//     }
// }

// $livro = new Livro(39, "Nome do livro");
// var_dump($livro);

// interface Objeto{
//     public function getArea($base,$altura);

//     public function getTipo();
// }



// class Quadrado implements Objeto {

//     private $base;
//     private $altura;
//     public function getTipo()
//     {
//         echo "Quadrado";
//     }

//     public function getArea($base,$altura)
//     {
//         $this->base = $base;
//         $this->altura = $altura;
//         return $this->base * $this->altura;
//     }
// }

// $meuQuadrado = new Quadrado;
// echo $meuQuadrado->getArea(8,8);
// echo $meuQuadrado->getTipo();

// require "vender/autoload.php";

// Mais usada forma de conectar ao banco de dados é o PDO
// É UMA CLASSE QUE VC VAI INSTANCIAR

$pdo = new PDO("mysql:dbname=test;host=localhost","root",""); // PRIMEIRO PARAMETRO COM NOME  E LOCAL, USUARIO , SENHA
$sql = $pdo->query("SELECT * FROM usuarios"); // CONSULTA AO DB
echo "TOTAL: ".$sql->rowCount();// MOSTRA NUMERO DE LINHAS OU REGISTROS
$dados = $sql->fetchAll(PDO::FETCH_ASSOC); // PEGA TUDO, constante que faz a associação do PDO
echo "<pre>";
print_r($dados);





































