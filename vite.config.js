import {resolve} from 'path';
import {defineConfig} from "vite";

export default defineConfig({
    build: {
        rollupOptions: {
            input   : {
                'main-script'     : resolve(__dirname, 'src/js/main-script.js'),
                'main-style': resolve(__dirname, 'src/css/main-style.css'),
            },
            external: ['jQuery'],
            globals : {
                jQuery: 'jQuery',
            },
            output  : {
                entryFileNames: 'js/[name].js',
                assetFileNames: (assetInfo) => { //main.css
                    const extension = assetInfo.name.split('.').pop();
                    if (extension === 'css') return `css/${assetInfo.name}`;
                    return assetInfo.name;
                },
            },
        },
        root         : 'src',
    },

})