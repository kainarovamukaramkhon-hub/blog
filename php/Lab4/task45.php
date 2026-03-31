<?php
$str = 'a1a a22a a333a a4444a a55555a aba aca';
$pattern = '/a\d+a/';
preg_match_all($pattern, $str, $matches);
echo "str=$str<BR>";
echo "pattern = $pattern<BR>";
echo implode(', ', $matches[0]) . "<BR>";
?>