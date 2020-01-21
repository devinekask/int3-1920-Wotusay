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
<a class="underline__gone" href="">
<span class="information__step information__step--active">Gegevens</span>
<span class="number__step number__step--active">1</span></a>
</div>
<div class="step__wrapper">
<a class="underline__gone" href="">
<span class="information__step information__step--active">Betaalwijze</span>
<span class="number__step number__step--active">2</span></a>
</div>
<div class="step__wrapper">
<a class="underline__gone" href="">
<span class="information__step">Overzicht</span>
<span class="number__step">3</span></a>
</div>
<div class="step__wrapper">
<a class="underline__gone" href="">
<span class="information__step">Betalen</span>
<span class="number__step">4</span></a>
</div>
</div>
<form action="index.php" method="get">
<div class="payment__wrapper">
<input checked selected class="radio--payment" type="radio" name="payment-methode" value="bancontact" id="bancontact">
<label class="payment__methode first" for="bancontact">
  <img src="assets/img/bancontact.png" alt="bancontact">
  <span>Bancontact</span>
</label></div>
<div class="payment__wrapper">
<input class="radio--payment" type="radio" name="payment-methode" value="visa" id="visa">
<label for="visa"  class="payment__methode">
  <img src="assets/img/visa.png" alt="bancontact">
  <span>Visa</span>
</label> </div>
<div class="payment__wrapper">
<input class="radio--payment" type="radio" name="payment-methode" value="paypal" id="paypal">
<label   class="payment__methode"for="paypal">
  <img src="assets/img/paypal.png" alt="paypal">
  <span>Paypal</span>
</label></div>
<div class="button__wrapper">
<div class="back__wrapper">
<a href="index.php?page=kassastep2" class="goback underline__gone"> Terug</a>
</div>
<div class="forward__wrapper">
<input type="hidden" name="page" value="overview">
<input type="submit" value="Volgende"  class="forward">
</form>
</div>
</section
