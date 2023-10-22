<?php

/**
 * substr ( string $string , int $start, [ int $length ] ) : string
 * 문자열($string)의 인덱스($start) 부터 끝까지 or 주어진 특정 길이($length)만큼 반환
 * 인덱스($start)가 음수라면 역순
 */

$str = "abcdefgh";

echo substr($str, 0);  // abcdefgh
echo PHP_EOL;
echo substr($str, 3);  // defgh
echo PHP_EOL;
echo substr($str, -2); // gh
echo PHP_EOL;
echo substr($str, -1); // h
echo PHP_EOL;
echo substr($str, -8); // abcdefgh
echo PHP_EOL;

echo substr($str, 0, 3); // abc
echo PHP_EOL;
echo substr($str, 3, 2); // de
echo PHP_EOL;
echo substr($str, -3, 1); // f
echo PHP_EOL;
echo substr($str, -4, 2); // ef
