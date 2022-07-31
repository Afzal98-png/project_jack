import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import HomeHead from "@/Components/HomeHead.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import HomeIndex from "@/Components/HomeIndex.vue";
import TextField from "@/Components/Form/TextField.vue";
import SelectOptionField from "@/Components/Form/SelectOptionField.vue";
import RequestHead from "@/Components/RequestHead.vue";
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component('HomeHead', HomeHead)
            .component('BreezeAuthenticatedLayout', BreezeAuthenticatedLayout)
            .component('Head', Head)
            .component('HomeIndex', HomeIndex)
            .component('TextField', TextField)
            .component('SelectOptionField', SelectOptionField)
            .component('RequestHead', RequestHead)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
