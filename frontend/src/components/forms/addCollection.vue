<template>
    <!--Card-->
    <div class="card cardsAdd">

        <!--Card content-->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="h4-responsive text-center">Collection</h4>    
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-12">
                    <mdb-btn tag="a" color="success" floating><i class="fa fa-plus" aria-hidden="true"></i></mdb-btn>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5 class="p-1">Collection 1</h5>
                    <h5 class="p-1">Collection 2</h5>
                    <h5 class="p-1">Collection 3</h5>
                </div>
                <div class="col-6">
                    <mdb-switch class="p-1" checked />
                    <mdb-switch class="p-1" checked />
                    <mdb-switch class="p-1" checked />
                </div>
            </div>


            <!-- <div class="row">
                <div class="col-md-12" v-if="loader == false">
                    <p class="h6 text-center">Active</p>
                    <div class="row">
                        <div class="col text-center py-1" v-for="act in active" :key="act.id">
                            <mdb-btn-group>
                                <mdb-btn outline="primary" darkWaves rounded size="sm">{{act.name}}</mdb-btn>
                                <div v-on:click="activeModal(act.id,true)">
                                <mdb-btn outline="danger" darkWaves rounded size="sm"><i class="fa fa-trash" aria-hidden="true"></i></mdb-btn>
                                </div>
                            </mdb-btn-group>
                        </div>
                    </div>
                    <hr>
                    <p class="h6 text-center">Desactive</p>
                    <div class="row">
                        <div class="col text-center py-1" v-for="dst in desactive" :key="dst.id">
                            <mdb-btn-group>
                                <mdb-btn outline="primary" darkWaves rounded size="sm">{{dst.name}}</mdb-btn>
                                <div v-on:click="activeModal(dst.id,false)">
                                    <mdb-btn outline="success" darkWaves rounded size="sm" ><i class="fa fa-plus-square-o" aria-hidden="true"></i></mdb-btn>
                                </div>
                            </mdb-btn-group>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  text-center" v-if="loader">
                    <img class="img-fluid text-center" src="/static/img/images/loader.gif" alt="">
                </div>
            </div>
            <hr> -->
            <!-- Subscription form -->
       <!--      <div class="row">
                <div class="col-md-12">
                    
                    
                    <p class="red">{{errorValidation}}</p>
                    <mdb-input class="grey-text" type="text" v-model="nameAdd" label="Material Type name"/>
                    
                    <div class="text-center mt-4" v-on:click="addMaterial()">
                        <mdb-btn class="btn-block" color="green " icon="paper-plane-o" iconRight >Add New</mdb-btn>
                    </div>

                    
                </div> -->
            </div>
            <!-- Subscription form -->
            
        </div>

    </div>
    <!--/.Card-->
</template>
<script>
import {mdbInput, mdbBtn, mdbBtnGroup, Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn, mdbSwitch } from 'mdbvue'
export default {
    name: 'CategoryProduct',
    components: {
        mdbInput, mdbBtn, mdbBtnGroup,  Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn, mdbSwitch
    },
    data(){
        return{
            active: [],
            desactive: [],
            errorValidation: '',
            nameAdd: '',
            loader: false
        }
    },
    mounted(){
        this.loader = true;
        if (this.$store.getters.getCollections == null) {
            this.$http.get(this.$urlAPI + 'products/collection/get/'+ this.$route.params.idCompany,{
                "headers":{
                    "authorization": "Bearer "+  this.$store.getters.getToken,
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(response =>{
                if(response.data.status){
                    this.active = response.data.collections.active;
                    this.desactive = response.data.collections.desactive;
                    this.$store.commit('SET_COLLECTIONS', response.data.collections);
                    this.loader = false;
                }else{
                    this.errorValidation = 'Error get informations for organizations';
                    this.loader = false;
                }
            }).catch(e => {
                console.log(e)
                this.errorValidation = 'Houve uma falha ao se conectar com servidor';
            });
        }else{
            this.active = this.$store.getters.getCollections.active;
            this.desactive = this.$store.getters.getCollections.desactive;
            this.loader = false;
        }
    },
    methods:{
        
        activeModal(id,type){
            this.errorValidation = '';
            if(type){
                let data = {idMaterialType: id};
                this.$http.post(this.$urlAPI + 'products/collection/desactive/'+ this.$route.params.idCompany,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        console.log(response.data)
                        this.active = response.data.collections.active;
                        this.desactive = response.data.collections.desactive;
                        this.$store.commit('SET_COLLECTIONS', response.data.collections);
                    }else{
                        this.errorValidation = 'Error get informations for organizations';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
            }else{
                let data = {idMaterialType: id};
                this.$http.post(this.$urlAPI + 'products/collection/activate/'+ this.$route.params.idCompany,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        console.log(response.data)
                        this.active = response.data.collections.active;
                        this.desactive = response.data.collections.desactive;
                        this.$store.commit('SET_COLLECTIONS', response.data.collections);
                    }else{
                        this.errorValidation = 'Error get informations for organizations';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
            }
        },
        addMaterial(){
            this.errorValidation = '';
            let data = {
                'idCompany': this.$route.params.idCompany,
                'name': this.nameAdd
            }
            this.$http.post(this.$urlAPI + 'products/collection/add',data,{
                "headers":{
                    "authorization": "Bearer "+  this.$store.getters.getToken
                }
            }).then(response =>{
                if(response.data.status){
                    console.log(response.data)
                    this.active = response.data.collections.active;
                    this.desactive = response.data.collections.desactive;
                    this.$store.commit('SET_COLLECTIONS', response.data.collections);
                }else{
                    this.errorValidation = response.data.message;
                }
            }).catch(e => {
                console.log(e)
                this.errorValidation = 'Houve uma falha ao se conectar com servidor';
            });
            
        }
    }

}
</script>
<style>

.cardsAdd .btn-floating {
    border-radius: 2.3rem;
}

.cardsAdd .btn-floating.btn-lg i {
    line-height: 48px;
    width: 33px;
}

.cardsAdd .switch label input[type=checkbox]:checked + .lever:after{
    background-color:#00c851 !important;
}
.cardsAdd .switch label input[type=checkbox]:checked + .lever{
    background: #b3e5c7 !important;
}

</style>


