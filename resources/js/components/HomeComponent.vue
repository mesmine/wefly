<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Welcome to Wefly</div>

                <div class="card-body">
                 Make a reservation
                </div>

                <div>
                    <h1>Resrvation</h1>
                    <form @submit.prevent="addPost">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date:</label>
                                    <input type="date" class="form-control" v-model="reservation.date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Etat:</label>
                                    <input type="text" class="form-control" v-model="reservation.etat">
                                </div>
                            </div>
                        </div><br />
                        <div class="form-group">
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                reservation:{
                    date: '',
                    heure: '',
                    numero: '',
                    clientid: '1',
                    etat:'',
                    volid: '1'
                }
            }
        },
        methods: {
            addPost(){

                console.log(this.reservation.date);
                console.log(this.reservation.etat);
                let uri = 'http://127.0.0.1:8000/api/reservation';
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
                        date: this.reservation.date,
                        heure: '16:16:00',
                        numero: 'RE0001',
                        clientid: 1,
                        etat:this.reservation.etat,
                        volid: 1
                    }
                ).then((response) => {
                    console.log('result :'+response.data)
                },(err)=>{
                    console.log("Error reserv :"+err);
                });
            }
        }
    }
</script>
