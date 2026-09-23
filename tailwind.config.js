/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php", // Ini penting agar Tailwind membaca file PHP CI4
    "./public/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}