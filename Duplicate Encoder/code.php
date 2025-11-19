function duplicate_encode($word){
  $word = str_split(strtolower($word));
  $present = array_count_values($word);
  
	$newstring = array_map(function($letter) use($present){
    if($present[$letter] > 1) return  ')'; 
    return  '(';
  }, $word);
  return implode($newstring);
}
