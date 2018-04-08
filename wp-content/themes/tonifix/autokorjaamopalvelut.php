
<?php /* Template Name: Autokorjaamopalvelut Page Template */ ?>

<!DOCTYPE HTML>
<html lang="fi">
<head prefix="og: http://ogp.me/ns#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="theme-color" content="#02275e">
<meta name="msapplication-navbutton-color" content="#02275e">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=yes" />
<meta name="robots" content="follow" />
<meta name="googlebot" content="follow" />
<meta name="description" content="Tonifix kolarikorjaamo tarjoaa autokorjaamopalvelut vankalla osaamisella." />
<meta name="keywords" content="autokorjaamopalvelut" />
<title>Tonifix Oy - Autokorjaamopalvelut</title>
<meta property="og:title" content="Tonifix Oy - Autokorjaamopalvelut" />
<meta property="og:image" content="http://www.tonifix.fi/images/ogimage.jpg" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="627" />
<meta property="og:url" content="http://www.tonifix.fi/autokorjaamopalvelut.php" />

<link rel="icon" href="http://www.tonifix.fi/favicon.png?v=2" sizes="32x32" />
<link rel="icon" href="http://www.tonifix.fi/icon.png?v=2" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://www.tonifix.fi/icon.png" />
<meta name="msapplication-TileImage" content="http://www.tonifix.fi/icon.png" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery331.js"></script>

<?php wp_head(); ?>
</head>

<body ontouchstart="">

<?php get_header(); ?>

<!-- TODO: Page Content Here -->

<?php get_footer(); ?>

<script>
$(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 110) {
            $(".firstn").addClass("thin");
			$(".firstn > ul > li").addClass("thin");
			$(".logo").addClass("thin");
        } else {
            $(".firstn").removeClass("thin");
			$(".firstn > ul > li").removeClass("thin");
			$(".logo").removeClass("thin");
        }
    });
});
</script>

</body>
</html>