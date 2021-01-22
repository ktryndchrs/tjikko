const postcssConfig = {
	plugins: [
    require('tailwindcss'),
    require('postcss-nesting'),,
    require('postcss-nested'),
    require('autoprefixer'),
  ],
};

if (process.env.NODE_ENV === 'production') {
	postcssConfig.plugins.push(
		require('cssnano')
	);
}

module.exports = postcssConfig;