require('./style.css');


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
};

init();
