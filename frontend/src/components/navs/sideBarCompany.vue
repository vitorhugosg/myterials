<template>
    <div class="classOperations mb-4">
        <div class="row text-center ">
            <div class="col"><router-link class="p-2 button-classOp text-white w-100 d-block" :to="'/admin/company/'+ this.$route.params.idCompany">Statistic</router-link></div>
            <div class="col"><router-link class="p-2 button-classOp text-white w-100 d-block" :to="'/admin/company/products/'+ this.$route.params.idCompany">Products</router-link></div>
            <div class="col"><router-link class="p-2 button-classOp text-white w-100 d-block" :to="'/admin/company/members/'+ this.$route.params.idCompany">Members</router-link></div>
            <div class="col"><router-link class="p-2 button-classOp text-white w-100 d-block" :to="'/admin/company/config/'+ this.$route.params.idCompany">Config</router-link></div>
        </div>
    </div>
</template>
<script>
    
    export default {
        name: 'sideBarCompany',
        props: [
            'idProduct'
        ]
    }
</script>
<style scoped>
.classOperations{
    background: #D13436;
    
}
.classOperations .button-classOp{
    text-decoration: none;
}
.classOperations .button-classOp:hover{
    color: #D13436 !important;
    background: #fff;
}
</style>
