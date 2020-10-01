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
            <div class="card mb-3 bg-white col-md-12 shadow ">
                        <div class="row no-gutters">
                        <div class="col-md-4">
                        <img :src="`images/${post.imagen}`" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8 d-flex flex-column bd-highlight mb-3 pl-5">
                            <div class="card-body">
                                <h4 class="card-title">{{ post.titulo }}</h4>
                                <p class="card-text"><small class="text-muted">{{post.autor.nombre }} {{post.autor.apellidos }}</small></p>
                                <p class="card-text text-sm-left">{{ post.contenido }}</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <router-link tag="a"  to="/">
                                    <a type="button" class="btn btn-light mx-1">Regresar</a>
                                </router-link>
                                <router-link tag="a"  :to="`/post/${post.id}/edit`">
                                    <a type="button" class="btn btn-primary mx-1">Editar</a>
                                </router-link>
                                <a type="button" class="btn btn-danger mx-1" @click="confirm">Eliminar</a>
                            </div>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name: "post",
    data: () => ({
        post:{
            imagen:'placeholder.jpg',
            autor:{}
        }
    }),
    methods: {
        getPosts(id){
            axios.get(`api/post/${this.$route.params.id}`)
            .then(({data}) => {
                this.post = data
            })
            .catch(e => {
                if(e.response.status == 404){
                    alert('Este post ha sido eliminado');
                    this.$router.push('/') 
                }
            })
        },
        confirm(){
            var r = confirm("Estas seguro de eliminar este post?");
            if (r == true) {
                axios.delete(`api/post/${this.$route.params.id}`)
                .then(({data}) => {
                    if(data == 'eliminado'){
                        this.getPosts(this.$route.params.id)
                    }
                })
                .catch(e => {
                    console.log(e);
                })
            }           
        }
    },
    mounted(){
        this.getPosts();
    }
};
</script>