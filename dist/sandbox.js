"use strict";
/**
 * @author Yassir Elkhaili
 * @license MIT
 * @todo sticky header on scroll down
 * @todo bottom border moves to nav item on hover
 * @todo handle navigation url for pages
*/
let currenTheme = "";
const handleInitialTheme = () => {
    const rootClasses = ["transition", "duration-100"];
    rootClasses.forEach((rootClass) => document.documentElement.classList.add(rootClass));
    if (!("color-theme" in localStorage)) {
        currenTheme = "light";
    }
    else if (localStorage.getItem("color-theme") === "auto") {
        if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
            document.documentElement.classList.add("dark");
        }
        else {
            document.documentElement.classList.remove("dark");
        }
    }
    else if (localStorage.getItem("color-theme") === "dark") {
        document.documentElement.classList.add("dark");
        currenTheme = "dark";
    }
    else {
        document.documentElement.classList.remove("dark");
        currenTheme = "light";
    }
};
handleInitialTheme();
document.addEventListener("DOMContentLoaded", () => {
    const contactForm = document.getElementById("contactform");
    const handleContactFormSubmission = () => {
        contactForm.addEventListener("submit", async (event) => {
            event.preventDefault();
            const formData = new FormData(contactForm);
            const jsonData = {};
            formData.forEach((value, key) => {
                jsonData[key] = value;
            });
            const jsonString = JSON.stringify(jsonData);
            try {
                const response = await fetch("http://localhost/contact.php", {
                    method: "POST",
                    body: jsonString,
                });
                if (response.ok) {
                    const responseData = await response.json();
                    console.log(responseData.message);
                }
                else {
                    console.error("there was an error: " + response);
                }
            }
            catch (error) {
                throw new Error("an error has occured " + error);
            }
        });
    };
    //handle contactform submission
    contactForm && handleContactFormSubmission();
    //dark/light mode switcher
    const themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
    const themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
    const themeToggleBtn = document.getElementById("theme-toggle");
    const dropDown = document.querySelector("#selectThemeDropdown");
    const burgerMenus = document.querySelectorAll(".burgerMenu");
    //handle theme switch
    const toggleLightTheme = () => {
        document.documentElement.classList.remove("dark");
        themeToggleLightIcon?.classList.remove("hidden");
        themeToggleDarkIcon?.classList.add("hidden");
        localStorage.setItem("color-theme", "light");
        currenTheme = "light";
    };
    const toggleDarkTheme = () => {
        document.documentElement.classList.add("dark");
        themeToggleDarkIcon?.classList.remove("hidden");
        themeToggleLightIcon?.classList.add("hidden");
        localStorage.setItem("color-theme", "dark");
        currenTheme = "dark";
    };
    //toggle burger icon
    const toggleBurgerIcon = () => {
        burgerMenus.forEach((burgerMenu) => {
            const lightIcon = burgerMenu.querySelector("#burger-menu-dark");
            const darkIcon = burgerMenu.querySelector("#burger-menu-light");
            if (currenTheme === "dark") {
                lightIcon.classList.remove("hidden");
                darkIcon.classList.add("hidden");
            }
            else {
                darkIcon.classList.remove("hidden");
                lightIcon.classList.add("hidden");
            }
        });
    };
    //toggle default theme
    const handleThemeSwitch = () => {
        if (!("color-theme" in localStorage)) {
            toggleLightTheme();
            currenTheme = "light";
        }
        else if (localStorage.getItem("color-theme") === "auto") {
            window.matchMedia("(prefers-color-scheme: dark)").matches
                ? toggleDarkTheme()
                : toggleLightTheme();
        }
        else if (localStorage.getItem("color-theme") === "dark") {
            toggleDarkTheme();
            currenTheme = "dark";
        }
        else {
            toggleLightTheme();
            currenTheme = "light";
        }
        toggleBurgerIcon();
    };
    handleThemeSwitch();
    //handle dropdownMenu toggle
    const toggleThemeDropdown = () => {
        if (dropDown.classList.contains("hidden")) {
            dropDown.classList.remove("hidden");
            setTimeout(() => {
                dropDown.classList.add("opacity-100");
                dropDown.classList.add("translate-y-0");
            }, 1);
            setTimeout(() => {
                dropDown.classList.remove("opacity-0");
                dropDown.classList.remove("translate-y-3");
            }, 99);
        }
        else {
            dropDown.classList.remove("opacity-100");
            dropDown.classList.remove("translate-y-0");
            dropDown.classList.add("opacity-0");
            dropDown.classList.add("translate-y-3");
            setTimeout(() => {
                dropDown.classList.add("hidden");
            }, 200);
        }
    };
    themeToggleBtn &&
        themeToggleBtn.addEventListener("click", toggleThemeDropdown);
    //close dropdown on outside click
    const handleOutsideClick = (element, event) => {
        const target = event.target;
        if (element) {
            if (target !== dropDown &&
                !element.contains(target) &&
                element.classList.contains("opacity-100"))
                toggleThemeDropdown();
        }
    };
    window.addEventListener("click", handleOutsideClick.bind(null, dropDown));
    //toggle theme
    const handleThemeSwitchBtnClick = (index) => {
        if (index === 0) {
            window.matchMedia("(prefers-color-scheme: dark)").matches
                ? toggleDarkTheme()
                : toggleLightTheme();
            localStorage.setItem("color-theme", "auto");
        }
        else if (index === 1) {
            toggleLightTheme();
        }
        else {
            toggleDarkTheme();
        }
        toggleThemeDropdown();
        toggleBurgerIcon();
    };
    if (dropDown) {
        for (const [index, child] of [...dropDown.children].entries())
            child.addEventListener("click", handleThemeSwitchBtnClick.bind(null, index));
    }
    const handleBurgerMenuClick = () => {
        const burgerMenu = document.getElementById("navBurgerNav");
        if (burgerMenu.classList.contains("max-h-[0rem]")) {
            burgerMenu.classList.remove("max-h-[0rem]");
            burgerMenu.classList.add("max-h-[26rem]");
        }
        else {
            burgerMenu.classList.remove("max-h-[26rem]");
            burgerMenu.classList.add("max-h-[0rem]");
        }
    };
    burgerMenus.forEach((burgerMenu) => {
        burgerMenu.addEventListener("click", handleBurgerMenuClick);
    });
    //get current year
    const getcurrentDate = () => {
        const date = new Date().getFullYear();
        const currentDate = document.getElementById("currentDate");
        if (currentDate)
            currentDate.textContent = date.toString();
    };
    getcurrentDate();
    //handle dashboard theme toggler
    const dashboardToggle = document.querySelector("#checkbox-wrapper");
    const dashboardInput = dashboardToggle?.querySelector("input");
    const slider = dashboardToggle?.querySelector("span");
    const toggleThemeSwitcher = () => {
        const classes = ['bg-mainColorDark', 'border-[#007bff]', 'before:translate-x-[1.4em]', 'before:bg-mainPurple', 'border-mainColorDark', 'bg-white'];
        if (document.activeElement === dashboardToggle?.parentNode) {
            slider?.classList.toggle("shadow-[0_0_1px_#007bff]");
        }
        classes.forEach((className) => slider?.classList.toggle(className));
    };
    currenTheme === "dark" && toggleThemeSwitcher();
    const handleDashbardThemeToggle = (event) => {
        if (event.target === dashboardInput || event.target === dashboardToggle) {
            toggleThemeSwitcher();
            handleThemeSwitch();
            if (currenTheme === "dark") {
                toggleLightTheme();
                currenTheme = "light";
            }
            else {
                toggleDarkTheme();
                currenTheme = "dark";
            }
        }
    };
    dashboardToggle?.addEventListener("click", handleDashbardThemeToggle);
});
