// script BURGER
$(document).ready(function () {
  $('.header__open-close').click(function (event) {
    $('.header__wrapper , body').toggleClass('active');
  });
});
// END BURGER

// script Sliders
new Swiper('.slider', {
  loop: true,
  simulateTouch: false,
  touchRatio: 0,
  speed: 1000,
  autoplay: {
    delay: 3000,
    stopOnLastSlide: false,
  }
});

new Swiper('.product-preview__slider', {
  //Слайдер отключаеться если всего 1 слайд(Фото)
  watchOverflow: true,
  //стрелки
  navigation: {
    nextEl: '.product-preview__slider-button-next',
    prevEl: '.product-preview__slider-button-prev'
  },
  keyboard: {
    enable: true,
  }
});
// END Slider


// script Telegram SMS
$('.form').on('submit', function (event) {

  event.stopPropagation();
  event.preventDefault();

  let form = this,
    submit = $('.submit', form),
    data = new FormData(),
    files = $('input[type=file]')


  $('.submit', form).val('Отправка...');
  $('input, textarea', form).attr('disabled', '');

  data.append('Form name', $('[name="form-name"]', form).val());
  data.append('User name', $('[name="name"]', form).val());
  data.append('User email', $('[name="email"]', form).val());


  files.each(function (key, file) {
    let cont = file.files;
    if (cont) {
      $.each(cont, function (key, value) {
        data.append(key, value);
      });
    }
  });

  $.ajax({
    url: 'telegram.php',
    type: 'POST',
    data: data,
    cache: false,
    dataType: 'json',
    processData: false,
    contentType: false,
    xhr: function () {
      let myXhr = $.ajaxSettings.xhr();

      if (myXhr.upload) {
        myXhr.upload.addEventListener('progress', function (e) {
          if (e.lengthComputable) {
            let percentage = (e.loaded / e.total) * 100;
            percentage = percentage.toFixed(0);
            $('.submit', form)
              .html(percentage + '%');
          }
        }, false);
      }

      return myXhr;
    },
    error: function (jqXHR, textStatus) {
      // Тут выводим ошибку
      $('#tg-form-btn').text('ERROR').css('background', 'red')
    },
    complete: function () {
      // Тут можем что-то делать ПОСЛЕ успешной отправки формы
      form.reset()
      $('#tg-form-btn').text('Thank you!').css('background', '#b7ff00')
    }
  });

  return false;
});
// END Telegram SMS

// script filter product

const filterItem = document.querySelectorAll('.grid__item');

document.querySelector('.catalog__ul').addEventListener('click', event => {
  if (event.target.tagName !== 'li') returt = false;
  console.log(event);

  let filterClass = event.target.dataset['filter'];

  filterItem.forEach(elem => {
    elem.classList.remove('hide');
    if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
      elem.classList.add('hide');
    }
  });
});

// END filter product