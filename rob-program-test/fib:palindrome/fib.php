<?php
// Your code here!
/*
# 前の数と前の前の数との和からなる数列をフィボナッチ数列といいます。
# Fibonacci number
# 1 1 2 3 5 8 13 21 34

# n(1) = 1
# n(2) = 1
# n(3) = 2 = n(2) + n(1) = 1 + 1
# n(4) = 3 = n(3) + n(2) = 2 + 1
# n(5) = 5 = n(4) + n(3) = 3 + 2
# n(5) = 8 = n(5) + n(4) = 5 + 3

# n番目のフィボナッチ数列の数を返すFibonacci関数を作成してください。

# Fibonacci(1) => 1
# Fibonacci(2) => 1
# Fibonacci(3) => 2 = Fibonacci(2) + Fibonacci(1)
# Fibonacci(4) => 3 = Fibonacci(3) + Fibonacci(2)
# Fibonacci(5) => 5 = Fibonacci(4) + Fibonacci(3)

*/

function fib($n){
    if ($n === 1){
        return 1;
    }
    if ($n === 2){
        return 1;
    }
    //n = 3の場合は2が返る -> n(2) + n(1) -> 2
    return fib($n-1) + fib($n-2);
}

for ($i=1; $i<=10; $i++) {
    print_r(fib($i)."\n");
}
// print_r(fib(1)."\n");  // fib(1) -> 1
// print_r(fib(2)."\n");  // fib(2) -> 1
// print_r(fib(3)."\n");  // fib(3) -> fib(2) + fib(1) = 2
// print_r(fib(4)."\n");  // fib(4) -> fib(3) + fib(2) = 3
// print_r(fib(5)."\n");  // fib(5) -> fib(4) + fib(3) = 5


?>
