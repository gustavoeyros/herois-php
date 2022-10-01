<link rel="stylesheet" href="../css/style.css">

<?php


$heroi = strtoupper($_POST['heroi']); 
$quantidade = strtoupper($_POST['quantidade']);
$imagem = strtolower(str_replace(' ', '',$_POST['heroi']));


if($heroi!="DOUTOR ESTRANHO" && $heroi!="HOMEM ARANHA" && $heroi!="HULK" && $heroi!="PANTERA NEGRA" && $heroi!="THOR"){
    echo "<div class='containerjs'> <h1 class='title-js'>O herói ".$heroi." não foi encontrado!</h1>";
} 
else{
    echo  " <div class='containerjs'> <h1 class='title-js'>Você escolheu ".$heroi." ".$quantidade." vez(es)!</h1>";
    for($contador=0;$contador<$quantidade;$contador++){
      echo "<div class='containerjs'> <div class='card'> <img src='../img/marvel/".$imagem.".jpg'> </div></div>";
    }
    echo "</div>";
}




?>