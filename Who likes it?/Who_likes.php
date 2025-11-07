function likes( $names ) {
  $array = $names;
  if (count($array) == 1){
    $result = implode('',$array);
    return $result . " likes this";
  }
  else if (count($array) == 2){
    $result = implode(" and ", $array);
    return $result . " like this";
  }
  else if( count($array) === 3){
    $last = array_pop($array);
    $firstpart = implode(', ',$array);
    $final = $firstpart . " and " . $last . " like this";
    return $final;
  }
  else if(count($array) > 3){
    $first_two = array_slice($array,0,2);
    $firstshift = array_shift($array);
    $secondshift = array_shift($array);
    $remaining = count($array);
    $result = implode(', ', $first_two);
    $final = $result . " and " . $remaining . " others like this";
    return $final;
  }
  else{
    return 'no one likes this';
  }
  
}
