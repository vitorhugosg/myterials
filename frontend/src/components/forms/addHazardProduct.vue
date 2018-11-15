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
                <div class="col-md-12">
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
            </div>
            <hr>
            <!-- Subscription form -->
            <div class="row">
                <div class="col-md-12">
                    
                    
                    <p class="red">{{errorValidation}}</p>
                    <mdb-input class="grey-text" type="text" v-model="nameAdd" label="Material Type name"/>
                    
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
import {mdbInput, mdbBtn, mdbBtnGroup, Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn } from 'mdbvue'
export default {
    name: 'FormMaterialType',
    components: {
        mdbInput, mdbBtn, mdbBtnGroup,  Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, Btn
    },
    data(){
        return{
            active: [],
            desactive: [],
            errorValidation: '',
            nameAdd: ''
        }
    },
    mounted(){
        this.$http.get(this.$urlAPI + 'hazard_product/get/'+ this.$route.params.idCompany,{
          "headers":{
              "authorization": "Bearer "+  this.$store.getters.getToken,
              'X-Requested-With': 'XMLHttpRequest' 
          }
        }).then(response =>{
            if(response.data.status){
                this.active = response.data.material_type.active;
                this.desactive = response.data.material_type.desactive;
                
            }else{
                this.errorValidation = 'Error get informations for organizations';
            }
        }).catch(e => {
            console.log(e)
            this.errorValidation = 'Houve uma falha ao se conectar com servidor';
        });
    },
    methods:{
        
        activeModal(id,type){
            this.errorValidation = '';
            if(type){
                let data = {idMaterialType: id};
                this.$http.post(this.$urlAPI + 'hazard_product/desactive/'+ this.$route.params.idCompany,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        console.log(response.data)
                        this.active = response.data.material_type.active;
                        this.desactive = response.data.material_type.desactive;
                    }else{
                        this.errorValidation = 'Error get informations for organizations';
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Houve uma falha ao se conectar com servidor';
                });
            }else{
                let data = {idMaterialType: id};
                this.$http.post(this.$urlAPI + 'hazard_product/activate/'+ this.$route.params.idCompany,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        console.log(response.data)
                        this.active = response.data.material_type.active;
                        this.desactive = response.data.material_type.desactive;
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
            this.$http.post(this.$urlAPI + 'hazard_product/add/',data,{
                "headers":{
                    "authorization": "Bearer "+  this.$store.getters.getToken
                }
            }).then(response =>{
                if(response.data.status){
                    console.log(response.data)
                    this.active = response.data.material_type.active;
                    this.desactive = response.data.material_type.desactive;
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


