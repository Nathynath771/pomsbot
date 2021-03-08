<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    <title>LGBTSTREET - Discord LGBT Francais</title>
    <meta name="title" content="LGBTSTREET - Discord LGBT Francais">
    <meta name="description" content="LGBT Street est une communauté discord dédié aux LGBT+, vous pouvez venir découvrir les autres membres, vous faire des amis ou simplement des connaissances ! ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lgbtstreet.com/">
    <meta property="og:title" content="LGBTSTREET - Discord LGBT Francais">
    <meta property="og:description" content="LGBT Street est une communauté discord dédié aux LGBT+, vous pouvez venir découvrir les autres membres, vous faire des amis ou simplement des connaissances ! ">
    <meta property="og:image" content="https://lgbtstreet.com/og.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://lgbtstreet.com/">
    <meta property="twitter:title" content="LGBTSTREET - Discord LGBT Francais">
    <meta property="twitter:description" content="LGBT Street est une communauté discord dédié aux LGBT+, vous pouvez venir découvrir les autres membres, vous faire des amis ou simplement des connaissances ! ">
    <meta property="twitter:image" content="https://lgbtstreet.com/og.png">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Montserrat+Subrayada:wght@700&family=Montserrat:ital,wght@0,300;0,600;0,700;1,300&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
    <h1>LGBT STREET <br/>
        <small>Lorsque votre ami(e) vous a recommandé(e) cette communauté, <span> vous auriez dû dire non.</span>
        </small>
    </h1>
    <div class="box kdrama cloy">
        <h4>"on est suffisamment fort·e·s pour encaisser les commentaires haineux à notre encontre"
        </h4>
    </div>
    <div class="box kdrama inheritors">
        <h4 class="break"> "on s'en fout de tout le mal qu'on peut dire de nous"</h4>
    </div>
    <div class="box anime foodwars">
        <h4>"on existe et on est beau comme on est"</h4>
    </div>
    <div class="box kdrama theking">
        <h4>"On est tous là pour se soutenir et défendre une cause"</h4>
    </div>
    <div class="box western mindhunter shadow">
        <img src="./discord.png" style="
    max-width: 145px;
    height: auto !important;
"/>
        <p>+250 Membres</p>
        <a href="/discord" class="btn">
            Nous rejoindre
        </a>
    </div>
    <div class="box anime kakegurui shadow">
        <h4 class="break">"On est là pour être tou·te·s ensemble"</h4>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="./script.js"></script>
<script>

    $(window).on("load resize", function (e) {
        if ($(window).width() > 700) {
            $(".box").each(function (index) {
                $(this).outerHeight($(this).outerWidth());
            });
        } else {
            $(".box").each(function (index) {
                $(this).outerHeight('auto')
            });
        }
    });

</script>
</body>
</html>
<?php /**PATH D:\laragon\fuckboy\resources\views/welcome.blade.php ENDPATH**/ ?>