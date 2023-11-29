<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="../../dist/sandbox.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta name="keywords"
        content="freelancer, PeoplePreTask, web development, graphic design, writing, maintenance, service, homecare, home, project, task">
    <meta name="description"
        content="Welcome to PeoplePerTask, your go-to expert for a wide range of freelance services. Whether you need web development, graphic design, writing, or other specialized skills, I deliver high-quality and reliable solutions. As a freelancer, I am dedicated to meeting your project needs with professionalism and expertise. Contact me today for efficient, friendly, and affordable freelance services you can trust.">
    <meta name="author" content="PeoplePerTask">
    <title>PeoplePerTask</title>
</head>

<body class="dark:bg-mainColorDark">
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
                        <li><a href="../../index.html"
                                class="dark:text-mainPurple  font-poppins font-normal text-base  dark:border-b-mainPurple ">Home</a>
                        </li>
                        <li><a href="./become.html"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
                                member</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText text-mainBlue border-b-mainBlue border-b-[3px] py-[0.6rem] font-poppins font-normal text-base py-4">About
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
        <section class="flex p-16 flex-col md:flex-row p-8 md:p-16 w-full">
            <div class="w-full md:w-2/4 flex flex-col justify-center">
                <h1 class="text-4xl md:text-6xl font-bold dark:text-white">Welcome to <span
                        class="text-bluepeople">PeoplePerTask</span>
                    Your Gateway to <span class="text-bluepeople">Freelance
                        Excellence</span></h1>
                <div>
                    <p class="pt-6 md:pt-10 text-base md:text-xl dark:text-white">
                        At People per Task, we're driven by a passion for delivering top-notch freelance work. We
                        understand
                        the
                        challenges
                        businesses and entrepreneurs face when seeking independent talent for their projects. That's why
                        we're
                        dedicated to
                        simplifying the process for you.
                        Feel free to personalize this text according to the values, services, and mission of your
                        "PeoplePerTask" company.</p>
                </div>
            </div>
            <div class="w-full md:w-2/4 flex justify-center md:justify-end mt-6 md:mt-0">
                <img class="w-full md:max-w-lg" src="../../images/about_main_section_pic.svg" alt="aboutUs">

            </div>
        </section>
        <section class="px-8 md:px-16 flex flex-col justify-evenly text-center h-auto md:h-screen">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold dark:text-white">Why choose us</h2>
                <p class="pt-2 dark:text-white">It's very important to have a customer service, but it's just the way it
                    is
                </p>
                <p class="pt-2 dark:text-white">tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="flex flex-col md:flex-row justify-evenly items-center">
                <div
                    class="w-full md:w-1/3 max-w-sm p-6 mb-6 md:mb-0 border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-cardDarkMod shadow-shadowBox">
                    <img class="w-15" src="../../images/orange.svg" alt="trusted">
                    <h3 class="font-semibold text-xl  dark:text-white">Trusted</h3>
                    <p class="text-pColorWightMode dark:text-pColorDarkMode">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div
                    class="w-full md:w-1/3 max-w-sm p-6 mb-6 md:mb-0 border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-cardDarkMod shadow-shadowBox">
                    <img src="../../images/purple.svg" alt="easy to use">
                    <h3 class="font-semibold text-xl dark:text-white">Easy to Use</h3>
                    <p class="text-pColorWightMode dark:text-pColorDarkMode">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div
                    class="w-full md:w-1/3 max-w-sm p-6 mb-6 md:mb-0 border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-cardDarkMod shadow-shadowBox">
                    <img src="../../images/blue.svg" alt="faster">
                    <h3 class="font-semibold text-xl  dark:text-white">Faster</h3>
                    <p class="text-pColorWightMode dark:text-pColorDarkMode">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-16 flex flex-col mt-8 text-center min-h-screen overflow-x-hidden md:p-px md:m-px">
            <div class="pb-10 md:p-px md:m-px">
                <h2 class="text-3xl font-bold dark:text-white">What our Customer Says</h2>
                <p class=" dark:text-white">It's very important to have a customer service, but it's just the way it is
                </p>
                <p class=" dark:text-white">tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="pl-[0rem] flex flex-col md:flex-row mx-auto md:pl-[10rem]">
                <div>
                    <div class="flex carousel-img " id="carousel">
                        <div class="flex item w-[70vw] pl-[2rem] mr-[20rem] animate__backOutLeft ">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10" src="../../images/chinesworker.webp "
                                    alt="our clients">
                            </div>
                            <div>
                                <h3 class="flex text-start font-bold pb-5 dark:text-nameTitleColor">William Smith</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">Dev of True Love Studios</span>
                                    <div class="flex"><img class="sm:hidden" src="../../images/stars.svg"
                                            alt="our rating">
                                        <span class="text-xl font-bold dark:text-white pl-3">4.8</span>
                                    </div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex item w-[70vw] pl-[8rem] mr-[20rem] animate__backOutLeft">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10"
                                    src="../../images/circle-profile-pic.jpg " alt="our clients">
                            </div>
                            <div>
                                <h3 class="text-start font-bold pb-5 dark:text-nameTitleColor">Nicolas Smith</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">Designer of True Love Studios</span>
                                    <div class="flex"><img src="../../images/stars.svg" alt="our rating"> <span
                                            class="text-xl font-bold dark:text-white pl-3">4.3</span></div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex item w-[70vw] ml-[10rem]  pl-[8rem] mr-[20rem] animate__backOutLeft">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10" src="../../images/circle-man.webp "
                                    alt="our clients">
                            </div>
                            <div>

                                <h3 class="text-start font-bold pb-5 dark:text-nameTitleColor">Smith Andrew</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">CEO of True Love Studios</span>
                                    <div class="flex"><img src="../../images/stars.svg" alt="our rating"> <span
                                            class="text-xl font-bold dark:text-white pl-3">5.0</span></div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="flex item w-[70vw] ml-[20rem] animate__backOutLeft">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10"
                                    src="../../images/debashree-banerjee-circle.jpg " alt="our clients">
                            </div>
                            <div>
                                <h3 class="text-start font-bold pb-5 dark:text-nameTitleColor">Pablo toree</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">Dev of True Love Studios</span>
                                    <div class="flex"><img src="../../images/stars.svg" alt="our rating"> <span
                                            class="text-xl font-bold dark:text-white pl-3">4.5</span></div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-[70rem]">
                        <div>
                            <button id="previous"><img src="../../images/arrow_left.svg" alt="scroll left"></button>
                            <button id="next"><img src="../../images/arrow_write.svg" alt="scroll write"></button>
                        </div>
                        <div><img src="../../images/div.avatar-group.png" alt="our clients"></div>
                    </div>
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
                    <img src="../../images/div.footer-brand.svg" alt="brandlogo">
                    <p>
                        PeoplePerTask is a Freelance Landing Website lorem ipsum
                        dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud
                    </p>
                </div>
                <div class="flex justify-center items-center gap-2">
                    <img src="../../images/Item → Link (1).svg" alt="facebook">
                    <img src="../../images/Item → Link (2).svg" alt="twitter">
                    <img src="../../images/Item → Link (3).svg" alt="youtube">
                    <img src="../../images/Item → Link (4).svg" alt="linkedin">
                    <img src="../../images/Item → Link (5).svg" alt="instagram">
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
                            <img src="../../images/List → Item → SVG (1).svg" alt="address">
                            <p>
                                832 Thompson Drive, United States
                            </p>
                        </li>
                        <li class="flex justify-start items-start gap-2">
                            <img src="../../images/List → Item → SVG (2).svg" alt="number">
                            <p>
                                +123 345123 556
                            </p>
                        </li>
                        <li class="flex justify-start items-start gap-2">
                            <img src="../../images/List → Item → SVG (3).svg" alt="email">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script>
        const slider = document.querySelector("#carousel");
        const clients = document.querySelectorAll(".item");
        const nextbtn = document.querySelector("#next");
        const prvbtn = document.querySelector("#previous");
        let index = 0;
        let move = 0;
        const slideWidth = 95;

        function next() {
            if (index < clients.length - 1) {
                index++;
                move += slideWidth;
            } else {
                index = 0;
                move = 0;
            }
            slider.style.transform = `translateX(${-move}rem)`;
        }

        function previous() {
            if (index > 0) {
                index--;
                move -= slideWidth;
            } else {
                index = clients.length - 1;
                move = index * slideWidth;
            }
            slider.style.transform = `translateX(${-move}rem)`;
        }

        nextbtn.addEventListener("click", next);
        prvbtn.addEventListener("click", previous);

        ////////////////////////////////////

        const sliderImg = document.querySelector(".carousel-wrapper");
        const image = document.querySelectorAll(".img");
        let i = 0;
        let m = 0;
        const slideWidthImg = 95;

        function next_img() {
            if (i < image.length - 1) {
                i++;
                m += slideWidthImg;
            } else {
                i = 0;
                m = 0;
            }
            sliderImg.style.transform = `translateX(${-m}rem)`;
        }

        function previous_img() {
            if (i > 0) {
                i--;
                m -= slideWidthImg;
            } else {
                i = image.length - 1;
                m = i * slideWidthImg;
            }
            sliderImg.style.transform = `translateX(${-m}rem)`;
        }

        nextbtn.addEventListener("click", next_img);
        prvbtn.addEventListener("click", previous_img);


    </script>
</body>

</html>