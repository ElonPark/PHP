<?

$subject = array( 90, 80, 60, 70, 93, 100, 50, 66 );

$arraylength = sizeof($subject);

for ($i = 0; $i < $arraylength; $i++) {
  $total +=$subject[$i];
}

echo "총점 = $total";

?>
