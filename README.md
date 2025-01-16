# PHP `in_array()` Loose Comparison Pitfall

This repository demonstrates a common yet subtle bug in PHP related to the `in_array()` function's loose comparison behavior.  The example shows how using `in_array()` without strict comparison (`true` as the third argument) can lead to unexpected results when searching for a value that might exist in different data types (e.g., integer vs. string).

The `bug.php` file contains the buggy code.  The `bugSolution.php` file shows how to correct the issue by using strict comparison.  Understanding this is vital for writing reliable and predictable PHP code.

## How to Run

1. Clone the repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output.
4. Compare the output with the expected behavior (as shown in `bugSolution.php`).