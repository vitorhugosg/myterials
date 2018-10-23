<template>
    <admin>
        <span slot="body">
            <mdb-container fluid>
            <!--Section: Intro-->
            
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer } from 'mdbvue'
import admin from '@/templates/admin/Admin'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin
    },
    mounted(){
        
    }
}
</script>

