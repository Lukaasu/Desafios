<?php

$filmesList = ["Avengers: Endgame"  ,  "Captain Marvel"  ,  "Homem-Formiga e a Vespa"];
echo count($filmesList);

echo "<br>Filmes<br>";

for($i=0; $i < count($filmesList); $i++){
    echo $filmesList[$i] . "<br>";
}




?>