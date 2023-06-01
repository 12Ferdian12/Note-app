/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'blue': '#27374D',
        'BG': '#DDF5F7',
        'Purp':'#9376E0'
      },

    },
  },
  plugins: [],
}

