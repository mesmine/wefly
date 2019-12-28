<template>
    <div>
        <h1>Vols</h1>
        <form @submit="create">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nom du vol:</label>
                        <input type="text" class="form-control" v-model="nom">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Aeroport Depart:</label>
                        <input type="text" class="form-control" v-model="aeroportDepart">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Aeroport Arrivee:</label>
                        <input type="text" class="form-control" v-model="aeroportArrivee">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Jour de depart:</label>
                        <input type="date" class="form-control" v-model="JourDepart">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Jour Arrivee:</label>
                        <input type="date" class="form-control" v-model="jourArrivee">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>heure de depart:</label>
                        <input type="time" class="form-control" v-model="heureDepart">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>heure Arrivee:</label>
                        <input type="time" class="form-control" v-model="heureArrivee">
                    </div>
                </div>
            </div><br/>
            <div class="form-group">
                <button class="btn btn-primary">Creer</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted(){
            console.log('Component mounted')
        },
        data(){
            return {
                nom:'',
                aeroportDepart:'',
                aeroportArrivee:'',
                JourDepart:'',
                jourArrivee:'',
                heureDepart:'',
                heureArrivee:''
            }
        },
        methods: {
            create(){
                let uri = 'http://127.0.0.1:8000/api/postVols';
                this.axios.post(
                    uri,
                    {
                        headers: {
                            "Access-Control-Allow-Origin": "*",
                            "Access-Control-Allow-Methods": "GET, POST, PATCH, PUT, DELETE, OPTIONS",
                            "Access-Control-Allow-Headers": "Origin, Content-Type, X-Auth-Token"
                        }
                    },
                    {
                    nom:this.nom,
                    aeroportDepart:this.aeroportDepart,
                    aeroportArrivee:this.aeroportArrivee,
                    JourDepart:this.JourDepart,
                    jourArrivee:this.jourArrivee,
                    heureDepart:this.heureDepart,
                    heureArrivee:this.heureArrivee

                })
                    .then((response) => {
                        console.log('result :'+response.data)
                    },(err)=>{
                        console.log("Error reserv :"+err);
                    });
            }
        }
    }
</script>
