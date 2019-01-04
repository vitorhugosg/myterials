<template>
    <div>

        <div class="row pt-5">
            <div class="col-md-12" v-if="loader == false">
                <div class="row">
                    <div class="col-md-7">
                        <form v-on:submit.prevent="sendProduct">
                            <div class="card p-5 animated fadeIn">
                                <h3 class="text-center py-4">Add new Product</h3>
                                <div class="row  py-3">
                                    <div class="col-md-12">
                                        <h5>Product Name</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <p v-if="errorValidation" class="animated shake red-text">
                                                {{errorValidation}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <mdb-input type="text" @input="inputNameProduct" id="inputNameProduct" label="Product's name"  />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3">
                                            <div class="col-md-12">
                                                <h5>Collection</h5>
                                            </div>
                                            <div class="col-sm-10" v-if="view.collection">
                                                <p v-if="errors.collection" class="red-text animated shake">
                                                    {{errors.collection}}
                                                </p>
                                                <mdb-select @getValue="getSelectValueCollection">
                                                    <option disabled selected>Choose your collection</option>
                                                    <span v-for="collection in this.$store.getters.getCollections.active" :key="collection.id" :value="collection.id">{{collection.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addCollection = true" class="btn btn-primary btn-outline-rounded">
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
                                                <p v-if="errors.category" class="red-text animated shake">
                                                    {{errors.category}}
                                                </p>
                                                <mdb-select @getValue="getSelectValueCategory">
                                                    <option disabled selected>Choose your category</option>
                                                    <span v-for="ctg in category" :key="ctg.id" :value="ctg.id">{{ctg.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addCategory = true" class="btn btn-primary btn-outline-rounded">
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
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3" v-if="view.profile">
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
                                                <button type="button" v-on:click="addOptions.addProfileProduct = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addProfileProduct">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>Product Profile</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3" v-if="view.hazard">
                                            <div class="col-md-12">
                                                <h5>Hazard</h5>
                                            </div>
                                            <div class="col-sm-10" >
                                                <mdb-select @getValue="getSelectHazardProduct">
                                                    <option disabled selected>Choose your hazard</option>
                                                    <span v-for="hazard in hazardProduct" :key="hazard.id" :value="hazard.id">{{hazard.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addHazardProduct = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addHazardProduct">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>hazard</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3" v-if="view.volume">
                                            <div class="col-md-12">
                                                <h5>Volume Type</h5>
                                            </div>
                                            <div class="col-sm-10">
                                                <mdb-select @getValue="getSelectVolumeType">
                                                    <option disabled selected>Choose your volume type</option>
                                                    <span v-for="volume in volumeType" :key="volume.id" :value="volume.id">{{volume.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addVolumeType = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addVolumeType">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>Volume Type</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3" v-if="view.grade">
                                            <div class="col-md-12">
                                                <h5>Grade Product</h5>
                                            </div>
                                            <div class="col-sm-10">
                                                <mdb-select @getValue="getSelectGradeProduct">
                                                    <option disabled selected>Choose your grade</option>
                                                    <span v-for="grade in gradeProduct" :key="grade.id" :value="grade.id">{{grade.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addGradeProduct = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addGradeProduct">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>Grade Product</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this items </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3"  v-if="view.materialType">
                                            <div class="col-md-12">
                                                <h5>Material Type</h5>
                                            </div>
                                            <div class="col-sm-10">
                                                <mdb-select @getValue="getSelectMaterialType">
                                                    <option disabled selected>Choose your material type</option>
                                                    <span v-for="material in materialType" :key="material.id" :value="material.id">{{material.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addMaterialType = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addMaterialType">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>Material Type</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3" v-if="view.moistoreProduct">
                                            <div class="col-md-12">
                                                <h5>Moisture Product</h5>
                                            </div>
                                            <div class="col-sm-10">
                                                <mdb-select @getValue="getSelectMoiusture">
                                                    <option disabled selected>Choose your moisture product</option>
                                                    <span v-for="moistore in moistoreProduct" :key="moistore.id" :value="moistore.id">{{moistore.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addMoistureProduct = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addMoistureProduct">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>Moisture Product</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row  py-3" v-if="view.finishProduct">
                                            <div class="col-md-12">
                                                <h5>Finish Product</h5>
                                            </div>
                                            <div class="col-sm-10">
                                                <mdb-select @getValue="getSelectFinishProduct">
                                                    <option disabled selected>Choose your finish product</option>
                                                    <span v-for="finish in finishProduct" :key="finish.id" :value="finish.id">{{finish.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" v-on:click="addOptions.addFinishProduct = true" class="btn btn-primary btn-outline-rounded">
                                                    <span v-if="addOptions.addFinishProduct">-</span>
                                                    <span v-else>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row py-3" v-else>
                                            <div class="col-md-12">
                                                <h5>Finish Product</h5>
                                            </div>
                                            <div class="col-md-12 text-left my-3">
                                                <img class="img-fluid text-left max-width-20 d-inline-block" src="/static/img/images/loader.gif" alt="">
                                                <p class="d-inline-block">First mark a collection that contains this item </p>
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
                                        <div class="row">
                                            <div class="col-9">
                                                <p v-if="errors.width || errors.uofmWidth" class="red-text animated shake">
                                                    {{errors.width || errors.uofmWidth}}
                                                </p>
                                                <mdb-input type="text"  v-mask-decimal.br="2"   v-model:value="form.width" id="width" />
                                            </div>
                                            <div class="col-3">
                                                <mdb-select v-if="uofm.length > 0" @getValue="getSelectUofmWidth">
                                                    <option disabled selected>uofm</option>
                                                    <span v-for="item in uofm" v-if="item.uofm_type_id == 2" :key="item.id" :value="item.id">{{item.name}}</span>
                                                </mdb-select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 py-3">
                                        <h5>Height Product</h5>
                                        <div class="row">
                                            <div class="col-9">
                                                <p v-if="errors.height || errors.uofmHeight" class="red-text animated shake">
                                                    {{errors.height || errors.uofmHeight}}
                                                </p>
                                                <mdb-input type="text"  v-mask-decimal.br="2" v-model:value="form.height" id="height" />
                                            </div>
                                            <div class="col-3">
                                                <mdb-select v-if="uofm.length > 0" @getValue="getSelectUofmHeight">
                                                    <option disabled selected>uofm</option>
                                                    <span v-for="item in uofm" v-if="item.uofm_type_id == 2" :key="item.id" :value="item.id">{{item.name}}</span>
                                                </mdb-select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 py-3">
                                        <h5>Lenght Product</h5>
                                        <div class="row">
                                            <div class="col-9">
                                                <p v-if="errors.lenght || errors.uofmLenght" class="red-text animated shake">
                                                    {{errors.lenght || errors.uofmLenght}}
                                                </p>
                                                <mdb-input type="text"  v-mask-decimal.br="2"  v-model:value="form.lenght" id="Lenght"  />
                                            </div>
                                            <div class="col-3">
                                                <mdb-select v-if="uofm.length > 0" @getValue="getSelectUofmLenght">
                                                    <option disabled selected>uofm</option>
                                                    <span v-for="item in uofm" v-if="item.uofm_type_id == 2" :key="item.id" :value="item.id">{{item.name}}</span>
                                                </mdb-select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 py-3">
                                        <h5>Volume Product</h5>
                                        <div class="row">
                                            <div class="col-9">
                                                <p v-if="errors.volume || errors.uofmVolume" class="red-text animated shake">
                                                    {{errors.volume || errors.uofmVolume}}
                                                </p>
                                                <mdb-input type="text"   v-mask-decimal.br="2"  v-model:value="form.volume" id="Volume" />
                                            </div>
                                            <div class="col-3">
                                                <mdb-select v-if="uofm.length > 0" @getValue="getSelectUofmVolume">
                                                    <option disabled selected>uofm</option>
                                                    <span v-for="item in uofm" v-if="item.uofm_type_id == 4" :key="item.id" :value="item.id">{{item.name}}</span>
                                                </mdb-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 py-3">
                                        <h3>Bought and Sold</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Bought UOFM</h5>
                                                <p v-if="errors.uofmBought" class="red-text animated shake">
                                                    {{errors.uofmBought}}
                                                </p>
                                                <mdb-select v-if="uofm.length > 0" @getValue="getSelectUofmBought">
                                                    <option disabled selected>Choose UOFM for Bought</option>
                                                    <span v-for="item in uofm" :key="item.id" :value="item.id">{{item.name}}</span>
                                                </mdb-select>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Sold UOFM</h5>
                                                <p v-if="errors.uofmSold" class="red-text animated shake">
                                                    {{errors.uofmSold}}
                                                </p>
                                                <mdb-select v-if="uofm.length > 0" @getValue="getSelectUofmSold">
                                                    <option disabled selected>Choose UOFM for Sold</option>
                                                    <span v-for="item in uofm" :key="item.id" :value="item.id">{{item.name}}</span>
                                                </mdb-select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h3>Images</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <add-imagens-product></add-imagens-product>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Default input -->
                                        <label for="SKUProduct">SKU Product(Optional)</label>
                                        <input type="text" id="SKUProduct" v-model="form.skuProduct" class="form-control">
                                        <span style="font-size: 0.7em">
                                            If this field is empty the system itself will generate a SKU for this product
                                        </span>
                                    </div>
                                </div>
                                <div class="row">


                                    <div class="col-md-12 text-center">
                                        <mdb-btn type="submit" outline="primary" darkWaves rounded>Send Product</mdb-btn>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="card p-4 animated fadeIn">
                            <div class="row">
                                <!-- Fluxo de adicionar novas collections -->
                                <div class="col-md-12 animated fadeInRight"  v-if="addOptions.addCollection">
                                    <button type="button" v-on:click="restartCollection" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-collection class="mb-2 caixa-auxiliar" style="">
                                    </add-collection>
                                </div>
                                <!-- Fluxo de adicionar novas categorias -->
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addCategory">
                                    <button type="button" v-on:click="restartCategory" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-category class="mb-2 caixa-auxiliar" v-if="addOptions.addCategory">
                                    </add-category>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addProfileProduct">
                                    <button type="button" v-on:click="restartProfileProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-profile-product class="mb-2 caixa-auxiliar">
                                    </add-profile-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addHazardProduct">
                                    <button type="button" v-on:click="restartHazardProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-hazard-product class="mb-2 caixa-auxiliar">
                                    </add-hazard-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addVolumeType">
                                    <button type="button" v-on:click="restartVolumeType" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-volume-type class="mb-2 caixa-auxiliar">

                                    </add-volume-type>
                                </div>
                                <div class="col-md-12 animated fadeInRight"  v-if="addOptions.addGradeProduct">
                                    <button type="button" v-on:click="restartGradeProdutc" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-grade-product class="mb-2 caixa-auxiliar">

                                    </add-grade-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight"  v-if="addOptions.addMaterialType">
                                    <button type="button" v-on:click="restartMaterialType" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-material-type class="mb-2 caixa-auxiliar" >
                                    </add-material-type>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addMoistureProduct">
                                    <button type="button" v-on:click="restartMoistoreProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
                                        Save and close
                                    </button>
                                    <add-moisture-product class="mb-2 caixa-auxiliar" >
                                    </add-moisture-product>
                                </div>
                                <div class="col-md-12 animated fadeInRight" v-if="addOptions.addFinishProduct">
                                    <button type="button" v-on:click="restartFinishProduct" class="btn btn-danger btn-outline-rounded float-right button-close">
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
    import {mdbSelect,mdbInput,mdbBtn} from 'mdbvue'
    import addImagensProduct from '@/components/forms/addImagensMultiple'
    export default{
        name :'addFormProduct',
        components:{
            addVolumeType,addProfileProduct,addMaterialType,addMoistureProduct,addHazardProduct,addGradeProduct,addFinishProduct,addCategory,addCollection,
            mdbSelect,mdbInput,
            addImagensProduct,mdbBtn
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
                    localStorage.setItem('produtoAux', JSON.stringify(response.data));
                    this.$store.commit('SET_PRODUCT_AUX', response.data);
                    this.loader = false;
                }else{
                    this.$router.push('/login');
                }
            }).catch(e => {
                console.log(e);
            });
            this.getUofm();

            
        },
        methods:{
            mascaraNumber(value){
                if(value == 'width'){
                    document.querySelector('.').toLocaleString(2)
                }
            },
            getUofm(){
                this.$http.get(this.$urlAPI +'products/getuofm', {
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken,
                        'X-Requested-With': 'XMLHttpRequest' 
                    }
                }).then(response =>{
                    if (response.data.status) {
                        this.uofm = response.data.uofm;
                    }else{
                        this.$router.push('/login');
                    }
                }).catch(e => {
                    console.log(e);
                });
            },
            getSelectUofmWidth(value){
                this.form.uofmWidth = value;
            },
            getSelectUofmHeight(value){
                this.form.uofmHeight = value;
            },
            getSelectUofmLenght(value){
                this.form.uofmLenght = value;
            },
            getSelectUofmVolume(value){
                this.form.uofmVolume = value;
            },
            inputNameProduct(value){
                this.form.nameProduct = value;
            },
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
                this.form.volume_type = value
            },
            //colocando collection na categoria
            getCategoryInCollection(value){
                this.view.category = false;
                this.view.profile = false;
                this.view.hazard = false;
                this.view.grade = false;
                this.view.materialType = false;
                this.view.moistoreProduct = false;
                this.view.finishProduct = false;
            //arrumando category
            this.category = [];
            for (var i = this.$store.getters.getCategory.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getCategory.active[i].colletion_id == value) {
                    this.category.push(this.$store.getters.getCategory.active[i]);
                }
            }
            for(var i = this.$store.getters.getProfileProduct.active.length -1; i >= 0; i--){
                if (this.$store.getters.getProfileProduct.active[i].collection_id == value) {
                    this.profileProduct.push(this.$store.getters.getProfileProduct.active[i]);
                }
            }
            for (var i = this.$store.getters.getHazardProduct.active.length - 1; i >= 0; i--) {
                if(this.$store.getters.getHazardProduct.active[i].collection_id == value){
                    this.hazardProduct.push(this.$store.getters.getHazardProduct.active[i]);
                }
            };
            for (var i = this.$store.getters.getVolumeType.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getVolumeType.active[i].collection_id == value) {
                    this.volumeType.push(this.$store.getters.getVolumeType.active[i]);
                }
            };
            for (var i = this.$store.getters.getGradeProduct.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getGradeProduct.active[i].collection_id == value) {
                    this.gradeProduct.push(this.$store.getters.getGradeProduct.active[i]);
                }
            };
            for (var i = this.$store.getters.getMaterialType.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getMaterialType.active[i].collection_id == value) {
                    this.materialType.push(this.$store.getters.getMaterialType.active[i]);
                }
            };
            for (var i = this.$store.getters.getMoistureProdutct.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getMoistureProdutct.active[i].collection_id == value) {
                    this.moistoreProduct.push(this.$store.getters.getMoistureProdutct.active[i]);
                }
            };
            for (var i = this.$store.getters.getFinishProduct.active.length - 1; i >= 0; i--) {
                if (this.$store.getters.getFinishProduct.active[i].collection_id == value) {
                    this.finishProduct.push(this.$store.getters.getFinishProduct.active[i]);
                }
            };
            setTimeout(e =>{
                this.view.category = true;
                if(Object.keys(this.profileProduct).length > 0){
                    this.view.profile = true;
                }else{
                    this.hide.profile = true;
                }
                if(Object.keys(this.hazardProduct).length > 0){
                    this.view.hazard = true;
                }else{
                    this.hide.hazard = true;
                }
                if(Object.keys(this.volumeType).length > 0){
                    this.view.volume = true;
                }else{
                    this.hide.volume = true;
                }

                if(Object.keys(this.gradeProduct).length > 0){
                    this.view.grade = true;
                }else{
                    this.hide.grade = true;
                }
                if (Object.keys(this.materialType).length > 0) {
                    this.view.materialType = true;
                }else{
                    this.hide.materialType = true;
                }
                if(Object.keys(this.moistoreProduct).length > 0){
                    this.view.moistoreProduct = true;
                }else{
                    this.hide.moistoreProduct = true;
                }
                if(Object.keys(this.finishProduct).length > 0){
                    this.view.finishProduct = true;
                }else{
                    this.hide.finishProduct = true;
                }
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
            getSelectUofmSold(value){
                this.form.uofmSold = value;
            },
            getSelectUofmBought(value){
                this.form.uofmBought = value;
            },
            sendProduct(){
             if(this.validate()){
                let data = {
                    form : this.form,
                    images: this.imagesProduct
                };
                console.log(this.imagesProduct);
                if(this.imagesProduct.length == 0){
                    this.continueImage = ''
                    this.$swal({
                      title: 'Are you sure?',
                      text: "Are you sure you want to add product without image?",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, add product without image!'
                    }).then((result) => {
                      if (result.value) {
                        this.continueImage = true;
                      }else{
                        this.continueImage = false;
                      }
                    });
                    if(this.continueImage == true){
                        return;
                    }
                }
                
                this.$http.post(this.$urlAPI + 'products/add/' + this.$route.params.idCompany,data,{
                    "headers":{
                        "authorization": "Bearer "+  this.$store.getters.getToken
                    }
                }).then(response =>{
                    if(response.data.status){
                        this.$swal(
                          'Good job!',
                          'Your product is add!',
                          'success'
                        );
                        this.$router.push('/admin/company/products/'+this.$route.params.idCompany);
                    }else{
                        this.$swal({
                          type: 'error',
                          title: 'Oops...',
                          text: response.data.message
                        })
                    }
                }).catch(e => {
                    console.log(e)
                    this.errorValidation = 'Error connect BD';
                });
                
             }
         },
         validate(){
            this.errors = {
                collection: '',
                category: '',
                profileProduct: '',
                hazardProduct: '',
                volume: '',
                grade: '',
                materialType: '',
                moistoreProduct: '',
                finishProduct: '',
                nameProduct : '',
                width: '',
                height: '',
                lenght: '',
                volume: '',
                uofmWidth: '',
                uofmHeight: '',
                uofmVolume: '',
                uofmLenght: '',
                uofmSold: '',
                uofmBought : '',
                skuProduct: ''
            }
            if(this.form.collection == false || this.form.collection ==''){
                this.errors.collection = 'Please, choose your collection'
                return false;
            }
            if(this.form.category == false || this.form.category ==''){
                this.errors.form = 'Please, choose your category'
                return false;
            }
            if(this.form.nameProduct == false || this.form.nameProduct ==''){
                this.errors.nameProduct = 'Please, write your product name'
                return false;
            }
            if(this.form.width == false || this.form.width ==''){
                this.errors.width = 'Please, choose your width'
                return false;
            }
            if(this.form.height == false || this.form.height ==''){
                this.errors.height = 'Please, choose your height'
                return false;
            }
            if(this.form.lenght == false || this.form.lenght ==''){
                this.errors.lenght = 'Please, choose your lenght'
                return false;
            }
            
            if(this.form.volume == false || this.form.volume ==''){
                this.errors.volume = 'Please, choose your volume'
                return false;
            }
            if(this.form.uofmWidth == false || this.form.uofmWidth ==''){
                this.errors.uofmWidth = 'Please, write your uofm Width'
                return false;
            }
            if(this.form.uofmHeight == false || this.form.uofmHeight ==''){
                this.errors.uofmHeight = 'Please, choose your uofm Height'
                return false;
            }
            if(this.form.uofmVolume == false || this.form.uofmVolume ==''){
                this.errors.uofmVolume = 'Please, Choose your uofm Volume'
                return false;
            }
            if(this.form.uofmLenght == false || this.form.uofmLenght ==''){
                this.errors.uofmLenght = 'Please, Choose your UOFM Lenght'
                return false;
            }
            if(this.form.uofmSold == false || this.form.uofmSold ==''){
                this.errors.uofmSold = 'Please, choose your UOFM Sold'
                return false;
            }
            if(this.form.uofmBought == false || this.form.uofmBought ==''){
                this.errors.uofmBought = 'Please, choose your UOFM Bought'
                return false;
            }
            return true;
        }
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
                nameProduct : '',
                width: '',
                height: '',
                lenght: '',
                volume_type: '',
                uofmWidth: '',
                uofmHeight: '',
                uofmVolume: '',
                uofmLenght: '',
                uofmSold: '',
                uofmBought : '',
                skuProduct: '',
            },
            errors:{
                collection: '',
                category: '',
                profileProduct: '',
                hazardProduct: '',
                volume: '',
                grade: '',
                materialType: '',
                moistoreProduct: '',
                finishProduct: '',
                nameProduct : '',
                width: '',
                height: '',
                lenght: '',
                volume: '',
                uofmWidth: '',
                uofmHeight: '',
                uofmVolume: '',
                uofmLenght: '',
                uofmSold: '',
                uofmBought : '',
                skuProduct: ''
            },
            view: {
                collection: true,
                category: false,
                profile: false,
                hazard: false,
                volume: false,
                grade: false,
                materialType: false,
                moistoreProduct: false,
                finishProduct: false
            },
            hide: {
                collection: false,
                category: false,
                profile: false,
                hazard: false,
                volume: false,
                grade: false,
                materialType: false,
                moistoreProduct: false,
                finishProduct: false
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
            collections: [],
            category: [],
            profileProduct: [],
            hazardProduct: [],
            volumeType: [],
            gradeProduct: [],
            materialType: [],
            moistoreProduct: [],
            finishProduct: [],
            uofm: [],
            errorValidation: ''
        }
    },
    computed:{
        imagesProduct(){
            return this.$store.getters.getInputRegisterProduct;
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
.select-wrapper{
    top: 23px;
}
</style>