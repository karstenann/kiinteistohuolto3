<?php 

header("Access-Control-Allow-Origin: *");

include ('connect.php');

$kysely = "SELECT yht_nimi, yht_email, yht_puhelin, yht_viesti, yht_pvm FROM yhtotot ORDER BY yht_pvm";
$data = $yhteys->query($kysely);

//aloitetaan json-muuttuja:
$JSON = '{"viesti":[';
$laskuri = 0;
$riveja = $data->rowCount();

while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
    $laskuri++; 
    $JSON.='{"Nimi":"'.$rivi['yht_nimi'].'","Email":"'.$rivi['yht_email'].'","Puhelin":"'.$rivi['yht_puhelin'].'","Viesti":"'.$rivi['yht_viesti'].'","Päivämäärä":"'.$rivi['yht_pvm'].'"}';
    if($laskuri<$riveja) $JSON.=",";
}
//suljetaan json-muuttuja:
$JSON.=']}';
//suljetaan yhteys:
$yhteys = null;
// echo $JSON;

$handler = fopen("data.json", "w");
fwrite($handler, $JSON);
fclose($handler);

?>