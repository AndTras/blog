<template>
    <div>
        <div class="content">
            <div class="nav-scroller py-1 mb-3">
                <nav class="nav d-flex justify-content-center">
                    <router-link tag="a" to="/">
                        <a class="p-2 text-muted">Inicio</a>
                    </router-link>
                    <router-link tag="a" to="/admin">
                        <a class="p-2 text-muted">Administración</a>
                    </router-link>
                </nav>
            </div>
        </div>
        <div class="row mb-2 bg-light">
            <div class="col-md-12 d-flex justify-content-center" v-for="post in posts" :key="post.id">
                <div class="card mb-3 bg-white col-md-6 shadow " style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4 ">
                        <img :src="`images/${post.imagen}`" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ post.titulo }}</h5>
                            <p class="card-text text-sm-left">{{ post.contenido }}</p>
                            <router-link tag="a" class="text-primary " :to="`post/${post.id}`">
                                Continuar leyendo
                            </router-link>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "home",
    data: () => ({
        posts: []
    }),
    methods: {
        getPosts(){
            axios.get('api/post')
            .then(({data}) => {
                this.posts = data
            })
            .catch(e => {
                console.log(e);
            })
        }
    },
    mounted(){
        this.getPosts();
    }
};
</script>