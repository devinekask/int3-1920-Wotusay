<?php if($numItems == 0 ) { echo '<p class="error mid"> Er zit niets in je winkelmandje</p>';} else { ?>
<section class="winkelmandje">
<nav class="filter">
<ul class="filter-menu">
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=1">Boeken</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=2">Boeken accessoires</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=3">Agenda</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=detail&id=18">HUMO-Abonnement</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=winkelmandje"><svg height="24" viewBox="0 0 32 24" width="32" xmlns="http://www.w3.org/2000/svg"><path d="m1.70573828.00811647c-1.10456948.17673113-1.85673109 1.21543051-1.67999997 2.31999999.17673112 1.10456949 1.21543048 1.85673111 2.31999997 1.68000001h6l.36 1 1.64000002 5.00000003 1.64 5c.16.52.84 1 1.36 1h14c.56 0 1.2-.48 1.36-1l3.24-10.00000003c.16-.52-.08-1-.64-1h-17.76l-1.52-2.88c-.3300771-.67396607-1.0096687-1.10643342-1.76-1.12h-8.00000002c-.11975601-.01082196-.24024399-.01082196-.36 0-.07992787-.00480433-.16007213-.00480433-.24 0zm12.64000002 20.00000003c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2zm12 0c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2z" fill="#ee0a0d"/></svg></a></li>

</ul>
</nav>
<div class="container">
<div class="title__wrapper">
<h2 class="longread__title">
Humokassa
</h2>
<div class="line"></div></div>
<div class="progress-steps">
<div class="step__wrapper">
<a class="underline__gone" href="index.php?page=kassastep2">
<span class="information__step information__step--active">Gegevens</span>
<span class="number__step number__step--active">1</span></a>
</div>
<div class="step__wrapper">
<a class="underline__gone" href="index.php?page=kassastep3">
<span class="information__step information__step--active">Betaalwijze</span>
<span class="number__step number__step--active">2</span></a>
</div>
<div class="step__wrapper">
<a class="underline__gone" href="index.php?page=overview&payment-methode=<?php echo $_GET['payment-methode']?>">
<span class="information__step information__step--active">Overzicht</span>
<span class="number__step number__step--active">3</span></a>
</div>
<div class="step__wrapper">
<a class="underline__gone" href="">
<span class="information__step">Betalen</span>
<span class="number__step">4</span></a>
</div>
</div>
<div class="overview__wrapper">
  <div class="overzicht__wrapper">
    <span class="red title">Overzicht</span>
    <div class="aflever__wrapper">
    <div class="aflever">
      <span class="bold">Aflever- en factuuradres</span>
      <p><?php echo $guest['voornaam']; ?> <?php echo $guest['achternaam']; ?></p>
      <p><?php echo $guest['straatnaam']; ?> <?php echo $guest['huisnummer']; ?></p>
      <p><?php echo $guest['postcode']; ?>, <?php echo $guest['woonplaats']; ?></p>
      </div>
      <div class="contact--gevens">
        <span class="bold">Contactgegevens</span>
        <p><?php echo $guest['email']; ?></p>
        <p><?php echo $guest['telefoonumber']; ?></p>
      </div></div>
      <a class="red" href="index.php?page=kassastep2">Wijzig gegevens</a>
      <div class="line-full"></div>
      <div class="levering">
        <span class="bold">Levering</span>
        <p class="info-text">Zaterdag 11 januari (gratis bezorgd)</p>
        <a  class="red" href="">Wijzig aflevermethode</a>
      </div>
      <div class="line-full"></div>
      <div class="betaalmethode">
        <span class="bold">Betaalmethode</span>
        <p class="info-text">
          <?php if($_GET['payment-methode'] == 'bancontact')  {?>
          Bancontact <?php } if($_GET['payment-methode'] == 'visa')  {?>
          Visa <?php } elseif ($_GET['payment-methode'] == 'paypal') { ?>
          Paypal<?php }; if(empty($_GET['payment-methode'])) {
                header('Location: index.php?page=kassastep3');

          } ?></p>
        <a class="red" href="index.php?page=kassastep3">Wijzig betaalmethode</a>
      </div>
  </div>
  <div class="winkelmandje__overview">
    <span class="bold title">Winkelmandje</span>
    <div class="image__wrapper">
      <div class="overview__items">
    <?php
          $total = 0;
          $korting= 4.50;
          if ($numItems == 0 ){ echo 'Er zit niets in je winkelmandje'; } else {
          foreach($_SESSION['winkelmandje'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
          ?>
    <a href="index.php?page=detail&amp;id=<?php echo $item['product']['id'];?>">
  <img src="<?php echo $item['product']['shop'];?>" alt="<?php echo $item['product']['name'];?>" >
  </a>
    <div class="text__wrapper">
    <p><?php echo $item['product']['name'];?></p>
    <p><?php echo $item['quantity'];?> x €<?php echo money_format("%i", $item['product']['price']);?></p></div><?php } ?>
    <?php } ?>
</div></div>
<div class="line-full"></div>
<div class="total-text">
      <p>Totaal artikelen <span class="aantal-mini">(<?php echo $numItems;?>)</span></p>
      <p class="bold">€<?php echo money_format("%i", $total);?></p></div>
      <div class="total-text">
      <p>Verzendkosten</p>
      <p class="green">Gratis</p></div>
      <div class="total-text">
      <p>Kortingscode</p>
      <p class="bold">- €<?php echo money_format("%i", $korting);?></p></div>
      <div class="line-full"></div>
      <div class="total-text">
      <p class="bold">Totaal</p>
      <p class="bold">€<?php echo money_format("%i", $total - $korting);?></p></div>
  </div>
  <div class="button__wrapper">
<div class="back__wrappper overview">
<a href="index.php?page=kassastep3" class="goback underline__gone"> Terug</a>
</div>
<div class="forward__wrapper">
  <form action="index.php?page=overview" method="post">
<button type="submit" name="action" value="checkout" class="forward"> Afrekenen </button>
</form>
</div>
</section>
<?php } ?>
