/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Segoe UI', 'Roboto', 'sans-serif'],
        }
    },
  },
  plugins: [],
}
