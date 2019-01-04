<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts">

                </side-bar-company>
                
                <div class="row py-4 controllProducts" >
                    <div class="col-3">
                        <router-link :to="'/admin/company/addproducts/'+ this.$route.params.idCompany"><mdb-btn tag="a" color="success" floating size="lg"><i class="fa fa-plus" aria-hidden="true"></i></mdb-btn></router-link> 
                    </div>
                    <div class="col-sm-6  searchProductsInput">
                        <div class="row">
                            <div class="col-10 pr-0 mr-0"><mdb-input label="Search products"/></div>
                            <div class="col-2 m-0 p-0 d-flex align-items-center icon-search"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <btn-group class="">
                            <span @click="activeTable(true)"><mdb-btn tag="a" color="success" floating><i class=" up-icon fa fa-list"></i></mdb-btn></span>
                            <span @click="activeTable(false)"><mdb-btn tag="a" color="success" floating><i class="up-icon fa fa-th"></i></mdb-btn></span>
                        </btn-group>
                    </div>
                </div>
                <div v-if="!loader">
                    <div class="row" v-if="viewProducts">
                        <div class="col-md-12">
                            <div class="card p-3">
                                <mdb-datatable
                                    :data="states"
                                    striped
                                    bordered
                                    :searching="false"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row" v-if="!viewProducts">
                        <div class="col-md-3 my-3" v-for="state in states.rows" :key="state.name">
                            <productsViewBig :state="state"></productsViewBig>
                        </div>
                    </div>
                </div>
                <div v-else class="py-5 row">
                    <div class="col-md-12  text-center">
                        <img class="img-fluid text-center" src="/static/img/images/loader.gif" alt="">
                    </div>
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, BtnGroup ,Btn,mdbDatatable,Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, mdbInput,mdbBtn, mdbIcon   } from 'mdbvue'
import productsViewBig from '@/components/products/productsViewBig'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
import formAddCompany from '@/components/forms/addCompany'
export default {
    name: 'DashboardHome',
    components:{
        mdbContainer, admin,formAddCompany,productsViewBig,sideBarCompany,BtnGroup ,Btn, mdbDatatable,Modal, ModalHeader, ModalTitle, ModalBody, ModalFooter, mdbInput, mdbBtn, mdbIcon
    },
    created(){
        // this.states.rows = this.statesData
    },
    mounted(){
        this.loader = true;
         this.$http.get(this.$urlAPI +'products/get/'+ this.$route.params.idCompany, {
                "headers":{
                    "authorization": "Bearer "+  this.$store.getters.getToken,
                    'X-Requested-With': 'XMLHttpRequest' 
                }
            }).then(response =>{
                console.log(response.data);
                if (response.data.status) {
                    this.products = response.data.products;
                    this.statesData =  response.data.products;
                    this.states.rows = this.statesData
                    this.loader = false;
                }
            }).catch(e => {
                this.loader = false;
                console.log(e);
            });

    },
    methods: {
        activeTable(value){
            this.viewProducts = value;
        }
    },
    data(){
        return{
            addProductModal: false,
            products: {},
            viewProducts: true,
            loader: false,
            states: {
                columns: [
                {
                    label: 'ID',
                    field: 'id',
                    sort: 'asc'
                },
                {
                    label: 'Name',
                    field: 'name',
                    sort: 'asc'
                },
                {
                    label: 'Collection',
                    field: 'collection',
                    sort: 'asc'
                },
                {
                    label: 'Category',
                    field: 'category',
                    sort: 'asc'
                },
                {
                    label: 'Status',
                    field: 'status',
                    sort: 'asc'
                },
                {
                    label: 'created',
                    field: 'created_at',
                    sort: 'asc'
                },
                {
                    label: 'updated',
                    field: 'updated_at',
                    sort: 'asc'
                }
                ],
                rows: [
                    
                ]
            },
            statesData:[

            ]
        }
    }
}
</script>
<style>
.card .dataTables_wrapper{
    width: 100%;
}
.controllProducts .autocomplete__box{
    border: 0px !important;
}
/*.searchInput{
    position: relative;
    top: 29px;
}*/
/*.searchProductsInput .md-form{
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}*/

.up-icon {
    font-size: 15px !important;

}    

.pagination.pg-blue .page-item.active .page-link {
    background-color: #00C851;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
     background-color: #00C851;
}

.btn-floating {
    border-radius: 2.3rem;
}

.btn-floating.btn-lg i {
    line-height: 48px;
    width: 33px;
}
.icon-search {
     font-size: 15px !important;
    color: #565656;
}

</style>

