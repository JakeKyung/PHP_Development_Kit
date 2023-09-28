<?php
/**
 * parse_url(string $url, $int component = -1) : URL 해석 
 * parse_str(string $str, array &$result) : 쿼리 문자열 변수로 변환
 */

$url = 'https://www.amazon.com/gp/goldbox?ref_=nav_cs_gb';

// host 주소 추출 
$urlHost = parse_url($url, PHP_URL_HOST);
print_r($urlHost); // www.amazon.com

// URL 에서 쿼리 형태의 질의문 추출
$queryString = parse_url($url, PHP_URL_QUERY);
print_r($queryString); // ref_=nav_cs_gb

// 쿼리 문자열을 파싱하여 변수로 변환
parse_str($queryString, $params);
print_r($params);
/**
 * Array ([ref_] => nav_cs_gb)
 */

if (isset($params['ref_']) && $params['ref_'] == 'nav_cs_gb') {
    echo "'ref_' parameter value is 'nav_cs_gb'";
} else {
    echo "'ref_' parameter value is not 'nav_cs_gb' or 'ref_' parameter does not exist";
}