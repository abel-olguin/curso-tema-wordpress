import {resolve} from 'path';
import {defineConfig} from "vite";

export default defineConfig({
    build: {
        rollupOptions: {
            input   : {
                main     : resolve(__dirname, 'src/js/main.js'),
                mainStyle: resolve(__dirname, 'src/css/main.css'),
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