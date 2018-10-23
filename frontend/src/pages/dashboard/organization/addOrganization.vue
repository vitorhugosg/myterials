<template>
    <admin>
        <span slot="body">
            <mdb-container fluid>
            <!--Section: Intro-->
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form-add-organization>

                        </form-add-organization>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import formAddOrganization from '@/components/forms/addOrganization'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin,formAddOrganization
    },
    mounted(){
        
    }
}
</script>

