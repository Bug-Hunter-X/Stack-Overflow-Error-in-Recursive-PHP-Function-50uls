# PHP Recursive Function Stack Overflow

This repository demonstrates a stack overflow error in a recursive PHP function and its solution.

The `bug.php` file contains a recursive function that processes nested arrays.  When given a sufficiently deep array, it exceeds the PHP recursion limit and throws a fatal error.

The `bugSolution.php` file provides a solution using an iterative approach to avoid the stack overflow.