The solution lies in using the third parameter of `in_array()` to enforce strict comparison.

```php
<?php
$array = [1, '1', 2, '2'];

if (in_array(1, $array, true)) {
  echo '1 found (integer, strict)<br>';
}

if (in_array('1', $array, true)) {
  echo '1 found (string, strict)<br>';
}
?>
```

By setting the third parameter to `true`, we ensure that `in_array()` performs a strict type comparison, preventing false positives due to PHP's loose type juggling.