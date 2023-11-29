<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <!-- <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="../dist/sandbox.js"></script>
    <title>PeoplePerTask</title>

</head>

<body class="dark:bg-mainColorDark">
    <header class="dark:bg-mainColorDark bg-slate-50">
        <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
            <ul class="flex px-16 justify-between items-center w-full">
                <li class="flex gap-1">
                    <img src="../images/main-logo.svg" alt="main-logo">
                    <div class="hidden ht:flex hf:hidden burgerMenu">
                        <img src="../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
                            class="cursor-pointer">
                        <img src="../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
                            class="cursor-pointer">
                    </div>
                </li>
                <li>
                    <ul class="justify-center items-center gap-4 hf:flex hidden">
                        <li><a href="../index.html"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a member</a></li>
                        <li><a href="./about.html"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                                Us</a></li>
                        <li><a href="./contact.html"
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
                                        src="../images/search-icon.svg" alt="search-icon"></button>
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
                                <img src="../images/burger-menu-light.svg" alt="burger-menu-light"
                                    id="burger-menu-light" class="cursor-pointer">
                                <img src="../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
                                    class="cursor-pointer">
                            </div>
                        </li>
                        <li>
                            <div id="theme-switcher" class="relative">
                                <div id="selectThemeDropdown"
                                    class="transform translate-y-3 hidden right-[-50px] min-w-[11rem] top-[2.5rem] mt-2 z-10 opacity-0 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
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
                        <li><a href="../index.html"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a member</a></li>
                        <li><a href="./about.html"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                                Us</a></li>
                        <li><a href="./contact.html"
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
                                        src="../images/search-icon.svg" alt="search-icon"></button>
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
                            <div id="theme-switcher" class="relative">
                                <div id="selectThemeDropdown"
                                    class="transform translate-y-3 hidden right-[-50px] min-w-[11rem] top-[2.5rem] mt-2 z-10 opacity-0 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
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
    </header>
    <main>
        <section class="flex flex-col text-center bg-apply-d">
            <!-- <img src="../images/apply_pic.svg" alt="apply"> -->
            <div class="mt-apply">
                <h1 class="text-4xl md:text-6xl font-bold text-white">Job Details</h1>
                <span>Jobs /Highspeed Studios /UI Designer</span>
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
                    <input type="text"
                        class="text-slate-50 shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-footer rounded-full pl-6 pr-28 w-[26rem] h-[60px] border-defaultText border-2 outline-none py-[1rem]"
                        placeholder="Enter you email address...">
                    <button type="submit" class="absolute right-2 top-2 text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
                font-poppins text-base font-medium w-[full]">Subscribe</button>
                </form>
            </div>
        </div>
        <div
            class="flex justify-between ffff:items-start items-center gap-2 font-poppins text-normal text-slate-50 w-[100%] ffff:px-16 px-8 ffff:flex-row flex-col">
            <div class="flex justify-center items-center gap-4 flex-col ffff:w-[40%] fff:w-[70%] w-[100%]">
                <div class="flex justify-start items-start flex-col">
                    <img src="../images/div.footer-brand.svg" alt="brandlogo">
                    <p>
                        PeoplePerTask is a Freelance Landing Website lorem ipsum
                        dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud
                    </p>
                </div>
                <div class="flex justify-center items-center gap-2">
                    <img src="../images/Item → Link (1).svg" alt="facebook">
                    <img src="../images/Item → Link (2).svg" alt="twitter">
                    <img src="../images/Item → Link (3).svg" alt="youtube">
                    <img src="../images/Item → Link (4).svg" alt="linkedin">
                    <img src="../images/Item → Link (5).svg" alt="instagram">
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
                            <img src="../images/List → Item → SVG (1).svg" alt="address">
                            <p>
                                832 Thompson Drive, United States
                            </p>
                        </li>
                        <li class="flex justify-start items-start gap-2">
                            <img src="../images/List → Item → SVG (2).svg" alt="number">
                            <p>
                                +123 345123 556
                            </p>
                        </li>
                        <li class="flex justify-start items-start gap-2">
                            <img src="../images/List → Item → SVG (3).svg" alt="email">
                            <p>
                                support@peoplePerTask.id
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div
            class="text-slate-50 font-poppins font-normal text-[14px] flex justify-center items-center border border-b-0 border-l-0 border-r-0 border-t-1 border-seperator w-full p-4">
            <p>
                PeaplePerTask Landing Website - ©
                <span id="currentDate">
                </span>
                All Rights Reserved
            </p>
        </div>
    </footer>
</body>

</html>