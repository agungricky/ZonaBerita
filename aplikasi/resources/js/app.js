import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: async name => {
    //Pada bagian ini akan mencari semua file berektensi .vue
    const pages = import.meta.glob('./Pages/**/*.vue');
    const page = await pages[`./Pages/${name}.vue`]();
    return page.default;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
});
