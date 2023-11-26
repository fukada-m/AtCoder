<?php
namespace Web\AC20231118;

$line = fgets(STDIN);

class Spread
{

public function __construct(){
}
    public function spread(string $str)
    {
        $result = str_split($str);
        $result = implode(" ", $result);
        echo $result;
    }
}

$spread = new Spread();
$spread->spread($line);
