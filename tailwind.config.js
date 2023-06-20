/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php'
  ],
  theme: {
    screens: {
			sm: "576px",
			md: "768px",
			lg: "992px",
			xl: "1170px"
		},
    container:{
      center: true,
      padding: '15px'
    },
    extend: {
      backgroundImage: {
        'linear': 'linear-gradient(180deg, rgba(23, 36, 48, 0) 31.34%, #172430 100%)',
        'banner': 'linear-gradient(180deg, rgba(23, 36, 48, 0) 31.34%, #172430 100%);',
      },
      colors:{
        'primary': "#C4161C",
        'secondary': "#172430",
        'heading': "#2C234D",
        'content': "#515A60",
        'background': "#F8F8F9",
        'listcolor': "#515A60",
        
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

