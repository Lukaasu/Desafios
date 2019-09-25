<?php

$alunosList = array("João"  ,  "Maria"  ,  "Pedro"  ,  "Ana");
echo count($alunosList);

echo "<br>Alunos<br>";

for($i=0; $i < count($alunosList); $i++){
    echo $alunosList[$i] . "<br>";
}

?>