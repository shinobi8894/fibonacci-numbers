//Fibonacci Series using Recursion
let n = 9;
     
// function returns the Fibonacci number
function fib(n) {
if (n <= 1)
    return n;
return fib(n-1) + fib(n-2);
}

//function call
document.write(fib(n));