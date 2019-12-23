<template>
    <div>
        <h1>Vols</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'vols' }" class="btn btn-primary">Ajouter un vol</router-link>
            </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ville Depart</th>
                <th>Ville Arrive</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="vol in vols" :key="vol.id">
                <td>{{ vol.id }}</td>
                <td>{{ vol.aeroportDepart }}</td>
                <td>{{ vol.aeroportarrivee }}</td>
                <td><router-link :to="{name: 'edit', params: { id: vol.id }}" class="btn btn-primary">Edit</router-link></td>
                <td><button class="btn btn-danger" @click = "deletePost(vol.id)">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('ListComponent mounted.')
        },
        data() {
            return {
                vols: []
            }
        },
        created() {
            let uri = 'http://127.0.0.1:8000/api/vols';
            this.axios.get(uri,
                {
                    headers: {
                        "Access-Control-Allow-Origin": "*",
                        "Access-Control-Allow-Methods": "GET, POST, PATCH, PUT, DELETE, OPTIONS",
                        "Access-Control-Allow-Headers": "Origin, Content-Type, X-Auth-Token"
                    }
                }
            ).then(response => {
                this.vols = response.data.vols;
                // console.log('results ok :'+JSON.parse(response.data));
                console.log('results all :'+response.data.vols);
                console.log('results all1 :'+response.data.vols.toString());
            },(err)=>{
                console.log("probleme :"+err);
            });
        },
        methods: {
            deletePost(id)
            {
                let uri = `http://vuelaravelcrud.test/api/post/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.posts.splice(this.posts.indexOf(id), 1);
                });
            }
        }
    }
</script>
