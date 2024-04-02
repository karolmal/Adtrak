/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js,twig}","./views/*.{php,html,js,twig}"],
  theme: {
    screens: {
      'sm': '480px',
      // => @media (min-width: 480px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }
      'lg': '976px',
      // => @media (min-width: 1280px) { ... }
      'xl': '1440px',
      // => @media (min-width: 1280px) { ... }
    },
    extend: {
      colors: {
        mainBlack: '#000000',
        mainGray: '#14213d',
        mainYellow: '#fca311',
        mainLight: '#e5e5e5',
        mainWhite: '#ffffff',
      }
    },
  },
  plugins: [],
}

