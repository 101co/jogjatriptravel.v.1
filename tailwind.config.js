import preset from './vendor/filament/support/tailwind.config.preset'
 
export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/*.blade.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    plugins: [
        require('flowbite/plugin')
    ],
}