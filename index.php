<?php
    fwrite($f, "\n");
    fclose($f);

    ob_start();
    ob_flush();
    ob_get_contents();
    substr();
    implode();
    explode();

    json_encode();
    urlencode();
    is_file();

    function_exists();
    class_exists();

    extract();
    compact();

    fsockopen();
