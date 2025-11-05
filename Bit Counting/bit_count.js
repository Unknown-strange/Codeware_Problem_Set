function countBits(n) {
  const binary = n.toString(2).split('');
  let count = 0
  for(const key in binary){
    if(binary[key] === '1'){
      count ++
    }
  }
    return count;
}
