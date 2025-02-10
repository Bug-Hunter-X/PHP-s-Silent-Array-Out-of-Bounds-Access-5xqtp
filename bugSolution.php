function incrementValue(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    trigger_error("Array index out of bounds: " . $index, E_USER_WARNING);
    return;
  }
  $arr[$index]++;
}

$myArr = [1, 2, 3, 4, 5];
incrementValue($myArr, 10); // Triggers a warning
print_r($myArr); // Output: [1, 2, 3, 4, 5]
//Example of handling the error:

function incrementValueWithException(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    throw new OutOfBoundsException("Array index out of bounds: " . $index);
  }
  $arr[$index]++;
}

try{
  incrementValueWithException($myArr,10);
} catch (OutOfBoundsException $e) {
  echo "Caught exception: ".$e->getMessage();
}
