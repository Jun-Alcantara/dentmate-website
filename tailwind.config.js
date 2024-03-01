const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    './index.php',
    './index.html',
    './**/*.php'
  ],
  purge: [
    './*.html',
    './*.php',
    './**/*.php'
  ],
  theme: {
    colors: {
      ...colors,
      'primary': '#083d67',
      'accent': '#ffd700',
      'fontPrimary': '#083D67',
      'fontSecondary': '#FBB03B',
      'bgPrimary': '#00B2FF',
      'bgSecondary': '#BBAFFF',
      'bg3': '#FF4545',
      'bg4': '#37D8DE',
      'bgWhite': '#FFF6EA'
    },
    extend: {},
  },
  plugins: []
}

