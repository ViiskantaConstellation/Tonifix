<?php /* Template Name: Automaalaamo Page Template */ ?>

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
<meta name="robots" content="noindex, nofollow" />
<meta name="googlebot" content="noindex, nofollow" />
<meta name="description" content="Tonifix Oy on automaalaamo suorittaa automaalaukset Vantaalla ja muualla PK-seudulla. Auton maalaus tehdään uudessa maalauskammiossa, jonka uudistimme vuonna 2015. Ota yhteyttä ja pyydä tarjous jo tänään!" />
<meta name="keywords" content="automaalaamo" />
<title>Täyden palvelun automaalaamo | Vantaa | Helsinki | Tonifix Oy</title> 
<meta property="og:title" content="Täyden palvelun automaalaamo | Vantaa | Helsinki | Tonifix Oy" />
<meta property="og:image" content="http://www.tonifix.fi/images/ogimage.jpg" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="627" />
<meta property="og:url" content="http://www.tonifix.fi" />

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link rel="icon" href="http://www.tonifix.fi/favicon.png?v=2" sizes="32x32" />
<link rel="icon" href="http://www.tonifix.fi/icon.png?v=2" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://www.tonifix.fi/icon.png" />
<meta name="msapplication-TileImage" content="http://www.tonifix.fi/icon.png" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery331.js"></script>
<?php wp_head(); ?>
</head>

<?php get_header(); ?>

<div class="phead amheadbg">
	<h2>Automaalaamo</h2>
</div>

<article class="sbcontent">
	<p>
    <h3>Kun autosi kaipaa uutta maalipintaa</h3>
    Syitä auton maalaukselle voivat olla esimerkiksi ruoste, naarmut tai kolarista aiheutuneet vauriot. Me toteutamme niin pienet kuin suuretkin maalaustyöt. Henkilöautojen ohella maalaamme myös muut ajoneuvot, kuten pakettiautot ja matkailuautot.
    <br><br>
    Jos autossasi on pieniä naarmuja tai yksittäisiä kosmeettisia vaurioita, korjaus tehdään paikkamaalauksen avulla. Puhdistamme, hiomme ja tasoitamme naarmut sekä maalaamme ne piiloon täsmälleen samalla värisävyllä, minkä jälkeen niistä ei näy enää jälkeäkään.
    <br><br>
    Teemme auton maalipinnan korjaukset vain tarpeen mukaan. Jos esimerkiksi pelkkä paikkamaalaus ei riitä, teemme sen sijaan kolarimaalauksen. Silloin lommot ja vauriot oiotaan ja korjataan, minkä jälkeen tehdään vielä uusi ja näyttävä maalipinta. Tiedämme, että hyvä jälki ei synny hutiloimalla. Huolellisuus, oikeiden kemikaalien käyttö maalauksen eri vaiheissa ja vankka ammattitaito takaavat onnistuneen lopputuloksen. 
    <br><br><br>
</article>

<div class="paint">
</div>

<article class="sbcontent">
    <br><br><br>
    Automaalaukset tehdään modernissa maalauskammiossa, jonka uusimme vuonna 2015. Käytössämme ovat vesipohjaiset Spies Hecker -automaalit, jotka antavat tarkan sävyn ja laadukkaan pinnan. Tarkastamme maalattavat sävyt ennen uuden maalauksen aloittamista, ja tarvittaessa sävytämme uuden värin vanhaa vastaavaksi.
	</p>
	<p style="font-size:125%; line-height:125%; text-align:center;">
		<br><br>
		<b>Muistathan, että tarjoamme tarvittaessa myös sijaisauton käyttöösi maalauksen ajaksi. Mainitse sijaisauton tarpeesta maalauksen ajanvarauksen tai tarjouspyynnön yhteydessä.</b>
	</p>
</article>

<a href="http://www.tonifix.fi/etusivu/tee-tarjouspyynto">
	<div class="ttp">
		Tee tarjouspyyntö
	</div>
</a>

<div class="pimages">
	<img class="pimage" src="<?php echo get_template_directory_uri(); ?>/images/amone.jpg">
	<img class="pimage" src="<?php echo get_template_directory_uri(); ?>/images/amtwo.jpg">
	<img class="pimage" src="<?php echo get_template_directory_uri(); ?>/images/amthree.jpg">
	<img class="pimage" src="<?php echo get_template_directory_uri(); ?>/images/amfour.jpg">
	<div class="clearfix"></div>
</div>

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

<script>
$(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $(".paint").addClass("dacolors");
        } else {
            $(".paint").removeClass("dacolors");
        }
    });
});
</script>