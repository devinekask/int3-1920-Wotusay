require('./style.css');
import '../src/js/validate.js';

const fristOption = 'Click me twice to open the file';
const secondOption = 'Click me to enter the matrix';

const terminalInteraction = () => {
  const $terminal1 = document.querySelectorAll(`.terminal-buttons-1`);
  if ($terminal1) {
    $terminal1.forEach(button => {
      button.addEventListener(`click`, clickHandler);
    });
  }

  const $terminal2 = document.querySelectorAll(`.terminal-buttons-2`);
  if ($terminal2) {
    $terminal2.forEach(button => {
      button.addEventListener(`click`, clickHandlerNextChapter);
    });
  }

  const $terminal3 = document.querySelectorAll(`.terminal-buttons-3`);
  if ($terminal3) {
    $terminal3.forEach(button => {
      button.addEventListener(`click`, clickHandlerLastChapter);
    });
  }
};

const clickHandlerLastChapter = e => {
  const $chapter4 = document.querySelector(`.third-terminal`);
  const html = e.currentTarget.innerText;
  const scrollToChaper3 = document.getElementById('4').scrollIntoView();
  if (html === fristOption) {
    $chapter4.classList.remove(`js-hidden`);
    scrollToChaper3;
  } if (html === secondOption) {
    console.log(`wait`);
  }
};

const clickHandlerNextChapter = e => {
  const $chapter3 = document.querySelector(`.second-terminal`);
  const html = e.currentTarget.innerText;
  const scrollToChaper3 = document.getElementById('3').scrollIntoView();
  if (html === fristOption) {
    $chapter3.classList.remove(`js-hidden`);
    scrollToChaper3;
  } if (html === secondOption) {
    console.log(`wait`);
  }
};

const clickHandler = e => {
  console.log(e.currentTarget.innerText);
  const html = e.currentTarget.innerText;
  const $chapter2 = document.querySelector(`.frist-terminal`);
  const scrollToChaper2 = document.getElementById('2').scrollIntoView();
  if (html === fristOption) {
    $chapter2.classList.remove(`js-hidden`);
    scrollToChaper2;
  } if (html === secondOption) {
    console.log(`wait`);
  }

};

const optionSwitcher = () => {
  const $options = document.querySelector(`.js-option`);

  if ($options) {
    $options.addEventListener(`input`, handleInputs);
  }
};

const handleInputs = e => {
  e.preventDefault();
  const value = e.currentTarget.value;
  versionsSetter(value);
};

const versionsSetter = version => {
  console.log(version);
  const $changevalue = document.querySelector(`.hidden-js`);
  const $price = document.querySelector(`.price-books-js`);
  console.log($changevalue.value);
  if (version === 'E-book' && $changevalue.value === '1') {
    $price.textContent = '€1.99';
    $changevalue.value = '31';
  } else if (version === 'Hardcover' && $changevalue.value === '31') {
    $price.textContent = '€12.99';
    $changevalue.value = '1';
  }
  if (version === 'E-book' && $changevalue.value === '3') {
    $price.textContent = '€1.99';
    $changevalue.value = '32';
  } else if (version === 'Hardcover' && $changevalue.value === '32') {
    $price.textContent = '€12.99';
    $changevalue.value = '3';
  }
  if (version === 'E-book' && $changevalue.value === '6') {
    $price.textContent = '€1.99';
    $changevalue.value = '33';
  } else if (version === 'Hardcover' && $changevalue.value === '33') {
    $price.textContent = '€12.99';
    $changevalue.value = '6';
  } if (version === 'E-book' && $changevalue.value === '7') {
    $price.textContent = '€1.99';
    $changevalue.value = '34';
  } else if (version === 'Hardcover' && $changevalue.value === '34') {
    $price.textContent = '€12.99';
    $changevalue.value = '7';
  } if (version === 'E-book' && $changevalue.value === '8') {
    $price.textContent = '€1.99';
    $changevalue.value = '35';
  } else if (version === 'Hardcover' && $changevalue.value === '35') {
    $price.textContent = '€12.99';
    $changevalue.value = '8';
  } if (version === 'E-book' && $changevalue.value === '9') {
    $price.textContent = '€1.99';
    $changevalue.value = '36';
  } else if (version === 'Hardcover' && $changevalue.value === '36') {
    $price.textContent = '€12.99';
    $changevalue.value = '9';
  } if (version === 'E-book' && $changevalue.value === '14') {
    $price.textContent = '€1.99';
    $changevalue.value = '37';
  } else if (version === 'Hardcover' && $changevalue.value === '37') {
    $price.textContent = '€12.99';
    $changevalue.value = '14';
  } if (version === 'E-book' && $changevalue.value === '15') {
    $price.textContent = '€1.99';
    $changevalue.value = '38';
  } else if (version === 'Hardcover' && $changevalue.value === '38') {
    $price.textContent = '€12.99';
    $changevalue.value = '15';
  } if (version === 'E-book' && $changevalue.value === '16') {
    $price.textContent = '€1.99';
    $changevalue.value = '39';
  } else if (version === 'Hardcover' && $changevalue.value === '39') {
    $price.textContent = '€12.99';
    $changevalue.value = '16';
  } if (version === 'E-book' && $changevalue.value === '17') {
    $price.textContent = '€1.99';
    $changevalue.value = '40';
  } else if (version === 'Hardcover' && $changevalue.value === '40') {
    $price.textContent = '€12.99';
    $changevalue.value = '17';
  }
  if (version === '1 jaar' && $changevalue.value === '18') {
    $price.textContent = '€15.96 /maand';
    $changevalue.value = '18';
  } else if (version === '2 jaar' && $changevalue.value === '18') {
    $price.textContent = '€14.36 /maand';
    $changevalue.value = '41';
  }
  else if (version === '2 jaar' && $changevalue.value === '18') {
    $price.textContent = '€12.76 /maand';
    $changevalue.value = '42';
  }

  if (version === '1 jaar' && $changevalue.value === '41') {
    $price.textContent = '€15.96 /maand';
    $changevalue.value = '18';
  }
  else if (version === '3 jaar' && $changevalue.value === '41') {
    $price.textContent = '€12.76 /maand';
    $changevalue.value = '42';
  }

  if (version === '1 jaar' && $changevalue.value === '42') {
    $price.textContent = '€15.96 /maand';
    $changevalue.value = '18';
  }
  else if (version === '2 jaar' && $changevalue.value === '42') {
    $price.textContent = '€14.36 /maand';
    $changevalue.value = '42';
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
  if ($infoButton) {
    $infoButton.addEventListener(`click`, handleClickEvent);
  }
};

const pictureSwitcher = () => {
  const $pictureSwitcher = document.querySelectorAll(`.js-radio`);
  $pictureSwitcher.forEach($side => {
    $side.addEventListener(`input`, handleSwitchEvent);
  });
};

const init = () => {
  pictureSwitcher();
  optionSwitcher();
  infoButton();
  terminalInteraction();
};

init();
