/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        boxShadow:{
          'customblue': '0px 4px 10px rgba(51, 102, 255, 0.5)',
        },
        colors: {
          fundo: '#151A30',
          secundario: '#222B45',
          input: '#192038',
          bdinput: '#101426',
          txtblue: '#3366FF',
        },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'], // Exemplo com Poppins
    },
    },
  },
  plugins: [],
}

