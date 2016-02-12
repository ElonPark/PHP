<html>
<body>
  <h4>퀴즈 결과를 발표합니다</h4>
  <hr>

  <?
  if($singer == "kang") {
    echo "강타가 아닙니다. 틀렸습니다!";
  }else if ($singer == "boa") {
    echo "보아가 아닙니다. 틀렸습니다!";
  }else if ($singer == "lee") {
    echo "축하합니다! 이정현이 맞습니다!";
  }else {
    echo "남진은 아닙니다... 틀렸습니다!";
  }

  ?>
</body>
</html>
