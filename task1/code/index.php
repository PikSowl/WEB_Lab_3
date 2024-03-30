<?php
echo "1) Regular expressions <br>";
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '!a[a-z]{2}b!';
$matches = [];
preg_match_all($regexp, $str, $matches);
foreach($matches[0] as $match) {
    echo "$match ";
}
echo "<br>";

function x3($matches) {
    return strval(intval($matches[0])**3);
}
$strWithNum = 'a1b2c3';
$regexp ='/([0-9])/';
$result = preg_replace_callback($regexp, 'x3', $strWithNum);
echo $result, "<br>";
