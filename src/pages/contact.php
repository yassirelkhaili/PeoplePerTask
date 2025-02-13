<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <title>PeoplePerTask</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
        <div
            class="max-w-2xl h-fit mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
            <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Log in to <span
                    class="text-mainBlue dark:text-mainPurple">PeoplePerTask</span></h1>
            <form class="mt-10 mb-6" id="contactform">

                <div class="flex flex-col space-y-5 items-center justify-center w-[100%]">
                    <div class="flex flex-row items-center justify-between w-[100%] ">
                        <div class="w-[47%]">
                            <label for="first-name"></label>
                            <input id="first-name" type="text" name="firstName" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="First Name">
                        </div>
                        <div class="w-[47%]">
                            <label for="last-name"></label>
                            <input type="text" name="lastName" id="last-name"
                            class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-between w-[100%] ">
                        <div class="w-[47%]">
                            <label for="phone"></label>
                            <input id="phone" type="text" name="phoneNumber" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="Phone">
                        </div>
                        <div class="w-[47%]">
                            <label for="email"></label>
                            <input type="email" name="email" id="email"
                            class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="Email">
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-between space-y-5 w-[100%]">
                        <label for="subject" class="w-[100%]">
                            <input id="subject" name="subject" type="text"
                                class="w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Subject">
                        </label>
                        <label for="message" class="w-[100%]">
                            <input id="message" name="message" type="text"
                                class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Message">
                        </label>
                    </div>
                    <button
                        class="w-full py-3 font-medium text-white bg-mainBlue dark:bg-mainPurple dark:hover:bg-violet-500 hover:bg-indigo-600 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                        <span>Submit</span>
                    </button>
                    <div class="pt-1">
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i class="ri-facebook-fill bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5"></i></a>

                        </span>
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i class="ri-twitter-fill bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5 "></i></a>

                        </span>
                        
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i class="ri-linkedin-fill bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5"></i></a>

                        </span>
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i class="ri-instagram-line bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5"></i></a>

                        </span>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
    </footer>


    </body>

</html>