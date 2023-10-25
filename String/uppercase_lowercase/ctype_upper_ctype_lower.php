<?php
/**
 * 대문자 여부 확인 : ctype_upper(mixed $text): bool
 * 소문자 여부 확인 : ctype_lower(mixed $text): bool
 */
$lowercase_text = "book";
if (ctype_lower($lowercase_text)) {
    echo "lowercase letters";
}

$uppercase_text = "WINDOWS";
if (ctype_upper($uppercase_text)) {
    echo "uppercase letters";
}


