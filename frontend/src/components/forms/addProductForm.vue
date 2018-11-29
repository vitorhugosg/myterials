<template>
	<div>
		<div class="row pt-5">
            <div class="col-md-12" v-if="loader == false">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card p-5 animated fadeIn">
                            <h3 class="text-center py-4">Add new Product</h3>
                            <div class="row  py-3">
                                <div class="col-md-12">
                                    <h5>Product Name</h5>
                                </div>
                                <div class="col-md-12">
                                    <mdb-input type="text" id="exampleInput" label="Product's name"  />
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Collection</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.collection">
                                            <mdb-select @getValue="getSelectValueCollection">
                                                <option disabled selected>Choose your collection</option>
                                                <span v-for="collection in collections" :key="collection.id" :value="collection.id">{{collection.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addCollection = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addCollection">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3" v-if="view.category">
                                        <div class="col-md-12">
                                            <h5>Category</h5>
                                        </div>
                                        <div class="col-sm-10">
                                            <mdb-select @getValue="getSelectValueCategory">
                                                <option disabled selected>Choose your category</option>
                                                <span v-for="ctg in category" :key="ctg.id" :value="ctg.id">{{ctg.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addCategory = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addCategory">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div v-else class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Category</h5>
                                        </div>
                                        <div class="col-md-12 text-left my-3">
                                            <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                            <p class="d-inline-block">First choose   your Collections </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Product Profile</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.profile">
                                            <mdb-select @getValue="getValueProfileProduct">
                                                <option disabled selected>Choose your profile</option>
                                                <span v-for="profile in profileProduct" :key="profile.id" :value="profile.id">{{profile.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addProfileProduct = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addProfileProduct">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Hazard</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.hazard">
                                            <mdb-select @getValue="getSelectHazardProduct">
                                                <option disabled selected>Choose your hazard</option>
                                                <span v-for="hazard in hazardProduct" :key="hazard.id" :value="hazard.id">{{hazard.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addHazardProduct = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addHazardProduct">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Volume Type</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.volume">
                                            <mdb-select @getValue="getSelectVolumeType">
                                                <option disabled selected>Choose your volume type</option>
                                                <span v-for="volume in volumeType" :key="volume.id" :value="volume.id">{{volume.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addVolumeType = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addVolumeType">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Grade Product</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.volume">
                                            <mdb-select @getValue="getSelectGradeProduct">
                                                <option disabled selected>Choose your grade</option>
                                                <span v-for="grade in gradeProduct" :key="grade.id" :value="grade.id">{{grade.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addGradeProduct = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addGradeProduct">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Material Type</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.volume">
                                            <mdb-select @getValue="getSelectMaterialType">
                                                <option disabled selected>Choose your material type</option>
                                                <span v-for="material in materialType" :key="material.id" :value="material.id">{{material.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addMaterialType = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addMaterialType">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Moisture Product</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.volume">
                                            <mdb-select @getValue="getSelectMoiusture">
                                                <option disabled selected>Choose your moisture product</option>
                                                <span v-for="moistore in moistoreProduct" :key="moistore.id" :value="moistore.id">{{moistore.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addMoistureProduct = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addMoistureProduct">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row  py-3">
                                        <div class="col-md-12">
                                            <h5>Finish Product</h5>
                                        </div>
                                        <div class="col-sm-10" v-if="view.volume">
                                            <mdb-select @getValue="getSelectFinishProduct">
                                                <option disabled selected>Choose your finish product</option>
                                                <span v-for="finish in finishProduct" :key="finish.id" :value="finish.id">{{finish.name}}</span>
                                            </mdb-select>
                                        </div>
                                        <div class="col-sm-2">
                                            <button v-on:click="addOptions.addFinishProduct = true" class="btn btn-primary btn-outline-rounded">
                                                <span v-if="addOptions.addFinishProduct">-</span>
                                                <span v-else>+</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	
                                </div>
                            	<div class="col-md-12">
                            		<h3>Params</h3>
                            	</div>
                                <div class="col-md-6 py-3">
                                	<h5>Width Product</h5>
                                	<mdb-input type="text" :value="form.width" id="width" label="Width"/>
                                </div>
                                <div class="col-md-6 py-3">
                                	<h5>Height Product</h5>
                                	<mdb-input type="text" :value="form.height" id="height" label="Height"/>
                                </div>
                                <div class="col-md-6 py-3">
                                	<h5>Lenght Product</h5>
                                	<mdb-input type="text" :value="form.lenght" id="Lenght" label="Lenght"/>
                                </div>
                                <div class="col-md-6 py-3">
                                	<h5>Volume Product</h5>
                                	<mdb-input type="text" :value="form.volume" id="Volume" label="Volume"/>
                                </div>
                                <div class="col-md-12">
                                	<h3>Images</h3>
                                </div>
                            </div>
                            <div class="row">
                                <pre>
                                    {{this.form}}
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card p-4 animated fadeIn">
                            <div class="row">
                                <!-- Fluxo de adicionar novas collections -->
                                <div class="col-md-12 animated fadeInRight"  v-if="addOptions.addCollection">
                                    <button v-on:click="restartCollection" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-collection class="mb-2 caixa-auxiliar" style="">
                                    </add-collection>
                                </div>
                                <!-- Fluxo de adicionar novas categorias -->
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addCategory">
                                    <button v-on:click="restartCategory" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-category class="mb-2 caixa-auxiliar" v-if="addOptions.addCategory">
                                    </add-category>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addProfileProduct">
                                    <button v-on:click="restartProfileProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-profile-product class="mb-2 caixa-auxiliar">
                                    </add-profile-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addHazardProduct">
                                    <button v-on:click="restartHazardProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-hazard-product class="mb-2 caixa-auxiliar">
                                    </add-hazard-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addVolumeType">
                                    <button v-on:click="restartVolumeType" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-volume-type class="mb-2 caixa-auxiliar">
                                    
                                    </add-volume-type>
                                </div>
                                <div class="col-md-12 animated fadeInRight"  v-if="addOptions.addGradeProduct">
                                    <button v-on:click="restartGradeProdutc" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-grade-product class="mb-2 caixa-auxiliar">

                                    </add-grade-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight"  v-if="addOptions.addMaterialType">
                                    <button v-on:click="restartMaterialType" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-material-type class="mb-2 caixa-auxiliar" >
                                    </add-material-type>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.restartMoistoreProduct">
                                    <button v-on:click="restartMoistoreProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-moisture-product class="mb-2 caixa-auxiliar" >
                                    </add-moisture-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addFinishProduct">
                                    <button v-on:click="restartFinishProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-finish-product class="mb-2 caixa-auxiliar">
                                    </add-finish-product>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12  text-center" v-if="loader">
                <img class="img-fluid text-center" src="/static/img/images/loader.gif" alt="">
            </div>
        </div>
	</div>
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
	import {mdbSelect,mdbInput} from 'mdbvue'
	export default{
		name :'addFormProduct',
		components:{
			addVolumeType,addProfileProduct,addMaterialType,addMoistureProduct,addHazardProduct,addGradeProduct,addFinishProduct,addCategory,addCollection,
			mdbSelect,mdbInput
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
	                finishProduct: false,
	                width: '',
	                height: '',
	                lenght: '',
	                volume: '',
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

	.button-close{
	    position: relative;
	    right: -10px;
	    z-index: 20;
	}
	.caixa-auxiliar{
	    width: 100%; position: relative; bottom: 40px;
	}
	.max-width-20{
	    max-width: 20px;
	}
</style>