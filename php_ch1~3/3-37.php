<?//2중 배열
$area = array(array("서울", "부산", "광주" ), array("제주도", "울릉도", "독도"));

for ($i=0; $i < 2 ; $i++) {
  for ($j=0; $j <3 ; $j++) {
    echo $area[$i][$j], "<br>";
  }
}
?>
