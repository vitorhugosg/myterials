<template>
    <admin>
        <span slot="body">
            
            <mdb-container fluid>
                
                <side-bar-company :idProduct="this.$route.params.idProducts" class="mb-5">

                </side-bar-company>
                <addProductForm>

                </addProductForm>
            </mdb-container>
        </span>
    </admin>
</template>
<script>

import { mdbContainer, mdbCard, mdbCardBody,mdbView,mdbMask,mdbCardImage,mdbBtn,mdbIcon,mdbInput,mdbSelect } from 'mdbvue'
import admin from '@/templates/admin/Admin'
import sideBarCompany from '@/components/navs/sideBarCompany'
import addProductForm from '@/components/forms/addProductForm'
export default {    
    name: 'Addproducts',
    components:{
        mdbContainer, admin,sideBarCompany,addProductForm
    },
    data() {
        return {
            loader: false,
            form: {
                collection: false,
                category: false,
                profileProduct: false,
                hazardProduct: false,
                volume: false,
                grade: false,
                materialType: false,
                moistoreProduct: false,
                finishProduct: false
            },
            view: {
                collection: true,
                category: false,
                profile: true,
                hazard: true,
                volume: true,
                grade: true,
                materialType: true,
                moistoreProduct: true,
                finishProduct: true
            },
            addOptions:{
                addCollection: false,
                addCategory: false,
                addFinishProduct: false,
                addGradeProduct: false,
                addHazardProduct: false,
                addMoistureProduct: false,
                addMaterialType: false,
                addProfileProduct: false,
                addVolumeType: false
            },
            collections: this.$store.getters.getCollections.active,
            category: [],
            profileProduct: this.$store.getters.getProfileProduct.active,
            hazardProduct: this.$store.getters.getHazardProduct.active,
            volumeType: this.$store.getters.getVolumeType.active,
            gradeProduct: this.$store.getters.getGradeProduct.active,
            materialType: this.$store.getters.getMaterialType.active,
            moistoreProduct: this.$store.getters.getMoistureProdutct.active,
            finishProduct: this.$store.getters.getMoistureProdutct.active,
        }
    },
    methods:{
        //pegando variavel
        getSelectValueCollection(value) {
            this.form.collection = false;
            this.form.collection = value;
            this.getCategoryInCollection(value);
        },
        //pegando valor da categoria
        getSelectValueCategory(value){
            this.form.category = value;
        },
        //pegando valor Profile Product
        getValueProfileProduct(value){
            this.form.profileProduct = value;
        },
        //pegando valor hazard product
        getSelectHazardProduct(value){
            this.form.hazardProduct = value;
        },
        //pegando valor volume type
        getSelectVolumeType(value){
            this.form.volume = value
        },
        //colocando collection na categoria
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
            }, 300);
        },
        //pegando Grade Product Value
        getSelectGradeProduct(value){
            this.form.grade = value
        },
        //pegando Grade Product Value
        getSelectMaterialType(value){
            this.form.materialType = value
        },
        getSelectMoiusture(value){
            this.form.moistoreProduct = value;
        },
        getSelectFinishProduct(value){
            this.form.finishProduct = value;
        },
        //restart collection;
        restartCollection(){
            this.view.collection = false;
            this.addOptions.addCollection = false;
            this.collections = this.$store.getters.getCollections.active;
            setTimeout(e =>{
                this.view.collection = true;
            }, 300);
        },
        //restart category
        restartCategory(){
            this.view.category = false;
            this.addOptions.addCategory = false;
            this.getCategoryInCollection(this.form.collection);
        },
        //restart product
        restartProfileProduct(){
            this.view.profile = false;
            this.addOptions.addProfileProduct = false;
            this.profileProduct = this.$store.getters.getProfileProduct.active;
            setTimeout(e =>{
                this.view.profile = true;
            }, 300);
        },
        // restart hazard
        restartHazardProduct(){
            this.view.hazard = false;
            this.addOptions.addHazardProduct = false;
            this.hazardProduct = this.$store.getters.getHazardProduct.active;
            setTimeout(e =>{
                this.view.hazard = true;
            }, 300);
        },
        // restart hazard
        restartVolumeType(){
            this.view.volume = false;
            this.addOptions.addVolumeType = false;
            this.volumeType = this.$store.getters.getVolumeType.active;
            setTimeout(e =>{
                this.view.volume = true;
            }, 300);
        },
        // restart grade
        restartGradeProdutc(){
            this.view.grade = false;
            this.addOptions.addGradeProduct = false;
            this.volumeType = this.$store.getters.getGradeProduct.active;
            setTimeout(e =>{
                this.view.grade = true;
            }, 300);
        },
        // restart materialtype
        restartMaterialType(){
            this.view.materialType = false;
            this.addOptions.addMaterialType = false;
            this.materialType = this.$store.getters.getMaterialType.active;
            setTimeout(e =>{
                this.view.materialType = true;
            }, 300);
        },
        // restart materialtype
        restartMoistoreProduct(){
            this.view.moistoreProduct = false;
            this.addOptions.addMoistureProduct = false;
            this.moistoreProduct = this.$store.getters.getMoistureProdutct.active;
            setTimeout(e =>{
                this.view.moistoreProduct = true;
            }, 300);
        },
        // restart materialtype
        restartFinishProduct(){
            this.view.finishProduct = false;
            this.addOptions.addFinishProduct = false;
            this.finishProduct = this.$store.getters.getFinishProduct.active;
            setTimeout(e =>{
                this.view.finishProduct = true;
            }, 300);
        },
        
    },
    mounted(){
        
    }
}
</script>
<style scoped>

</style>

