<?php
function open_link($url) {
    if (fopen($url, "r") == FALSE) {
        echo "Failed to open '$url'. Are you missing 'http://' perhaps?";
    }
}

$arg = $_SERVER['QUERY_STRING'];

if (!$arg) {
    echo "No link passed in as an argument...\n";
    $arg = "http://www.google.com/";
}
echo "Hitting '$arg'\n";
open_link("$arg");
?>
