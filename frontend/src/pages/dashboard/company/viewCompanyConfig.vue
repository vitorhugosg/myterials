<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts" class="mb-5">

                </side-bar-company>
                <div class="row py-5" v-if="loader">
                    <div class="col-md-12  text-center">
                        <img class="img-fluid text-center" src="/static/img/images/loader.gif" alt="">
                    </div>
                    
                </div>
            <!--Section: Intro-->
                <div class="row pt-5" v-if="loader == false">
                    <!--Grid column-->
                    <div class="col-md-12 text-center">
                        <h4> Choose you config products</h4>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="row mb-4">
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('collections')">
                                Collection
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('category')">
                                Category
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect hoverble" v-on:click="activeModal('finish')">
                                Finish Product
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('material_type')">
                                Materia Type
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('moisture')">
                                Moisture
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('profile')">
                                Profile
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('hazard')">
                                Hazard
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('volume')">
                                Volume
                            </div>
                            <div class="col btn btn-outline-primary rounded btn-sm waves-effect" v-on:click="activeModal('grade')">
                                Grade
                            </div>
                        </div>

                        <add-material-type class="mb-2 animated fadeInDown" v-if="material_type" >
                        </add-material-type>

                        <add-moisture-product class="mb-2 animated fadeInDown"v-if="moisture">
                        </add-moisture-product >

                        <add-finish-product class="mb-2 animated fadeInDown" v-if="finish">
                        </add-finish-product>
                        <add-profile-product class="mb-2 animated fadeInDown" v-if="profile">

                        </add-profile-product>
                        <add-hazard-product class="mb-2 animated fadeInDown" v-if="hazard">
                        </add-hazard-product>
                        <add-volume-type class="mb-2 animated fadeInDown" v-if="volume">
                            
                        </add-volume-type>
                        <add-category class="mb-2 animated fadeInDown" v-if="category" >

                        </add-category> 
                        <add-grade-product class="mb-2 animated fadeInDown" v-if="grade">

                        </add-grade-product>
                        <add-collection class="mb-2 animated fadeInDown" v-if="collections">

                        </add-collection> 
                    </div>
                    
                    
                    <!--Grid column-->
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import addCollection from '@/components/forms/addCollection'
import addCategory from '@/components/forms/addCategory'
import addFinishProduct from '@/components/forms/addFinishProduct'
import addGradeProduct from '@/components/forms/addGradeProduct'
import addHazardProduct from '@/components/forms/addHazardProduct'
import addMoistureProduct from '@/components/forms/addMoistureProduct'
import addMaterialType from '@/components/forms/addMaterialType'
import addProfileProduct from '@/components/forms/addProfileProduct'
import addVolumeType from '@/components/forms/addVolumeType'
import { mdbContainer, mdbCard, mdbCardBody,mdbInput } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
export default {
    name: 'CompanyConfig',
    components:{
        mdbContainer, admin, mdbCard, mdbCardBody,sideBarCompany,addMaterialType,addProfileProduct,addVolumeType,addMoistureProduct,addHazardProduct,addGradeProduct,addFinishProduct,addCategory,addCollection
    },
    data(){
        return{
            productsAux: '',
            loader: false,
            material_type: false,
            category: false,
            collections: true,
            finish: false,
            moisture: false,
            profile: false,
            hazard: false,
            volume: false,
            grade: false
        }
    },
    mounted(){
        this.loader = true;
        this.$http.get(this.$urlAPI +'products/getproductsaux/'+ this.$route.params.idCompany, {
            "headers":{
                "authorization": "Bearer "+  this.$store.getters.getToken,
                'X-Requested-With': 'XMLHttpRequest' 
            }
        }).then(response =>{
            if (response.data.status) {
                localStorage.setItem('productAux', JSON.stringify(response.data));
                this.$store.commit('SET_PRODUCT_AUX', response.data);
                this.loader = false;
            }else{
                this.$router.push('/login');
            }
        }).catch(e => {
            console.log(e);
        });
    },
    computed: {
        produtoAux(){
            
            return this.$store.getters.getProductsAux;
        }
    },
    methods:{
        activeModal(value){
            this.desactiveAll();
            if (value == 'material_type') {
                this.material_type = true;
            }
            if (value == 'collections') {
                this.collections = true;
            }
            if (value == 'category') {
                this.category = true;
            }
            if (value == 'finish') {
                this.finish = true;
            }
            if (value == "moisture") {
                this.moisture = true;
            }
            if(value == 'profile'){
                this.profile = true;
            }
            if(value == 'hazard'){
                this.hazard = true;
            }
            if (value == 'volume') {
                this.volume = true;
            }
            if(value == 'grade'){
                this.grade = true;
            }
        },
        desactiveAll(){
            this.material_type = false;
            this.category = false;
            this.collections = false;
            this.finish = false;
            this.moisture = false;
            this.profile = false;
            this.hazard = false;
            this.volume = false;
            this.grade = false;
        }
    }
}
</script>
<style scoped>
.profile-card .avatar {
    max-width: 150px;
    max-height: 150px;
    margin: -70px auto 0;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    overflow: hidden;
}
</style>

