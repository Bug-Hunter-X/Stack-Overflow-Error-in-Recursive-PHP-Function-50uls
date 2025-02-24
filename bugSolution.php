```php
function processData(array $data): array {
  $stack = [$data];
  while ($stack) {
    $current = array_pop($stack);
    foreach ($current as $key => $value) {
      if (is_array($value)) {
        $stack[] = $value; // Add to stack for iterative processing
      } else {
        // ... some processing ...
      }
    }
  }
  return $data; // Original array is modified in place
}

$myData = ['a' => 1, 'b' => ['c' => 2, 'd' => 3]];
$processedData = processData($myData);
```