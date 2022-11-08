// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        "dc-mint": "#A0D2D2",
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};
