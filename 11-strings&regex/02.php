<?php 

function coding($var) {
$length = strlen($var);
$half = round($length/2);
echo "length =".$length.' '.'middle = '.$half.'<br/>';
$substr_1 = substr($var, 0, $half);
$mid = $half+1;
//first half coding
$code_1 = str_replace('a', 'u', $substr_1);
//result
$code_1_final = str_replace('t', 'v', $code_1);
//second half coding
$substr_2 = substr($var, $mid);
$code_2 = str_replace('l', 'o', $substr_2);
//result
$code_2_final = str_replace('s', 'p', $code_2);

echo $code_1_final.$code_2_final;
}
$text_1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique necessitatibus accusantium, labore dolores odit voluptatem sit aperiam recusandae, officia molestiae! Excepturi maiores doloribus nemo quos vel culpa consequatur quaerat. Nisi.";
echo $text_1.'<br />';
coding($text_1);
echo '<br />';
$text_2 = "If length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, false will be returned. ";
echo $text_2.'<br />';
coding($text_2);

?>