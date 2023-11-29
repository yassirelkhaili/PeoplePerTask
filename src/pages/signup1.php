<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../dist/output.css">
  <title>PeoplePerTask</title>
  <!-- font Fredoka -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&display=swap" rel="stylesheet">
  <script src="../dist/sandbox.js"></script>
  <!-- RemixIcon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="../../dist/sandbox.js"></script>

</head>

<body class="bg-body-bg bg-cover bg-center">
  <header class="dark:bg-mainColorDark bg-slate-50">
    <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
      <ul class="flex px-16 herothird:px-8 justify-between items-center w-full">
        <li class="flex gap-1">
          <img src="../../images/main-logo.svg" alt="main-logo">
          <div class="hf:hidden hl:hidden flex burgerMenu">
            <img src="../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
              class="cursor-pointer">
            <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
              class="cursor-pointer">
          </div>
        </li>
        <li>
          <ul class="justify-center items-center gap-4 hf:flex hidden">
            <li><a href="/index.html"
                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
            </li>
            <li><a href="../pages/become.html" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become a
                member</a></li>
            <li><a href="../pages/about.html" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                Us</a></li>
            <li><a href="../pages/contact.html" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                Us</a></li>
          </ul>
        </li>
        <li>
          <ul class="flex justify-center items-center gap-4">
            <li>
              <form class="relative hs:flex hidden">
                <input type="text" class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                  dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                  placeholder="Search Here...">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="../../images/search-icon.svg"
                    alt="search-icon"></button>
              </form>
            </li>
            <li class="hidden ht:flex justify-center items-center gap-3 flex-row">
              <button type="button"
                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                In</button>
              <button type="button"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]">Sign
                Up</button>
            </li>
            <li>
              <div class="flex ht:hidden burgerMenu">
                <img src="../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
                  class="cursor-pointer">
                <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
                  class="cursor-pointer">
              </div>
            </li>
            <li>
              <div id="theme-switcher" class="relative">
                <div id="selectThemeDropdown"
                  class="transform translate-y-3 hidden herothird:right-[-18px] right-[-50px] min-w-[11rem] top-[2.5rem] mt-2 z-10 opacity-0 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
                  <a
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Auto (system default)
                  </a>
                  <a
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Default (light mode)
                  </a>
                  <a
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Dark
                  </a>
                </div>
              </div>
              <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
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
      <ul
        class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out"
        id="navBurgerNav">
        <li>
          <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
            <li><a href="#"
                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
            </li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become a
                member</a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                Us</a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                Us</a></li>
          </ul>
        </li>
        <li class="hs:hidden flex">
          <ul class="flex justify-center items-center gap-4 flex-col">
            <li>
              <form class="relative hs:hidden flex">
                <input type="text"
                  class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                  placeholder="Search Here...">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="../../images/search-icon.svg"
                    alt="search-icon"></button>
              </form>
            </li>
            <li class="flex ht:hidden justify-center items-center gap-3 flex-col">
              <button type="button"
                class="flex w-[18rem] text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium">Log
                In</button>
              <button type="button"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[18rem]">Sign
                Up</button>
            </li>
            <li>
              <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
              </button>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <div class=" max-w-2xl  mx-auto h-fit my-12 bg-white px-8 py-4 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
      <form action="" class="my-10">
        <div class="flex flex-col space-y-5">
          <div class=" flex flex-row items-center gap-8">
            <button class="flex flex-col items-center w-1/2 h-44 bg-white border-zinc-200 border-[0.1rem] p-8 pt-6 rounded-xl text-center font-bold text-xl text-mainBlue font-poppins dark:text-mainPurple  hover:text-white hover:bg-mainBlue hover:border-none  dark:hover:bg-mainPurple dark:hover:text-white dark:bg-cardGrey">
              <i class="ri-user-3-line font-extralight text-3xl"></i>
              <a href="">I’m a client, hiring<br>for a project</a>
            </button>
            <button class="flex flex-col items-center w-1/2 h-44 bg-white border-zinc-200 border-[0.1rem] p-8 pt-6 rounded-xl text-center font-bold text-xl text-mainBlue font-poppins hover:text-white dark:text-mainPurple hover:bg-mainBlue hover:border-none dark:hover:bg-mainPurple dark:hover:text-white dark:bg-cardGrey">
              <i class="ri-briefcase-2-line font-extralight text-3xl"></i>
              <a href="">I’m a freelancer, looking for work</a>
            </button>
          </div>

          <button class="w-full flex items-center justify-center py-3 font-medium text-black text-sm  bg-white border border-1 border-black rounded-full ">
            <img class=" w-6 h-6 " src="../../images/logo-Apple.png" alt="">
            <a href="#">Continue with Apple</a>
          </button>

          <button class="w-full flex items-center justify-center py-3 font-medium text-sm text-white bg-sky-500 border border-none rounded-full ">
            <span class="absolute bg-white border rounded-full p-2 left-8">
              <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="#EA4335 "
                  d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z" />
                <path fill="#34A853"
                  d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z" />
                <path fill="#4A90E2"
                  d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z" />
                <path fill="#FBBC05"
                  d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z" />
              </svg>
            </span>
            <a href="#">Continue with Google</a>
          </button>

          <button
            class="w-full py-3 font-medium text-white text-sm bg-mainBlue hover:bg-indigo-600 rounded-full border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center dark:bg-mainPurple dark:hover:bg-violet-500">
            <span>Sign up With Email</span>
          </button>
          <h2 class="text-center font-poppins text-sm text-black dark:text-white">Already have an account? <a class="text-mainBlue dark:text-mainPurple" href="#">Log in</a></h2>
        </div>
      </form>
    </div>
  </main>

  <footer>
  </footer>


  < </body>

</html>