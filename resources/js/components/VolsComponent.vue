<template>
    <div>
        <h1>Vols</h1>
        <form @submit.prevent="addPost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post Title:</label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Post Body:</label>
                        <input type="text" class="form-control" v-model="post.body">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                post:{}
            }
        },
        methods: {
            addPost(){
                console.log(this.post);
                let uri = 'http://vuelaravelcrud.test/api/post/create';
                this.axios.post(uri, this.post).then((response) => {
                  console.log('result :'+response)
                });
            }
        }
    }
</script>
