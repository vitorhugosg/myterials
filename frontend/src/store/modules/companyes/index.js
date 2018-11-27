
import axios from 'axios'
var store = {
    state:{
        companyes: localStorage.getItem('companyes') ? JSON.parse(localStorage.getItem('companyes')) : null,
    },
    getters:{
        getCompanyes: state =>{
            return state.companyes;
        }
    },
    mutations:{
        setCompanyes(state, n){
            state.companyes = n;
        }
    },
    actions:{
        increment (id,algumacoisa) {
            return datadoajax;
        }
    },

}
export default store;