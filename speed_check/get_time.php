<?php
function get_time() { return microtime(true); }
$start = get_time(); // 속도 측정 시작

for($i=0;$i<100000;$i++) {
    $a = pow($i, 20);
}

$end = get_time(); // 속도 측정 끝
$time = $end - $start;
echo '수행시간: ' . number_format($time, 8) . " 초\n";
echo '값: ' . $a;
