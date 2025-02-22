function fooFixed(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = fooFixed($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )