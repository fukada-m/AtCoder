<?php
$line1 = fgets(STDIN);
$answer = "Yes";

for ($i = 1; $i < 16; $i += 2) {
    $checkNum = substr($line1, $i, 1);
    if ($checkNum == "1") {
        $answer = "No";
        break;
    }
}

echo $answer;



