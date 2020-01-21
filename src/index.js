require('./style.css');

const aantalChanger = () => {
  const $korting = document.querySelector('.kortingscode__input');
  $korting.addEventListener(`input`, handleInputField);
};

const handleInputField = e => {
  e.preventDefault();
  const winkelmandje = document.querySelector(`.header`);
  const $price = document.querySelector(`.korting`);

  const value = e.currentTarget.value;
  if (value === 'Thebooks33' || value === 'humoboeken') {
    $price.textContent = '€4.50';
    winkelmandje.innerHTML += `<?php echo $korting= 4.5 ?>`;
  }
  else {
    winkelmandje.innerHTML += `<?php echo $korting = 0 ?>`;
    $price.textContent = '€0.00';
  }
};

const handleSwitchEvent = e => {
  e.preventDefault();
  const value = e.currentTarget.value;
  pictureSwitch(value);
};

const pictureSwitch = item => {
  const $picture = document.querySelector(`.js-picture`);
  if (item === '1') {
    $picture.attributes.src.value = 'assets/img/neuromancer-detail.png';
  } if (item === '2') {
    $picture.attributes.src.value = 'assets/img/backside-detail.png';
  }
};

const handleClickEvent = e => {
  const $info = document.querySelector(`.information-js`);
  $info.classList.toggle(`hidden`);
  e.preventDefault();
};

const infoButton = () => {
  const $infoButton = document.querySelector('.information');
  $infoButton.addEventListener(`click`, handleClickEvent);
};

const pictureSwitcher = () => {
  const $pictureSwitcher = document.querySelectorAll(`.js-radio`);
  $pictureSwitcher.forEach($side => {
    $side.addEventListener(`input`, handleSwitchEvent);
  });
};

const init = () => {
  pictureSwitcher();
  infoButton();
  aantalChanger();
};

init();
