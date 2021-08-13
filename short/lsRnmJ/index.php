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
header('Refresh: 2; url=https://google.com');
$hit = json_decode(file_get_contents('log.json'));
$CountHit = $hit->hit+1;
$newHit = [
    'hit' => $CountHit,
    'url' => "https://google.com"
];
file_put_contents( __DIR__ . '/log.json',json_encode($newHit, JSON_PRETTY_PRINT));
echo '<p  style="font-family: \'Courier New\', Courier, monospace;">Harap tunggu. Anda akan dialihkan otomatis ke alamat yang dituju...</p>';