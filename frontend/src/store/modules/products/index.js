import axios from 'axios'
var store = {
    state:{
        produtoAux: localStorage.getItem('produtoAux') ? JSON.parse(localStorage.getItem('produtoAux')) : null,
        inputRegisterProduct: []
    },
    getters:{
        getProductsAux: state => {
            return state.produtoAux;
        },
        getMaterialType: state => {
            if (state.produtoAux.material_type !== undefined) {
                return state.produtoAux.material_type;
            }else{
                return null;
            }
        },
        getMoistureProdutct: state => {
            if (state.produtoAux.moisture_product !== undefined) {
                return state.produtoAux.moisture_product;
            }else{
                return null;
            }
        },
        getGradeProduct: state => {
            if (state.produtoAux.grade_product !== undefined) {
                return state.produtoAux.grade_product;
            }else{
                return null;
            }
        },
        getFinishProduct: state => {
            if (state.produtoAux.finish_product !== undefined) {
                return state.produtoAux.finish_product;
            }else{
                return null;
            }
        },
        getHazardProduct: state => {
            if (state.produtoAux.hazard_product !== undefined) {
                return state.produtoAux.hazard_product;
            }else{
                return null;
            }
        },
        getProfileProduct: state => {
            if(state.produtoAux.profile_product !== undefined){
                return state.produtoAux.profile_product;
            }else{
                return null;
            }
        },
        getVolumeType: state => {
            if(state.produtoAux.volume_type !== undefined){
                return state.produtoAux.volume_type;
            }else{
                return null;
            }
        },
        getCategory: state => {
            if(state.produtoAux.category !== undefined){
                return state.produtoAux.category;
            }else{
                return null;
            }
        },
        getCollections: state => {
            if(state.produtoAux.collections !== undefined){
                return state.produtoAux.collections;
            }else{
                return null;
            }
        },
        getInputRegisterProduct: state =>{
            return state.inputRegisterProduct;
        }
    },
    mutations:{
        SET_PRODUCT_AUX(state, n){
            state.produtoAux = n;
        },
        SET_MATERIAL_TYPE(state, n){
            state.produtoAux.material_type = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_MOISTURE_PRODUCT(state,n){
            state.produtoAux.moisture_product = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_GRADE_PRODUCT(state,n){
            state.produtoAux.grade_product = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_FINISH_PRODUCT(state,n){
            state.produtoAux.finish_product = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_HAZARD_PRODUCT(state,n){
            state.produtoAux.hazard_product = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_PROFILE_PRODUCT(state, n){
            state.produtoAux.profile_product = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_VOLUME_TYPE(state, n){
            state.produtoAux.volume_type = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_CATEGORY(state, n){
            state.produtoAux.category = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_COLLECTIONS(state, n){
            state.produtoAux.collections = n;
            localStorage.setItem('produtoAux', JSON.stringify(state.produtoAux));
        },
        SET_IMAGENS(state,n){

            state.inputRegisterProduct = n;
        }
    }

}
export default store;