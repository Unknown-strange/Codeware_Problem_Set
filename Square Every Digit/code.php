<?php
  
function square_digits(int $num): int {
  $array = str_split($num);
  $result = [];
  for ($i = 0; $i < count($array); $i++){
    $converted = (intval($array[$i])) **2;
    array_push($result,$converted);
  }
  return implode($result);
}
