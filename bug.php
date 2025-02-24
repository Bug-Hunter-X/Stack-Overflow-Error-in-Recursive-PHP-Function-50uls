```php
function processData(array $data): array {
  // ... some processing ...
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = $this->processData($value); // Recursive call
    } else {
      // ... some processing ...
    }
  }
  return $data;
}

$myData = ['a' => 1, 'b' => ['c' => 2, 'd' => 3]];
$processedData = $this->processData($myData);
```