/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
       'EYECHART_BOLD' : 'EYECHART_BOLD',
       'EYECHART_REGULAR' : 'EYECHART_REGULAR',
       'AvenirLTStd-Light' : 'AvenirLTStd-Light',
       'Bonky' : 'Bonky',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
