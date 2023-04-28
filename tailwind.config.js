/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      "inter": ["Inter", "sans-serif"],
      "open-sans": ["Open Sans", "sans-serif"],
      "outfit": ["Outfit", "sans-serif"],
    },
  },
  plugins: [],
}