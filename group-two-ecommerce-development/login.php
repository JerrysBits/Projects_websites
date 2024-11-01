
<?php 
    $title = "Login";
    include('./includes/header.php');
    //require_once "includes/dbconnection.php";
    // require_once "includes/auth_check.php";

?>

  <div class='relative table-cell text-center align-middle '>
    <div class='inline-block mr-[.67em] leading-[1.3]'>
      <div class='inline-block text-base align-middle'>
        <p class='!text-[var(--promo-font-color)] m-0'>🚚 Enjoy Free Shipping on All Orders!!! 📦
        </p>
      </div>
    </div>
  </div>
</div>


<nav class='navbar p-2 px-4 bg-[var(--background-color-navi)]'>
  <div class='navbar-wrap w-full bg-[var(--background-color-navi)]'>
    <div
      class='mx-auto flex w-full max-w-[var(--page-width)] items-center justify-between gap-8 px-9 py-4 lg:p-4'
    >
      <div class='logo-position-left flex items-center gap-8'>
          <h1 class='mb-0 logo'>
            <a
              href='index.html'
              class='block h-auto text-xl font-semibold leading-none lg:text-2xl lg:leading-8'
            >DebbyRed Store
            </a>
          </h1>
        <div class='hidden lg:block'>
          <ul class='flex flex-wrap items-center gap-8 navbar-items'>
            <li>
              <a
                href='index.html'
                class='font-[var(--navigation-font)] text-[var(--navigation-color)] text-sm leading-normal font-medium hover:underline'
              >Homepage
              </a>
            </li>
                <li class='navbar-item text-[var(--navigation-color)]'>
                  <a
                    href='gourmet-delights.html'
                    class='text-sm font-[var(--navigation-font)] leading-normal font-medium hover:underline navbar-link text-[var(--navigation-color)]'
                  >Arabian Perfume
                  </a>
                </li>
                <li class='navbar-item text-[var(--navigation-color)]'>
                  <a
                    href='organic-pantry.html'
                    class='text-sm font-[var(--navigation-font)] leading-normal font-medium hover:underline navbar-link text-[var(--navigation-color)]'
                  >Oil Perfume
                  </a>
                </li>
                <li class='navbar-item text-[var(--navigation-color)]'>
                  <a
                    href='global-flavors.html'
                    class='text-sm font-[var(--navigation-font)] leading-normal font-medium hover:underline navbar-link text-[var(--navigation-color)]'
                  >For Her
                  </a>
                </li>
                <li class='navbar-item text-[var(--navigation-color)]'>
                  <a
                    href='global-flavors.html'
                    class='text-sm font-[var(--navigation-font)] leading-normal font-medium hover:underline navbar-link text-[var(--navigation-color)]'
                  >For Him
                  </a>
                </li><!-- Top navigation pages -->
                <li class='navbar-item text-[var(--navigation-color)]'>
                  <a
                    href='about-us.html'
                    class='text-sm font-[var(--navigation-font)] text-[var(--navigation-color)] leading-normal font-medium hover:underline navbar-link'
                  >About us
                  </a>
                </li>
          </ul>
        </div>
      </div>

      <div class='min-w-fit'>
        <ul class='flex items-center'>
          <li class='hidden lg:block'>
            <a href='#' class='open-search border-r [border-right-color:var(--inactive-color)] px-4' >
              <i class='fa-solid fa-magnifying-glass' style='color: #333333'></i>
            </a>
          </li>
            <li class='hidden lg:block'>
              <a
                href='login.html'
                class='border-r [border-right-color:var(--inactive-color)] px-4'
              >
                <i
                  class='fa-solid fa-user'
                  style='color: #333333'
                ></i>
              </a>
            </li>
          <li style='padding-left: 10px;'>
            
            <span class="relative" id="cart-target" style="color: #333333">
              <span class="wundery-cart">
                <a class="relative inline-block wundery-cart-link" href="https://checkout.branchbob.com/#/f81989c7-a6ec-44be-96a8-c370c073d1d2/cart">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11V7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7V11M5 9H19L20 21H4L5 9Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  <span class="wundery-cart-box absolute top-[12px] left-[13px]">
                    <span class="wundery-cart-numitems bg-[var(--icon-color)] text-[var(--background-color-navi)] rounded-full text-[10px] w-[20px] h-[20px] font-medium inline-flex justify-center items-center leading-none">0</span>
                  </span>
                </a>
                <div class="wundery-cart-content-for-added-product fixed top-[80px] right-[40px] hidden bg-white border p-[5px_10px] rounded-[3px] text-[13px] font-normal border-[1px_solid_var(--success-color)] text-[var(--success-color)]">
                  <div class="wundery-cart-added-message">
                    <i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp;Product has been added
                  </div>
                </div>
                <div class="wundery-cart-content-for-added-products fixed top-[80px] right-[40px] hidden bg-white border p-[5px_10px] rounded-[3px] text-[13px] font-normal border-[1px_solid_var(--success-color)] text-[var(--success-color)]">
                  <div class="wundery-cart-added-message">
                    <i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp;Products have been added
                  </div>
                </div>
              </span></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>




