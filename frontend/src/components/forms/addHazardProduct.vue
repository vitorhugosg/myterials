<template>
    <!--Card-->
    <div class="card">

        <!--Card content-->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p class="h5 text-center mb-4">Hazard Product</p>    
                </div>
            </div>
            
            <hr>
            <div class="row">
                <div class="col-md-12" v-if="loader == false">
                    <p class="h6 text-center my-5">Active</p>
                    <div class="row">
                        <div class="col text-center p-3 border-primary border " v-for="act in active" :key="act.id">
                            <span style="font-size: 0.5em">Collection</span>
                            <p v-for="item in collectionsActive" :key="item.id" v-if="act.collection_id == item.id"  class="gray-text">{{item.name}}</p>
                            <p v-for="item in collectionsDesactive" :key="item.id" v-if="act.collection_id == item.id"  class="red-text">{{item.name}}</p>
                            <mdb-btn-group>
                                <mdb-btn outline="primary" darkWaves rounded size="sm"><span class="black-text">name</span> : {{act.name}}</mdb-btn>
                                <div v-on:click="activeModal(act.id,true)">
                                <mdb-btn outline="danger" darkWaves rounded size="sm"><i class="fa fa-trash" aria-hidden="true"></i></mdb-btn>
                                </div>
                            </mdb-btn-group>
                        </div>
                    </div>
                    <hr>
                    <p class="h6 text-center my-5">Desactive</p>
                    <div class="row">
                        <div class="col text-center  p-3 border-danger border " v-for="dst in desactive" :key="dst.id">
                            <span style="font-size: 0.5em">Collection</span>
                            <p v-for="item in collectionsActive" :key="item.id" v-if="dst.collection_id == item.id" class="gray-text">{{item.name}}</p>
                            <p v-for="item in collectionsDesactive" :key="item.id" v-if="dst.collection_id == item.id" class="red-text">{{item.name}}</p>
                            <mdb-btn-group>
                                <mdb-btn outline="primary" darkWaves rounded size="sm"><span class="black-text">name</span> : {{dst.name}}</mdb-btn>
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
            <hr>
            <!-- Subscription form -->
            <div class="row">
                <div class="col-md-12">
                    <div class="mx-auto py-4" style="max-width: 300px">
                        <h3>Add new Hazard Product</h3>
                        <p class="red">{{errorValidation}}</p>
                        <mdb-input class="grey-text" type="text" v-model="nameAdd" label="Hazard Product name"/>
                        <mdb-select @getValue="getSelectCollection">
                            <option disabled selected>Select Organization</option>
                            
                            <span :value="item.id" v-for="item in collectionsActive" :key="item.id">  {{item.name}}</span>
                        </mdb-select>
                        <div class="text-center mt-4" v-on:click="addMaterial()">
                            <mdb-btn class="btn-block" color="green " icon="paper-plane-o" iconRight >Add New</mdb-btn>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Subscription form -->
            
        </div>

    </div>
    <!--/.Card-->
</template>
<script>
import {mdbInput, mdbBtn, mdbBtnGroup, Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn, mdbSelect } from 'mdbvue'
export default {
    name: 'finishProduct',
    components: {
        mdbInput, mdbBtn, mdbBtnGroup,  Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn,mdbSelect
    },
    data(){
        return{
            active: [],
            desactive: [],
            errorValidation: '',
            nameAdd: '',
            collection: '',
            loader: false
        }
    },
    mounted(){
        this.loader = true
        if(this.$store.getters.getHazardProduct  == null){
            this.$http.get(this.$urlAPI + 'products/hazard_product/get/'+ this.$route.params.idCompany,{
                "headers":{
                  "authorization": "Bearer "+  this.$store.getters.getToken,
                  'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(response =>{
                if(response.data.status){
                    this.active = response.data.hazard_product.active;
                    this.desactive = response.data.hazard_product.desactive;
                    this.$store.commit('SET_HAZARD_PRODUCT', response.data.hazard_product);
                }else{
                    this.errorValidation = 'Error get informations for organizations';
                }
                this.loader = false;
            }).catch(e => {
                this.errorValidation = 'Error connect BD';
                this.loader = false;
            });
        }else{
            this.active = this.$store.getters.getHazardProduct.active;
            this.desactive = this.$store.getters.getHazardProduct.desactive;
            this.loader = false;
        }
    },
    computed:{
        collectionsActive(){
            return this.$store.getters.getCollections.active
        },
        collectionsDesactive(){
            return this.$store.getters.getCollections.desactive
        }
    },
    methods:{
        getSelectCollection(value){
            this.collection = value;
        },
        activeModal(id,type){
            this.errorValidation = '';
            let data = {
                id: id,
                idCompany: this.$route.params.idCompany
            };
            if(type){
                this.$http.post(this.$urlAPI + 'products/hazard_product/desactive',data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        this.active = response.data.hazard_product.active;
                        this.desactive = response.data.hazard_product.desactive;
                        this.$store.commit('SET_PROFILE_PRODUCT', response.data.hazard_product);
                    }else{
                        this.errorValidation = 'Error get informations for organizations';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Error connect BD';
                });
            }else{
                this.$http.post(this.$urlAPI + 'products/hazard_product/activate',data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        this.active = response.data.hazard_product.active;
                        this.desactive = response.data.hazard_product.desactive;
                        this.$store.commit('SET_HAZARD_PRODUCT', response.data.hazard_product);
                    }else{
                        this.errorValidation = 'Error get informations for organizations';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Error connect BD';
                });
            }
        },
        addMaterial(){
            this.errorValidation = '';
            let data = {
                'idCollection': this.collection,
                'name': this.nameAdd
            }
            if (this.collection = '') {
                this.errorValidation = 'Choose your collection'
                return;
            }
            this.$http.post(this.$urlAPI + 'products/hazard_product/add',data,{
                "headers":{
                    "authorization": "Bearer "+  this.$store.getters.getToken
                }
            }).then(response =>{
                if(response.data.status){
                    this.active = response.data.hazard_product.active;
                    this.desactive = response.data.hazard_product.desactive;
                    this.$store.commit('SET_HAZARD_PRODUCT', response.data.hazard_product);
                }else{
                    this.errorValidation = response.data.message;
                }
            }).catch(e => {
                console.log(e)
                this.errorValidation = 'Error connect BD';
            });
            
        }
    }

}
</script>
<style scoped>

</style>


