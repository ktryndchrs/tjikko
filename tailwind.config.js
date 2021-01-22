module.exports = {
  purge: [
    './site/templates/*.php',
    './assets/images/*.svg',
    './site/snippets/*.php',
    './site/tailwind/*.css',
    './site/tailwind/*.scss',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'xxs': '375px',
      'xs': '414px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {
      container: {
        'center': true,
      },
      borderWidth: {
        '1': '1px',
      },
      colors: {
        "primary": {
          '50': '#d9f8e6',
          '100': '#aae1c1',
          '200': '#7cc99d',
          '300': '#4fae78',
          '400': '#219653',
          '500': '#1c8045',
          '600': '#166c38',
          '700': '#12562b',
          '800': '#0d411f',
          '900': '#082b14',
        },
        "secondary": {
          '50': '#fefdfc', 
          '100': '#fcfbfa', 
          '200': '#f8f6f2', 
          '300': '#f3f1ea', 
          '400': '#eae6da', 
          '500': '#E1DBCA', 
          '600': '#cbc5b6', 
          '700': '#a9a498', 
          '800': '#878379', 
          '900': '#6e6b63'
        }
      },
      height: {
        "1/3vh": "33.333vh",
        "2/3vh": "66.666vh",
        "1/4vh": "25vh",
        "3/4vh": "75vh",
        "1/5vh": "20vh",
        "2/5vh": "40vh",
        "3/5vh": "60vh",
        "4/5vh": "80vh",
        "1/2vh": "50vh",
        "100vh": "100vh",
        "1/3vw": "33.333vw",
        "2/3vw": "66.666vw",
        "1/4vw": "25vw",
        "3/4vw": "75vw",
        "1/5vw": "20vw",
        "2/5vw": "40vw",
        "3/5vw": "60vw",
        "4/5vw": "80vw",
        "1/2vw": "50vw",
        "100vw": "100vw",
      }
    }
  },
  variants: {
    mixBlendMode: ['responsive'],
    backgroundBlendMode: ['responsive'],
    isolation: ['responsive'],

    extend: {
      backgroundColor: ['active']
    },
  },
  plugins: [
    require('tailwindcss-blend-mode')(),
  ],
}
