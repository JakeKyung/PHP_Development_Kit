<?php

/**
 * TEST CASE.1 배열 A 와 배열 B 교집합
 * - 각 배열의 원소를 하나씩 비교해서 찾는 방법
 * - 각 배열을 정렬(sort)후 배열 B를 줄여나가며 비교해서 찾는 방법
 */
function get_time() { return microtime(true); }
$a = array();
$b = array();
$size = 1000;
for ($i = 0; $i < $size; $i++) {
    $a[] = rand(0, 9); // 0부터 9 사이의 임의의 숫자 생성
    $b[] = rand(0, 9);
}
$result = array();
$result_sort = array();

$start = get_time();
foreach ($a as $value) {
    foreach ($b as $_value) {
        if ($value == $_value) {
            $result[] = $value;
        }
    }
}
$end = get_time();
$time = $end - $start;
echo 'CASE 1 -'.$size.'번 수행시간: ' . number_format($time, 8) . " 초\n";

/**********************************************************************************************/
$start = get_time();
sort($a);
sort($b);
foreach ($a as $value) {
    if (in_array($value, $b)) {
        $result_sort[] = $value;
        // $b 배열에서 찾은 값을 포함하여 그 이전의 모든 값을 제거
        $index = array_search($value, $b);
        if ($index !== false) {
            $b = array_slice($b, $index+1);
        }
    }
}
$end = get_time();
$time = $end - $start;
echo 'CASE 2 -'.$size.'번 수행시간: ' . number_format($time, 8) . " 초\n";

/**
 * 결론 - 배열 비교 시 정렬 후 비교, 비교 대상의 범위를 축소해나가면서 처리할 것.
 * CASE 1 -10번 수행시간: 0.00001216 초
 * CASE 2 -10번 수행시간: 0.00002003 초
 *
 * CASE 1 -1000번 수행시간: 0.02680612 초
 * CASE 2 -1000번 수행시간: 0.00206900 초
 */