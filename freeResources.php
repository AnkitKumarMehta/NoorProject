<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/donut-logo-02.png">
    <title>Free Resources</title>
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landingPage.css">
    <link rel="stylesheet" href="assets/css/Articles.css">

</head>

<body class="white-version home-sticky spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

<?php
$url = "https://noor.ghost.io/ghost/api/v3/content/posts/?key=e39baa14bdcde1ce74033bdf94";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$result = json_decode($response, true);
curl_close($ch); // Close the connection
//print_r($result);
$posts = $result['posts'];

?>

<?php require_once "header.php" ?>


<section id="home" class="slider-style-5 rn-section-gap pb--60 align-items-center with-particles">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-inner">
                    <div class="thumbnail gradient-border gradient-animation">
                        <img id="border" class="gradient-border imageFix" src="assets/images/Podcast.jpg"
                             alt="">
                    </div>
                    <h1 class="mt-5">Makers Theory Podcast 🎙</h1>
                    <h6 class="article-subheading">A place where we talk to founders and innovators to understand their
                        process and lessons they have learned along the way</h6>

                    <div class="Podcast-Button-Block mt--60">
                        <div class="button-area">
                            <a class="" href=" https://open.spotify.com/show/0rcTNvgsWvhBMpZYAAQnMx" target="_blank">
                                        <span>
                                            <img src="assets/images/Spotify-Podcast.svg" alt="logo" class="scaledBtn"/>
                                        </span>
                            </a>
                        </div>
                        <div class="button-area">
                            <a class="" href="#contacts">
                                        <span>
                                            <img src="assets/images/Google-Podcast.svg" alt="logo" class="scaledBtn"/>
                                        </span>
                            </a>
                        </div>
                        <div class="button-area">
                            <a class="" href="https://podcasts.apple.com/in/podcast/makers-theory/id1570984589"
                               target="_blank">
                                        <span>
                                            <img src="assets/images/Apple-Podcast.svg" alt="logo" class="scaledBtn"/>
                                        </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title-txt">Free Resources</h3>
                <div class="detail-grid">

                    <?php foreach ($posts as $post => $key) {
                        if ($key["excerpt"] === "Free resources") {
                            ?>
                            <a href="<?php echo $key["url"] ?>" target="_blank">
                                <div class="detail-card">
                                    <div class="card-image-block">
                                        <img id="border" class="PodcastImageFix"
                                             src="<?php echo $key["feature_image"] ?>"
                                             alt=" <?php echo $key["title"] ?>">
                                    </div>
                                    <p class="card-title">
                                        <?php echo $key["title"] ?>
                                    </p>
                                    <p class="card-description">
                                        <?php echo $key["excerpt"] ?>
                                    </p>
                                </div>
                            </a>
                        <?php }
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section>


</body>
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/bootstrap.js"></script>

</html>
