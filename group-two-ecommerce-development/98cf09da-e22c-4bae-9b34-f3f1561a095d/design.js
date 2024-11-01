$(document).ready(function() {
  // Validate contact form
  let form = $('#form-contact-us');

  form.validate({
    ignore: ".ignore",
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        phoneno: true
      },
      message: {
        required: true
      }
    },
    messages: {
      name: {
        required: "Please enter surname"
      },
      email: {
        required: "Please enter email" ,
        email: "Please enter a valid email" ,
      },
      phone: {
        required: "Please enter number phone" ,
        phoneno: "Please enter a valid number phone"
      },
      message: {
        required: "Please enter message"
      }
    }
  });

  $(".checkbox-input").click(function() {
    if($(this).is(":checked")){
      $('.button-send').attr("disabled", false)
    }else {
      $('.button-send').attr("disabled", true)
    }
  });

  form.submit(function(){
    if (form.valid()) {

      grecaptcha.ready(function () {
        grecaptcha.execute('6Lf-0boZAAAAACHEvNGMyR5fR0eDD7p6Clx3vTWn', {action: 'store_contact'}).then(function(token) {
          let captcha_token = 'g-recaptcha-response-data='+ token;

          $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data : form.serialize() + '&' + captcha_token,
            success: function(res){
              if (res.success) {
                alert(res.label);
                window.location = "https://4-tizo-services.mybranchbob.com";
              }
            }
          });

        });
      });


      return false;
    }
  });

  let goBackButton = document.querySelector('#go-back');
  if(goBackButton) {
    goBackButton.addEventListener('click', () => {
      history.back();
    });
  };

  // Custom the previous and next fslightbox buttons
  let lightboxElement = document.querySelector('[data-fslightbox]');
  if (lightboxElement) {
    lightboxElement.addEventListener('click', () => {
      let previousBtn = document.querySelector('.fslightbox-slide-btn-container-previous .fslightbox-slide-btn');
      if(previousBtn) {
        previousBtn.innerHTML = `
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.3553 16L14.7088 15.6464L19.9776 10.3777C19.9776 10.3777 19.9776 10.3777 19.9776 10.3776C20.1838 10.1714 20.2996 9.89165 20.2996 9.59999C20.2996 9.30836 20.1838 9.02867 19.9777 8.8224C19.9776 8.82237 19.9776 8.82233 19.9776 8.82229M14.3553 16L18.0688 8.46879C18.3688 8.16884 18.7757 8.00034 19.2 8.00034C19.6242 8.00034 20.0311 8.16884 20.3312 8.46879L19.9776 8.82229M14.3553 16L14.7088 16.3535L19.9743 21.619C20.1729 21.8262 20.2828 22.1028 20.2803 22.3899C20.2778 22.6783 20.1621 22.9542 19.9581 23.1582C19.7542 23.3621 19.4783 23.4778 19.1899 23.4803C18.9028 23.4828 18.6261 23.3729 18.419 23.1743L12.0224 16.7777C12.0224 16.7777 12.0223 16.7777 12.0223 16.7776C11.8161 16.5714 11.7003 16.2916 11.7003 16C11.7003 15.7083 11.8161 15.4286 12.0223 15.2223C12.0223 15.2223 12.0224 15.2223 12.0224 15.2223L18.4223 8.8224C18.4223 8.82238 18.4223 8.82237 18.4223 8.82235M14.3553 16L18.4223 8.82235M19.9776 8.82229C19.7713 8.61614 19.4916 8.50034 19.2 8.50034C18.9083 8.50034 18.6286 8.61616 18.4223 8.82235M19.9776 8.82229L18.4223 8.82235" fill="white" stroke="white"/>
          </svg>
        `;
      }

      let nextBtn = document.querySelector('.fslightbox-slide-btn-container-next .fslightbox-slide-btn');
      if(nextBtn) {
        nextBtn.innerHTML = `
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.6447 16L17.2912 16.3536L12.0224 21.6223C12.0224 21.6223 12.0224 21.6223 12.0224 21.6224C11.8162 21.8286 11.7004 22.1084 11.7004 22.4C11.7004 22.6916 11.8162 22.9713 12.0223 23.1776C12.0224 23.1776 12.0224 23.1777 12.0224 23.1777M17.6447 16L13.9312 23.5312C13.6312 23.8312 13.2243 23.9997 12.8 23.9997C12.3758 23.9997 11.9689 23.8312 11.6688 23.5312L12.0224 23.1777M17.6447 16L17.2912 15.6465L12.0257 10.381C11.8271 10.1738 11.7172 9.8972 11.7197 9.61011C11.7222 9.32169 11.8379 9.0458 12.0419 8.84185C12.2458 8.6379 12.5217 8.52221 12.8101 8.51971C13.0972 8.51721 13.3739 8.62706 13.581 8.82571L19.9776 15.2223C19.9776 15.2223 19.9777 15.2223 19.9777 15.2224C20.1839 15.4286 20.2997 15.7084 20.2997 16C20.2997 16.2917 20.1839 16.5714 19.9777 16.7777C19.9777 16.7777 19.9776 16.7777 19.9776 16.7777L13.5777 23.1776C13.5777 23.1776 13.5777 23.1776 13.5777 23.1777M17.6447 16L13.5777 23.1777M12.0224 23.1777C12.2287 23.3839 12.5084 23.4997 12.8 23.4997C13.0917 23.4997 13.3714 23.3838 13.5777 23.1777M12.0224 23.1777L13.5777 23.1777" fill="white" stroke="white"/>
          </svg>
        `;
      }
    });
  }

  if (window.innerWidth <= 1023) {
    window.onscroll = function() { mobileScrolling() };
  }

  // The mobile navigation on header implementation
  var header = $('.mobile-navigation-header');
  var navbar = header.prevAll('.navbar').first();
  var promobar = header.prevAll('.promobar-on').first();
  let navbarHeight = 0;
  let promobarHeight = 0;
  if (navbar.length > 0) {
    navbarHeight = navbar.outerHeight();
  }
  if (promobar.length > 0) {
    promobarHeight = promobar.outerHeight();
  }
  var mainElement = $('.mobile-navigation-header').nextAll('main').first();

  function mobileScrolling() {
    if (window.pageYOffset > (navbarHeight + promobarHeight)) {
      header.addClass('mobile-navigation-header-sticky');
      mainElement.css('padding-top', header.outerHeight());
    } else {
      header.removeClass('mobile-navigation-header-sticky');
      mainElement.css('padding-top', 'unset');
    }
  };

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 &&
        phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
  }, "");
});
