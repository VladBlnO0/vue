import "./bootstrap";

import {createApp, h} from "vue";
import {createInertiaApp} from "@inertiajs/vue3";
import MainLayout from "@/Layout/MainLayout.vue";

createInertiaApp({
  resolve: async (name) => {
    const pages = import.meta.glob("./Pages/**/*.vue");
    const path = `./Pages/${name}.vue`; // Define the path clearly
    if (!pages[path]) {
      throw new Error(
        `Page not found: ${path}. Check your file naming and directory structure.`,
      );
    }
    const page = await pages[`./Pages/${name}.vue`]();
    page.default.layout = page.default.layout || MainLayout;
    return page;
  },
  setup({el, App, props, plugin}) {
    createApp({render: () => h(App, props)})
      .use(plugin)
      .mount(el);
  },
});
