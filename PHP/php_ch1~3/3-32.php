<?
for($count = 0; $count < 5; $count++) {
  //count 값이 3일 때는 count = 3이 출력되지 않음
  if($count == 3) {
  echo "count 값이 3입니다. <br>";
  break;
  }

  echo "Count = $count <br>";
}
?>
