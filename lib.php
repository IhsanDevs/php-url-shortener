<?php 
/*
Harap jangan hapus credit ini. 😄


Author: IhsanDevs
GitHub: https://github.com/IhsanDevs
Instagram: https://instagram.com/ihsan_devs

About:
Script PHP sederhana untuk membuat
website URL Shortener versi kamu
sendiri. Jangan lupa star repo ini
jika kamu suka.
*/
function random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function make_short_url ($oldUrl, $newUrl) {
    if (!filter_var($oldUrl, FILTER_VALIDATE_URL)) {
        return false;
    }

    mkdir(__DIR__ . "/short/{$newUrl}");
    mkdir(__DIR__ . "/short/{$newUrl}/hit");
    file_put_contents(__DIR__ . "/short/{$newUrl}/hit/index.php", file_get_contents(__DIR__ . "/src/hits.txt"));
    file_put_contents(__DIR__ . "/short/{$newUrl}/log.json", str_replace("url_target", $oldUrl, file_get_contents(__DIR__ . "/src/log.json")));
    $content = file_get_contents(__DIR__ . "/src/index.txt");
    $content = str_replace("url_target", $oldUrl, $content);
    if (file_put_contents(__DIR__ . "/short/{$newUrl}/index.php", $content)) {
        return true;
    } else {
        return false;
    }
}