import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import HomeHead from "@/Components/Shared/HomeHead.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import HomeIndex from "@/Components/Shared/HomeIndex.vue";
import TextField from "@/Components/Form/TextField.vue";
import SelectOptionField from "@/Components/Form/SelectOptionField.vue";
import RequestHead from "@/Components/Shared/RequestHead.vue";
import FormButton from "@/Components/Form/FormButton.vue";
import ImageField from "@/Components/Form/ImageField.vue";
import ProfileTextField from "@/Components/Form/ProfileTextField.vue";
import DescriptionTextField from "@/Components/Form/DescriptionTextField.vue";
import ProviderIndex from "@/Components/Shared/ProviderIndex.vue";
import SellerHead from "@/Components/Shared/SellerHead.vue";
import SellerIndex from "@/Components/Shared/SellerIndex.vue";
import IndexHead from "@/Components/Shared/IndexHead.vue";
import { XIcon } from "@heroicons/vue/outline";
import { ref } from "vue";

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
            .component('Link', Link)
            .component('Head', Head)
            .component('DescriptionTextField', DescriptionTextField)
            .component('HomeIndex', HomeIndex)
            .component('TextField', TextField)
            .component('SelectOptionField', SelectOptionField)
            .component('RequestHead', RequestHead)
            .component('FormButton', FormButton)
            .component('ImageField', ImageField)
            .component('ProfileTextField', ProfileTextField)
            .component('DescriptionTextField', DescriptionTextField)
            .component('ProviderIndex', ProviderIndex)
            .component('SellerHead', SellerHead)
            .component('SellerIndex', SellerIndex)
            .component('IndexHead', IndexHead)
            .component('XIcon', XIcon)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
