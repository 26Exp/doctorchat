// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        doctorchat: {
          mint: "#A0D2D2",
          red: "#E81F41",
          gray: "#494949",
          blue: "#1C1F62",
        },
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
