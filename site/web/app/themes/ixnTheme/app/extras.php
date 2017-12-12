<?php

namespace App;

/**
* Function To Chop Blog Excerpts to length
*/

function chop_string($str, $len) {
if (strlen($str) < $len)
return $str;

$str = substr($str,0,$len);
if ($spc_pos = strrpos($str," "))
$str = substr($str,0,$spc_pos);

return $str . '<span class="readMore">... Read more</span> ';
}

add_filter('chop_string', __NAMESPACE__ . '\\chop_string');