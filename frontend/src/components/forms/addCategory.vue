<template>
    <!--Card-->
    <div class="card">

        <!--Card content-->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="h5 text-center mb-4">Category</p>    
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-md-12" v-if="loader == false">
                    <p class="h6 text-center">Active</p>
                    <div class="row">
                        <div class="col text-center py-1" v-for="act in active" :key="act.id">
                            <mdb-btn-group>
                                <mdb-btn outline="warning" darkWaves rounded size="sm">{{act.collection}}</mdb-btn>
                                <mdb-btn outline="primary" darkWaves rounded size="sm">{{act.name}}</mdb-btn>
                                <div v-on:click="activeModal(act.id,true, act.colletion_id)">
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
                                <mdb-btn outline="warning" darkWaves rounded size="sm">{{dst.collection}}</mdb-btn>
                                <div v-on:click="activeModal(dst.id,false,dst.colletion_id)">
                                    <mdb-btn outline="success" darkWaves rounded size="sm"><i class="fa fa-plus-square-o" aria-hidden="true"></i></mdb-btn>
                                </div>
                            </mdb-btn-group>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  text-center" v-if="loader">
                    <img class="img-fluid text-center" src="/static/img/images/loader.gif" alt="">
                </div>
            </div>
            <hr>
            <!-- Subscription form -->
            <div class="row">
                <div class="col-md-12">
                    <p class="red">{{errorValidation}}</p>
                    <mdb-input class="grey-text" type="text" v-model="nameAdd" label="Material Type name"/>
                    <mdb-select @getValue="getSelectValue" v-if="collections != null">
                        <option disabled selected>Choose your collection</option>
                        <span :value="collection.id" v-for="collection in collections" :key="collection.id">{{collection.name}}</span>
                    </mdb-select>
                    <div class="text-center mt-4" v-on:click="addMaterial()">
                        <mdb-btn class="btn-block" color="green " icon="paper-plane-o" iconRight >Add New</mdb-btn>
                    </div>
                </div>
            </div>
            <!-- Subscription form -->
            
        </div>

    </div>
    <!--/.Card-->
</template>
<script>
import {mdbInput, mdbBtn, mdbBtnGroup, Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn,mdbSelect } from 'mdbvue'
export default {
    name: 'CategoryProduct',
    components: {
        mdbInput, mdbBtn, mdbBtnGroup,  Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn,mdbSelect
    },
    data(){
        return{
            active: [],
            desactive: [],
            collections: null,
            errorValidation: '',
            nameAdd: '',
            collection: '',
            loader: false
        }
    },
    mounted(){
        this.loader = true;
        if(this.$store.getters.getCategory == null){
            this.$http.get(this.$urlAPI + 'products/category/get/'+ this.$route.params.idCompany,{
                "headers":{
                  "authorization": "Bearer "+  this.$store.getters.getToken,
                  'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(response =>{
                if(response.data.status){
                    this.active = response.data.category.active;
                    this.desactive = response.data.category.desactive;
                    this.$store.commit('SET_CATEGORY', response.data.category);
                    this.collections = response.data.collections;
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
            this.active = this.$store.getters.getCategory.active;
            this.desactive = this.$store.getters.getCategory.desactive;
            this.collections = this.$store.getters.getCollections.active;
            this.loader = false;
        }
        
        
    },
    methods:{
        getSelectValue(value) {
            this.collection = value;
        },
        activeModal(id,type,colletion_id){
            this.errorValidation = '';
            if(type){
                 let data = {
                    idCategory: id,
                    idCompany: this.$route.params.idCompany
                };
                this.$http.post(this.$urlAPI + 'products/category/desactive/'+ colletion_id,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        console.log(response.data)
                        this.active = response.data.category.active;
                        this.desactive = response.data.category.desactive;
                        this.collections = response.data.collections;

                        this.$store.commit('SET_CATEGORY', response.data.category);
                    }else{
                        this.errorValidation = 'Error get informations for organizations';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
            }else{
                let data = {
                    idCategory: id,
                    idCompany: this.$route.params.idCompany
                };
                this.$http.post(this.$urlAPI + 'products/category/activate/'+ colletion_id,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        console.log(response.data)
                        this.active = response.data.category.active;
                        this.desactive = response.data.category.desactive;
                        this.collections = response.data.collections;
                        this.$store.commit('SET_CATEGORY', response.data.category);
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
            if(this.collection == '' || this.nameAdd == ''){
                this.errorValidation = 'No empty values please.';
                return;
            }
            let data = {
                'idCollection': this.collection,
                'name': this.nameAdd
            }
            this.$http.post(this.$urlAPI + 'products/category/add',data,{
                "headers":{
                    "authorization": "Bearer "+  this.$store.getters.getToken
                }
            }).then(response =>{
                if(response.data.status){
                    console.log(response.data)
                    this.active = response.data.category.active;
                    this.desactive = response.data.category.desactive;
                    this.collections = response.data.collections;
                    this.$store.commit('SET_CATEGORY', response.data.category);
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
<style scoped>

</style>


