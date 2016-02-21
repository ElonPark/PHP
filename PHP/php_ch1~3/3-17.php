<? //조건 연산자
$a = 11;
$b = 22;

$c = ($a < $b) ? $a : $b;
echo $c;

echo "<br>";
if( $a < $b) {
  $c = $a;
} else {
  $c = $b;
}
echo $c;
?>
