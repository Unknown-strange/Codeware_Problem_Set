function generateHashtag($str) {
  $word = trim($str);
  $addone = "#";
  $result = ucwords($word);
  $result = str_replace(" ","",$result);
  
  if(strlen($result) < 140 && strlen($result) !== 0 ){ 
    return $addone . $result;
  }
  else{
    return false;
  }
}