<div class='search-box fixed inset-0 w-full h-full bg-[var(--font-color)] px-5 py-6 z-[120] pointer-events-none invisible opacity-90 transition-all ease-in-out duration-300'>
  <div class='w-full max-w-2xl mx-auto' style='opacity: 0.9;'>
    <div class='relative'>
      <div class='absolute top-1/2 transform -translate-y-1/2 left-4 text-[var(--link-color)]'>
        <i class='fa-solid fa-magnifying-glass'></i>
      </div>
      <!--
        <input type="text" class="py-3 border border-blue-600 bg-[var(--promoted-background)] px-11 rounded-lg focus:outline-blue-900 w-full block" placeholder="Search...">
      -->
      <div data-wundery-search></div>
      <script type='text/javascript'>
        search.mount('non_speedy')
        $('.wundery-search-input')
          .removeClass('wundery-search-input')
          .addClass(
            'py-3 border border-blue-600 bg-[var(--promoted-background)] px-11 rounded-lg focus:outline-blue-900 w-full block',
          )

        $('.wundery-search-results-wrapper')
          .removeClass('wundery-search-results-wrapper')
          .addClass('mt-1.5 bg-white border rounded-lg p-4')
      </script>
      <button class='absolute px-2 text-xl transform -translate-y-1/2 search-close top-1/2 right-2'>
        <i class='fa-solid fa-xmark'></i>
      </button>
    </div>
  </div>
</div>
<!-- mobile menu -->
<div class='mmenu lg:hidden'>
  <div class='sidebar-wrap rounded-lg lg:border p-7 shadow bg-[var(--background-color-navi)] lg:h-auto relative'>
    <button class='lg:hidden text-lg absolute top-2.5 right-2.5 close-popup w-10 h-10 flex items-center justify-center'>
      <i class='fa-solid fa-xmark'></i>
    </button>

    <hr class='border my-7'>

    <ul class='space-y-9 navbar-items'>
      <li>
        <a
          href='index.html'
          class='text-sm font-medium leading-normal hover:underline navbar-link'
        >Homepage
        </a>
      </li>
          <li class='navbar-item'>
            <a
              href='gourmet-delights.html'
              class='text-sm font-medium leading-normal hover:underline navbar-link '
            >Gourmet Delights
            </a>
          </li>
          <li class='navbar-item'>
            <a
              href='organic-pantry.html'
              class='text-sm font-medium leading-normal hover:underline navbar-link '
            >Organic Pantry
            </a>
          </li>
          <li class='navbar-item'>
            <a
              href='global-flavors.html'
              class='text-sm font-medium leading-normal hover:underline navbar-link '
            >Global Flavors
            </a>
          </li>

      <!-- Top navigation pages -->
          <li class='navbar-item'>
            <a
              href='about-us.html'
              class='text-sm font-medium leading-normal hover:underline navbar-link'
            >About us
            </a>
          </li>
    </ul>

    <hr class='border my-7'>

    <ul class='flex items-center gap-3 md:gap-4'>
    </ul>
  </div>
</div>

<!-- mobile bar -->
<nav
  class='lg:hidden py-5 px-7 bg-[var(--background-color-navi)] backdrop-blur-[20px] z-50 left-0 right-0 mobile-navigation-footer'
  style='color:#333333'
