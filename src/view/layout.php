<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Webshop humo" />
  <meta name="author" content="Devine" />
  <meta name="keywords" content="humo, webshop, notreal, shop" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Humo - <?php echo $title; ?></title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
  </head>
  <body>
      <header class="header">
      <h1 class="hidden">Humo</h1>
      <div class="sub-nav">
      <ul class="menu sub-nav__left">
      <li class="menu__item"><a class="menu__link" href="">tv/film</a></li>
      <li class="menu__item highlight"><a class="menu__link" href="">video</a></li>
      <li class="menu__item"><a class="menu__link" href="">tv-gids</a></li>
      <li class="menu__item"><a class="menu__link" href="">zoekertjes</a></li>
      </ul>
      <ul class="menu sub-nav__right">
        <li><a href="">Nu in humo</a></li>
        <li><a href="">login</a></li>
        <li><a href="">Registreer</a></li>
      </ul>
      </div>
      <div class="container__header">
      <nav class="nav">
      <ul class="menu">
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="">HOME</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="">Actua</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="">humor</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href=""><svg height="72" viewBox="0 0 220 72" width="220" xmlns="http://www.w3.org/2000/svg"><g fill="none"><path d="m0 0h220v72h-220z" fill="#ee090c"/><path d="m54.8914729 13.632287h-13.6367664v16.8609865h-10.5138427v-16.8609865h-13.7408638v45.5246637h13.6367663v-17.7040359h10.5138428v17.7040359h13.6367663v-45.5246637zm43.8250277 0h-10.7220377v27.926009c0 2.1076233.2081949 4.5313901-1.5614618 6.1121076-1.145072 1.0538116-3.1229236 1.4753363-4.6843854 1.4753363-1.7696567 0-3.8516057-.632287-4.8925803-2.0022421-.8327796-1.3699552-.8327796-3.4775785-.8327796-4.9529148v-28.4529148h-13.9490587v30.0336322c0 5.4798207.8327796 9.6950673 5.6212625 12.9618835 3.4352159 2.3183856 8.744186 3.2668161 12.9080841 3.2668161 4.6843854 0 9.3687708-.7376682 13.2203766-3.8991031 4.2679955-3.5829597 4.8925803-7.7982063 4.8925803-13.0672646zm56.8372094 0h-18.00886l-6.141749 24.132287h-.104098l-6.349944-24.132287h-17.904762v45.5246637h10.305648v-32.4573991h.104097l8.431894 32.5627802h8.640088l8.223699-32.5627802h.104098v32.5627802h12.803986zm28.106312-.632287c-13.636766 0-21.339978 10.0112108-21.339978 23.6053812 0 12.9618834 7.807309 23.2892376 21.339978 23.2892376s21.339978-10.3273542 21.339978-23.2892376c0-13.5941704-7.807309-23.6053812-21.339978-23.6053812zm0 10.3273543c6.037652 0 6.662237 8.8520179 6.662237 13.383408 0 4.426009-.520487 12.8565023-6.662237 12.8565023-6.245847 0-6.662237-8.4304933-6.662237-12.8565023-.104097-4.5313901.520487-13.383408 6.662237-13.383408z" fill="#fff"/></g></svg></a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="">muziek</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="">boeken</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href="">Shop</a></li>
      <li class="menu__item menu__item-big"><a class="menu__link menu__link-big" href=""><svg height="25" viewBox="0 0 25 25" width="25" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="3"><circle cx="10.5" cy="10.5" r="8.5"/><path d="m16 16 8 8"/></g></svg> </a></li>
      </ul>
      </nav>
      </div>
      </header>
      <main>
      <?php echo $content;?>
    </main>
    <footer>
      <nav class="footer__nav">
      <ul class="footer__nav--item"><span class="">Actua</span></ul>
      <ul class="footer__nav--item"><span class="">Humor</span></ul>
      <ul class="footer__nav--item"><span class="">Muziek</span></ul>
      <ul class="footer__nav--item"><span class="">Boeken</span></ul>
      <div class="last__block--wrapper">
      <ul class="footer__nav--item"><span>Shop</span></ul>
      <ul class="footer__nav--item"><span>Ga naar</span></ul></div>
     </nav>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
