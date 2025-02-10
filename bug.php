function incrementValue(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    return; // Handle out-of-bounds index gracefully
  }
  $arr[$index]++;
}

$myArr = [1, 2, 3, 4, 5];
incrementValue($myArr, 10); // This will not raise any error, silently fail
print_r($myArr); // Output: [1, 2, 3, 4, 5] - No change!
