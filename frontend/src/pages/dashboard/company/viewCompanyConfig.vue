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
                    <div class="col-lg-4 mb-4">

                        <add-material-type class="mb-2" >
                        </add-material-type>

                        <!-- <add-moisture-product class="mb-2">
                        </add-moisture-product>

                        <add-finish-product class="mb-2">
                        </add-finish-product> -->
                    </div>
                    <div class="col-lg-4 mb-4">
                        
                        <!-- <add-grade-product class="mb-2">

                        </add-grade-product> -->
                        <add-collection class="mb-2">

                        </add-collection> 
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- <add-profile-product class="mb-2">

                        </add-profile-product>
                        <add-hazard-product class="mb-2">
                        </add-hazard-product>
                        <add-volume-type class="mb-2">
                            
                        </add-volume-type> -->
                        <add-category class="mb-2">

                        </add-category> 
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
            loader: false
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

