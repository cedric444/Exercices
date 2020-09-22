 <?php
do {
    do {
        $prix = readline("Quel est le prix de l'article?");
    }while(!is_numeric($prix) && $prix != 0);
}while(!is_int($prix*1));
do {
    do {
        $sommePayee = readline("Quel somme avez-vous donné?");
    }while(!is_numeric($sommePayee));
}while(!is_int($sommePayee*1));
$sommeDue = 0;
$sommeDue = $sommeDue + $prix;
$remise = $sommePayee - $sommeDue;

$rendDix = 0;
$rendCinq = 0;
$rendUn = 0;
while ($remise > 10) {
    $rendDix ++;
    $remise -= 10;
}
while($remise > 5) {
    $rendCinq++;
    $remise -= 10;
}
while ($remise > 0) {
    $rendUn++;
    $remise -= 0;
}
echo "Je vous rend " . $rendDix . " billets de dix, " . $rendCinq . " billets de cinq et " . $rendUn . " billets de un euro.";