>
  <ul class='flex items-center justify-between w-full gap-4 mx-auto'>
    <li>
      <a href='#' class='text-2xl open-menu text-[var(--icon-color)]'
        ><i class='fa-solid fa-bars'></i
      ></a>
    </li>
    <li>
      <a href='#' class='text-2xl open-search text-[var(--icon-color)]'
        ><i class='fa-solid fa-magnifying-glass'></i
      ></a>
    </li>
    <li>
      <a href='index.html' class='text-2xl text-[var(--icon-color)]'
        ><i class='fa-solid fa-house'></i
      ></a>
    </li>
    <li>
      <a
        href='login.html'
        class='text-2xl text-[var(--icon-color)]'
        ><i class='fa-solid fa-user'></i
      ></a>
    </li>
  </ul>
</nav>

<main class='px-5'>
  <div class='mb-22 mx-auto w-full max-w-[1050px] pt-10 md:pt-20'>
    <div class='mb-10 text-center'>
      <h3 class='mb-5 text-2xl font-bold leading-normal text-[var(--primary-color)] md:text-3xl'>Login</h3>
      <div class='text-sm sm:text-base'></div>
    </div>

    <div class='w-full max-w-2xl pt-5 pb-8 mx-auto space-y-10 login-page'>

      <form id='form-login'>
        <input type='hidden' name='store_id' value='94649aed-0ec5-4a8a-a42c-9b8d449e4dde'>
        <div class='mb-4 form-message'></div>

        <div class='mb-4'>
          <label for='email' class='block mb-2 text-sm font-medium md:text-base' >Email</label>
          <input type='text' name='email'  id='email' class='block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400' />
        </div>

        <div class='mb-4'>
          <label for='password' class='block mb-2 text-sm font-medium md:text-base' >Password</label>
          <input type='password' name='password' id='password' class='block w-full appearance-none rounded-lg border bg-[var(--promoted-background)] p-3 text-sm font-medium focus:outline-yellow-400' />
        </div>

        <div class='mb-4'>
          <input type='submit' class='w-full rounded-lg bg-[var(--primary-color)] py-2.5 bg-[var(--button-color)] px-6 font-semibold text-white transition-all duration-300 hover:bg-[var(--primary-color)] hover:opacity-80' value='Sign in'/>
        </div>

        <div class='flex flex-col text-center text-[var(--link-color)]'>
          <a class='mx-auto mb-2.5 w-fit text-sm hover:underline sm:text-base' href='forgot-password.html' >Forgot password?</a>
          <a class='mx-auto text-sm w-fit hover:underline sm:text-base' href='create-account.html' >Create Account</a>
        </div>
      </form>
    </div>

    <div class='mb-10 text-center'>
      <div class='text-sm sm:text-base'> </div>
    </div>
  </div>
</main>

<footer class='px-5 py-12 md:py-16 footer-wrapper' id='footer'>
  <div class='mx-auto w-full max-w-[var(--page-width)]'>
    <div class='mb-3 flex items-center flex-col sm:flex-row justify-between gap-5 border-b [border-bottom-color:var(--inactive-color)] pb-8'>
        <ul class='flex flex-col items-center gap-8 sm:flex-row'>
              <li>
                <a
                  href='about-us.html'
                  class='text-base font-medium hover:underline'
                >About us
                </a>
              </li>
              <li>
                <a
                  href='payment-and-shipping.html'
                  class='text-base font-medium hover:underline'
                >Payment and Shipping
                </a>
              </li>
              <li>
                <a
                  href='contact.html'
                  class='text-base font-medium hover:underline'
                >Contact
                </a>
              </li>
        </ul>
    </div>
    <div class='flex flex-col items-center justify-between gap-4 mt-8 text-center sm:flex-row sm:text-left sm:mt-0'>
      <div class='pt-8 sm:pt-0 border-t [border-top-color:var(--inactive-color)] sm:border-none sm:mt-0'>
        <div class='text-[var(--font-color)] credits'>Copyright &copy;20244'Tizo Services
        </div>
      </div>

      <div class='flex flex-wrap items-center gap-2 order-first sm:order-none justify-center sm:justify-start display-on'>
            <img
              loading='lazy'
              src='https://wundery-uploads-production.imgix.net/16fdf37e-3f02-4515-8b30-c73ed3096520/a212674c.svg'
              alt='PayPal'
              title='PayPal'
              class='object-contain w-16 h-11'
            >
      </div>
    </div>
  </div>
</footer>


    <script type='text/javascript' src='js/footer.js'></script>
  </body>

<!-- Mirrored from 4-tizo-services.mybranchbob.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 18:00:24 GMT -->
</html>
