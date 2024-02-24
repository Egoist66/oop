<?php

declare(strict_types=1);

$a = 2;
$hello = function ($string) use ($a) {
    print_r(func_get_args());
    return $string . $a;
};

echo $hello('Hello');

echo "<br/>";

function test(int $a, callable $func)
{
    $arr = [];

    for ($i = 0; $i <= $a; $i++) {
        $arr[] = $func($i);
    }

    return $arr;
}

$arr = test(10, fn(int $i) => $i * 2);

print_r($arr);

$a = function (int $a): Closure {

    return fn(int $b): Closure => (

        fn(int $c): Closure => (

            fn(int $d): int => $a + $b + $c + $d
        )
    );
};


echo "<br/>";


//echo $a(1)(2)(3)(4);

function generator(): Generator {
  
    yield 'a';
    yield 'b';
    yield 'c';
}

function generator2(int $from, int $to){
    for($i = $from;  $i <= $to; $i++){
        yield $i;
    }
}


echo "<br/>";

foreach (generator2(0, 10) as $item) {
    echo $item . '<br/>';
}


