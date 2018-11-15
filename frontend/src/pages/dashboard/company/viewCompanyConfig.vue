<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts" class="mb-5">

                </side-bar-company>
                
            <!--Section: Intro-->
                <div class="row pt-5">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <add-material-type class="mb-2">
                        </add-material-type>

                        <add-moisture-product class="mb-2">
                        </add-moisture-product>

                        <add-finish-product class="mb-2">
                        </add-finish-product>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <add-profile-product class="mb-2">

                        </add-profile-product>
                        <add-hazard-product class="mb-2">
                        </add-hazard-product>
                        <!-- <add-category class="mb-2">

                        </add-category> -->
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <add-volume-type class="mb-2">
                            
                        </add-volume-type>
                        <add-grade-product class="mb-2">

                        </add-grade-product>
                        <add-collection class="mb-2">

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

