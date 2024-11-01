<!doctype html>
<html lang='en'>
    <head>
        <title> <?php echo $title ?> </title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <link rel='preconnect' href='https://branchbobstatic.com/fonts.googleapis.com' />
        <link rel='preconnect' href='https://branchbobstatic.com/fonts.gstatic.com' crossorigin />
        <link rel='preload' href='https://branchbobstatic.com/fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap' as='style' onload="this.rel='stylesheet'" />
        <link rel='stylesheet' type='text/css' href='styles/styles.min.css' />
        <link rel='stylesheet' href='styles/design.css' />
        <link rel='stylesheet' href='styles/font-awesome.min.css' />
        <meta name='description' content='' />
        <link rel='canonical' href='login.html'>

    <script type='text/javascript' src='scripts/scripts.min.js'></script>
    <script type='text/javascript' src='js/design.js'></script>
    <script type='text/javascript' src='../sdk.branchbob.com/js/v6.2.6/wundery.js'></script>

    <script type='text/javascript'>
      if (typeof Wundery == 'function') {
        const i18n = new Translation()
        i18n.addDictionaries(translations)
        i18n.useLocale('en')
        //cart-count w-5 h-5 flex items-center justify-center text-white rounded-full text-[10px] leading-4 font-medium -tracking-tighter absolute top-1/2 left-1/2 bg-coolGray wundery-cart-numitems basket-count
        const cartHTML = `
          <span class="wundery-cart">
            <a class="relative inline-block wundery-cart-link">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 11V7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7V11M5 9H19L20 21H4L5 9Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
              <span class="wundery-cart-box absolute top-[12px] left-[13px]">
                <span class="wundery-cart-numitems bg-[var(--icon-color)] text-[var(--background-color-navi)] rounded-full text-[10px] w-[20px] h-[20px] font-medium inline-flex justify-center items-center leading-none">0</span>
              </span>
            </a>
            <div class="wundery-cart-content-for-added-product fixed top-[80px] right-[40px] hidden bg-white border p-[5px_10px] rounded-[3px] text-[13px] font-normal border-[1px_solid_var(--success-color)] text-[var(--success-color)]">
              <div class="wundery-cart-added-message">
                <i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp;${i18n.t(
                  'addedProduct',
                )}
              </div>
            </div>
            <div class="wundery-cart-content-for-added-products fixed top-[80px] right-[40px] hidden bg-white border p-[5px_10px] rounded-[3px] text-[13px] font-normal border-[1px_solid_var(--success-color)] text-[var(--success-color)]">
              <div class="wundery-cart-added-message">
                <i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp;${i18n.t(
                  'addedProducts',
                )}
              </div>
            </div>
          </span>`

        window.Wundery.Cart.Template.prototype.html = function () {
          return cartHTML
        }

        var cart = new Wundery.Cart({
          storeId: '94649aed-0ec5-4a8a-a42c-9b8d449e4dde',
          debug: false,
          apiEndpoint: 'https://api.branchbob.com/storefront_api/v1',
          checkoutEndpoint: 'https://checkout.branchbob.com',
        })
        cart.setup('#cart-target')
      } else {
        console.warn('Wundery is not available, cannot initialize cart')
      }
    </script>

    <script type='text/javascript'>
      function recaptchaCallback() {
        $('#hiddenRecaptcha').valid()
      }
    </script>

    <script type='text/javascript' src='js/global_variables.js'></script>
    <script type="text/javascript" src="../sdk.branchbob.com/frontline/v1.0.33/frontline.js"></script>
    <script type="text/javascript">
      // Initialize new frontline client
      var frontline = new Frontline({
        storeId: '94649aed-0ec5-4a8a-a42c-9b8d449e4dde',
        debug: true,
        auth: 'eyJhbGdvbGlhQXBwSWQiOiJRMTY3T1FHN1FOIiwiYWxnb2xpYVNlYXJjaEFwaUtleSI6IjM5MWU3MTA2MDk2MWVhZjJjY2NlYzAxOWFmOTNjMzRmIn0=',
        locale: 'en',
        designId: '98cf09da-e22c-4bae-9b34-f3f1561a095d',
        apiEndpoint: 'https://api.branchbob.com/storefront_api/v1'
      });

      // Initialize a search instance
      var search = frontline.newSearch({
        onSearch: function (term) { /* triggered on search */ },
      });

      // Initialize a cookie banner
      var cookieBanner = frontline.newCookieBanner({
        position: 'bottom',
        url: 'https://4-tizo-services.mybranchbob.com',
        locale: 'en'
      });

      // Handle append branding text next to Copyright on the footer
      frontline.appendTextNextToCopyright('en');
    </script>
               
    <script id="matomo_branchbob">
      var _paq = window._paq = window._paq || [];
      _paq.push(['setCustomDimension', 1, 'https://4-tizo-services.mybranchbob.com']);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u='http://find-penguins.branchbob.io/';
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '2']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>

  </head>

  <body class='bg-[var(--background-color)] pb-10 lg:pb-0 m-0 leading-[inherit] text-[var(--font-color)] text-base'><div
  class='display-on promobar-on w-full m-0 table font-semibold bg-[var(--promo-background-color)] shadow-[0_1px_3px_2px_rgba(0,0,0,0.12)] h-[38px] text-[14px] p-[.2em_.5em]'
  style='font-family: var(--google-font); -webkit-font-smoothing: antialiased;'
>

