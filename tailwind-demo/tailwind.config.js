/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'], // Set Montserrat as the default font
      },
      colors: {
        primary_color: '#319455',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  
}

