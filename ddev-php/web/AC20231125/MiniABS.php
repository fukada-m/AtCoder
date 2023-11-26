<?php

namespace Web\AC20231125;

class MiniABS {

  public function miniABS($input1, $input2) {
    $arr1 = explode(" ", $input1);
    $arr2 = explode(" ", $input2);
    $n = $arr1[0];
    $l = $arr1[1];
    $r = $arr1[2];
    $x = [];
    $result = "";
    foreach($arr2 as $arr){
      $y = $l;
      while($y <= $r){
        $x[] = abs($y - $arr);
        $y++;
      }
      if(min($x) > $r){
        $result .= strval($r). " ";
      }else if (min($x) < $l){
        $result .= strval($l). " ";
      }else{
        $result .= strval(min($x)). " ";
      }
    }
    
    return $result;
  }
  

}

// $input1 = fgets(STDIN);
// $input2 = fgets(STDIN);

// $countingPasses = new CountingPasses();
// echo $countingPasses->countPass($input1, $input2);
