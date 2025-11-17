function validBraces($braces){
  $chars = str_split($braces);
  $stack = [];
  $pair = [
    '(' => ')',
    '{' => '}',
    '[' => ']',
  ];
    
  for ($i = 0; $i < count($chars); $i++){
    $char = $chars[$i];
    
    if(in_array($char, array_keys($pair))){
      array_push($stack, $char);
    }
    else{
      $last = array_pop($stack);
      if ($last === null || $char !== $pair[$last]){
        return false;
      }
    }
  }
  
  return empty($stack);
}
