<?
$point = 90;

//학점 비교
switch (($point)) {
  case 90 :
    $grade = 'A';
    echo "A학점 <br>";
    break;
    case 80 :
      $grade = 'B';
      echo "B학점 <br>";
      break;
      case 70 :
        $grade = 'C';
        echo "C학점 <br>";
        break;
        case 60 :
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
