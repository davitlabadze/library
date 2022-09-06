/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        backgroundImage: {
            'search': "url('/public/image/search.svg')",

        },
        backgroundPosition:{
            'left-1': '1rem',
            'right-1': '22rem',
            'right-sm': '19rem',

        },
    },
  },
  plugins: [],
}
