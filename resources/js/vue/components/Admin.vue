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
    
        <div class="content-wrapper ">
            <div class="row">
                <div class="col-md-6 offset-md-3  px-0 card shadow ">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-secondary  text-white" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Crear Post
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <form @submit="formSubmit" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="Titulo">Titulo</label>
                                        <input type="text" class="form-control" id="Titulo" v-model="post.titulo" placeholder="Titulo">
                                    </div>
                                    <div class="form-group">
                                        <label for="Imagen">Imagen</label>
                                        <input type="file" class="form-control" id="Imagen" ref="fileupload"  v-on:change="onImageChange">
                                    </div>
                                    <div class="form-group">
                                        <label for="Contenido">Contenido</label>
                                        <textarea class="form-control" v-model="post.contenido" id="Contenido" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Autor</label>
                                        <select class="form-control" id="exampleFormControlSelect1" v-model="post.autor">
                                            <option v-for="option in autores" v-bind:key="option.id"  :value="option.id">{{option.nombre}}</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-secondary  text-white" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Crear Autor
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                               <form @submit="guardarAutor">
                                    <div class="form-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" class="form-control" id="Nombre" v-model="autor.nombre" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" id="Apellidos" v-model="autor.apellidos" placeholder="Apellidos">
                                    </div>
                                    <button class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
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
    name: "admin",
    data: () => ({
        id : "",
        autores:[],
        post:{
            titulo:'',
            imagen:'',
            contenido:'',
            autor: null,
        },
        autor:{
            nombre:'',
            apellidos:''
        }
    }),
    methods: {
        getAutor(){
            axios.get('api/autor')
            .then(({data}) => {
                this.autores = data
            })
            .catch(e => {
                console.log(e);
            })
        },

        getData(){
            axios.get(`api/post/${this.id}/edit`)
            .then(({data}) => {
                this.post.titulo = data.titulo;
                this.post.contenido = data.contenido;
                this.post.autor = data.autor_id;
                this.post.imagen = data.imagen;
            })
            .catch(e => {
                console.log(e);
            })
        },

        onImageChange(e){
            this.post.imagen = e.target.files[0];
        },

        formSubmit(e) {
            e.preventDefault();

            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

            let formData = new FormData();
            formData.append('titulo', this.post.titulo);
            formData.append('imagen', this.post.imagen);
            formData.append('contenido', this.post.contenido);
            formData.append('autor', this.post.autor);

            if(this.id == undefined){
                axios.post('api/post', formData, config)
                .then( (response) => {
                    this.post.titulo = "";
                    this.post.imagen = "";
                    this.post.contenido = "";
                    this.post.autor = "";
                    this.$refs.fileupload.value=null;
                    alert(response.data);
                })
                .catch( (error) => {
                    console.log(error);
                });
            }else{
                axios.post('api/posts/' + this.id,formData, config)
                .then(function (response) {
                    alert(response.data);
                })
                .catch(function (error) {
                    console.log(error);            
                });
            }
        },

        guardarAutor(e){
            e.preventDefault(); 
            let formData = new FormData();
            formData.append('nombre', this.autor.nombre);
            formData.append('apellidos', this.autor.apellidos);

            axios.post('api/autor', formData)
            .then( (response) => {
              this.autor.nombre = "";
              this.autor.apellidos = "";
              this.getAutor();
               alert(response.data);
            })
            .catch( (error) => {
                console.log(error);
            });
        }
    },
    mounted(){
        this.id = this.$route.params.id;
        this.getAutor();
        this.getData();
    }
    
};
</script>