<?php

function console_log($output, $with_script_tags = true) {

$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 

');';

if ($with_script_tags) {

    $js_code = '<script>' . $js_code . '</script>';

}

echo $js_code;

}

function generateRandomName($length = 10) {

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$charactersLength = strlen($characters);

$randomString = '';

for ($i = 0; $i < $length; $i++) {

    $randomString .= $characters[rand(0, $charactersLength - 1)];

}

return ucwords($randomString);

}

function generateRandomEmail($length = 10) {

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$charactersLength = strlen($characters);

$randomString = '';

for ($i = 0; $i < $length; $i++) {

    $randomString .= $characters[rand(0, $charactersLength - 1)];

}

return $randomString."@legoom.net";

}
function generateRandomPwd($length = 8) {

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$charactersLength = strlen($characters);

$randomString = '';

for ($i = 0; $i < $length; $i++) {

    $randomString .= $characters[rand(0, $charactersLength - 1)];

}

return md5($randomString);

}

function iampwd($password) {

return md5($password);

}
?>