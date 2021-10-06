<?php

function solution($a, $x) {
  return in_array($x, $a);
}

var_dump(solution(array('a', 'b', 'c', 'd', 'e', "f"),"a")); //true
echo "<br>";
var_dump(solution(array('a', 'b', 'c', 'd', 'e', "f"), "f")); //true
echo "<br>";
var_dump(solution(array('a', 'b', 'c', 'd', 'e', "f"), "c")); //true
echo "<br>";
var_dump(solution(array('a', 'b', 'c', 'd', 'e', "f"), "u")); //false
