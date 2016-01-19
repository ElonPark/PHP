<?
$a = 11;
$b = 22;

$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;

echo  $a, "<br>", $b;
?>
