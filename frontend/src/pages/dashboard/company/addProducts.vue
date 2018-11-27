<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts" class="mb-5">

                </side-bar-company>
                <div class="row pt-5">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            eaea
                        </div>
                    </div>
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
import formAddCompany from '@/components/forms/addCompany'
export default {
    name: 'Company Members',
    components:{
        mdbContainer, admin,formAddCompany, mdbCard, mdbCardBody,sideBarCompany,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon
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

