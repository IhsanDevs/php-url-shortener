<?php 
require_once "lib.php";
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
?>
<!DOCTYPE html>
<html lang="en" style="width: 100%;height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Simple URL Shortener</title>
    <meta name="author" content="Ihsan Devs">
    <meta name="twitter:image" content="https://mirror-my-url.herokuapp.com/assets/img/D-JpoTbWkAAMxfu.jpg">
    <!-- Silahkan ubah yang ini dengan URL web kamu-->
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Simple URL Shortener">
    <meta name="description"
        content="The perfect free URL shortener for transforming long, ugly links into nice, memorable and trackable short URLs. Use it to shorten links.">
    <!-- Silahkan ubah yang ini dengan deskripsi website yang kamu inginkan-->
    <meta name="twitter:description"
        content="The perfect free URL shortener for transforming long, ugly links into nice, memorable and trackable short URLs. Use it to shorten links.">
    <!-- Silahkan ubah yang ini dengan deskripsi website yang kamu inginkan-->
    <meta property="og:image" content="https://mirror-my-url.herokuapp.com/assets/img/D-JpoTbWkAAMxfu.jpg">
    <!-- Silahkan ubah yang ini dengan URL web kamu-->
    <meta name="twitter:card" content="summary">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/icon/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="width: 100%;height: 100%;font-family: Inconsolata, monospace;">
    <section class="d-inline justify-content-center" style="width: 100%;height: 50%;margin: auto;">
        <form class="text-center" style="width: 90%;height: auto;margin: auto;margin-top: 15%;" method="post"><input
                class="form-control" type="url" autofocus="" inputmode="url" required=""
                placeholder="Enter your link. Ex: [<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']; ?>]"
                name="url" style="border-color: var(--bs-indigo);box-shadow: 6px 6px 1px 0px var(--bs-pink);"
                autocomplete="off">

            <p style="color: aliceblue; margin: auto;margin-top: 5%;"><a style="text-decoration: none; color: white;" href="list_shorted/">Klik disini</a> untuk melihat list link yang disingkat.</p>
            <?php 
            if (isset($_POST['url'])) {
                $old_url = $_POST['url'];
                $newUrl = random_string(6);
                $make_short_url = make_short_url($old_url, $newUrl);
                if ($make_short_url) {
            ?>
            <div class="alert alert-success alert-dismissible" role="alert"
                style="width: auto;height: auto;margin-top: 20px;"><button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button><span><strong>Berhasil. </strong>Link berhasil
                    disingkat. Silahkan <a href="short/<?= $newUrl ?>/" target="_blank" rel="noopener noreferrer">klik disini</a> untuk melihat hasil. Untuk melihat jumlah hit, silahkan <a href="short/<?= $newUrl ?>/hit" target="_blank" rel="noopener noreferrer">klik disini</a>.</span></div>  
            <?php 
                } else {
            ?>
                        <div class="alert alert-danger alert-dismissible" role="alert"
                style="width: auto;height: auto;margin-top: 20px;"><button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button><span><strong>Gagal. </strong>Link yang anda masukkan gagal disingkat. Periksa kembali URL Anda.</span></div>
            <?php 
                }
            }
            ?>
                <button class="btn" type="submit"
                style="margin-top: 5%;width: 200px;color: var(--bs-light);background: rgb(100,31,132);box-shadow: 4px 4px var(--bs-pink);">Short
                Now</button>
        </form>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>