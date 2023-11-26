<?php

namespace Web\AC20231125;

class CountingPasses {

  public function miniABS($input1, $input2) {
    $arr1 = explode(" ", $input1);
    $arr2 = explode(" ", $input2);
    $n = $arr1[0];
    $l = $arr1[1];
    $r = $arr1[2];
    $result = "";

    foreach ($arr2 as $a) {
      if ($a < $l) {
        // A_i が L より小さい場合、最も近い数は L
        $result .= $l . " ";
      } else if ($a > $r) {
        // A_i が R より大きい場合、最も近い数は R
        $result .= $r . " ";
      } else {
        // A_i が L と R の間にある場合、最も近い数は A_i 自身
        $result .= $a . " ";
      }
    }

    return trim($result);
  }

}



$input1 = fgets(STDIN);
$input2 = fgets(STDIN);

$countingPasses = new CountingPasses();
echo $countingPasses->countPass($input1, $input2);
