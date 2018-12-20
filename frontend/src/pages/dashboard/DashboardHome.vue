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
        
        if(this.$store.getters.getToken == null){
            this.$router.push('/login');
        }
    }
}
</script>

<style scoped>



</style>

