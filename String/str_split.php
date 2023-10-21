<?php
/**
 * 문자열을 배열로 전환
 * 사용법 : str_split([문자열], [길이]);
 */

$text = "StringToArray";
$convert_text = str_split($text);
print_r($convert_text);
/**
 * Array(
    [0] => S
    [1] => t
    [2] => r
    [3] => i
    [4] => n
    [5] => g
    [6] => T
    [7] => o
    [8] => A
    [9] => r
    [10] => r
    [11] => a
    [12] => y
)
 */

$convert_text_length = str_split($text,3);
print_r($convert_text_length);
/**
 * Array
    (
        [0] => Str
        [1] => ing
        [2] => ToA
        [3] => rra
        [4] => y
    )
 */