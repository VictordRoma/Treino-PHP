<?php
//laços de Repetição
for($i=0;$i<=10;$i++){
    echo $i;
}


echo "<br>";


//laços de Repetição
$i=0;
while($i<=10){
    echo $i;
    $i++;
}


echo "<br>";


//laços de Repetição
$i=0;
do{
    echo $i;
    $i++;
}while($i<=10);


echo "<br>";


//estrutura de decisão
$i = 10;
if($i == 10){
    echo "Passou no if";
}else if($i<10){
    echo "Passou pelo else if";
}else{
    echo "Passou no else";
}

?>