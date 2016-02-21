<?

$point = 99;

//학점 판별
if($point >= 90) {
  $grade = "A";
  echo "학점은 $grade 입니다 <br>";
} else if($point >= 80) {
  $grade = "B";
  echo "학점은 $grade 입니다 <br>";
}else if($point >= 70) {
  $grade = "C";
  echo "학점은 $grade 입니다 <br>";
}else if($point >= 60) {
  $grade = "D";
  echo "학점은 $grade 입니다 <br>";
}else {
  $grade = "F";
  echo "학점은 $grade 입니다 <br>";
}

//학점 출력
echo "축하합니다! 학점은 $grade 입니다.";
