/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    "./views/**/*.{html,php}" // 👈 this line scans your views
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Outfit', 'ui-sans-serif', 'system-ui'],
        heading: ['Poppins', 'sans-serif'],
        paragraph: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

