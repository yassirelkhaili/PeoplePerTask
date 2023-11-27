/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.html",
    "./**/*.php",
    "./dist/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      screens: {
        'hero': "1110px",
        'heromax': { 'max': "1110px" },
        'herosecond': { 'max': "770px" },
        'herothird': { 'max': "628px" },
        'hf': "1430px",
        'hs': "1070px",
        'ht': "770px",
        'hl': { 'max': "770px" },
        'ff': "1040px",
        'fs': "1003px",
        'ft': "860px",
        'fff': "688px",
        'ffff': "816px",
        'tablet': { 'max': '980px' }, 
        'mobile': { 'max': '760px' }
      },
      colors: {
        mainColorDark: "#111827",
        mainPurple: "#9F7AEA",
        mainBlue: "#6366F1",
        defaultText: "#363848",
        loginBtnBg: "#F0EEFF",
        cardGrey: '#161E2D',
        textGrey: '#8E95A1',
        bluepeople: '#6366F1',
        cardDarkMod: '#161E2D',
        pColorWightMode: '#363848',
        pColorDarkMode: '#A9A9A9',
        nameTitleColor: '#9F7AEA',
        darkGrey: '#A9A9A9',
        seperator: '#3F444E',
        darkGrey: '#A9A9A9',
        seperator: '#3F444E',
        AddB : '#ff8412',
        howitworks1: '#F4E9FD',
        howitworks2: '#F4E9FD',
        howitworks3: '#ECFAF0',
        howitworksdark1: '#1D193A',
        howitworksdark2: '#131C37',
        howitworksdark3: '#152A2D',
        footer: '#1F2131',
      },
      width: {
        'ss': '69vw',
      },
      spacing: {
        'apply': '-11rem',
      },

      boxShadow: {
        'shadowBox': '5px 5px 25px rgba(1 1 1 / 20%);',
        'shadowBoxDarkMod': '0px 7px 22px 0px #FFFFFF',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        'fredoka': ['Fredoka', 'sans-serif'],
      },

      backgroundImage: {
        'body-bg': "url('../images/bg.png')",
        'company': "url('./images/bg-svg.svg')",
        'apply-d': "url('../images/apply_pic.svg')",
      }
    },
  },
  plugins: [],

}

