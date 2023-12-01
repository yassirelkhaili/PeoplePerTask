<?php
require("./src/php/translate.php");
require("./src/php/index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./dist/output.css">
  <link rel="stylesheet" href="./global.css">
  <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
  <script src="./dist/sandbox.js"></script>
  <link rel="stylesheet" href="./dist/output.css">
  <title>PeoplePerTask</title>
</head>

<body class="dark:bg-mainColorDark bg-slate-50">
  <header>
    <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
      <ul class="flex px-16 herothird:px-8 justify-between items-center w-full">
        <li class="flex gap-1">
          <img src="./images/main-logo.svg" alt="main-logo">
          <div class="hf:hidden hl:hidden flex burgerMenu">
            <img src="./images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light" class="cursor-pointer">
            <img src="./images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark" class="cursor-pointer">
          </div>
        </li>
        <li>
          <ul class="justify-center items-center gap-4 hf:flex hidden">
            <li><a href="#" class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]" data-translate="menu_home"><?php echo translate('menu_home'); ?></a>
            </li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4" data-translate="menu_member"><?php echo translate('menu_member'); ?></a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4" data-translate="menu_about"><?php echo translate('menu_about'); ?></a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4" data-translate="menu_contact"><?php echo translate('menu_contact'); ?></a></li>
          </ul>
        </li>
        <li>
          <ul class="flex justify-center items-center gap-4">
            <li>
              <form class="relative hs:flex hidden">
                <input type="text" class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                  dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none" placeholder="<?= translate('search'); ?>" data-translate="search">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="./images/search-icon.svg" alt="search-icon"></button>
              </form>
            </li>
            <?php if (isset($_SESSION["userID"])) : ?>
            <button type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
              </svg>
            </button>
            <div class="relative">
              <div style="right: 50px;" class="userdropdown transform translate-y-3 herothird:right-[-18px] min-w-[11rem] top-[2.5rem] mt-2 z-10 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                  Profile
                </a>
                <?php if ($userInfo["role"] === 3): ?>
                  <a href="../src/pages/dashboard.php" class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                  Dashboard
                </a>
                <?php endif; ?>
                <a href="../src/php/logout.php" class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                  Logout
                </a>
              </div>
          <?php else : ?>
            <li class="hidden ht:flex justify-center items-center gap-3 flex-row">
              <a href="../src/pages/login.php?login"
                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]" data-translate="login"><?= translate('login'); ?></a>
              <a href="../src/pages/signup1.php?login"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]" data-translate="signup"><?= translate('signup'); ?></a>
            </li>
          <?php endif; ?>
            <li>
              <div class="flex ht:hidden burgerMenu">
                <img src="./images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light" class="cursor-pointer">
                <img src="./images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark" class="cursor-pointer">
              </div>
            </li>
            <li>
              <div id="theme-switcher" class="relative">
                <div id="selectThemeDropdown" class="transform translate-y-3 hidden herothird:right-[-18px] right-[-50px] min-w-[11rem] top-[2.5rem] mt-2 z-10 opacity-0 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Auto (system default)
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Default (light mode)
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Dark
                  </a>
                </div>
              </div>
              <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
              </button>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- dropdown menu -->
    <nav id="navDropdown" class="hf:hidden flex overflow-hidden hf:pb-0 dark:border-b-[1px] border-b-seperator">
      <ul class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out" id="navBurgerNav">
        <li>
          <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
            <li><a href="#" class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]" data-translate="home"><?= translate('menu_home'); ?></a>
            </li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4" data-translate="menu_member"><?= translate('menu_member'); ?></a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4" data-translate="menu_about"><?= translate('menu_about'); ?></a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4" data-translate="menu_contact"><?= translate('menu_contact'); ?></a></li>
          </ul>
        </li>
        <li class="hs:hidden flex">
          <ul class="flex justify-center items-center gap-4 flex-col">
            <li>
              <form class="relative hs:hidden flex">
                <input type="text" class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none" placeholder="Search Here...">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="./images/search-icon.svg" alt="search-icon"></button>
              </form>
            </li>
            <?php if (isset($_SESSION["userID"])) : ?>
              
              <li>
                <button id="theme-toggle" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                  <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                  </svg>
                  <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                  </svg>
                </button>
              </li>
            <?php else : ?>
              <li class="flex ht:hidden justify-center items-center gap-3 flex-col">
                <a href="./src/pages/login.php" class="flex w-[18rem] text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium" data-translate="login"><?= translate('login'); ?></a>
                <a href="./src/pages/login.php" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[18rem]" data-translate="signup"><?= translate('signup'); ?></a>
              </li>
            <?php endif; ?>
            <li>
              <button id="theme-toggle" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
              </button>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <main class="px-16 herothird:px-8">
    <form method="GET">
      <button type="submit" name="lang" value="en" class="text-white">EN</button>
      <button type="submit" name="lang" value="fr" class="text-white">FR</button>
    </form>
    <section class="flex justify-center items-center hero:flex-row flex-col py-0">
      <div class="hero:w-[60%] w-[100%] flex justify-center items-start flex-col gap-6">
        <div>
          <h1 class="herothird:text-[40px] herosecond:text-[50px] text-[60px] font-poppins font-semibold">
            <span class="text-[60px] font-poppins font-semibold text-defaultText dark:text-slate-50" data-translate="hero_title"><?php echo translate('hero_title'); ?></span> <span data-translate="hero_title2" class="dark:text-mainPurple text-mainBlue"><?php echo translate('hero_title2'); ?></span> <span class="text-[60px] font-poppins font-semibold text-defaultText dark:text-slate-50" data-translate="hero_title3"><?php echo translate('hero_title3'); ?></span> <span class="dark:text-mainPurple text-mainBlue" data-translate="hero_title4"><?php echo translate('hero_title4'); ?></span>
          </h1>
          <p class="dark:text-textGrey text-defaultText">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae corporis<br> eveniet a omnis odit aut
            culpa accusantium quibusdam.
          </p>
        </div>
        <div class="flex justify-center items-center gap-6">
          <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-[0.9rem] px-[2rem] flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]" data-translate="discover"><?= translate('discover'); ?></button>
          <div class="flex justify-center items-center gap-4">
            <button type="button" class="p-[0.9rem] aspect-square rounded-full dark:bg-slate-50 bg-white"><img src="./images/SVG.svg" alt="playbutton-svg"></button>
            <p class="text-defaultText dark:text-textGrey" data-translate="watch"><?= translate('watch'); ?></p>
          </div>
        </div>
      </div>
      <div>
        <img src="./images/hero-image.svg" alt="hero-image">
      </div>
    </section>
    <section class="py-12 justify-between items-start flex gap-4 hs:flex-nowrap flex-wrap">
      <img src="./images/company1.svg" alt="company1">
      <img src="./images/company2.svg" alt="company2">
      <img src="./images/company3.svg" alt="company3">
      <img src="./images/company4.svg" alt="company4">
      <img src="./images/company5.svg" alt="company5">
    </section>
    <section class="flex justify-between items-center hero:flex-row hero:gap-0 gap-6 flex-col pt-12 w-[100%]">
      <div class="w-[50%] hero:max-w-[40%] hf:max-w-[60%] max-w-full heromax:w-[100%] flex justify-between items-start flex-col gap-6">
        <div>
          <p class="font-normal text-mainBlue dark:text-mainPurple text-[19px] font-poppins" data-translate="howitworks">
            <?= translate('howitworks'); ?>
          </p>
          <h2 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-[35px]" data-translate="howitworksdesc">
            <?= translate('howitworksdesc'); ?>
          </h2>
        </div>
        <div class="w-[100%]">
          <div class="flex flex-col justify-center gap-4">
            <div class="bg-slate-50 dark:bg-mainColorDark shadow-shadowBox dark:drop-shadow-[0px 7px 22px 0pxr gba(255, 255, 234, 0.10)] rounded-[20px] border-solid dark:border-[#343A47] flex justify-between items-center border-[#FFFFFF26] border-[2px] p-4">
              <div class="flex justify-center items-center gap-4">
                <div class="bg-howitworks1 dark:bg-howitworksdark1 rounded-2xl p-[0.8rem] px-8">
                  <p class="font-poppins font-semibold text-[35px] text-mainPurple">1</p>
                </div>
                <h6 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[27px]" data-translate="howitworks1">
                  <?= translate('howitworks1'); ?>
                </h6>
              </div>
              <div>
                <button type="button">
                  <img class="dark:block hidden" src="./images/accordion-toggle-dark.svg" alt="accordion toggle button darkmode">
                  <img class="dark:hidden block" src="./images/accordion-toggle-light.svg" alt="accordion toggle button lightmode">
                </button>
              </div>
            </div>
            <div class="bg-slate-50 dark:bg-mainColorDark shadow-shadowBox dark:drop-shadow-[0px 7px 22px 0pxr gba(255, 255, 234, 0.10)] rounded-[20px] border-solid dark:border-[#343A47] flex justify-between items-center border-[#ffffff96] border-[2px] p-4">
              <div class="flex justify-center items-center gap-4">
                <div class="dark:bg-[#141337] bg-[#ecf3fa] rounded-2xl p-[0.8rem] px-8">
                  <p class="font-poppins font-semibold text-[35px] text-[#2B3DC7]">2</p>
                </div>
                <h6 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[27px]" data-translate="howitworks2">
                  <?= translate('howitworks2'); ?>
                </h6>
              </div>
              <div>
                <button type="button">
                  <img class="dark:block hidden" src="./images/accordion-toggle-dark.svg" alt="accordion toggle button darkmode">
                  <img class="dark:hidden block" src="./images/accordion-toggle-light.svg" alt="accordion toggle button lightmode">
                </button>
              </div>
            </div>
            <div class="bg-slate-50 dark:bg-mainColorDark shadow-shadowBox dark:drop-shadow-[0px 7px 22px 0pxr gba(255, 255, 234, 0.10)] rounded-[20px] border-solid dark:border-[#343A47] flex justify-between items-center border-[#FFFFFF26] border-[2px] p-4">
              <div class="flex justify-center items-center gap-4">
                <div class="bg-howitworks3 dark:bg-[#152A2D] rounded-2xl p-[0.8rem] px-8">
                  <p class="font-poppins font-semibold text-[35px] text-[#30C736]">3</p>
                </div>
                <h6 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[27px]" data-translate="howitworks3">
                  <?= translate('howitworks3'); ?>
                </h6>
              </div>
              <div>
                <button type="button">
                  <img class="dark:block hidden" src="./images/accordion-toggle-dark.svg" alt="accordion toggle button darkmode">
                  <img class="dark:hidden block" src="./images/accordion-toggle-light.svg" alt="accordion toggle button lightmode">
                </button>
              </div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <img src="./images/howitworks.svg" alt="worker holding a pen">
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-12 relative">
      <div class="flex flex-row justify-between items-center w-full">
        <h2 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-[28px]">Featured Profile This Week</h2>
        <button type="button" class="text-mainBlue font-poppins text-base dark:text-mainPurple">View More</button>
      </div>
      <button type="button" class="absolute left-[-1.1rem] top-[14rem] customNextBtn z-10 rounded-full w-10 flex justify-center items-center aspect-square dark:bg-mainPurple bg-mainBlue drop-shadow-[0px_19px_29px_0px_#3E357824] shadow-[0px_19px_29px_0px_#3E357824]"><img src="./images/left-arrow.svg" alt="carousel-arrow-left"></button>
      <button type="button" class="absolute right-[-1rem] top-[14rem] z-10 customPrevBtn rounded-full w-10 aspect-square dark:bg-mainPurple bg-mainBlue flex justify-center items-center drop-shadow-[0px_19px_29px_0px_#3E357824] shadow-[0px_19px_29px_0px_#3E357824]"><img src="./images/right-arrow.svg" alt="carousel-arrow-right"></button>
      <div class="owl-carousel">
        <div class="flex justify-center items-center flex-col gap-6 w-[330px] rounded-[18px] bg-white dark:bg-cardGrey shadow-[0px_2px_28px_0px_#3E35780A] drop-shadow-[0px_2px_28px_0px_#3E35780A] p-7">
          <div class="flex justify-start items-center gap-4 w-full">
            <div class="flex justify-center items-center relative">
              <img src="./images/avatar-3.jpg.svg" alt="avatar-img">
              <img src="./images/div.profile-online-status.svg" alt="online-status" class="absolute bottom-[-0.4rem] right-0">
            </div>
            <div class="flex justify-center items-start gap-1 flex-col">
              <div>
                <p class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-xl">Jennie Smith</p>
              </div>
              <div>
                <p class="text-defaultText dark:text-textGrey font-poppins font-normal text-[15px]">Content Writer</p>
              </div>
            </div>
          </div>
          <div class="flex justify-between w-[100%] items-center">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/stargrey.svg" alt="star-grey">
              <p class="text-defaultText dark:text-slate-50 font-poppins font-bold text-base">4.6</p>
            </div>
            <button type="submit" class="text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-6 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-semibold">$86/hr</button>
          </div>
        </div>
        <div class="flex justify-center items-center flex-col gap-6 w-[330px] rounded-[18px] bg-white dark:bg-cardGrey shadow-[0px_2px_28px_0px_#3E35780A] drop-shadow-[0px_2px_28px_0px_#3E35780A] p-7">
          <div class="flex justify-start items-center gap-4 w-full">
            <div class="flex justify-center items-center relative">
              <img src="./images/avatar-3.jpg.svg" alt="avatar-img">
              <img src="./images/div.profile-online-status.svg" alt="online-status" class="absolute bottom-[-0.4rem] right-0">
            </div>
            <div class="flex justify-center items-start gap-1 flex-col">
              <div>
                <p class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-xl">Jennie Smith</p>
              </div>
              <div>
                <p class="text-defaultText dark:text-textGrey font-poppins font-normal text-[15px]">Content Writer</p>
              </div>
            </div>
          </div>
          <div class="flex justify-between w-[100%] items-center">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/stargrey.svg" alt="star-grey">
              <p class="text-defaultText dark:text-slate-50 font-poppins font-bold text-base">4.6</p>
            </div>
            <button type="submit" class="text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-6 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-semibold">$86/hr</button>
          </div>
        </div>
        <div class="flex justify-center items-center flex-col gap-6 w-[330px] rounded-[18px] bg-white dark:bg-cardGrey shadow-[0px_2px_28px_0px_#3E35780A] drop-shadow-[0px_2px_28px_0px_#3E35780A] p-7">
          <div class="flex justify-start items-center gap-4 w-full">
            <div class="flex justify-center items-center relative">
              <img src="./images/avatar-3.jpg.svg" alt="avatar-img">
              <img src="./images/div.profile-online-status.svg" alt="online-status" class="absolute bottom-[-0.4rem] right-0">
            </div>
            <div class="flex justify-center items-start gap-1 flex-col">
              <div>
                <p class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-xl">Jennie Smith</p>
              </div>
              <div>
                <p class="text-defaultText dark:text-textGrey font-poppins font-normal text-[15px]">Content Writer</p>
              </div>
            </div>
          </div>
          <div class="flex justify-between w-[100%] items-center">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/stargrey.svg" alt="star-grey">
              <p class="text-defaultText dark:text-slate-50 font-poppins font-bold text-base">4.6</p>
            </div>
            <button type="submit" class="text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-6 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-semibold">$86/hr</button>
          </div>
        </div>
        <div class="flex justify-center items-center flex-col gap-6 w-[330px] rounded-[18px] bg-white dark:bg-cardGrey shadow-[0px_2px_28px_0px_#3E35780A] drop-shadow-[0px_2px_28px_0px_#3E35780A] p-7">
          <div class="flex justify-start items-center gap-4 w-full">
            <div class="flex justify-center items-center relative">
              <img src="./images/avatar-3.jpg.svg" alt="avatar-img">
              <img src="./images/div.profile-online-status-active.svg" alt="online-status" class="absolute bottom-[-0.4rem] right-0">
            </div>
            <div class="flex justify-center items-start gap-1 flex-col">
              <div>
                <p class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-xl">Jennie Smith</p>
              </div>
              <div>
                <p class="text-defaultText dark:text-textGrey font-poppins font-normal text-[15px]">Content Writer</p>
              </div>
            </div>
          </div>
          <div class="flex justify-between w-[100%] items-center">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/star.svg" alt="star">
              <img src="./images/stargrey.svg" alt="star-grey">
              <p class="text-defaultText dark:text-slate-50 font-poppins font-bold text-base">4.6</p>
            </div>
            <button type="submit" class="text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-6 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-semibold">$86/hr</button>
          </div>
        </div>
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-8">
      <div class="flex justify-center items-center gap-3 flex-col">
        <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Featured Jobs</h2>
        <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm text-center max-w-[600px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias sit excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
      </div>
      <div class="pt-8 flex justify-center items-center gap-6 flex-wrap">
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <div class="flex justify-center items-center flex-col gap-4">
            <img src="./images/job-logo-1.png.svg" alt="first-job-logo">
            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">Database Programmer</h3>
            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">Maximoz Team</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (4).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 - $25,000</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
            </div>
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (5).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London, England</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="./images/SVG (3).svg" alt="heart-emoji"></div>
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Apply Now</button>
          </div>
        </div>
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <div class="flex justify-center items-center flex-col gap-4">
            <img src="./images/job-logo-1.png.svg" alt="first-job-logo">
            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">Database Programmer</h3>
            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">Maximoz Team</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (4).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 - $25,000</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
            </div>
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (5).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London, England</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="./images/SVG (3).svg" alt="heart-emoji"></div>
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Apply Now</button>
          </div>
        </div>
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <div class="flex justify-center items-center flex-col gap-4">
            <img src="./images/job-logo-1.png.svg" alt="first-job-logo">
            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">Database Programmer</h3>
            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">Maximoz Team</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (4).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 - $25,000</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
            </div>
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (5).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London, England</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="./images/SVG (3).svg" alt="heart-emoji"></div>
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Apply Now</button>
          </div>
        </div>
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <div class="flex justify-center items-center flex-col gap-4">
            <img src="./images/job-logo-1.png.svg" alt="first-job-logo">
            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">Database Programmer</h3>
            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">Maximoz Team</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (4).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 - $25,000</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
            </div>
            <div class="flex justify-between items-center flex-row w-full">
              <img src="./images/List → Item → SVG (5).svg" alt="money-bag">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London, England</p>
              <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="./images/SVG (3).svg" alt="heart-emoji"></div>
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Apply Now</button>
          </div>
        </div>
    </section>
    <section class="flex justify-center items-center pt-8">
      <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-3 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[12rem]">View More</button>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-8">
      <div class="flex justify-around fff:flex-nowrap flex-wrap items-center rounded-[20px] dark:bg-cardGrey bg-mainBlue w-full fff:py-12 py-8 after:top-0 after:left-0 after:bg-no-repeat after:bg-cover after:content-none after:absolute after:z-10">
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">36.8k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">Talented Freelancer</p>
        </div>
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">459k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">VIsitors</p>
        </div>
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">56.5k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">Contract Made</p>
        </div>
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">852k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">Companies</p>
        </div>
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-8">
      <div class="flex justify-center items-center gap-3 flex-col">
        <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Pricing Plan</h2>
        <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm text-center max-w-[600px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias sit excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
      </div>
      <div class="pt-8 flex justify-center items-center gap-6 flex-row hs:flex-nowrap flex-wrap">
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <h1 class="font-poppins text-defaultText dark:text-slate-50 font-bold text-[26px]">FREE</h1>
          <div class="flex justify-center items-center flex-col gap-4">
            <h3 class=" font-poppins font-semibold text-[#FE9E0F] text-[50px]">$0</h3>
            <p class="text-[#FE9E0F] font-poppins font-normal text-base">per month</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Learn More</button>
          </div>
        </div>
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <h1 class="font-poppins text-defaultText dark:text-slate-50 font-bold text-[26px]">PREMIUM</h1>
          <div class="flex justify-center items-center flex-col gap-4">
            <h3 class=" font-poppins font-semibold text-[#FE9E0F] text-[50px]">$175</h3>
            <p class="text-[#FE9E0F] font-poppins font-normal text-base">per month</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Learn More</button>
          </div>
        </div>
        <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <h1 class="font-poppins text-defaultText dark:text-slate-50 font-bold text-[26px]">PLATINUM</h1>
          <div class="flex justify-center items-center flex-col gap-4">
            <h3 class=" font-poppins font-semibold text-[#FE9E0F] text-[50px]">$500</h3>
            <p class="text-[#FE9E0F] font-poppins font-normal text-base">per month</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Learn More</button>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-4">
      <div class="flex justify-between items-center w-full">
        <div class="flex justify-center items-start gap-3 flex-col">
          <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Latest News</h2>
          <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm max-w-[600px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias sit excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
        </div>
        <img src="./images/svgnews.svg" alt="svgnews">
      </div>
      <div class="flex items-center w-full justify-between gap-4 fs:flex-nowrap flex-wrap">
        <div class="rounded-[20px] bg-[url('../images/post-thumb-1.png.svg')] after:bg-[url('../images/div.overlay.svg')] after:bg-cover after:top-0 after:left-0 after:bg-no-repeat after:content-[''] bg-cover bg-no-repeat relative h-[400px] fs:w-[38%] w-[100%] p-4 bg-opacity-[20%] flex justify-end items-start flex-col gap-2">
          <button type="submit" class="absolute z-10 top-[0.5rem] right-[0.5rem] text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-medium w-[full] uppercase">Peoples</button>
          <p class="text-slate-50 font-poppins text-base font-normal">
            <span>James</span>
            <span>24min read</span>
          </p>
          <h6 class="font-poppins text-slate-50 font-bold text-[28px]">
            A Media Critic Focuses on the
            Crisis in Local News
          </h6>
        </div>
        <div class="rounded-[20px] bg-[url('../images/post-thumb-2.png.svg')] bg-cover bg-no-repeat relative h-[400px] fs:w-[62%] w-[100%] p-4 bg-opacity-[20%] flex justify-end items-start flex-col gap-2">
          <button type="submit" class="absolute z-10 top-[0.5rem] right-[0.5rem] text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
            font-poppins text-base font-medium w-[full] uppercase">Technology</button>
          <p class="text-slate-50 font-poppins text-base font-normal">
            <span>James</span>
            <span>24min read</span>
          </p>
          <h6 class="font-poppins text-slate-50 font-bold text-[28px]">
            A Media Critic Focuses on the
            Crisis in Local News
          </h6>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg-footer pt-12 mt-16 flex justify-center items-center flex-col gap-8">
    <div class="flex w-[100%] justify-center items-center ffff:px-16 px-8 ff:flex-row flex-col gap-4">
      <div class="flex justify-center items-center">
        <h3 class="w-[100%] font-poppins font-semibold text-slate-50 text-[36px]">
          Don't miss our weekly updates about freelancer career
        </h3>
      </div>
      <div class="w-[50%] flex justify-center items-center">
        <form class="relative flex">
          <input type="text" class="text-slate-50 shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-footer rounded-full pl-6 pr-28 w-[26rem] h-[60px] border-defaultText border-2 outline-none py-[1rem]" placeholder="Enter you email address...">
          <button type="submit" class="absolute right-2 top-2 text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
            font-poppins text-base font-medium w-[full]">Subscribe</button>
        </form>
      </div>
    </div>
    <div class="flex justify-between ffff:items-start items-center gap-2 font-poppins text-normal text-slate-50 w-[100%] ffff:px-16 px-8 ffff:flex-row flex-col">
      <div class="flex justify-center items-center gap-4 flex-col ffff:w-[40%] fff:w-[70%] w-[100%]">
        <div class="flex justify-start items-start flex-col">
          <img src="./images/div.footer-brand.svg" alt="brandlogo">
          <p>
            PeoplePerTask is a Freelance Landing Website lorem ipsum
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud
          </p>
        </div>
        <div class="flex justify-center items-center gap-2">
          <img src="./images/Item → Link (1).svg" alt="facebook">
          <img src="./images/Item → Link (2).svg" alt="twitter">
          <img src="./images/Item → Link (3).svg" alt="youtube">
          <img src="./images/Item → Link (4).svg" alt="linkedin">
          <img src="./images/Item → Link (5).svg" alt="instagram">
        </div>
      </div>
      <div class="flex justify-center items-start gap-16 ff:flex-row flex-col">
        <div class="ffff:w-[60%] w-[100%] flex justify-center items-start gap-8 text-slate-50">
          <div class="flex justify-start items-start flex-col gap-2">
            <h6 class="font-poppins font-semibold text-[18px] text-start">PPT</h6>
            <ul class="font-poppins font-normal text-[14px] gap-2">
              <li>Why PPT</li>
              <li>Enterprise</li>
              <li>Customer Story</li>
              <li>Security</li>
              <li>Prcing</li>
            </ul>
          </div>
          <div class="flex justify-start items-center flex-col gap-2">
            <h6 class="font-poppins font-semibold text-[18px]">Resources</h6>
            <ul class="font-poppins font-normal text-[14px] gap-2">
              <li>Download</li>
              <li>Help Center</li>
              <li>Events</li>
              <li>Guides</li>
              <li>Partner</li>
              <li>Directories</li>
            </ul>
          </div>
          <div class="flex justify-start items-center flex-col gap-2">
            <h6 class="font-poppins font-semibold text-[18px]">Company</h6>
            <ul class="font-poppins font-normal text-[14px] gap-2">
              <li>About Us</li>
              <li>Conatct Us</li>
              <li>Products</li>
              <li>Login</li>
              <li>Sign Up</li>
              <li>FAQ</li>
            </ul>
          </div>
        </div>
        <div class="flex justify-center items-start gap-2 flex-col w-[40%]">
          <h6 class="font-poppins font-semibold text-[18px]">Get In Touch With Us</h6>
          <ul class="flex justify-start items-start flex-col gap-2">
            <li class="flex justify-start items-start gap-2 font-poppins font-normal text-[14px]">
              <img src="./images/List → Item → SVG (1).svg" alt="address">
              <p>
                832 Thompson Drive, United States
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="./images/List → Item → SVG (2).svg" alt="number">
              <p>
                +123 345123 556
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="./images/List → Item → SVG (3).svg" alt="email">
              <p>
                support@peoplePerTask.id
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-slate-50 font-poppins font-normal text-[14px] flex justify-center items-center border border-b-0 border-l-0 border-r-0 border-t-1 border-seperator w-full p-4">
      <p>
        PeaplePerTask Landing Website - ©
        <span id="currentDate">
        </span>
        All Rights Reserved
      </p>
    </div>
    <script src="./src/scripts/jquery.min.js"></script>
    <script src="./src/scripts/owl.carousel.min.js"></script>
    <script src="./src/scripts/owl.js"></script>
  </footer>
</body>

</html>