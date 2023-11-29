<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="../../dist/sandbox.js"></script>
    <title>PeoplePerTask</title>
</head>

<body class="bg-slate-50 dark:bg-mainColorDark">
    <header>
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
                        <li><a href="#"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
                                member</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                                Us</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
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
                                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                        src="../../images/search-icon.svg" alt="search-icon"></button>
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
                                <img src="../../images/burger-menu-light.svg" alt="burger-menu-light"
                                    id="burger-menu-light" class="cursor-pointer">
                                <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark"
                                    id="burger-menu-dark" class="cursor-pointer">
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
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
            <ul class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out"
                id="navBurgerNav">
                <li>
                    <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
                        <li><a href="#"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
                                member</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                                Us</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
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
                                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                        src="../../images/search-icon.svg" alt="search-icon"></button>
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
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
        <section class="flex flex-row justify-center items-center p-10 ">
            <div class="w-[47%] flex flex-col justify-start space-y-5">
                <div>
                    <h1
                        class="font-poppins font-semibold text-defaultText text-[3.6rem] mobile:text-[1.6rem] dark:text-slate-50">
                        Find your <span class="text-mainBlue dark:text-mainPurple">dream</span> jobs through <span
                            class="text-mainBlue dark:text-mainPurple">PeoplePerTask</span> easily </h1>
                </div>
                <form class="flex relative justify-center items-center">
                    <input type="search" name="search" id="search"
                        class="w-[43rem] h-[3.7rem] p-6 outline-none shadow-[0px_1px_20px_0px_#00000014] rounded-full placeholder:text-[#818181]"
                        placeholder="Search here...">
                    <button
                        class="absolute w-[8rem] h-[3rem] right-[0.41rem] bg-mainBlue p-2 text-slate-50 font-poppins rounded-full flex justify-center items-center dark:bg-mainPurple">Search
                        Job</button>
                </form>
                <div class="">
                    <buttom
                        class="p-[0.5rem] px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Web Dev</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Mobile Dev</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Design</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Writing</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Admin Support</a>
                    </buttom>
                    <div class="mt-5">
                        <buttom
                            class="p-[0.5rem] mt-3 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                            <a href="#">Customer Service</a>
                        </buttom>
                        <buttom
                            class="p-[0.5rem] mt-3 ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                            <a href="#">Accounting</a>
                        </buttom>
                        <buttom
                            class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                            <a href="#">View all categories</a>
                        </buttom>
                    </div>
                </div>
            </div>
            <div class="w-[47%]">
                <img src="../../images/Main → heroImage.svg" alt="">
            </div>
        </section>

        <section>
            <div>
                <h2>Showing 34 Jobs</h2>
            </div>
            <div>
                <div>
                    <label class="relative inline-flex cursor-pointer items-center">
                        <input id="switch-2" type="checkbox" class="peer sr-only" />
                        <label for="switch-2" class="hidden"></label>
                        <div class="peer h-4 w-11 rounded-full border bg-slate-200 after:absolute after:-top-1 after:left-0 after:h-6 after:w-6 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-mainBlue peer-checked:after:translate-x-full peer-focus:ring-mainBlue"></div>
                    </label>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
        </section>
        <section class="py-12 flex justify-around items-start flex-wrap">
            <img src="../../images/company1.svg" alt="company1">
            <img src="../../images/company2.svg" alt="company2">
            <img src="../../images/company3.svg" alt="company3">
            <img src="../../images/company4.svg" alt="company4">
            <img src="../../images/company5.svg" alt="company5">
        </section>
    </main>

    <footer>
        <script type="module" src="../scripts/sandbox.js"></script>
    </footer>


    < </body>

</html>