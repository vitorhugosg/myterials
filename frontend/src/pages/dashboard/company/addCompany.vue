<template>
    <admin>
        <span slot="body">
            <mdb-container fluid>
            <!--Section: Intro-->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form-add-company>

                        </form-add-company>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import formAddCompany from '@/components/forms/addCompany'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin,formAddCompany
    },
    mounted(){
        
    }
}
</script>

