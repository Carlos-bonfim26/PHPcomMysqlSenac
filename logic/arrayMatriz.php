<?php 

$bigSix = ["Liverpol", "Manchester United", "Manchester City", "Chelsea", "Arsenal", "Tottenham"];

$numAleatorios = [7, 2, 6, 224, 2, 75, 9, 10, -1];

echo count($bigSix) ."";
$bigSix = array_reverse($bigSix);

foreach($bigSix as $clube ){
    // echo "<p> {$clube}</P>";
}

asort( $bigSix ) ;
foreach($bigSix as $clube ){
    echo "<p> {$clube}</P>";
}


//ordena em ordem crescente
asort($numAleatorios);

foreach($numAleatorios as $numero){
    // echo "<p> {$numero} </p>";
}
//ordena em ordem descrescente
arsort($numAleatorios);

foreach($numAleatorios as $numero){
    // echo "<p> {$numero} </p>";
}

//array associativo e matriz
$pessoas = [
    [
    "nome" => "Carlos", 
    "idade" => 19,
    "profissao" => "Estudante"
    ],
    [
    "nome" => "Ana", 
    "idade" => 19,
    "profissao" => "Operadora de caixa"
    ],
    [
        "nome" => "Esther", 
        "idade" => 20,
        "profissao" => "Desconhecida"
    ]
];

foreach($pessoas as $pessoa){
//     echo "<pre>";
//    print_r($pessoa);
//    echo "</pre>";
//    echo "<pre>";
//    var_dump($pessoa);
//    echo "</pre>";
foreach($pessoa as $dados){
echo "{$dados} | ";
}
echo "</br>";
}

?>