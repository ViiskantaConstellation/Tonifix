<?php /* Template Name: Vahinkoilmoitus Page Template */ ?>
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
<meta name="description" content="Tuliko autoosi kolhuja? Lähetä kuvallinen vahinkoilmoitus Tonifixille." />
<meta name="keywords" content="vahinkoilmoitus" />
<title>Tonifix Oy - Vahinkoilmoitus</title> 
<meta property="og:title" content="Tonifix Oy - Vahinkoilmoitus" />
<meta property="og:image" content="http://www.tonifix.fi/images/ogimage.jpg" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="627" />
<meta property="og:url" content="http://www.tonifix.fi/palvelut/vahinkoilmoitus" />

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link rel="icon" href="http://www.tonifix.fi/favicon.png?v=2" sizes="32x32" />
<link rel="icon" href="http://www.tonifix.fi/icon.png?v=2" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://www.tonifix.fi/icon.png" />
<meta name="msapplication-TileImage" content="http://www.tonifix.fi/icon.png" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery331.js"></script>
<?php wp_head(); ?>
</head>

<body ontouchstart="">

<a name="totop"></a>

<?php get_header(); ?>

<div class="phead viheadbg">
	<h2>Vahinkoilmoitus</h2>
</div>

<article class="viformbasic sbcontent">
	<p>
		<h3>TOIMI NÄIN</h3>
		<ul>
			<li><b>Tee vahinkoilmoitus alla olevalla lomakkeella.</b><br>
			<small>Monesti pystymme tekemään vahinkotarkastuksen lähettämiesi valokuvien perusteella.</small></li>
			<li><b>Tee vahinkoilmoitus omaan vakuutusyhtiöösi.</b><br>
			<small>Vaihtoehtoisesti voit myös täyttää vakuutusyhtiösi tiedot <span class="moreform" style="cursor:pointer; text-decoration:underline;">tähän</span>.<br>
			Asiakas päättää aina itse missä autonsa korjauttaa, vaikka maksajana on vakuutusyhtiö.</small></li>
			<li><b>Jos kuvista ei ilmene tarpeeksi informaatiota voit tuoda autosi meille, niin teemme vahinkotarkastuksen ja varaamme korjausajan.</b><br>
			<small>Joissakin tapauksissa voimme ottaa autosi suoraan työn alle.</small></li>
		</ul>
	</p>
	<form>
		<div class="formrow">
			<div class="splitform">
				<input type="text" name="nimi" placeholder="Nimi" required>
				<input type="text" name="rekisterinumero" placeholder="Rekisterinumero" required>
			</div>
			<div class="splitform">
				<input type="tel" name="puhelinnumero" placeholder="Puhelinnumero" required>
				<input type="email" name="sahkoposti" placeholder="Sähköpostiosoite" required>
			</div>
		</div>
		<div class="formrow">
			<div class="splitform">
				<input type="file" name="yleiskuva" id="yleiskuva" class="inputfile" accept=".jpg,.png">
				<label for="yleiskuva"><span>Lataa yleiskuva vahingosta</span></label>
			</div>
			<div class="splitform">
				<input type="file" name="lahikuva" id="lahikuva" class="inputfile" accept=".jpg,.png">
				<label for="lahikuva"><span>Lataa lähikuva vahingosta</span></label>
			</div>
			<div class="splitform inputonphone">
				<input type="file" name="otayleiskuva" id="otayleiskuva" class="inputfile" accept="image/*" capture="camera">
				<label for="otayleiskuva"><span>Ota yleiskuva vahingosta</span></label>
			</div>
			<div class="splitform inputonphone">
				<input type="file" name="otalahikuva" id="otalahikuva" class="inputfile" accept="image/*" capture="camera">
				<label for="otalahikuva"><span>Ota lähikuva vahingosta</span></label>
			</div>
		</div>
		<div class="clearfix"></div>
		<input type="submit" value="Lähetä">
		<a href="#totop">
			<div class="moreform moreformbtn">
				Kattavampi vahinkoilmoitus
			</div>
		</a>
	</form>
</article>
<article class="viformlarge">
	<form class="viformlarge">
		<h3>Ajoneuvon tiedot</h3>
		<input type="text" name="malli_ja_merkki" placeholder="Ajoneuvon malli ja merkki">
		<input type="text" name="rekisterinumero" placeholder="Rekisterinumero *" required>
		<input type="text" name="mittarilukema" placeholder="Mittarilukema">
		<h3>Omat yhteystiedot</h3>
		<input type="text" name="nimi" placeholder="Nimi (auton omistaja) *" required>
		<input type="text" name="katuosoite" placeholder="Katuosoite">
		<input type="text" name="postinumero-_ja_toimipaikka" placeholder="Postinumero- ja toimipaikka">
		<input type="tel" name="puhelinnumero" placeholder="Puhelinnumero *" required>
		<input type="email" name="sahkoposti" placeholder="Sähköpostiosoite *" required>
		<h3>Vakuutustiedot</h3>
		<small>Vakuutusyhtiö</small>
		<input type="text" name="vakuutusyhtio">
		<small>Vahinkopäivä</small>
		<input type="date" name="vahinkopaiva">
		<small>Vahinkotunnus</small>
		<input type="text" name="vahinkotunnus">
		<small>Vahinkolaji</small>
		<select>
			<option value="">- Valitse -</option>
			<option value="kesko">Kasko</option>
			<option value="liikenne">Liikenne</option>
			<option value="superkesko">Superkasko</option>
			<option value="ilkivalta">Ilkivalta</option>
			<option value="hirvi">Hirvi</option>
			<option value="poro">Poro</option>
			<option value="varkaus">Varkaus</option>
			<option value="vastuu">Vastuu</option>
			<option value="kuljetus">Kuljetus</option>
			<option value="lasi">Lasi</option>
		</select>
		<h3>Vastapuolen tiedot</h3>
		<input type="text" name="vastapuolen_nimi" placeholder="Nimi">
		<input type="text" name="vastapuolen_vakuutusyhtiö" placeholder="Vakuutusyhtiö">
		<input type="text" name="vastapuolen_rekisterinumero" placeholder="Rekisterinumero">
		<input type="tel" name="vastapuolen_puhelinnumero" placeholder="Puhelinnumero">
		<h3>Tiedot vauriosta</h3>
		<textarea rows="4" name="selvitys_vauriosta"></textarea>
		<h3>Valokuvat</h3>
		<input type="file" name="yleiskuva" id="yleiskuva" class="inputfile" accept=".jpg,.png" data-multiple-caption="{count} files selected" multiple />
		<label for="yleiskuva"><span>Lataa yleiskuva vahingosta</span></label>
		<input type="file" name="lahikuva" id="lahikuva" class="inputfile" accept=".jpg,.png">
		<label for="lahikuva"><span>Lataa lähikuva vahingosta</span></label>
		<div class="inputonphone">
			<input type="file" name="otayleiskuva" id="otayleiskuva" class="inputfile" accept="image/*" capture="camera">
			<label for="otayleiskuva"><span>Ota yleiskuva vahingosta</span></label>
			<input type="file" name="otalahikuva" id="otalahikuva" class="inputfile" accept="image/*" capture="camera">
			<label for="otalahikuva"><span>Ota lähikuva vahingosta</span></label>
		</div>
		<input type="submit" value="Lähetä">
	</form>
</article>

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

<script type="text/javascript">
$(function(){
  $('.moreform').click(function(){
     $('.viformbasic').toggle();
     $('.viformlarge').toggle(); 
  });
});
</script>

<script src="js/custom-file-input.js"></script>

</body>
</html>