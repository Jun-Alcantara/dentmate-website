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
    color: {
      brandPrimary: '#083d67'
    },
    extend: {},
  },
  plugins: []
}

