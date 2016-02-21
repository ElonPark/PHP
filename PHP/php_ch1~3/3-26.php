<?
$point = 92;

$result = (int)($point / 10);

//학점 비교
switch (($result)) {
  case 9 :
  $grade = 'A';
  echo "A학점 <br>";
  break;
  case 8 :
  $grade = 'B';
  echo "B학점 <br>";
  break;
  case 7 :
  $grade = 'C';
  echo "C학점 <br>";
  break;
  case 6 :
  $grade = 'D';
  echo "D학점 <br>";
  break;
  default:
  $grade = 'F';
  echo "F 학점 <br>";
  break;
}

//학점 출력
echo "최종 학점은 $grade 입니다.";
