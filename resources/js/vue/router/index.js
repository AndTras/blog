import Vue from "vue";
import Router from "vue-router";

import Home from '../components/Home'
import Post from '../components/Post'
import Admin from '../components/Admin'
Vue.use(Router);

export default new Router({
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },  
        {
            path: "/post/:id",
            name: "post",
            component: Post, 
            props: true
        },  
        {
            path: "/post/:id/edit",
            name: "post_edit",
            component: Admin, 
            props: true
        },  
        {
            path: "/admin/",
            name: "admin",
            component: Admin
        },  
    ]
});
