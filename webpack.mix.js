let mix = require('laravel-mix');

// Compile CSS and JavaScript
mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ]);