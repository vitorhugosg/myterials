

import axios from 'axios'

 var store = {
    state:{
        organizations: localStorage.getItem('organizations') ? JSON.parse(localStorage.getItem('organizations')) : null,
    },
    getters:{
        getOrganizations: state =>{
            return state.organizations;
        },
    },
    mutations:{
        setOrganizations(state, n){
            state.organizations = n;
        },
    },
    actions:{
        increment (id,algumacoisa) {
            return datadoajax;
        }
    },

}
export default store;