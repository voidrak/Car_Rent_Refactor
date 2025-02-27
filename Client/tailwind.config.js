/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        car: ["Rubik"],
      },
      colors: {
        pr: {
          100: "#ffe7e1", // Lightest shade
          200: "#ffbfb1", // Lighter shade
          300: "#ff9983", // Light tint
          400: "#ff7154", // Slightly lighter than base
          500: "#ff4d30", // Base color
          600: "#e6452b", // Slightly darker
          700: "#cc3e27", // Darker shade
          800: "#b33722", // Darker
          900: "#992f1d", // Darkest shade
        },
        sec: {
          100: "#fafafa",
          200: "#ffd799",
          300: "#f7f7f8",
          400: "#f5f5f6",
          500: "#dddddd",
          600: "#eeeeee",
          700: "#c4c4c4",
          800: "#acacac",
          900: "#acacac",
        },
      },
    },
  },

  plugins: [],
}

