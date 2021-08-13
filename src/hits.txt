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
$getHits = json_decode(file_get_contents(__DIR__ . "/../log.json"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Hits</title>
</head>
<body>
    <p  style="font-family: 'Courier New', Courier, monospace;">Total hits pada <a href="<?= $getHits->url; ?>" target="_blank" rel="noopener noreferrer">URL Anda</a> adalah: <?=$getHits->hit; ?></p>
</body>
</html>