<?php

function even_or_odd(int $n): string {
  return $n % 2 == 0 ? "Even" : "Odd";
}

var_dump(even_or_odd(2));
echo "<br>";
var_dump(even_or_odd(0));
echo "<br>";
var_dump(even_or_odd(7));
echo "<br>";
var_dump(even_or_odd(1));


/*
Instructions
Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.*/