<?php 

echo "<p>for </p>";
for ($i=0; $i <= 5; $i++) { 
    echo "<p>contador: {$i}</p>";
}
$contador = 0;
echo "<p>while </p>";
while ($contador <= 5){
    echo "<p>contador: {$contador}</p>";
    $contador++;
}
$contador = 0;
echo "<p> do while</p>";
do {
    echo "<p>contador: {$contador}</p>";
    $contador++;
}while ($contador <= 5);

$linguagens = ["Javascript", "PHP", "Java", "Csharp"];
echo "<p> foreach</p>";

foreach ($linguagens as $linguagem) {
    echo "<li>{$linguagem} </li>";
}

echo "<p>for com array</p>";

for($i = 0; $i < sizeof($linguagens); $i++){
echo "<li> {$linguagens[$i]}</li>";
}
?>