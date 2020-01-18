<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Webshop humo" />
  <meta name="author" content="Devine" />
  <meta name="keywords" content="humo, webshop, notreal, shop" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.typekit.net/ktr8mip.css">

    <title>Humo - <?php echo $title; ?></title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
  </head>
  <body>
      <header class="header">
      <h1 class="hidden">Humo</h1>
      <div class="sub-nav">
      <ul class="menu sub-nav__left">
      <li class="menu__item"><a class="menu__link" href="index.php">tv/film</a></li>
      <li class="menu__item highlight"><a class="menu__link" href="index.php">video</a></li>
      <li class="menu__item"><a class="menu__link" href="index.php">tv-gids</a></li>
      <li class="menu__item last-item"><a class="menu__link" href="index.php">zoekertjes</a></li>
      </ul>
      <ul class="menu sub-nav__right">
        <li class="menu__item "><a class="menu__link first-item" href="index.php">Nu in humo</a></li>
        <li class="menu__item"><a class="menu__link" href="">login</a></li>
        <li class="menu__item"><a class="menu__link" href="">Registreer</a></li>
      </ul>
      </div>
      <div class="container__header">
      <nav class="nav">
      <ul class="menu">
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="index.php">HOME</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="index.php">Actua</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="index.php">humor</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-picture" href="index.php"><svg class="humo-logo" height="72" viewBox="0 0 220 72" width="220" xmlns="http://www.w3.org/2000/svg"><g fill="none"><path d="m0 0h220v72h-220z" fill="#ee090c"/><path d="m54.8914729 13.632287h-13.6367664v16.8609865h-10.5138427v-16.8609865h-13.7408638v45.5246637h13.6367663v-17.7040359h10.5138428v17.7040359h13.6367663v-45.5246637zm43.8250277 0h-10.7220377v27.926009c0 2.1076233.2081949 4.5313901-1.5614618 6.1121076-1.145072 1.0538116-3.1229236 1.4753363-4.6843854 1.4753363-1.7696567 0-3.8516057-.632287-4.8925803-2.0022421-.8327796-1.3699552-.8327796-3.4775785-.8327796-4.9529148v-28.4529148h-13.9490587v30.0336322c0 5.4798207.8327796 9.6950673 5.6212625 12.9618835 3.4352159 2.3183856 8.744186 3.2668161 12.9080841 3.2668161 4.6843854 0 9.3687708-.7376682 13.2203766-3.8991031 4.2679955-3.5829597 4.8925803-7.7982063 4.8925803-13.0672646zm56.8372094 0h-18.00886l-6.141749 24.132287h-.104098l-6.349944-24.132287h-17.904762v45.5246637h10.305648v-32.4573991h.104097l8.431894 32.5627802h8.640088l8.223699-32.5627802h.104098v32.5627802h12.803986zm28.106312-.632287c-13.636766 0-21.339978 10.0112108-21.339978 23.6053812 0 12.9618834 7.807309 23.2892376 21.339978 23.2892376s21.339978-10.3273542 21.339978-23.2892376c0-13.5941704-7.807309-23.6053812-21.339978-23.6053812zm0 10.3273543c6.037652 0 6.662237 8.8520179 6.662237 13.383408 0 4.426009-.520487 12.8565023-6.662237 12.8565023-6.245847 0-6.662237-8.4304933-6.662237-12.8565023-.104097-4.5313901.520487-13.383408 6.662237-13.383408z" fill="#fff"/></g></svg></a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="index.php">muziek</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="index.php">boeken</a></li>
      <li class="menu__item menu__item-big active"><a class="menu__link menu__link-big link-active" href="index.php">Shop</a></li>
      <li class="menu__item menu__item-mobile"><a class="menu__link menu__link-hamburger" href="index.php"><svg height="38" viewBox="0 0 26 21" width="50" xmlns="http://www.w3.org/2000/svg"><g fill="#ee0a0d" fill-rule="evenodd"><rect height="5" rx="2.5" width="26"/><rect height="5" rx="2.5" width="26" y="8"/><rect height="5" rx="2.5" width="26" y="16"/></g></svg> </a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="index.php"><svg height="25" viewBox="0 0 25 25" width="25" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="3"><circle cx="10.5" cy="10.5" r="8.5"/><path d="m16 16 8 8"/></g></svg> </a></li>
      </ul>
      </nav>
      </div>
      </header>
      <main>
      <?php echo $content;?>
    </main>
    <footer>
      <nav class="footer__nav">
      <ul class="footer__nav--items">
      <li class="title-item"><span class="subtitle__footer">Actua</span></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">Nu in humo</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">De columns</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">Dossiers</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">politiek</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">sport</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">onze man/vrouw</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">eerder in humo</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="index.php">De eindejaarsvragen</a></li></ul>

      <ul class="footer__nav--items">
      <li class="title-item"><span class="subtitle__footer">Humor</span></li>
      <li class="footer__nav-item"><a href="" class="footer__nav-link">fotospecials</a></li>
      <li class="footer__nav-item"><a href="" class="footer__nav-link">cartoons</a></li>
      <li class="footer__nav-item"><a href="" class="footer__nav-link">uitlaat</a></li>
      <li class="footer__nav-item"><a href="" class="footer__nav-link">(bluderlacht)</a></li>
      <li class="footer__nav-item"><a href="" class="footer__nav-link">doe het zelf</a></li>
      <li class="footer__nav-item"><a href="" class="footer__nav-link">humo’s comedy cup</a></li>
      </ul>

      <ul class="footer__nav--items">
      <li class="title-item"><span class="subtitle__footer">Muziek</span></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">Concertreviews</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">cd-reviews</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">humo’s rock rally</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">festivaltis</a></li></ul>

      <ul class="footer__nav--items">
      <li class="title-item"><span class="subtitle__footer">Boeken</span></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">reviews</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">fictie</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">non-fictie</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">het leden zoals het is</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">de grooste <br>
schrijver van deze <br>
tijd</a></li></ul>

      <div class="last__block--wrapper">
      <ul class="footer__nav--items">
      <li class="title-item"><span class="subtitle__footer">Shop</span></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">Boeken</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">Boeken accessoires</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">Agenda</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">HUMO-Abonnement</a></li>
      <li class="title-item title-item__last"><span class="subtitle__footer">Ga naar</span></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">Tv/film</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">video</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">foto’s</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">wedstrijden</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">zoekertjes</a></li>
      <li class="footer__nav-item"><a class="footer__nav-link" href="">apps</a></li></ul></div>
     </nav>
     <div class="footer__wrapper">
     <ul class="footer__bottom">
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Privacybeleid</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Wedstrijdregelement</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Adverteren</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Gebruiksvoorwaarden</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Cookiebeleid</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Cookie instellingen</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Contact</a></li>
     <li class="footer__bottom-item"><a class="footer-bottom__link" href="">Colofon</a></li></ul>

    <div class="general-items">
    <svg height="25" viewBox="0 0 47 25" width="47" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><image fill="none" height="37" transform="translate(-254 -612)" width="63" x="246" xlink:href="data:image/png;base64,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" y="608"/></svg>
    <p>© 2020 DPG Media</p>
    <div class="socials">
    <img src="assets/img/facebook.png" alt="facebook">
    <img src="assets/img/twitter.png" alt="twitter">
    <img src="assets/img/youtube.png" alt="youtube">
    </div>
    </div>
     </div>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
