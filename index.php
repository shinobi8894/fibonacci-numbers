<?php
// Fibonacci Series
// using Recursion
 
// function returns
// the Fibonacci number
function fib($n)
{
    if ($n <= 1)
        return $n;
    return fib($n - 1) +
           fib($n - 2);
}
 
// Driver Code
$n = 9;
echo fib($n);
 
?>