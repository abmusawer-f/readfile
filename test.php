<?php

$file = fopen("test.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        preg_match('#\[(.*?)\]#', $line, $match);
        if(!empty($match))
        print $match[0]."\r\n";

    }

    fclose($file);
} else {
    print 'error';
}