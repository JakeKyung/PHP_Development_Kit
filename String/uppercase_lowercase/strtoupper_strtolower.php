<?php
/**
 * 대문자를 소문자로(Make a string lowercase) : strtolower(string $string): string
 * 소문자를 대문자로(Make a string uppercase) : strtoupper(string $string): string ,
 */
$lowercase_text = "book";
if($lowercase_text === strtolower($lowercase_text))
    echo strtoupper($lowercase_text); // BOOK

$uppercase_text = "WINDOWS";
if($uppercase_text === strtoupper($uppercase_text))
    echo strtolower($uppercase_text); // windows