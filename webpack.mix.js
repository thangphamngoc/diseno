const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/style.scss', 'public/css');
// mix.sass('resources/sass/style.scss', 'public/css');
// module.exports = {
//   module: {
//     rules: [
//       {
//         test: /\.svg$/,
//         use: [
//           'babel-loader',
//           'vue-svg-loader',
//         ],
//       },
//     ],
//   },
// };
// mix.webpackConfig({
//   resolve: {
//     modules: [
//         'node_modules',
//         path.resolve(__dirname, './public/home-svg.svg')
//       ]
//   }
// });