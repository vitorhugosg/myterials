<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts" class="mb-5">

                </side-bar-company>
                <div class="row pt-5">
                    <div class="col-md-12" v-if="loader == false">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card p-4">
                                    <h3>Add new Product</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <mdb-input type="text" id="exampleInput" label="Product's name"  />
                                        </div>
                                    </div>
                                    <mdb-select @getValue="getSelectValueCollection" >
                                        <option disabled selected>Choose your collection</option>
                                        <span v-for="collection in collections" :key="collection.id" :value="collection.id">{{collection.name}}</span>
                                    </mdb-select>
                                    <mdb-select @getValue="getSelectValueCategory" v-if="view.category">
                                        <option disabled selected>Choose your category</option>
                                        <span v-for="ctg in category" :key="ctg.id" :value="ctg.id">{{ctg.name}}</span>
                                    </mdb-select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card p-4">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12  text-center" v-if="loader">
                        <img class="img-fluid text-center" src="/static/img/images/loader.gif" alt="">
                    </div>
                </div>
            </mdb-container>
        </span>
    </admin>
</template>
<script>
import { mdbContainer, mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon,mdbInput,mdbSelect } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
import formAddCompany from '@/components/forms/addCompany'
export default {
    name: 'Addproducts',
    components:{
        mdbContainer, admin,formAddCompany, mdbCard, mdbCardBody,sideBarCompany,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon,mdbInput,mdbSelect
    },
    data() {
        return {
            loader: false,
            form: {
                collection: false,
                category: false,
            },
            view: {
                category: false
            },
            collections: this.$store.getters.getCollections.active,
            category: [],
        }
    },
    methods:{
        getSelectValueCollection(value) {
            this.form.collection = false;
            this.form.collection = value;
            this.getCategoryInCollection(value);
        },
        getCategoryInCollection(value){
            this.view.category = false;

            this.category = [];
            for (var i = this.$store.getters.getCategory.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getCategory.active[i].colletion_id == value) {
                    this.category.push(this.$store.getters.getCategory.active[i]);
                    console.log('value:' + value);
                    console.log('collection: '+ this.$store.getters.getCategory.active[i]);
                }
            }
            setTimeout(e =>{
                this.view.category = true;
            }, 1000);
            

        },
        getSelectValueCategory(value){
            this.form.category = value;
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

