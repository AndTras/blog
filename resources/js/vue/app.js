require("./bootstrap");

import App from "./App.vue";
import router from "./router";
//App vue component
App.router = Vue.router;

const app = new Vue({
    name: "app",
    el: "#app",
    components: {
        App: App
    },
    router,
    render: h => h(App)
});
