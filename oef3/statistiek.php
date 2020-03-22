<?php
$correcteGetallen = array();
$fouteGetallen = array();
foreach ($_GET['getallen'] as $index => $getal) {
    if (is_numeric($getal)) {
        $correcteGetallen[] = $getal;
    } else {
        $fouteGetallen[] = $getal;
    }
}
$min = min($correcteGetallen);
$max = max($correcteGetallen);
$gemiddelde = array_sum($correcteGetallen)/count($correcteGetallen);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF8">
<title>verwerking</title>
</head>
<body>
<?php
print('Juiste getallen: ' . '<br/>');
foreach ($correcteGetallen as $index => $correctGetal ) {
print( $correctGetal . '<br/>' );
}
print('Laagste getal: ' . $min. '<br/>');
print('Hoogste getal: ' . $max. '<br/>');
print('Gemiddelde: ' . $gemiddelde. '<br/>');
print('Foute getallen: '. '<br/>');
foreach ($fouteGetallen as $index => $foutGetal ) {
    print( $foutGetal . '<br/>' );
}
?>
</body>
</html>