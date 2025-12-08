function parse($data) {
  $instructions = str_split($data);
  $result = [];
  $initial = 0;
  
  for($i=0; $i < count($instructions); $i++){
    $value = $instructions[$i];
    if($value === 'i'){
      $initial = $initial + 1;
    }
    else if($value === 'd'){
      $initial = $initial - 1;
    }
    else if($value === 's'){
      $initial = $initial **2;
    }
    else if($value === 'o'){
      array_push($result, $initial);
    }
    
  }
  return $result;
}
